<body style="margin: 0; padding: 0;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
          <tr>
            <td bgcolor="#ffc181" align="center" style="padding: 40px 0 30px 0;">
              <img src="{{asset('images/logo-mountain.png')}}" alt="Mountain" width="250px"/>
            </td>
          </tr>
          <tr>
            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td>
                    @yield('content')
                  </td>
                </tr>
              </table>
          </tr>
          <tr>
            <td bgcolor="#001544" style="padding: 20px 20px 20px 20px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td style="color:#fff; font-family: 'Segoe UI';">
                    Visita nuestra página web <a href="http://mountaincuscotours.com/" target="_blank" style="color:#FF9C34;">MOUNTAIN</a> y síguenos en nuestras redes sociales
                  </td>
                  <td align="right">
                    <table border="0" cellpadding="0" cellspacing="0" style="padding:0px 10px;">
                      <tr>
                        <td bgcolor="#001544" style="border-radius:50%">
                          <a href="#" target="_blank">
                            <img src="{{asset('images/iconos/facebook.png')}}" alt="Facebook" width="30" height="30" style="display: block;" border="0" />
                          </a>
                        </td>
                        <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                        <td  bgcolor="#001544" style="border-radius:50%">
                          <a href="#" target="_blank">
                            <img src="{{asset('images/iconos/youtube.png')}}" alt="Youtube" width="30" height="30" style="display: block;" border="0" />
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
    </body>
