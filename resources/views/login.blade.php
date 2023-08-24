<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login SiFtPetang</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/focus') }}/images/FESPATI KETAPANG.png">
    <link href="{{ url('public/focus') }}/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-4">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <a href="{{url('beranda')}}" class="brand-logo mb-4"
                                style="display:flex; justify-content:center;">
                                <img src="{{ url('public/focus') }}/images/FESPATI KETAPANG.png"
                                style="max-width:30px; margin-right:4px;">
                                <img src="{{ url('public/focus') }}/images/fespatifontblack.png" alt=""
                                style="max-width:200px">
                            </a>
                            <x-Layout.utils.notif />
                            <form action="{{ url('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" class="form-control" name="email" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-block text-white" style="background: #258f99;">Log Masuk</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Tidak Memiliki Akun? <a class="" href="{{url('register')}}" style="color:#258f99;">Daftar Sekarang</a></p>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a
                                            href="https://wa.me/62895372200063?text=Halo%20Admin%20saya%20lupa%20password,%20bisakah%20saya%20minta%20reset%20Password%20dengan%20email">Lupa
                                            Password? Hubungi Admin</a></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('../fespati/public/focus/images/login2.jpg');
        }
    </style>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
</body>

</html>
