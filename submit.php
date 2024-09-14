<?php
$first_name = $_POST["fullname"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$date= $_POST["date"];
$yearLvl= $_POST["year-level"];

echo "yearLvl".$yearLvl."<br>";


echo "checkbox".json_encode($_POST["checkbox"]);
echo "first name: ". $first_name ."<br>";
echo "last name: ". $last_name ."<br>";
echo "email: ". $email ."<br>";
echo "password: ". $password ."<br>";
echo "date: ". $date ."<br>";

?>