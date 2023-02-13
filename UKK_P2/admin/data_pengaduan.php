<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    DATA PENGADUAN
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL</th>
                                <th>NAMA</th>
                                <th>JUDUL</th>
                                <th>LAPORAN</th>
                                <th>FOTO</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../config/koneksi.php';
                            $no = 1;
                            $query = mysqli_query($koneksi, "SELECT a.*, b.* FROM pengaduan a INNER JOIN masyarakat b ON a.nik=b.nik ORDER BY id_pengaduan DESC");
                            while ($data = mysqli_fetch_array($query)){?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['tgl_pengaduan'] ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['judul_laporan'] ?></td>
                                <td><?php echo $data['isi_laporan'] ?></td>
                                <td><img src="../asset/img/<?php echo $data['foto'] ?>" width="100"></td>
                                <td> 
                                    <?php
                                    if ($data['status'] == 'proses') {
                                        echo "<span class='badge bg-warning'>Proses</span>";
                                    } elseif ($data['status'] == 'selesai') {
                                        echo "<span class='badge bg-succes'>Selesai</span>";
                                    } else {
                                        echo "<span class='badge bg-warning'>Menunggu</span>";
                                    }

                                    ?>
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary">VERIFIKASI</a>
                                    <a href="" class="btn btn-success">TANGGAPI</a>
                                    <a href="" class="btn btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>