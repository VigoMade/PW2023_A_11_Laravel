<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        

        .navbar.navbar-scrolled {
            background-color: #03213B;
        }

        /* Mengatur warna latar belakang dan bayangan dropdown saat navbar di-scroll */
        .navbar.navbar-scrolled .navbar-text,
        .navbar.navbar-scrolled .dropdown-menu {
            background-color: #03213B;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);

        }
        .navbar.navbar-scrolled .dropdown-item {
            color: white;
        }


        .navbar.navbar-scrolled .form-control {
            color: white;
        }
    </style>
</head>

<body>
<<<<<<< HEAD
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
=======
    <nav class="navbar navbar-dark fixed-top" id="custom-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="btn-group">
                <button id="dropdown-button" type="button" class="btn" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="background-color: #03213B; color: white;">
                    <img src="{{asset('img/avatar2.png')}}" alt="Avatar" class="rounded-circle" style="width: 32px; height: 32px;"> Admin <i class="fas fa-caret-down"></i>
                </button>

                <ul class=" dropdown-menu dropdown-menu-lg-end" style="background-color: #03213B;">
                    <li><a class=" dropdown-item" href="{{url('loginAdmin')}}" style="color: white;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="background-color:#03213B !important;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Admin</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('admin')}}">Admin Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('daftar')}}">Daftar Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('userControl')}}">User Control</a>
                </li>
            </ul>
            <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
>>>>>>> 619d33830eaf9b8baf7fb00b6f0e4737d1770195
    </div>
  </div>
</nav>


    <div class="content-wrapper">
        @yield('content')
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header custom-header" style="background-color: #0069d9">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color:white;">Apakah Ingin Logout?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{url ('loginAdmin')}}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <script>
        const navEl = document.querySelector('.navbar');
        const dropdownButton = document.getElementById('dropdown-button');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navEl.classList.add('navbar-scrolled');
                dropdownButton.style.backgroundColor = '#03213B';
            } else {
                navEl.classList.remove('navbar-scrolled');
                dropdownButton.style.backgroundColor = 'transparent';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>