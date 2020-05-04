<!-- MASTER TEMPLATE -->
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <style>
        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }
    </style>
</head>

<body>
    @section('header')
    <center>Bagian header</center>
    @show

    <div class="container-fluid">
        <div class="row">
            @section('sidebar')
            <div class="col-2">
                <div class="nav flex-column text-center">
                    <a class="nav-link text-white active" href="#">Profile Saya</a>
                    <a class="nav-link text-white" href="#">Ubah Password</a>
                    <br>
                    <a class="nav-link text-white" href="#">Logout</a>
                </div>
                <hr class="bg-light">
                <footer class="text-white-50">
                    <div class=" text-center">
                        <small>&copy; 1822250042 <br> Metta Saputra</small>
                    </div>
                </footer>
            </div>
            @show

            <div class="col-10">
                <div class="container">
                    <div class="row">
                        <div class="jumbotron jumbotron-fluid shadow shadow-sm" style="width:100%">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center">
                                    @yield('picture')
                                    </div>
                                    <div class="col-8 font-weight-bold">
                                    @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>