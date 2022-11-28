<?php

$conn = mysqli_connect("localhost", "root", "", "tugassenin");



function register($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    if ($password !== $password2) {
        echo "<script>
        alret('password tidak sesuai!');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES(null, '$username', '$password')");

    return mysqli_affected_rows($conn);
}
