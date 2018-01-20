@extends('layouts.master')
@section('halaman1')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<?php
$image=glob("gambar/9.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
<?php
}
	?>
	</center>

<center><h1>Assalamualaikum</h1></center>
<center><h1>Selamat Datang di Web Saya INDAH LORENTINA </h1></center>
</body>
</html>
@endsection