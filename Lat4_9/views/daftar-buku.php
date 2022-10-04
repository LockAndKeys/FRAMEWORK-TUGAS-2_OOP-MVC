<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku || G.211.21.0069</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            if ($listBuku) : foreach ($listBuku as $value) : ?>
                    <tr>
                        <td><?= $value["Judul"]; ?></td>
                        <td><?= $value["Pengarang"]; ?></td>
                        <td><?= $value["Penerbit"]; ?></td>
                        <td><?= $value["Tahun"]; ?></td>
                    </tr>
                <?php
                endforeach;
            else : ?>
                <tr>
                    <td colspan="5">
                        <b>Data belum ada</b>
                    </td>
                </tr>

            <?php
            endif;
            ?>
        </tbody>
    </table>

</body>

</html>