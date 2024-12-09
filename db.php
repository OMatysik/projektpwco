<?php

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "projektpwcomysql.mysql.database.azure.com", "projektpwco", "Tojesthaslo123", "projektpwcomysql", 3306, MYSQLI_CLIENT_SSL);

?>
