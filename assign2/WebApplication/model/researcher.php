<?php
function insertResearcher(){
    include "database_connection.php";

    $sql = "INSERT INTO `sundb`.`researcher` (`name`, `loginid`, `password`) 
            VALUES ('".$_POST["name"]."', '".$_POST["loginid"]."', '".$_POST["password"]."');";

    if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
    $conn->close();
    }
function updateResearcher(){
    include "database_connection.php";

    $sql = "UPDATE `sundb`.`researcher` 
            SET `name` = '".$_POST["name"]."',
            `loginid` = '".$_POST["loginid"]."',
            `password` = '".$_POST["password"]."'
            WHERE (`idresearcher` = '".$_POST["idresearcher"]."')";

    if ($conn->query($sql) === TRUE) {
//      echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    }

function deleteResearcher(){
    include "database_connection.php";

    $sql = "DELETE FROM `sundb`.`researcher` WHERE (`idresearcher` = '".$_GET['idresearcher']."')";
    if ($conn->query($sql) === TRUE) {
    //    echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

function checkResearcher($loginid, $researcherPassword){
    include "database_connection.php";

    $sql = $sql = "SELECT * FROM sundb.researcher WHERE loginid='".$loginid."';";

    $result = $conn->query($sql);
    if(!$result){
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    if($result->num_rows == 1){ 
        $row = $result->fetch_assoc();
        $conn->close();
        if($row["password"]==$researcherPassword){
            $_SESSION["idresearcher"] = $row["idresearcher"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["loginid"] = $row["loginid"];
            $_SESSION["password"] = $row["password"];
            return true;
        }
    }
    return false;
    $conn->close();
}


function updatePassword($researcherPassword){
    include "database_connection.php";

    $sql = "UPDATE `sundb`.`researcher` 
    SET `password` = '".$_POST["password"]."'
    WHERE (`idresearcher` = '".$_SESSION["idresearcher"]."')";
    if ($conn->query($sql) === TRUE) {
        //    echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

?>
