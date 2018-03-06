<html>
    <head>
<?php include("chkUser.php"); ?>        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Home Page</title> 
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript">
            function validate()
            {
                if(document.frm.pname.value=="")
                {
                    alert("Please enter Publisher Name");
                    document.frm.pname.focus();
                    return false;
                }
                if(document.frm.adrs.value=="")
                {
                    alert("Please enter Address");
                    document.frm.adrs.focus();
                    return false;
                }
                if(document.frm.city.value=="")
                {
                    alert("Please enter Your City");
                    document.frm.city.focus();
                    return false;
                }
                if(document.frm.state.value=="")
                {
                    alert("Please enter State");
                    document.frm.state.focus();
                    return false;
                }
                if(document.frm.country.value=="")
                {
                    alert("Please enter Country");
                    document.frm.country.focus();
                    return false;
                }
                if(document.frm.pin.value=="")
                {
                    alert("Please enter Pin");
                    document.frm.pin.focus();
                    return false;
                }
                if(document.frm.phone.value=="")
                {
                    alert("Please enter Phone");
                    document.frm.phone.focus();
                    return false;
                }
                if (echeck(document.frm.email.value)==false){
                    document.frm.email.value="";
                    document.frm.email.focus();
                    return false;
                }

                return true;
            }
            function echeck(str) {

                var at="@"
                var dot="."
                var lat=str.indexOf(at)
                var lstr=str.length
                var ldot=str.indexOf(dot)

                if (str.indexOf(at)==-1){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(at,(lat+1))!=-1){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(dot,(lat+2))==-1){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(" ")!=-1){
                    alert("Invalid E-mail ID")
                    return false
                }

                return true
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
                    <?php include("hmenu.html") ?>
                </td>
            </tr>


            <tr>
                <td width="100%" height="400px" valign="top">
                    <h2>Publisher  >> Add New Record
                    </h2>
                    

                    <form action="AddNewPublisher.php" method="get" name="frm" onsubmit="return validate();">
                        <table cellspacing="1" cellpadding="1" border="0" width="70%">

                            <tr>
                                <th>
                                    Publisher Name
                                </th>
                                <td>
                                    <input type="text" name="pname" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Address
                                </th>
                                <td>
                                    <input type="text" name="adrs" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    City
                                </th>
                                <td>
                                    <input type="text" name="city" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    State
                                </th>
                                <td>
                                    <input type="text" name="state" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Country
                                </th>
                                <td>
                                    <input type="text" name="country" />
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Pin
                                </th>
                                <td>
                                    <input type="text" name="pin" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Phone
                                </th>
                                <td>
                                    <input type="text" name="phone" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    E-mail
                                </th>
                                <td>
                                    <input type="text" name="email" />
                                </td>
                            </tr>
                            <tr>

                                <td colspan="2" align="right">
                                    <input type="submit" value="Add" class="button" />&nbsp;&nbsp;<input type="reset" value="Clear" class="button" />
                                </td>




                        </table>
                    </form>
                </td>
            </tr>
        </table>
        <?php include("footer.html") ?>
    </center>
</body>
</html>
