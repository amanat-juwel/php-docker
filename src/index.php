<?php

echo "Hello from the docker container <br>";

$mysqli = new mysqli("dbhost", "root", "example", "company1");

$uname = time();
$sql = "INSERT INTO users (name, fav_color) VALUES($uname, 'Yellow')";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}
