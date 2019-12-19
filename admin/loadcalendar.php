<?php
$connect = new PDO('mysql:host=localhost;dbname=skyconcert', 'root', '');
$data = array();
$query = "SELECT * FROM concert ORDER BY coid";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
    $data[] = array(
        'id' => $row["coid"],
        'title' => $row["name"],
        'start' => $row["date"]
    );
}
echo json_encode($data);
?>