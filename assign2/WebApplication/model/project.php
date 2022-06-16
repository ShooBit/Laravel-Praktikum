<?php
function insertProject(){
    include "database_connection.php";

    $sql = "INSERT INTO `sundb`.`project` (`title`, `date`, `description`) 
            VALUES ('".$_POST["title"]."', '".$_POST["date"]."', '".$_POST["description"]."');";

    if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    } else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
    $conn->close();
    }
function updateProject(){
    include "database_connection.php";

    $sql = "UPDATE `sundb`.`project` 
            SET `title` = '".$_POST["title"]."',
            `date` = '".$_POST["date"]."',
            `description` = '".$_POST["description"]."'
            WHERE (`idproject` = '".$_POST["idproject"]."')";

    if ($conn->query($sql) === TRUE) {
//      echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    }

function deleteProject(){
    include "database_connection.php";

    $sql = "DELETE FROM `sundb`.`project` WHERE (`idproject` = '".$_GET['idproject']."')";
    if ($conn->query($sql) === TRUE) {
    //    echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

?>
