<?php
require 'connect.php';
header("Access-Control-Allow-Origin: http://localhost:3000");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: Content-Type, Authorization");
 
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);
     
     
    $username = $request->username;
    $password = $request->password;      

    $sql = "SELECT username, password FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db,$sql);

    if (mysqli_num_rows($result) > 0) {
    
        while($row = $result->fetch_assoc()) {
          echo $row["username"]. $row["password"];
        }
      } 
      else{
        echo "pirla";
      }
         
}
?> 