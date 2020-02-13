
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "BookManagmentDB";

            $conn = new mysqli($servername, $username, $password);

            if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                }
            
            $sql = "CREATE DATABASE $dbname";
            if ($conn->query($sql) === FALSE) 
                {
                    echo "Error creating database: " . $conn->error;
                }    
            $conn->close(); 
        ?>
    </body>
</html>
