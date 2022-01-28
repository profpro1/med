<?php
require 'connect.php';
session_start();
function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
//check Error connect db
function dbCheckError($query) {
    $errorInfo = $query->errorInfo();

    if ($errorInfo[0] !== PDO::ERR_NONE) {
        echo $errorInfo[2];
        exit();
    }
    return true;
}

//inquiry selection data from db
function selectAll($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table ";
    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if(!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . "WHERE $key = $value ";
            } else {
                $sql = $sql . "AND $key = $value ";
            }
            $i++;
        }
        $query = $pdo->prepare($sql);
        $query->execute();
        dbCheckError($query);
        return $query->fetchAll();
    }
}

//inquiry selection data one string from db
function selectOne($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table ";
    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if(!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . "WHERE $key = $value ";
            } else {
                $sql = $sql . "AND $key = $value ";
            }
            $i++;
        }
    }
    $sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

//record data into db
function insert($table, $params) {
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';
   foreach ($params as $key => $value){
       if($i ===0){
           $coll = $coll . "$key";
           $mask = $mask . "'" . "$value" . "'";
       }else {
           $coll = $coll . ", $key";
           $mask = $mask .", '". "$value" . "'";
       }
       $i++;
   }
    $sql = "INSERT INTO $table ($coll) VALUES ($mask) ";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
}


//update data into db
function update($table,$id, $params) {
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value){
        if($i === 0){
            $str = $str . $key . " = '" . $value . "'";
        }else {
            $str = $str .", ". $key . "= '". $value . "'";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

//delete data into db
function delete($table,$id) {
    global $pdo;
    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}



