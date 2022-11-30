<?php
require 'connect.php';
header("Access-Control-Allow-Origin: http://localhost:3000");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: Content-Type, Authorization");
 
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);
     
     
    $username = $request->username;
    $email = $request->email;
    // $phone = $request->phone;
    $password = $request->password;
    $sql = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
    if(mysqli_query($db,$sql)){
        http_response_code(201);
    }
    else{
         http_response_code(422); 
    }
         
}
?> 