package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class register_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write('\n');
      out.write('\n');
      org.apache.jasper.runtime.JspRuntimeLibrary.include(request, response, "templates/publicheader.jsp" + "?" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("titulo", request.getCharacterEncoding())+ "=" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("CRUMP Guarda tus vales y ahorra - Registro de usuario", request.getCharacterEncoding()) + "&" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("cabecera", request.getCharacterEncoding())+ "=" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("CRUMP", request.getCharacterEncoding()) + "&" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("subcabecera", request.getCharacterEncoding())+ "=" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("Registro de usuario", request.getCharacterEncoding()) + "&" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("clientstabclass", request.getCharacterEncoding())+ "=" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("", request.getCharacterEncoding()) + "&" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("bussinestabclass", request.getCharacterEncoding())+ "=" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("", request.getCharacterEncoding()) + "&" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("contacttabclass", request.getCharacterEncoding())+ "=" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("", request.getCharacterEncoding()) + "&" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("locationtabclass", request.getCharacterEncoding())+ "=" + org.apache.jasper.runtime.JspRuntimeLibrary.URLEncode("", request.getCharacterEncoding()), out, false);
      out.write('\n');
      out.write('\n');
      out.write("\n");
      out.write("<section class=\"espaciadoinferior1per\">\n");
      out.write("\n");
      out.write("    <form action=\"register\" method=\"post\" class=\"form-horizontal\" role=\"form\">\n");
      out.write("\n");
      out.write("        <article class=\"form-group\">\n");
      out.write("            <label for=\"usuario\" class=\"col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label\">Usuario</label>\n");
      out.write("            <div class=\"col-xs-8 col-sm-5 col-md-5\">\n");
      out.write("                <input name=\"usuario\" type=\"text\" class=\"form-control\" id=\"usuario\" size=\"16\" maxlength=\"16\" value=\"\" placeholder=\"Usuario\" required>\n");
      out.write("            </div>\n");
      out.write("        </article> \n");
      out.write("        \n");
      out.write("         <article class=\"form-group\">\n");
      out.write("            <label for=\"correo\" class=\"col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label\">Correo Electrónico</label>\n");
      out.write("            <div class=\"col-xs-8 col-sm-5 col-md-5\">\n");
      out.write("                <input name=\"correo\" type=\"email\" class=\"form-control\" id=\"correo\" size=\"16\" maxlength=\"16\" value=\"\" placeholder=\"Correo Electrónico\" required>\n");
      out.write("            </div>\n");
      out.write("        </article> \n");
      out.write("        \n");
      out.write("        <article class=\"form-group\">\n");
      out.write("            <label for=\"pwd\" class=\"col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label\">Contraseña</label>\n");
      out.write("            <div class=\"col-xs-8 col-sm-5 col-md-5\">\n");
      out.write("                <input name=\"pwd\" type=\"password\" class=\"form-control\" id=\"pwd\" size=\"16\" maxlength=\"16\" value=\"\" placeholder=\"Contraseña\" required>\n");
      out.write("            </div>\n");
      out.write("        </article> \n");
      out.write("\n");
      out.write("        <article class=\"form-group\">\n");
      out.write("            <label for=\"pwd2\" class=\"col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-xs-2 col-sm-2 col-md-2 control-label\">Re Contraseña</label>\n");
      out.write("            <div class=\"col-xs-8 col-sm-5 col-md-5\">\n");
      out.write("                <input name=\"pwd2\" type=\"password\" class=\"form-control\" id=\"pwd2\" size=\"16\" maxlength=\"16\" value=\"\" placeholder=\"Re Contraseña\" required>\n");
      out.write("            </div>\n");
      out.write("        </article>\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("        <article class=\"col-xs-offset-3 col-sm-offset-4 col-md-offset-4\">\n");
      out.write("            <label for=\"cliente\">\n");
      out.write("                <input type=\"radio\" name=\"tipousuario\" id=\"cliente\" value=\"cliente\" checked>\n");
      out.write("                Registrarse como cliente\n");
      out.write("            </label>\n");
      out.write("        </article>\n");
      out.write("\n");
      out.write("       \n");
      out.write("        <article class=\"col-xs-offset-3 col-sm-offset-4 col-md-offset-4\">\n");
      out.write("            <label for=\"adminsistrador\">\n");
      out.write("                <input type=\"radio\" name=\"tipousuario\" id=\"administrador\" value=\"administrador\">\n");
      out.write("                Registrarse como empresa\n");
      out.write("            </label>\n");
      out.write("            \n");
      out.write("        </article>\n");
      out.write("\n");
      out.write("\n");
      out.write("        <article class=\"form-group\">\n");
      out.write("            <div class=\"col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-xs-5 col-sm-5 col-md-5\">\n");
      out.write("                <button type=\"submit\" class=\"btn btn-info\">Registrarse</button>\n");
      out.write("                <button type=\"reset\" class=\"btn btn-default\">Borrar</button>\n");
      out.write("            </div>\n");
      out.write("        </article>\n");
      out.write("\n");
      out.write("\n");
      out.write("    </form>\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("</article>\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("</section>\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write('\n');
      out.write('\n');
      org.apache.jasper.runtime.JspRuntimeLibrary.include(request, response, "templates/publicfooter.jsp", out, false);
      out.write('\n');
      out.write('\n');
      out.write('\n');
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
