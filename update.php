<?php
$id=$_POST["id"];
$category=$_POST["a"];
$product=$_POST["b"];
$price=$_POST["c"];
$selling_price=$_POST["d"];

include("config.php");

$update="update tbl_product set `category`='".$category."',`product`='".$product."',`price`='".$price."',
`selling price`='".$selling_price."'
 where`id` ='".$id."'";

if(!mysql_query($update))
{
echo"not update";
}
else
{
echo"update";
}
?>