<form method="post">
    <label>NIS</label>
    <input type="text" name="nis">
    <label>Nama</label>
    <input type="text" name="nama">
    <label>Kelas</label>
    <input type="text" name="kelas">
    <button type="submit" name="btn">Submit</button>
</form>

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
.......
<tr>
<th scope="row">1</th>
<td><?=$data['nis']?></td>
<td><?=$data['nama']?></td>
<td><?=$data['kelas']?></td>
</tr>
......
</tbody>
</table>