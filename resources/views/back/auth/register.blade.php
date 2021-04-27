
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Kayıt Ol</title>

    <!-- Icons font CSS-->
    <link href="{{asset('register')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{asset('register')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('register')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('register')}}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('register')}}/css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    
        <h2 class="title"><strong><img src="{{asset('back/')}}/img/logo.png" width=50 />  Kayıt formu</strong></h2> 
        @if(\Session::has('message'))
        <div class="alert alert- red">
            <p>{{\Session::get('message')}}</p></div><br/>
             @endif
             @if($errors->any())
             <div class="alert alert-danger">
               {{$errors->first()}}
             </div>
           @endif

                    <form method="post" action="{{route('back.registersave')}}">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ad Soyadınız:</label>
                                    <input class="input--style-4" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email Adresiniz:</label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Şifre Belirle:</label>
                                    <input class="input--style-4" type="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Şifre Tekrar Gir:</label>
                                    <input class="input--style-4" type="password" name="password" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Kaydol</button>
                        </div><div class="text-center w-full p-t-115">
                        <a class="txt1 bo1 hov1" href="{{route('homepage')}}">
                             <p  align='right'>Anasayfa'ya Git	</p>
                             </a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('register')}}/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{asset('register')}}/vendor/select2/select2.min.js"></script>
    <script src="{{asset('register')}}/vendor/datepicker/moment.min.js"></script>
    <script src="{{asset('register')}}/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="{{asset('register')}}/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->