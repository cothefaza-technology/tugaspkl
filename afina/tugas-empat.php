 <?php
     include"koneksi.php";
if(isset($_POST['btn'])){
    $a = $_POST['nis'];
    $b = $_POST['nama'];
    $c = $_POST['kelas'];
     $qry = $conn->query("......");
if($qry == true){
     echo"<script>alert('Data Berhasil diinput....')</script>";
}else{
     echo"<script>alert('Data gagal diinput....')</script>";
    }      
}
?>
<form mothod="post">
    <label>NIS</label>
    <input type="text" name="nis">
    <label>Nama</label>
    <input type="text" name="nama">
    <label>Kelas</label>
    <input type="text" name="kelas">
    <button type="submit">Submit</button>
</form>