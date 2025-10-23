<?php
     include "koneksi.php";
   if(isset($_POST['btn'])){
       $a = $_POST['kd_barang'];
       $b = $_POST['nama_brg'];
       $c = $_POST['harga_brg'];
       $d = $_POST['jumlah_brg'];
       $e = $_POST['kondisi_brg'];
        $qry = $conn->query("INSERT INTO 
        tb_barang(kd_barang,nama_brg,harga_brg,jumlah_brg,kondisi_brg) VALUES ('$a','$b','$c','$d','$e')");
    
   if($qry == true){
        echo"<script>alert('Data Berhasil diinput....')</script>";
   }else{
        echo"<script>alert('Data gagal diinput....')</script>";
     }
   }

   ?> 
 
 <form method="post">       
    <label>kode barang</label>
    <input type="number" name="kode"><br>
    <label>Nama barang</label>
    <input type="text" name="nama"><br>
    <label>harga barang</label>
    <input type="number" name="harga"><br>
    <label>jumlah barang</label>
    <input type="number" name="jumlah"><br>
    <label>kondisi barang</label>
    <input type="text" name="kondisi"><br>
    <button type="submit" name="btn">Submit</button>
</form>


       <table class="table">
       <thead>
       <tr>
       <th scope="col">No</th>
       <th scope="col">kode barang</th>
       <th scope="col">nama barang</th>
       <th scope="col">harga barang</th>
       <th scope="col">jumlah barang</th>
       <th scope="col">kondisi barang</th>
       </tr>
       </thead>
       <tbody>
          <?php
          $no = 1;
          $sqlResult = $conn->query("SELECT*FROM tb_barang");
          foreach($sqlResult as $data){
            ?>
       <tr>
       <td><?=$no++?></td>
       <td><?=$data['kd_barang']?></td>
       <td><?=$data['nama_brg']?></td>
       <td><?=$data['harga_brg']?></td>
       <td><?=$data['jumlah_brg']?></td>
       <td><?=$data['kondisi_brg']?></td>
       </tr>
       
    
      
<?php
        }
?>
 </tbody>
       </table>
      