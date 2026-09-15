<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 12</title>
</head>

<body>
    <h1 style="margin: auto; text-align: center;"><strong>Taula</strong></h1>
    <table border=1 style="margin: auto; text-align: center;">

        <tr>
            <th></th>

            <?php
                for ($i = 1; $i <= 4; $i++) {
                    echo "<th>$i</th>";
                }
            ?>

        </tr>


        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";

            echo "<th>$i</th>";
        
            for ($j = 1; $j <= 4; $j++) {
                echo "<td>$i - $j</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>