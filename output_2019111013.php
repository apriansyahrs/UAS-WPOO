        <?php
       error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
          $no_pengiriman = $_POST['no_pengiriman'];
          $nama = $_POST['nama'];
          $kotju = $_POST['kotju'];
          $kotket = $_POST['kotket'];
          $namrang = $_POST['namrang'];
          $berang = $_POST['berang'];

          switch ($_POST['kotju']) {
            case 'Banten':
              $kota = "Banten";
              $harman = 35000;
              break;

            case 'Jakarta':
              $kota = "Jakarta";
              $harman = 23000;
              break;

            case 'Tanggerang':
              $kota = "Tanggerang";
              $harman = 25000;
              break;

            case 'Bogor':
              $kota = "Bogor";
              $harman = 18000;
              break;

            case 'Bandung':
              $kota = "Bandung";
              $harman = 11000;
              break;

            case 'Yogyakarta':
              $kota = "Yogyakarta";
              $harman = 20000;
              break;

            case 'Purwokerto':
              $kota = "Purwokerto";
              $harman = 21000;
              break;
            case 'Surabaya':
              $kota = "Surabaya";
              $harman = 37000;
              break;

            case 'Banyuwangi':
              $kota = "Banyuwangi";
              $harman = 42000;
              break;

            // default:
            //   echo "<script>
            //           alert('Anda harus memilih Kota tujuan!');
            //         </script>";
            //   break;
          };

          switch ($_POST['kotket']) {
            case 'P000':
              $nama_p = "Tidak Ada Paket";
              $diskon = 0;
              break;

            case 'P01Z':
              $nama_p = "Paket Ceria";
              if($berang >= 5 ) {
                $diskon = 10;
              } else {
                $diskon = 0;
              }
              break;

            case 'P02X':
              $nama_p = "Paket Murah Meriah";
              if($berang >= 7 ) {
                $diskon = 15;
              } else {
                $diskon = 0;
              }
              break;

            case 'P03Y':
              $nama_p = "Paket War Biazah";
              if($berang >= 3 ) {
                $diskon = 5;
              } else {
                $diskon = 0;
              }
              break;

            case 'P04V':
              $nama_p = "Paket Asik Asik";
              if($berang >= 10 ) {
                $diskon = 30;
              } else {
                $diskon = 0;
              }
              break;

              
              
            // default:
            //   echo "<script>
            //           alert('Anda harus memilih Kota Paket!');
            //         </script>";
            //   break;
          };

          // $potongan = $biaya_pengantaran * $diskon;
          // $biaya_pengantarkekota = $biaya_pengantaran * $berat_b;
          // $biaya_total = ($fee_perusahaan + $biaya_pengantarkekota) - $potongan;

          $tot = $berang * $harman;
          $totdis = $tot * $diskon/100;
          $totyar = $tot - $totdis;

        ?>

        <div>
          <table>
            <tr>
              <th>Tanggal Pengiriman</th>
              <td>:</td>
              <td><?= date('l, d F Y');?></td>
            </tr>
            <tr>
              <th>Nomer Pengiriman</th>
              <td>:</td>
              <td><?= $no_pengiriman; ?></td>
            </tr>
            <tr>
              <th>Nama Pengirim</th>
              <td>:</td>
              <td><?= $nama; ?></td>
            </tr>
          </table>
          <br>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Berat Barang</th>
                <th>Kota Tujuan</th>
                <th>Paket</th>
                <th>Diskon</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?= $namrang; ?></td>
                <td><?= $berang." Kg"; ?></td>
                <td><?php print_r($kotju); ?></td>
                <td><?= $nama_p;?></td>
                <td><?= $diskon." %"; ?></td>
                <td><?= "Rp. ".number_format($tot,2,",","."); ?></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="5">Total Diskon</th>
                <th><?= "Rp. ".number_format($totdis,2,",","."); ?></th>
              </tr>
              <tr>
                <th colspan="5">Total Pembayaran</th>
                <th><?= "Rp. ".number_format($totyar,2,",","."); ?></th>
              </tr>
            </tfoot>
          </table>
        </div>