<?php

$connect = new PDO('mysql:host=localhost;dbname=skyconcert', 'root', '');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO concert 
 (name, date) 
 VALUES (:title, :start)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start' => $_POST['start']
  )
 );
}


?>
