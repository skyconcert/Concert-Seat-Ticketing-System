<?php

if(isset($_POST["id"]))
{
 $connect = new PDO('mysql:host=localhost;dbname=skyconcert', 'root', '');
 $query = "
 DELETE from concert WHERE coid=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
