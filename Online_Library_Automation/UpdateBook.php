
 <?php
            $cbname =$_REQUEST['cbname'];
            $bname = $_REQUEST['bname'];
            $aname = $_REQUEST['aname'];
            $pname = $_REQUEST['pname'];
            $tpage = $_REQUEST['tpage'];
            $price = $_REQUEST['price'];
            $acopy = $_REQUEST['acopy'];
            

$con=mysql_connect("localhost","root","");
            $db=mysql_select_db("onlinelibrary",$con);
            $q="UPDATE book_mstr SET bname ='$bname', author_name ='$aname',  pname ='$pname',  page_no ='$tpage', price ='$price', no_copy ='$acopy' WHERE bname = '$cbname'";
$r = mysql_query($q);
            if($r>0)
            {
                echo "<script>alert('Book Updated Successfully');window.location='books.php';</script>";
            }
            else
            {
                echo " Not Updated";
            }
?>
