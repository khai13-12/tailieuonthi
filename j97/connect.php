<?php
    $conn=new mysqli("localhost","root","","qlsvien");
    if($conn->connect_error){
        echo "Ket noi that bai".$conn->connect_error;
    }
?>