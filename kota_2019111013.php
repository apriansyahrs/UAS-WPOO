<div class="border my-3">
  <h3 class="text-center py-3">DATA KOTA PENGIRIMAN</h3>
</div>

<table class="table table-bordered">
  <tr>
    <th>Kode Kota</th>
    <th>Nama Kota</th>
    <th>Harga Pengiriman / Kg</th>
  </tr>
  <?php 
include "data_2019111013.php";
  foreach ( $kota as $city ) {
  echo "
  <tr>
    <td>$city[kode]</td>
    <td>$city[nama]</td>
    <td>Rp. ".number_format($city['harga'],2,",",".")."</td>
  </tr>
  ";
  }
  ?>
</table>