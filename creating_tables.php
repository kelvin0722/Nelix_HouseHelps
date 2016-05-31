<?php
require_once 'connect.php';
//creating table employee_tbl
$query = "CREATE TABLE employee_tbl (
id VARCHAR(60) NOT NULL,
firstname VARCHAR(50) NOT NULL,
lastname VARCHAR(50) NOT NULL,
age TINYINT NOT NULL,
town VARCHAR(50) NOT NULL,
maritalstatus VARCHAR(50) NOT NULL,
education VARCHAR(50) NOT NULL,
imagename VARCHAR(60) NOT NULL,
adminphone VARCHAR(30) NOT NULL,
PRIMARY KEY (id)
)";
$result = $con->query($query);
if (!$result) die ("Database access failed: " . $con->error);
?>