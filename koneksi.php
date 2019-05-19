<?php 

$host = "serverasad.database.windows.net";
$user = "asad";
$pass = "Dasa1997";
$dbnm = "datasiswa";

try {
        $conn = new PDO("sqlsrv:server = $host; Database = $dbnm", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }

 ?>
