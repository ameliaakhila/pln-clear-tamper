<!-- Modal Detail Awal-->
<div class="modal fade" id="detail<?php echo $d['id_clear_temper']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalXl" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXl">Detail Pengajuan Clear Temper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <tr>
                        <th>Nama Petugas</th>
                        <td>: <?= htmlspecialchars($d['nama_petugas']) ?></td>
                    </tr>
                    <tr>
                        <th>Bondg</th>
                        <td>: <?= htmlspecialchars($d['bondg']) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Permintaan</th>
                        <td>: <?= htmlspecialchars($d['tgl_permintaan']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pelapor</th>
                        <td>: <?= htmlspecialchars($d['nama_pelapor']) ?></td>
                    </tr>
                    <tr>
                        <th>Alamat Pelapor</th>
                        <td>: <?= htmlspecialchars($d['alamat']) ?></td>
                    </tr>
                    <tr>
                        <th>No Hp</th>
                        <td>: <?= htmlspecialchars($d['no_hp']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pelangan</th>
                        <td>: <?= htmlspecialchars($d['id_pelanggan']) ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Meter</th>
                        <td>: <?= htmlspecialchars($d['no_meter']) ?></td>
                    </tr>
                    <tr>
                        <th>Indikasi</th>
                        <td>: <?= htmlspecialchars($d['indikasi']) ?></td>
                    </tr>
                    <tr>
                        <th>Photo KWH</th>
                        <td>: <img width="100px" src="../assets/photo_kwh/<?= htmlspecialchars($d['photo_kwh']) ?>"></td>
                    </tr>
                    <tr>
                        <th>Kode Temper</th>
                        <td>: <?= htmlspecialchars($d['kode_temper']) ?></td>
                    </tr>
                     <tr>
                        <th>Status Permintaan</th>
                        <td>: 
                            <?php if($d['status_permintaan'] == 'terkirim'){ ?>
                                <div class="badge bg-success text-white rounded-pill">Terkirim</div>
                            <?php }elseif($d['status_permintaan'] == 'proses'){ ?>
                                <div class="badge bg-warning text-white rounded-pill">Proses</div>
                            <?php }else { ?>
                                <div class="badge bg-danger text-white rounded-pill">Error</div>
                                <?php } ?>

                       </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Detail Akhir -->

<!-- Modal Kirim Temper Awal-->
<div class="modal fade" id="kirim_temper<?php echo $d['id_clear_temper']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalXl" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXl">Kirim Kode Clear Temper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="clear_temper_kirim.php" method="post" enctype="multipart/form-data">
                <table class="table table-hover">
                    <tr>
                        <th>Nama Petugas</th>
                        <td>: <?= htmlspecialchars($d['nama_petugas']) ?></td>
                    </tr>
                    <tr>
                        <th>Bondg</th>
                        <td>: <?= htmlspecialchars($d['bondg']) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Permintaan</th>
                        <td>: <?= htmlspecialchars($d['tgl_permintaan']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pelapor</th>
                        <td>: <?= htmlspecialchars($d['nama_pelapor']) ?></td>
                    </tr>
                    <tr>
                        <th>Alamat Pelapor</th>
                        <td>: <?= htmlspecialchars($d['alamat']) ?></td>
                    </tr>
                    <tr>
                        <th>No Hp</th>
                        <td>: <?= htmlspecialchars($d['no_hp']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pelangan</th>
                        <td>: <?= htmlspecialchars($d['id_pelanggan']) ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Meter</th>
                        <td>: <?= htmlspecialchars($d['no_meter']) ?></td>
                    </tr>
                    <tr>
                        <th>Indikasi</th>
                        <td>: <?= htmlspecialchars($d['indikasi']) ?></td>
                    </tr>
                    <tr>
                        <th>id_user</th>
                        <td>: <?= htmlspecialchars($d['id_user']) ?></td>
                    </tr>
                    <tr>
                        <th>Kode Temper</th>
                        <td>
                            <input type="text" name="kode_temper" class="form-control" value="<?= $d['kode_temper'] ?>" required>
                            <input type="hidden" name="id_clear_temper" value="<?= $d['id_clear_temper'] ?>">
                        </td>
                    </tr>
                     
                </table>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Kirim" class="btn btn-sm btn-success">
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
                  </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Kirim Temper Akhir -->


<!-- Modal Edit Awal-->
<div class="modal fade" id="edit<?php echo $d['id_clear_temper']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pengajuan Clear Tamper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="clear_temper_edit.php" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <table class="table table-hover">
                    <tr>
                            <td>Nama Petugas</td>
                            <td>
                                <select name="status" class="form-control" id="">
                                    <option value="">Pilihan</option>
                                    <option value=""><?= htmlspecialchars($d_petugas['nama_petugas'])?></option>
                                        <?php
                                            $d_petugas = mysqli_query($koneksi, "select * from tb_user where status='petugas'");
                                            while ($d = mysqli_fetch_array($d_petugas)) {
                                        ?>
                                            <option value="<?php echo $d['nama_petugas'] ?>"><?php echo $d['nama_petugas'] ?></option>
                                        <?php } ?>
                                </select>
                            </td>
                        </tr>
                    <tr>
                            <td>bondg</td>
                            <td><input class="form-control" type="text" name="bondg" value="<?= htmlspecialchars($d['bondg'])?>" required></td>
                        </tr>
                        <tr>
                            <td>tgl_permintaan</td>
                            <td><input class="form-control" type="text" name="tgl_permintaan" value="<?= htmlspecialchars($d['tgl_permintaan'])?>" required></td>
                        </tr>
                        <tr>
                            <td>nama_pelapor</td>
                            <td><input class="form-control" type="text" name="nama_pelapor" value="<?= htmlspecialchars($d['nama_pelapor'])?>" required></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input class="form-control" type="text" name="alamat" value="<?= htmlspecialchars($d['alamat'])?>" required></td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td><input class="form-control" type="text" name="no_hp" value="<?= htmlspecialchars($d['no_hp'])?>" required></td>
                        </tr>
                        <tr>
                            <td>Id Pelangan</td>
                            <td><input class="form-control" type="text" name="id_pelanggan" value="<?= htmlspecialchars($d['id_pelanggan'])?>" required></td>
                        </tr>
                        <tr>
                            <td>No Meter</td>
                            <td><input class="form-control" type="text" name="no_meter" value="<?= htmlspecialchars($d['no_meter'])?>" required></td>
                        </tr>
                        <tr>
                            <td>Indikasi</td>
                            <td><input class="form-control" type="text" name="indikasi" value="<?= htmlspecialchars($d['indikasi'])?>" required></td>
                        </tr>                                           
                        <tr>
                            <td>Kode Tamper</td>
                            <td>
                            <input type="text" name="kode_temper" class="form-control" value="<?= $d['kode_temper'] ?>" required>
                            <input type="hidden" name="id_clear_temper" value="<?= $d['id_clear_temper'] ?>">
                            </td>
                </table>


                    <!-- Tambahkan token CSRF di sini jika diperlukan -->
                    <input type="hidden" name="csrf_token" value="your_csrf_token_here">
            </div>
            <div class="modal-footer">
                <!-- Tombol Submit untuk menyimpan perubahan -->
                <!-- <input type="submit" class="btn btn-info btn" style="margin-bottom: 50px" name="upload" value="simpan"> -->
                <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
                </form>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit Akhir -->


<!-- Modal Tambah Awal-->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kelola_petugas_tambah.php" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td><input class="form-control" type="text" name="username" value="" required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input class="form-control" type="text" name="password" value="" required></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td><input class="form-control" type="text" name="nik" value="" required></td>
                        </tr>
                        <tr>
                            <td>Nama Petugas</td>
                            <td><input class="form-control" type="text" name="nama_petugas" value="" required></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><input class="form-control" type="text" name="jabatan" value="" required></td>
                        </tr>
                        <tr>
                            <td>Wilayah Kerja</td>
                            <td><input class="form-control" type="text" name="wilker" value="" required></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                <select name="status" class="form-control" id="">
                                    <option value="">Pilihan</option>
                                    <option value="admin">admin</option>
                                    <option value="petugas">petugas</option>
                                    <option value="pimpinan">pimpinan</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <!-- Tambahkan token CSRF di sini jika diperlukan -->
                    <input type="hidden" name="csrf_token" value="your_csrf_token_here">
            </div>
            <div class="modal-footer">
                <!-- Tombol Submit untuk menyimpan perubahan -->
                <!-- <input type="submit" class="btn btn-info btn" style="margin-bottom: 50px" name="upload" value="simpan"> -->
                <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
                </form>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tambah Akhir -->

<!-- Modal Password Awal-->
<div class="modal fade" id="password<?php echo $d['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset Password Petugas</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kelola_petugas_password.php" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <input type="hidden" name="id_user" value="<?= $d['id_user'] ?>">
                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td><input class="form-control" type="text" name="username" value="<?= htmlspecialchars($d['username']) ?>" required readonly></td>
                        </tr>
                      
                        <tr>
                            <td>Nama Petugas</td>
                            <td><input class="form-control" type="text" name="nama_petugas" value="<?= htmlspecialchars($d['nama_petugas']) ?>" required readonly></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><input class="form-control" type="text" name="jabatan" value="<?= htmlspecialchars($d['jabatan']) ?>" required readonly></td>
                        </tr>
                        <tr>
                            <td>Wilayah Kerja</td>
                            <td><input class="form-control" type="text" name="wilker" value="<?= htmlspecialchars($d['wilker']) ?>" required readonly></td>
                        </tr>
                        <tr>
                            <td>Password Baru</td>
                            <td><input class="form-control" type="text" name="wilker" value="" required></td>
                        </tr>

                    </table>
                    <!-- Tambahkan token CSRF di sini jika diperlukan -->
                    <input type="hidden" name="csrf_token" value="your_csrf_token_here">
            </div>
            <div class="modal-footer">
                <!-- Tombol Submit untuk menyimpan perubahan -->
                <!-- <input type="submit" class="btn btn-info btn" style="margin-bottom: 50px" name="upload" value="simpan"> -->
                <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
                </form>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Password Akhir -->