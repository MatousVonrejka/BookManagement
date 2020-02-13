
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $bookname = $autorname = $yearofrelease = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $bookname = test_text($_POST["bookname"]);
                $autorname = test_text($_POST["autorname"]);
                $yearofrelease = test_year($_POST["yearofrelease"]);
                if($autorname == "" || strlen($autorname) >= 30 || $bookname == "" || strlen($bookname) >= 30 || $yearofrelease == "" || $yearofrelease == null)
                {
                    ReportFalse();
                }else {
                    ReportTrue();
                    sent_to_sql($bookname,$autorname,$yearofrelease);
                }
            }
            
            
            function sent_to_sql ($bn,$an,$yfr)
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "BookManagmentDB";

                $conn = new mysqli($servername, $username, $password,  $dbname);
                
                $sql = "INSERT INTO Books (Bookname, Writername, YearOfRelease)
                VALUES ('$bn', '$an', '$yfr')";
                if ($conn->query($sql) === TRUE) {
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
                
            }
            
            
            function test_year($data)
            {
                
                if(strlen($data)==4)
                {
                    return ctype_digit($data) ? intval($data)  : null;;
                } else {
                    return null;
                }
                
            }
            function test_text($data) 
            {
                return htmlspecialchars($data);
            }
            
        ?>
        
        <h1>Form for books inserting<h1/>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Book Name: <input type="text" name="bookname">
            <br><br>
            Autor Name: <input type="text" name="autorname">
            <br><br>
            Year Of Release: <input type="text" name="yearofrelease">
            <br><br>
            <input type="submit" name="submit" value="Submit">                
        <form/>
        
        <?php
            function ReportTrue()
            {
                echo 'Added to Database';
            }
            function ReportFalse()
            {
                echo 'Ups something is wrong.';
            }
        ?>
            
    </body>
</html>
