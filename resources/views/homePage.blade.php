<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/homePage/homePage.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="hero">

        <video autoplay loop muted plays-inline class="back-vidio">
            <source src="/video/vidio2.mp4" type="video/mp4">
            <source src="/audio/audiointro.mp3" type="audio/mp3">
        </video>
        <nav>
            <img src="img/cinema.png" class="logo" width="80px">
        </nav>
        <div class="content">
            <h1>CINEMA ATMA</h1>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</body>

</html>
