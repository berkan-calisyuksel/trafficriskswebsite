<html>
    <head>
        <meta charset="UTF-8">

    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
            </tr>

        <?php
        $host = "null";
        $user = "root";
        $password = "184564";
        $database = "trafficaccidentrisks";
        $port = "3306";
        $socket = "/cloudsql/trafficrisks:europe-west1:trafficaccidentrisks";
        $conn = new mysqli($host, $username, $passwd, $dbname, $port, $socket);
        if(mysqli_connect_error()){
            echo mysqli_connect_error();
        }
        $query = "select * from trafficreports";
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<td>';
            echo $row['sId'];
            echo '</td>';
            echo '<td>';
            echo $row['sName'];
            echo '</td>';
            echo '<td>';
            echo $row['sAddress'];
            echo '</td>';
            echo '<tr>';
        }
        ?>
        </table>
    </body>
</html>
