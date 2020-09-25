<?php
$x =0;
$y = "abc";
$z = "xyz";

echo ($x);
echo($x.$y."</br>"."Hello world2");
$newstring = $x.$y;
echo($newstring);
for($i=0; $i<5 ; $i++){
    echo "</br>"."Durchgang Nr.".$i." tadaaaa";
}

// Connect to datenbank

$servername="localhost";
$username="sebastian";
$password="123456";
$datenbankname="employees";
//create connection
$connection=new  mysqli($servername,$username,$password,$datenbankname);


// check if connection alive

if($connection->connect_error)
    die("Connection failed". $connection->connect_error);
else
    echo "Juhuuuu";
$query="SELECT * FROM employees";

$result = $connection->query($query);

 echo"<pre>";
 print_r($result);
// var_dump($result);
 echo"</pre>";


if($result){
    if($result -> num_rows >0){
      while ($row = $result->fetch_assoc()){
            printr($row);
            echo"********************"."</BR>";
                echo $row["first_name"]." ".$row["last_name"]."</BR>";
            echo"********************"."</BR>";
      }
    }

} else
    echo "Zero results.";

    $connection->close();


function printr($x){
    echo "<pre>";
    print_r($x);
    echo "</pre>";

}

?>

