<?php

$db_connection = mysqli_connect('localhost', 'root', 'ryGHqvrX7YCXEB8', 'runtopia');

if($db_connection){
    echo '<h1> Connected to the runtopia database </h1>';
}
else{
    echo '<h1> Not Connected to MySQL </h1>';
}
    
?>
