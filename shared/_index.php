<?php

include_once "classes/category.php";
include_once "classes/html_builder.php";



$sql = "INSERT INTO category VALUES (2,1,'Descontração','Descontração ta sem descrição', '1')";

$teste = new Category();
//$teste->insertDB($sql);
$sql = "SELECT * FROM category WHERE category_status = '1'";
$resultado = $teste->selectDB($sql,null,"Category");

foreach($resultado as $printtela){
    print_r($printtela->getCategory_Id());
    echo " ";
    print_r($printtela->getCategory_Level());
    echo " ";
    print_r($printtela->getCategory_Name());
    echo " ";
    print_r($printtela->getCategory_Description());
    echo " ";
    print_r($printtela->getCategory_Status());
    echo "<br>";
}
//print_r($resultado[0]->getCategory_Id());