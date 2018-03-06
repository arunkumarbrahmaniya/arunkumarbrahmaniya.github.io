<?php include("chkUser.php"); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Student Home Page</title> 
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function validate()
            {
                if(document.frm.cpswd.value=="")
                {
                    alert("Please enter Current Password");
                    document.frm.cpswd.focus();
                    return false;
                }
                if(document.frm.npswd.value=="")
                {
                    alert("Please enter Your New Password");
                    document.frm.npswd.focus();
                    return false;
                }
                if(document.frm.rnpswd.value=="")
                {
                    alert("Please Re-enter Your New Password");
                    document.frm.rnpswd.focus();
                    return false;
                }
                if(document.frm.rnpswd.value!=document.frm.npswd.value)
                {
                    alert("Password do not match");
                    document.frm.npswd.value="";
                    document.frm.rnpswd.value="";
                    document.frm.npswd.focus();
                    return false;
                }

                return true;
            }
                
        </script>
    </head>
    <body>
    <center>
        <table class="table">
            <tr>
                <td width="100%" height="250px" valign="top">
                    <?php include("header.html") ?>
                </td>
            </tr>
            <tr>
                <td width="100%" valign="top">
                    <?php include("stumenu.html") ?>
                </td>
            </tr>


            <tr>
                <td width="100%" height="400px" valign="top" align="center" style="background-image: url(image/coffee_stain.png);background-repeat: no-repeat;">
                    <h1>Change Password</h1>
                    <?php
                           /* $msg = $_REQUEST['msg'];
                            $err = $_REQUEST['err'];
                            if(isset($msg))
                                            {
                    
                    echo "<p>";
                    echo "<h5 style='color: #66cc00;'>".$msg;
                    echo "</h5></p>";    
                      }
                        if(isset($err))
                         {
                     echo "<p>";
                    echo "<h5 style='color: #FF0000;'>".$err;
                            echo "</h5></p>";    
                        }*/
                       ?>
                    <form action="ChangePswdp.php" method="post" name="frm" onsubmit="return validate();">
                        <table width="50%">
                            <tr>
                                <td>
                                    Enter Current Password : 
                                </td>
                                <td>
                                    <input type="password" name="cpswd" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Enter New Password : 
                                </td>
                                <td>
                                    <input type="password" name="npswd" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Renter New Password
                                </td>
                                <td>
                                    <input type="password" name="rnpswd" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" width="100%">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <input type="reset" value="Clear" class="button">
                                </td>
                                <td>
                                    <input type="submit" value="Change !" class="button" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
        <?php include("footer.html") ?>
    </center>
</body>
</html>
