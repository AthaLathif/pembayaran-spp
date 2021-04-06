<!DOCTYPE html>
<html><head>
  <title></title>
</head><body>
  <table width="100%" border ="1px">
    <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                        </tr>

        <?php
                        $no=0;
                        foreach($siswa as $value): ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->alamat; ?></td>

                        <?php
                        endforeach;
                        ?>


                    </table>
</body></html>