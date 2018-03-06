
        <?php
        
            $cpname = $_REQUEST['cpname'];
            $pname = $_REQUEST['pname'];
            $adrs = $_REQUEST['adrs'];
            $city = $_REQUEST['city'];
            $state = $_REQUEST['state'];
            $country = $_REQUEST['country'];
            $pin = $_REQUEST['pin'];
            $phone = $_REQUEST['phone'];
            $email = $_REQUEST['email'];
            
            $con=mysql_connect("localhost","root","");
            $db=mysql_select_db("onlinelibrary",$con);
            $q="UPDATE publisher_mstr SET pname ='$pname',address ='$adrs',city ='$city', state ='$state',country ='$country',pin ='$pin', phone ='$phone', email ='$email' WHERE pname ='$cpname'";
            $r = mysql_query($q);
           
	  if($r>0)
            {
              echo "<script>alert('Publisher is Updated Successfully');window.location='Publisher.php';</script>";
            }
          else
          {
              echo "Error.......";              
          }
            
        ?>
    