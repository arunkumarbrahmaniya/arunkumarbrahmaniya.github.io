

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
          <center>
        <span class="bannertext">Library Automation System</span>
        <br>
        <br>
        <br>
        <span class="error">
        
						
        </span>
        <br>
        <br>
        <br>
  
        <fieldset>
            <legend>
                Control Panel
            </legend>
            <form method="post" action="UserLogin.php">
            <table width="95%">
                 <tr>
                     <td colspan="2" width="100%">
                        &nbsp;
                   
                    </td>
                </tr>
                 <tr>
                    <td>
                        Select User Type
                    </td>
                    <td>
                        <select name="utype" style="width: 157px;">
                            <option value="admin">Admin</option>
                            <option value="student">Student</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Login name/Enroll No.
                    </td>
                    <td>
                        <input type="text" name="user" />
                    </td>
                </tr>
                 <tr>
                    <td>
                       Password
                    </td>
                    <td>
                        <input type="password" name="pswd" />
                    </td>
                </tr>
                  <tr>
                     <td colspan="2" width="100%">
                        &nbsp;
                   
                    </td>
                </tr>
                 <tr>
                     <td align="right">
                         <input type="submit" value="Login" class="button" />
                   
                    </td>
                     <td align="left">
                         <input type="reset" value="Clear" class="button" />
                   
                    </td>
                </tr>
            </table>
            </form>
        </fieldset>
    </center>
    </body>
</html>
