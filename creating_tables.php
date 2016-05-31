<?php
require_once 'connect.php';

$query = "CREATE TABLE employee_tbl (
id SMALLINT NOT NULL AUTO_INCREMENT,
firstname VARCHAR(50) NOT NULL,
lastname VARCHAR(50) NOT NULL,
age TINYINT NOT NULL,
town VARCHAR(50) NOT NULL,
maritalstatus VARCHAR(50) NOT NULL,
education VARCHAR(50) NOT NULL,
PRIMARY KEY (id)
)";
$result = $con->query($query);
if (!$result) die ("Database access failed: " . $con->error);
?>