<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #04192E;
            background-size: cover;
            background-position: center;
            color: white;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .register-box {
            background: rgba(255, 255, 255, 0, 8);
            /*biar ada transparant*/
            border: 1px solid #ccc;
            /*garisnya ada*/
            border-radius: 10px;
            /*biar ada bengkok*/
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            /*ada bayangan*/
        }
    </style>
</head>

<body>
    <div class="container center-container">
        <div class="col-md-6 register-box">
            <h2 class="text-center"><b>Register</b></h2>
            <hr>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <form action="{{ route('actionRegister') }}" method="post">
                @csrf
                <div class="form-group">
                    <label><i class="fa fa-people"></i>nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama" require>
                </div>
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" require>
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" require>
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" require>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fa fa-user"></i>Register
                </button>

                <p class="text-center">
                    sudah punya akun? <a href="{{ route('loginAdmin') }}">Login sini</a>
                </p>
            </form>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
