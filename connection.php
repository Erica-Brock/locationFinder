<?php
## googlemaps distance matrix api connection
$g_api_key="AIzaSyAubuYaHl8kMY2IGiAvG0VaNyWNvX4LOyU";

## database connection
$host= "localhost";
$username = "EadyBrock";
$password = "rebel-Runner1989";
$db_name= "locationFinder";
$dsn = "mysql:host=$host; dbname=$db_name";
$conn = new mysqli($host, $username, $password, $db_name);
