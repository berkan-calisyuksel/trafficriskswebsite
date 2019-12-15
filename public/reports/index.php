<html>
    <head>
        <meta charset="UTF-8">

    </head>
    <body>
        <table>
            <tr>
            <th>Ilce Adi</th>
            <th>Yillik Kaza Istatistikleri</th>
            <th>En Fazla Kaza Alan Bolge</th>
            <th>Olumlu Yaralanmali</th>
            <th>Maddi Hasarli</th>
            <th>Olu</th>
            <th>Yarali</th>
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
            echo $row['ılceAdi'];
            echo '</td>';
            echo '<td>';
            echo $row['yillikKaza'];
            echo '</td>';
            echo '<td>';
            echo $row['enFazlaKaza'];
            echo '</td>';
            echo '<tr>';
            echo $row['olumluYaralanmali'];
            echo '<tr>';
            echo '<td>';
            echo $row['maddiHasarli'];
            echo '</td>';
            echo '<td>';
            echo $row['olu'];
            echo '</td>';
            echo '<td>';
            echo $row['yarali'];
            echo '</td>';
            echo '<tr>';
        }
        ?>
        </table>
    </body>
</html>
