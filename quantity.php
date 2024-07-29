<?php 
include "conn.php";

if(isset($_POST['get_qty'])){
    $qty=$_POST['get_qty'];
    $pid=$_POST['get_id'];
    $price=$_POST['get_price'];
 
    $tprice= $qty*$price;

    $qty_up="UPDATE cart set qty='$qty',gtotal='$tprice' where sno='$pid'";
    $run=mysqli_query($conn,$qty_up);
    if($run){
        echo 1;
    }
    else{
        echo 0;
    }
}?>