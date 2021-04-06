<!DOCTYPE html>
<html><head>
  <title></title>
</head><body>
  <table width="100%" border ="1px">
    <tr>
                            <th>No</th>
                            <th>ID Pembayaran</th>
                            <th>ID Petugas</th>
                            <th>NISN</th>
                            <th>Tgl/bln/thn</th>
                            <th>ID SPP</th>
                            <th>Jumlah</th>
                        </tr>

        <?php
                        $no=0;
                        foreach($pembayaran as $value): ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $value->id_pembayaran; ?></td>
                            <td><?php echo $value->id_petugas; ?></td>
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->tgl_bayar; ?></td>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->jumlah_bayar; ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>


                    </table>
</body></html>