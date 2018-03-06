<?php

            $pname = $_REQUEST['pname'];
            $adrs = $_REQUEST['adrs'];
            $city = $_REQUEST['city'];
            $state = $_REQUEST['state'];
            $country = $_REQUEST['country'];
            $pin = $_REQUEST['pin'];
            $phone = $_REQUEST['phone'];
            $email =$_REQUEST['email'];
            $con=mysql_connect("localhost","root","");
$db=mysql_select_db("onlinelibrary",$con);
$query = "INSERT INTO publisher_mstr VALUES ('$pname','$adrs','$city','$state','$country','$pin','$phone','$email')";

$res=mysql_query($query) or die(mysql_error());
if($res>0)
{ 
    echo "<script>alert('New Publisher is Added Successfully');window.location='Publisher.php';</script>";
    
}
 else {
echo " Error ..";    
}

?>
