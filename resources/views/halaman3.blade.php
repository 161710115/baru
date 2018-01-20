@extends('layouts.master3')
@section('halaman3')
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
      <div class="page-header">
        <center><h1>Data Table</h1></center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
<tr>
              <tr>
              <center>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>cita-cita</th>
                <th>Hobi</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1233</td>
                <td>Indah</td>
                <td>Palembang</td>
                <td>2001-14-01</td>
                <td>Bandung</td>
                <td>Dokter</td>
                <td>Renang</td>
                <td><?php
$image=glob("gambar/1.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</td>
              </tr>
              <tr>
                <td>4532</td>
                <td>Rima</td>
                <td>Bandung</td>
                <td>2001-01-23</td>
                <td>Bandung</td>
                <td>Dokter</td>
                <td>Renang</td>
                <td><?php
$image=glob("gambar/5.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</center>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

</body>
</html>

@endsection