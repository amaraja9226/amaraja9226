<html>
    <?php
    $many=$_POST["howmany"];
    $email=$_POST["email"]
    
// Configuration
$db_host = "localhost";
$db_username = "root";
$db_password = "1234";
$db_name = "tour";

// Create a connection to the database
$conn = new mysqli($db_host , $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed:" . $conn->connect_error);
}
    $howmany=$_POST['howmany'];
   
    $email_id =$_POST['email'];

 
$sql = "INSERT INTO travel (howmany,email) VALUES ('$howmany','$email_id')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Registration is successfully</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>


'];
    $conn=mysqli_connect("localhost","root","","tour");
    if($conn===false)
    {
        echo "connect establish";
    }
    else{
        echo "connection succsssfully";
    }
    $res=mysqli_query($conn,"insert into travel(howmany,email)values('$many','$email')");
    if($res='True')
    {
        echo "succesfully inserted";
    }
    ?>
    <html>