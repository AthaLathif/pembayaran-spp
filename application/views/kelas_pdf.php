<!DOCTYPE html>
<html><head>
  <title></title>
</head><body>
  <table width="100%" border ="1px">
    <tr>
                            <th>No</th>
                            <th>ID Kelas</th>
                            <th>Kelas</th>
                            <th>Kompetensi Keahlian</th>
                        </tr>

        <?php
                        $no=0;
                        foreach($kelas as $value): ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $value->id_kelas; ?></td>
                            <td><?php echo $value->nama_kelas; ?></td>
                            <td><?php echo $value->kompetensi_keahlian; ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>


                    </table>
</body></html>