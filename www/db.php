<?php
session_start();

$conn = mysqli_connect(
  'docker-lamp-db-1',
  'root',
  'test',
  'dbname'
);

?>
