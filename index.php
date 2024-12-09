<?php
    $serverName = "projektpwcodb.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "projektpwco_db", // update me
        "Uid" => "projektpwco", // update me
        "PWD" => "Tojesthaslo123" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "select * from [dbo].[items]";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['name'] . " " . $row['description'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
