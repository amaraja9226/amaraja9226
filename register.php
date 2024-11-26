<html>
<?php
 $many=$_POST["howmany"];
 $email=$_POST["email"];
 $conn=new mysqli("localhost","root","1234","tour");
 if($conn==false)
 {
echo "not connect<br>";
 }
 else{
    #echo "connection succesfully</br>";
 }
 $res=mysqli_query($conn,"insert into travel(howmany,email)values('$many','$email')");
 if($res)
 {
    echo "Registerd</br>";

 }
 ?>
 </html>