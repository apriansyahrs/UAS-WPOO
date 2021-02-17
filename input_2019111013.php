<?php include "data_2019111013.php" ?>
<div class="border my-3">
  <h3 class="text-center py-3">INPUT PENGIRIMAN BARANG</h3>
</div>

<form method="POST">
  <div class="form-group">
    <label>No. Pengiriman:</label>
    <input type="number" name="no_pengiriman" class="form-control" placeholder="Enter No. Pengiriman" required>
  </div>
  <div class="form-group">
    <label>Nama Pengirim:</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama Pengiriman" required>
  </div>
  <div class="form-group">
    <label>Kota Tujuan:</label>
    <select class="form-control" name="kotju" required>
      <option>~Pilih Kode Kota~</option>
      <?php 
        foreach ( $kota as $city ) {
          echo "<option value='$city[nama]'>$city[kode]</option>";
        }
        ?>
    </select>
  </div>
  <div class="form-group">
    <label>Kota Paket:</label>
    <select class="form-control" name="kotket" required>
      <option>~Pilih Paket Pengiriman~</option>
      <?php 
      sort($paket);
        foreach ( $paket as $package ) {
          printf ("<option value='$package[kode]'>$package[nama]</option>");
        }
        ?>
    </select>
  </div>
  <div class="form-group">
    <label>Nama Barang:</label>
    <input type="text" name="namrang" class="form-control" placeholder="Nama Barang" required>
  </div>
  <div class="form-group">
    <label>Berat Barang:</label>
    <input type="number" name="berang" class="form-control" placeholder="Berat Barang KG" required>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block py-2">Prosess Pengiriman</button>
  </div>
</form>