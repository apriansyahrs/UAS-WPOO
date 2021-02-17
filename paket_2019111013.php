<div class="border my-3">
  <h3 class="text-center py-3">DATA PAKET PENGIRIMAN</h3>
</div>

<table class="table table-bordered">
  <tr>
    <th>Kode Paket</th>
    <th>Nama Paket</th>
    <th>Diskon</th>
    <th>Ketentuan Diskon</th>
  </tr>
  <?php 
include "data_2019111013.php";
foreach ( $paket as $package ) {
  echo "
      <tr>
        <td>$package[kode]</td>
        <td>$package[nama]</td>
        <td>$package[diskon]".' %'."</td>
        <td>$package[ket]</td>
      </tr>
       ";
}
?>
</table>