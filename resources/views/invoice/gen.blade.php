<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Gen </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="/favicon.ico" rel="icon">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

	<div class="d-flex flex-row">
		<div class="p-2"></div>
		<div class="p-2"></div>
		<div class="p-2">
		<p class="text-justify">

			<h2> Fernn </h2>
			<img class="" src="img/invoice_.jpg" alt="">
			<br>
				<p class="fw-light text-dark"> <b>Name: </b> {{ $to}} </p>
				<p class="fw-light text-dark"> <b>Bill: </b>  {{ $price}} $ </p>
				<p class="fw-light text-dark"> <b>format:</b>  {{ $pdf}}  </p>
			<br>
		</p>
		</div>
	</div>
</body>
</html>