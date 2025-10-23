
<h3 class="mb-4">Data barang</h3>
<!-- Form Input Produk -->
<div class="card mb-4">
  <div class="card-header bg-primary text-white">Tambah barang</div>
  <div class="card-body">
    <form method="POST" enctype="multipart/form-data">
      <div class="row g-3">
          <div class="col-md-4">
          <label class="form-label">kategori header</label>
          <select class="form-control" name="idkate" id="idkate">
            <option value="">Pilih Kategori</option>
            <?php
            $sqlkategori = $conn->query("SELECT*FROM tb_header");
            foreach ($sqlkategori as $row) {
              ?>
              <option value="<?=$row['id_kategori']?>"><?=$row['nama_kat']?></option>
            <?php
            }
            ?>
          </select>
        </div>
         <div class="col-md-4">
          <label class="form-label">kode barang</label>
          <input type="text" class="form-control" name="kdbrg" placeholder="Masukkan kode barang">
        </div>
        <div class="col-md-4">
          <label class="form-label">nama barang</label>
          <input type="text" class="form-control" name="namabrg" placeholder="Masukkan nama barang">
        </div>
        <div class="col-md-4">
          <label class="form-label">deskripsi barang</label>
            <textarea class="form-control" name="desk"></textarea>
        </div>
        <div class="col-md-4">
          <label class="form-label">harga barang</label>
          <input type="number" class="form-control" name="hargabrg" placeholder="Masukkan harga barang">
        </div>
        <div class="col-md-4">
          <label class="form-label">qty</label>
          <input type="number" class="form-control" name="qty" placeholder="Masukkan qty">
        </div>

        <div class="col-md-4">
          <label class="form-label">foto</label>
          <input type="file" class="form-control" name="foto" placeholder="Masukkan foto">
        </div>
        
        <div class="col-md-1 d-flex align-items-end">
          <button type="submit" name="btn" class="btn btn-success w-500">Tambah barang</button>
        </div>
      </div>
    </form>
    <?php
    if (isset($_POST['btn'])) {
      $path = '../upload/';
      $kategori = $_POST['idkate'];
      $kdbrg = $_POST['kdbrg'];
      $nama = $_POST['namabrg'];
      $deskripsi = $_POST['desk'];
      $harga = $_POST['hargabrg'];
      $qty = $_POST['qty'];
      $foto = $_FILES['foto']['name'];
      move_uploaded_file($_FILES['foto']['tmp_name'],$path.$foto);
      $sql = $conn->query("INSERT INTO tb_barang (kd_barang, id_kategori, nama_brg, deskripsi_brg, harga_brg, qty, gambar_brg)VALUES('$kdbrg','$kategori','$nama','$deskripsi','$harga','$qty','$foto')");
      if ($sql==true) {
        echo"Data Berhasil Di Input...";
      }else {
        echo"<b>Error..</b>".$conn->error."";
      }
   }
?>
  </div>
</div>

<!-- Tabel user -->
<div class="card">
  <div class="card-header bg-dark text-white">Daftar barang</div>
  <div class="card-body">
    <table class="table table-bordered table-hover">
      <thead class="table-secondary">
        <tr>
          <th>No</th>
          <th>kategori barang</th>
          <th>kode barang</th>
          <th>Nama barang</th>
          <th>deskripsi</th>
          <th>harga </th>
          <th>qty</th>
          <th>foto</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $sqlResult = $conn->query("SELECT*FROM tb_barang INNER JOIN tb_kategori on tb_barang.id_kategori=tb_kategori.id_kategori");
        foreach($sqlResult as $data){
            ?>
<tr>
          <td><?=$no++?></td>
          <td><?=$data['nama_kat']?></td>
          <td><?=$data['kd_barang']?></td>
          <td><?=$data['nama_brg']?></td>
          <td><?=$data['deskripsi_brg']?></td>
          <td>Rp.   <?=number_format($data['harga_brg'])?></td>
          <td><?=$data['qty']?></td>
          <td><img src="../upload/<?=$data['gambar_brg']?>" width="100"></td>
          <td>
            <a href="#" class="btn btn-warning btn-sm">Edit</a>
            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>

            <?php
        }
        ?>
        
      </tbody>
    </table>
  </div>
</div>