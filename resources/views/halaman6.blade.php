@extends('layouts.master6')
@section('halaman6')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">My Father. <span class="text-muted">JANUAR EVENDI.</span></h2>
          <p class="lead">kamu sangat menyayangi diriku keringatmu menjadi inspirasiku Tawamu yang selalu aku rindukan dan sedihmu adalah deritaku..</p>
        </div>
        <div class="col-md-5">
          <?php
$image=glob("gambar/3.jpg");
for($i=0;$i<count($image);$i++)	
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">My Mother. <span class="text-muted">YUDI ANTINA.</span></h2>
          <p class="lead">Keinginan ku sederhana, ingin selalu melihat ibu tersenyum.dan kebahgian aku pun terasa sempuran bila alasan dibalik senyuman ibu adalah aku.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$gg=glob("gambar/2.jpg");
for($i=0;$i<count($gg);$i++)	
{
	$double = $gg[$i];
?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<?php
}
	?>        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">My Friends. <span class="text-muted">Rima,Dela,Wenti.</span></h2>
          <p class="lead">Sahabat yang beriman ibarat mentari yang menyinari Sahabat yang setia sebagai pewangi yang sejati, menjadi pendorong impian Sahabat berhati mulia, membawa kita ke jalan allah.
.</p>
        </div>
        <div class="col-md-5">
            <?php
$ww=glob("gambar/4.jpg");
for($i=0;$i<count($ww);$i++)	
{
	$ampun = $ww[$i];
?>
	<img src="<?php echo $ampun;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

</body>
</html>
@endsection