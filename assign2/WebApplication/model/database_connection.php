<?php 
$servername = "localhost";
$scheme = "sundb";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, $scheme);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//create tables
$createProjectTableSQL = 
    "CREATE TABLE IF NOT EXISTS `sundb`.`project` (
    `idproject` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `date` DATE NOT NULL,
    `description` VARCHAR(255) NULL,
    PRIMARY KEY (`idproject`),
    UNIQUE INDEX `idproject_UNIQUE` (`idproject` ASC));";
  
$createResearcherTableSQL = 
  "CREATE TABLE IF NOT EXISTS `sundb`.`researcher` (
    `idresearcher` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `loginid` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NULL,
    PRIMARY KEY (`idresearcher`),
    UNIQUE INDEX `idresearcher_UNIQUE` (`idresearcher` ASC),
    UNIQUE INDEX `loginid_UNIQUE` (`loginid` ASC));";


if ($conn->query($createProjectTableSQL) === TRUE) {
  //echo "New table created successfully";
} else {
  echo "Error: 1" . $createProjectTableSQL . "<br>" . $conn->error;
}

if ($conn->query($createResearcherTableSQL) === TRUE) {
  //echo "New table created successfully";
} else {
  echo "Error: 1" . $createResearcherTableSQL . "<br>" . $conn->error;
}

// close connection 
// $conn->close();
