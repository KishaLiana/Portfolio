<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "Feedback";

$conn = new mysqli($servername,$user,$pass,$db);

if($conn->error){
    echo "DB error ".$conn->error."";
}
else{
    echo "Connection successful";
}

//inserting data into our database
// isset_POST['submit']

if(isset($_POST['save'])){
    echo "<br>";
    
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Message = $_POST ['message'];

    $sql = "insert into Details (name,email,message) values ('$name','$email', '$message')";

    if($conn->query($sql)){
        echo "Message Sent!";
    }
    else{
        echo "Error is here: ".$conn->error;
    }

}

if(isset($_POST['show'])){


    $sql = "select * from Details";

    $myquery = $conn->query($sql);
    
    while($result = $myquery->fetch_assoc()){
        echo "<br>";
        echo $result['name']." ".$result['email']." ".$result['message'];
        echo "<br>";
    }


}


?>