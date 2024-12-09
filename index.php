<?php
    $serverName = "projektpwcodb.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "projektpwco_db", // update me
        "Uid" => "projektpwco", // update me
        "PWD" => "Tojesthaslo123" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
?>
