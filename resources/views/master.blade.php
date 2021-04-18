<!DOCTYPE html>
<html>
<head>
	<title>KMI - @yield('judul_halaman')</title>
</head>
<body>

	<header>

		<h2>Blog MalasNgoding</h2>
		<nav>
			<a href="/home">Home</a>
			|
			<a href="/profile">Profile</a>
			|
			<a href="/contact">Contact</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>

</body>
</html>