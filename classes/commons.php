<?php

function get_current_url($query = true ){
    $http_protocol = "http" ;
    if(isset($_SERVER['HTTPS']))
        $http_protocol = "https" ; // The $http_protocol will change to https if https is used
 
    $current_url = $http_protocol."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
 
    if(!$query)
        $current_url = str_replace('?'.$_SERVER['QUERY_STRING'],"",$current_url) ;
 
    return $current_url ;
}