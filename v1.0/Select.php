
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>List of Books<h2/>
        <table style="width:100%">
            <tr><form method="post"> 
                <th><input type="submit" name="ids"
                           value="ids"/></th>
                <th><input type="submit" name="books"
                           value="books"/></th>
                <th><input type="submit" name="writers"
                           value="writers"/></th>
                <th><input type="submit" name="years"
                           value="years"/></th>
            </form></tr>>
        <?php
            $OderBy = "id";
            
            
            if(isset($_POST['ids'])) { 
                $OderBy = "id";
            } 
            
            if(isset($_POST['books'])) { 
                $OderBy = "Bookname";
            }
            if(isset($_POST['writers'])) { 
                $OderBy = "Writername";  
            }
            if(isset($_POST['years'])) { 
                $OderBy = "YearOfRelease";
            } 
        
        
        
        
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "BookManagmentDB";

            $conn = new mysqli($servername, $username, $password,  $dbname);
            
            $sql = "SELECT id, Bookname, Writername, YearOfRelease FROM Books ORDER BY $OderBy";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    
                    echo "<tr><th>" . $row["id"]. "</th><th>" . $row["Bookname"]. "</th><th>" . $row["Writername"]. "</th><th>" .$row["YearOfRelease"]. "</th></tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
                
        ?>
    </table>
    </body>
</html>
