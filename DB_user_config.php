<?php

  define('TIMEZONE', 'Africa/Nairobi');
  date_default_timezone_set(TIMEZONE);

  define("DB_HOST", "localhost");
  define("DB_USER", "mabele");
  define("DB_PASSWORD", "Mabele2020*");
  define("DB_DATABASE", "users_ltracker");


   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>