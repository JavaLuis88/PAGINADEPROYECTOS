<?php

//Download DropboxUploader.php from http://uzip.tk/hzm
require('DropboxUploader.php');

// Path to your temp directory
$tmpDir = "";

// Your MySQL username
$user = "admininv";
// Your MySQL password
$password = "admin2013";

// Database name that is to be Backup
$dbname = "inventario";
// Your database hostname
$dbhost = "localhost";

// Your Dropbox Account username
$dropbox_user = "*****@gmail.com";
// Your Dropbox Account password
$dropbox_password = "******";
// The zip file that’s going to be backed up will have this prefix
$prefix = "inv_";

// Destination folder in Dropbox (where the backup zip file will be uploaded)
$dropbox_dest = "db_backups";

// Create the database backup file
$sqlFile = $tmpDir.$prefix.date('Y_m_d').".sql";
$backupFilename = $prefix.date('Y_m_d').".tgz";
$backupFile = $tmpDir.$backupFilename;

$createBackup = "mysqldump --host=localhost --user=admininv --password=admin2013 inventario > ejemplo.sql";
//$createZip = "tar cvzf".$backupFile." ".$sqlFile."";

exec($createBackup);
//exec($createZip);

try
{
// Upload database backup to Dropbox
$uploader = new DropboxUploader($dropbox_user, $dropbox_password);
$uploader->upload($backupFile, $dropbox_dest, $backupFilename);
}
catch(Exception $e)
{
die($e->getMessage());
}

// Delete the temporary files
unlink($sqlFile);
unlink($backupFile);

?>
