<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
</head>
<body>
    <?php

    for ($i = 0; $i < 10; $i++) {
        echo "Hello World! <br>";
    }

    // conectar a base de datos abierta en oracle
    $conn = oci_connect('system', 'oracle', 'localhost/xe');
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }else{
        echo "Conexion exitosa";
    }
    

    ?>  
</body>
</html>
