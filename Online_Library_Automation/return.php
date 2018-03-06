<?php 
	$id = $_GET['id']; 

	 $con=mysql_connect("localhost","root","");
     $db=mysql_select_db("onlinelibrary",$con);
                
     $query="select * from isuue_mstr where issue_no='$id'";

     $res=mysql_query($query);
                
     $cc = mysql_num_rows($res);
                
     if($cc > 0)
     {
	 	if($row = mysql_fetch_array($res))
		{
			$no = $row['enroll_no'];
			$bname = $row['bname'];
			$issue_date = $row['issue_date'];						
		}
	 }
?>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />
    </head>

<body>

<center>

<form action="" method="post">

<table style="width:500px;text-align:Center;border:1px solid black;">

<tr>
	<td colspan="3" style="border:1px solid black;">
		<h1>Book Return Panel</h1>
	</td>
</tr>
<tr>
	<td style="width:200px;">&nbsp;</td>
	<td style="width:100px;">&nbsp;</td>
	<td style="width:200px;color:red;">&nbsp; Issue No : <?php echo $id; ?> </td>
</tr>
<tr>
	<td style="width:200px;">&nbsp;</td>
	<td style="width:100px;">&nbsp;</td>
	<td style="width:200px;">&nbsp;</td>
</tr>
<tr>
	<th style="width:200px;text-align:right;">Enrollment Number</th>
	<td style="width:100px;">&nbsp;</td>
	<td style="width:200px;">&nbsp;<?php echo $no; ?></td>
</tr>
<tr>
	<th style="width:200px;text-align:right;">Book Name</th>
	<td style="width:100px;">&nbsp;</td>
	<td style="width:200px;">&nbsp;<?php echo $bname; ?></td>
</tr>
<tr>
	<th style="width:200px;text-align:right;">Issue Date</th>
	<td style="width:100px;">&nbsp;</td>
	<td style="width:200px;">&nbsp;<?php echo $issue_date; ?></td>
</tr>
<tr>
	<th style="width:200px;text-align:right;">Number Of Days</th>
	<td style="width:100px;">&nbsp;</td>
	<td style="width:200px;">&nbsp;<input type="text" name="t1"></td>
</tr>

                        <tr>
                            
                            <td colspan="3" align="right">
                           <input type="submit" value="Return Book" class="button" name="s"/>&nbsp;&nbsp;<input type="reset" value="Clear" class="button" />
                            </td>
                   
<tr>
	<td colspan="3" style="border:1px solid black;">
		<h4> << <a href="issuebook.php"> back </a> >> </h4>
		<center>
                <div style="width: 550px;height: 15px;text-align: center;background-color:#ffffcc;font-size: 10px;">
                    The  Books will be issue for 7 days from date of issued only . Fine Rs. 1.50/- per day after 7 days
                </div>

            </center>

	</td>
</tr>

</table>
</form>
</center>

</body>
</html>
<?php

if(isset($_POST['s']))
{
	 $value = $_POST['t1'];

	 $tt = mktime(0,0,0,date("m"),date("d")+$value,date("y"));

	 $dd = date("Y-m-d",$tt);
	 	 
	 if($value > 7)
	 {
	 		 $day = $value - 7;
			 $fine = 1.50*$day;
	 }
	 else
	 {
	 	$fine = 0;
	 }
	
	 $query="UPDATE isuue_mstr SET return_date='$dd',book_returned='1',fine='$fine' where issue_no='$id'";

	 $res=mysql_query($query);
                
     if($res > 0)
	 {
	 	echo "<script>alert('Book Returned Successfully');window.location='IssueBook.php';</script>";
	 }
}
?>