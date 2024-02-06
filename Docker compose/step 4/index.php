<?php
header("content-type: text");
$host = "db";
$username = "root";
$pw = "my!!!root!!!";

$conn = new mysqli($host,$username,$pw);

if($conn->connect_errno > 0){
    echo $db->connect_error;
} else {
    echo "DB Connection successful\n\n";
    //read out the content
    $result=mysqli_query($conn,"SHOW DATABASES;");
    while($row = mysqli_fetch_row($result)){
        echo $row[0]."\n";
    }
}