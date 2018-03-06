
<html>
    <head>
  <?php include("chkUser.php"); ?>      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Home Page</title> 
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript">
            function validate()
            {
                if(document.frm.sname.value=="")
                {
                    alert("Please enter Name");
                    document.frm.sname.focus();
                    return false;
                }
                if(document.frm.fname.value=="")
                {
                    alert("Please enter Your Father Name");
                    document.frm.fname.focus();
                    return false;
                }
                if(document.frm.sclas.value=="")
                {
                    alert("Please enter Your Class");
                    document.frm.sclas.focus();
                    return false;
                }
                if(document.frm.stream.value=="")
                {
                    alert("Please enter Stream");
                    document.frm.stream.focus();
                    return false;
                }
                if(document.frm.sem.value=="")
                {
                    alert("Please enter Semester");
                    document.frm.sem.focus();
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
                    <?php include("hmenu.html") ?>
                </td>
            </tr>


            <tr>
                <td width="100%" height="400px" valign="top">
                    <h2>Student  >> Add New Record
                    </h2>
                    <p align="right" class="newadd">
                        

                    </p>
                    <p align="right" class="delt" style="font-size: 14px;">

                        
                    </p>
                   <?php
//$x = $_REQUEST['id'];
//if(isset($x))
//{
//    echo "<script> alert('Registration Successful') </script>";
//}


?>
                    <form action="AddNewStu.php" method="post" name="frm" onsubmit="return validate();" enctype="multipart/form-data" >
                        <table cellspacing="1" cellpadding="1" border="0" width="70%">

                            <tr>
                                <th>
                                    Name
                                </th>
                                <td>
                                    <input type="text" name="t1" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    F_name
                                </th>
                                <td>
                                    <input type="text" name="t2" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Gender 
                                </th>
                                <td>
                                    <input type="radio" name="t3" value="Male" checked />Male &nbsp;&nbsp;<input type="radio" name="t3" value="Female"/>Female
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Class
                                </th>
                                <td>
                                    <input type="text" name="t4" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Stream
                                </th>
                                <td>
                                    <input type="text" name="t5" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Semester
                                </th>
                                <td>
                                    <input type="text" name="t6" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Photo
                                </th>
                                <td>
                                    <input type="file"  name="file"/>
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
