<?php

$connect = new mysqli("localhost", "root", "", "game_news");

if($connect->connect_error){
    die("Gagal: " . $connect->connect_error);
}
$sql = "SELECT * FROM news";
$result = $connect->query($sql);
$res = array();

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        array_push($res, $row);
    }
}
$connect -> close();
echo json_encode ($res);

?>