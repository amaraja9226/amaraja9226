<html>
<?php
 $name=$_POST["name"];
 $email=$_POST["email"];
 $comment=$_POST["comments"];
 $conn=new mysqli("localhost","root","1234","comment");
 if($conn==false)
 {
echo "not connect<br>";
 }
 else{
    #echo "connection succesfully</br>";
 }
 $res=mysqli_query($conn,"insert into info(name,email,comment)values('$name','$email','$comment')");
 if($res)
 {
    echo "Registerd</br>";

 }
 ?>
 </html>