
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Home Page</title> 
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />
    </head>
    <body style="background-color: #FFFFFF;">
    <center>
        <?php
                $enroll = $_GET['id'];
                $con=mysql_connect("localhost","root","");
                $db=mysql_select_db("onlinelibrary",$con);

                $q = "select sname,sclass,stream,semester,photo from stu_mstr where enroll_no='".$enroll."'";
                
                $r = mysql_query($q);
                
                if($row = mysql_fetch_array($r))
                {
                    $n = $row['sname'];
                    $class = $row['sclass'];
                    $sem = $row['semester'];
                    $stream = $row['stream'];                    
                    $pic = $row['photo'];
                }
        ?>
        <table width="370"  border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>

                <td width="16"><img src="image/top_lef.gif" width="16" height="16"></td>
                <td width="308" height="16" background="image/top_mid.gif"><img src="image/top_mid.gif" width="16" height="16"></td>
                <td width="24"><img src="image/top_rig.gif" width="24" height="16"></td>
            </tr>
            <tr>
                <td width="16"  background="image/cen_lef.gif"><img src="image/cen_lef.gif" width="16" height="11"></td>
                <td bgcolor="#FFFFFF" width="308" bordercolordark="#970000">
                    <table  cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tr style="background-color: #006666">
                            <td align="center" height="16" colspan="2">
                                <b style="color: #FFFFFF;">  Library Card </b>
                            </td>

                        </tr> 
                        <tr style="background-color: #66cc00">
                            <td align="center" height="32" colspan="2">
                                <b>  Gyan College of Management</b>
                                <p style="font-size: 10px;color: #FFFFFF;">
                                    (Affilated to Lucknow University)
                                </p>
                              
                            </td>

                        </tr>
                        <tr>
                            
                            <td>
                               Enrollment : <?php echo $enroll; ?> 
                            </td>
                            <td rowspan="3">
                                 <img alt="" src="<?php echo $pic; ?>" hspace="0px" vspace="0px" width="129" height="130" style="margin-left: 10px;margin-bottom: 5px;float: left; border:thin;background-color:#FF0000" />
                            </td>
                        </tr>
                        <tr>
                            
                            <td>
                                Name : <?php echo $n; ?>
                            </td>
                           
                        </tr>
                         <tr>
                            
                            <td>
                                Class : <?php echo $class; ?>
                            </td>
                           
                        </tr>
                         <tr>
                            
                            <td>
                                Branch : <?php echo $stream; ?>
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            
                            <td>
                                Semester : <?php echo $sem; ?>
                            </td>
                           <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2" style="background-color: #66cc00">
                                 <p style="font-size: 11px;color: #FFFFFF;">
                                   Kursi Road Lucknow-20000
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="24" background="image/cen_rig.gif"><img src="image/cen_rig.gif" width="24" height="11"></td>
            </tr>
            <tr>
                <td width="16" height="16"><img src="image/bot_lef.gif" width="16" height="16"></td>
                <td height="16" background="image/bot_mid.gif"><img src="image/bot_mid.gif" width="16" height="16"></td>
                <td width="24" height="16"><img src="image/bot_rig.gif" width="24" height="16"></td>
            </tr>
        </table>
        <span align="left">   <a href="AddNewStuRecord.php" style="text-decoration: none;color: #66cc00"><b><< Back</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span align="right"><a href="Student.php" style="text-decoration: none;color: #66cc00"><b>Student List >></b></a></span>
        <br>
        		<font face="Arial"><a href="javascript:window.print()">
        <img src="image/print.jpg" border="0" height="35" width="48"></a></font>&nbsp;
       <font face="Arial" size="2">
       <a href="javascript:window.print()" style="text-decoration: none; font-weight: 700;">
       <font color="#000000">Print</font></a></font>
       <br>
        <?php include("footer.html") ?>
    </center>
</body>
</html>