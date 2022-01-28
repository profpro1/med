<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "eshop";

function connect() {
    $conn = mysqli_connect("localhost", "root", "mysql", "eshop");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "utf8");
    return $conn;
}

function init () {
//    вывожу список товаров
    $conn = connect();
    $sql = "SELECT id, name FROM goods";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = [];
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row['id']] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0 ";
    }
    mysqli_close($conn);
}
function selectOneGoods() {
    $conn = connect();
    $id = $_POST['gid'];
    $sql = "SELECT * FROM goods WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0 ";
    }
    mysqli_close($conn);
}

function updateGoods() {
    $conn = connect();
    $id = $_POST['gid'];
    $name = $_POST['gname'];
    $cost = $_POST['gcost'];
    $mcost = $_POST['gmcost'];
    $descr = $_POST['gdescr'];
    $ord = $_POST['gorder'];
    $img = $_POST['gimg'];

    $sql = "UPDATE goods SET name = '$name', cost = '$cost', mcost = '$mcost', description = '$descr', ord = '$ord', image = '$img'  WHERE id='$id' ";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    writeJSON();
}

function newGoods() {
    $conn = connect();
    $name = $_POST['gname'];
    $cost = $_POST['gcost'];
    $mcost = $_POST['gmcost'];
    $descr = $_POST['gdescr'];
    $ord = $_POST['gorder'];
    $img = $_POST['gimg'];

    $sql = "INSERT INTO goods (name, cost, mcost, description, ord, image)
VALUES ('$name', '$cost', '$mcost', '$descr', '$ord','$img')";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    mysqli_close($conn);
    writeJSON();
}
function writeJSON() {
    $conn = connect();
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = [];
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row['id']] = $row;
        }
        file_put_contents('../goods.json',json_encode($out));
    } else {
        echo "0 ";
    }
    mysqli_close($conn);
}
