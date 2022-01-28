<?php

$product_name = $_POST['product_name'];
$product_condition = $_POST['product_condition'];
$product_age = $_POST['product_age'];
$subscribe= $_POST['subscribe'];
$selected = $_POST['option'];


echo $product_name;
echo $product_condition;
echo $product_age;
echo $subscribe;

//prints out all checkbox values which have been selected
foreach ($selected as $option){
    echo $option."<br />";
}


?>

