# Tugas PKL
A. Buat folder dengan nama masing-masing di dalam repository yang telah disediakan.
Di dalam folder tersebut, buat file dengan nama:
1. tugas-satu.php
2. tugas-dua.php, dan seterusnya sesuai urutan tugas.
3. Sebelum melakukan commit, buat terlebih dahulu file PHP dengan nama tugas-satu.php.
4. Di dalam file tersebut, tuliskan teks berikut pada text field:
    "tugas-satu-nama"

# Tugas Jam ke-5(15/10/2025) 
1. buat file tugas_ketiga.php
2. Buatkan kode PHP  untuk menampilkan kata : "Ikuti proses untuk menjadi orang sukses..."



 # Tugas Jam pertama (10/16/2025)
 
1. buat file tugas_keempat.php didalam folder masing-masing
2. buat kodingan untuk input data siswa
   kode php
```html
<form method="post">
    <label>NIS</label>
    <input type="text" name="nis">
    <label>Nama</label>
    <input type="text" name="nama">
    <label>Kelas</label>
    <input type="text" name="kelas">
    <button type="submit" name="btn">Submit</button>
</form>
```
3. jalankan programnya kemudian screenshoot hasilnya
5. upload hasil screenshoot ke github..
   
   =======================================
   # Tugas Jam Ke 3,4 dan 5
1. Buat database di phpmyadmin dengan nama `db_datasiswa`
2. Buat tabel tb_siswa
   ```sql
   CREATE tb_siswa(
   nis int(12) primary key,
   nama char(50),
   kelas char(50)
   )
   ```
3. buat file `koneksi.php` di folder masing-masing
4. ketikan kode sebagai berikut:
   ```php
   <?php
        $conn = new mysqli('localhost','root','rpl12345','db_datasiswa'); // untuk password sesuiakan dengan localserver masing-masing
   ?>
   ```
5. Buka file `tugas-keempat.php` kemudian di line 1 `enter` kemudian masukan ketikan kode berikut :
   ```php
   <?php
        include"koneksi.php";
   if(isset($_POST['btn'])){
       $a = $_POST['nis'];
       $b = $_POST['nama'];
       $c = $_POST['kelas']
        $qry = $conn->query("......");// silahkan kalian buat query di titik-titik..
   if($qry == true){
        echo"<script>alert('Data Berhasil diinput....')</script>";
   }else{
        echo"<script>alert('Data gagal diinput....')</script>";
       }      
   }
   ?>
   ```
6. untuk melihat hasilnya jalankan program kalian dilocal server masing-masing
   # TUGAS Rabu, 22/10/2025

    1. Ketikan kode berikut di file `tugas_keempat.php`
       ```php
       <table class="table">
       <thead>
       <tr>
       <th scope="col">No</th>
       <th scope="col">NIS</th>
       <th scope="col">Nama</th>
       <th scope="col">Kelas</th>
       </tr>
       </thead>
       <tbody>
       ...
       <tr>
       <th scope="row">1</th>
       <td><?=$data['nis']?></td>
       <td><?=$data['nama']?></td>
       <td><?=$data['kelas']?></td>
       </tr>
       ...
       </tbody>
       </table>
       ```
        # Intruksinya :
        > 1. Di bagian titik-titiknya ganti dengan perulangan untuk menampilkan data tabel siswa
        > 2. Gunakan `foreach` untuk perulangannya dan `$data` sebagai inisiasi `$result`
        
       # Tugas Kamis, 23 Oktober 2025
       Petunjuk Pengerjaan:
       1. Buat sebuah file baru dengan nama tugas_lima.php.
       2. Di dalam file tersebut, buat form input data barang yang memiliki isian sebagai berikut:
         > Kode Barang
         > Nama Barang
         > Harga Barang
         > Jumlah Barang
         > Kondisi Barang
       3. Buat tabel database dengan nama tb_barang di dalam database db_datasiswa.
       4. Jumlah dan nama kolom harus sesuai dengan field yang ada pada form input.
       5. Tambahkan proses penyimpanan data barang ke dalam database menggunakan bahasa pemrograman PHP.
   ## Catatan:
    1. Gunakan metode POST untuk mengirim data dari form.
    2. Pastikan koneksi ke database berfungsi dengan benar.
    3. Tampilkan pesan berhasil atau gagal setelah proses input data dilakukan.

