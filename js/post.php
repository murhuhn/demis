<?php

require_once("db.php");

$name = $_POST ["userName"];
$adress = $_POST["userAdress"];
$email = $_POST["userEmail"];
$tel = $_POST["userTel"];

$sql = "INSERT INTO test (username, adress, email, tel)
VALUES ('$name', '$adress', '$email', '$tel')";

if ($connection->query($sql) === TRUE) {
  echo "<div>Данные успешно отправлены <br><table><tr><th>ФИО</th><th>Адрес</th><th>Почта</th><th>Телефон</th></tr><tr><td>". $name . "</td><td>" . $adress . "</td><td>" . $email . "</td><td>" . $tel . "</td></tr></table></div>";
  
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>