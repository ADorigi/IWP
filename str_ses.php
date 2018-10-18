<?php

session_start();

$usn= $_POST["usn"];
$pas= $_POST["pas"];

if(!($link= mysqli_connect('localhost','root','','EVENT'))){
    echo "SQL Connection Error";
}

$sql="SELECT * from Student where USN='".$usn."' and PAS='".$pas."';";

$res= mysqli_query($link,$sql);

if(mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['name']=$row["FN"];
    echo "<script> location.href='front.php'</script>";
}
else{
    echo "NOT PRESENT";
}

?>