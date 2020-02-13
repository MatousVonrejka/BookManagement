
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
            
            $conn = new mysqli($servername, $username, $password,  $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // sql to create table
            $sql = "CREATE TABLE Books (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            BookName VARCHAR(30) NOT NULL,
            WriterName VARCHAR(30) NOT NULL,
            YearOfRelease INT(4) NOT NULL
            )";

            if ($conn->query($sql) === FALSE) {
                echo "Error creating table: " . $conn->error;
            } 
            $conn->close();
        ?>
    </body>
</html>
