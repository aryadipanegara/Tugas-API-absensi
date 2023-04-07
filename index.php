<?php


function cekData($data)
{
    if ($data === "M") {
        echo 'Hadir';
    } else {
        echo 'Tidak Hadir';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Absensi</title>
</head>

<body>
    <div class="container">
        <h2>ABSENSI KELAS TI.21.A3</h2>
        <table>

            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>PERTEMUAN 1</th>
                <th>PERTEMUAN 2</th>
                <th>PERTEMUAN 3</th>
            </tr>

            <?php

            $url = file_get_contents("https://tifupb.id/21a3");
            $data = json_decode($url, true);
            if (count($data) != 0) {
                foreach ($data as $data) {
            ?>

                    <tr>
                        <td><?php echo $data['NO'] ?></td>
                        <td><?php echo $data['NaMa'] ?></td>
                        <td><?php echo $data['NIM'] ?></td>
                        <td><?php cekData($data['1']) ?></td>
                        <td><?php cekData($data['2']) ?></td>
                        <td><?php cekData($data['3']) ?></td>
                    </tr>

            <?php

                }
            }
            ?>
        </table>
    </div>
</body>

</html>