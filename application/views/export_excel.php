<html>
<head>
    <title>Data Export to Excel</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Grid</th>
                <th>Tinggi</th>
                <th>Panjang</th>
                <th>Qty</th>
                <th>Keterangan</th>
                <!-- tambahkan kolom lain sesuai dengan data yang akan ditampilkan -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->tgl_pro; ?></td>
                    <td><?php echo $row->name_brg; ?></td>
                    <td><?php echo $row->grid_pro; ?></td>
                    <td><?php echo $row->width_pro; ?></td>
                    <td><?php echo $row->length_pro; ?></td>
                    <td><?php echo $row->qty_pro; ?></td>
                    <td><?php echo $row->desc_pro; ?></td>
                    <!-- tambahkan data lain sesuai dengan kolom yang akan ditampilkan -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
