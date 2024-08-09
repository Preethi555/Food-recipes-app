<?php
       $rname = $_POST['rname'];
       $ingredients = $_POST['ingredients'];
       $method = $_POST['method'];
       //database connection
       
       $conn = new mysqli('localhost','root','','test');
       if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
       }else
       {
        $stmt = $conn->prepare("insert into addrecipe(rname,ingredients,method) values(?,?,?)");
        $stmt->bind_param("sss",$rname, $ingredients, $method);
        $stmt->execute();
        echo "Recipe Added Successfully...";
        $stmt->close();
        $conn->close();
       }
?>