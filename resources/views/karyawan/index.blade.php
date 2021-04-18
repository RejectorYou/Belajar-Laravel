<!DOCTYPE html>
<html>
<head>
	<title>Karyawan</title>
</head>
<body>
 
	<h1>Hi, {{$nama}} </h1>
	<br>
	<h3>Dengan Posisi Kerja :</h3>
	<ul>
		@foreach($posisi as $m)
			<li> {{ $m }} </li>
		@endforeach
	</ul>
</body>
</html>