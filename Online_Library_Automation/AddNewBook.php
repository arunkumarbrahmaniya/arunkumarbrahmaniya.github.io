<?php

            $bname = $_REQUEST['bname'];
            $aname = $_REQUEST['aname'];
            $pname = $_REQUEST['pname'];
            $tpage = $_REQUEST['tpage'];
            $price = $_REQUEST['price'];
            $acopy = $_REQUEST['acopy'];
             echo "".$bname.$aname.$pname.$tpage.$price. $acopy;     
            $con=mysql_connect("localhost","root","");
           $db=mysql_select_db("onlinelibrary",$con);
$query="INSERT INTO book_mstr(bname,author_name,pname,page_no,price,no_copy) VALUES('$bname','$aname','$pname','$tpage','$price','$acopy')";
$res=mysql_query($query) or die(mysql_error());
if($res>0)
{
    echo "<script>alert('Book Added Successfully');window.location='books.php';</script>";
}
else
{
echo "not Registered";
}
          
?>
