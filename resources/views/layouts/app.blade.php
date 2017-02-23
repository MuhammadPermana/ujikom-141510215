<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
</head>
<body>
<div style="color: white;
            padding: 15px 100px 5px 80px;
            float: left;
            font-size: 16px;"> 
@if (Auth::guest())
                            <li role="presentation" class="active"><a href="{{ url('/login') }}">Login</a></li>
                        @else
                       
                                <li class="dropdown">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        </div>
<div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> 
<script type="text/javascript">    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function tampilkanwaktu(){
        //buat object date berdasarkan waktu saat ini
        var waktu = new Date();
        //ambil nilai jam, 
        //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
        var sh = waktu.getHours() + ""; 
        //ambil nilai menit
        var sm = waktu.getMinutes() + "";
        //ambil nilai detik
        var ss = waktu.getSeconds() + "";
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">                             
<span id="clock"></span> 
<?php
$hari = date('l');
/*$new = date('l, F d, Y', strtotime($Today));*/
if ($hari=="Sunday") {
    echo "Minggu";
}elseif ($hari=="Monday") {
    echo "Senin";
}elseif ($hari=="Tuesday") {
    echo "Selasa";
}elseif ($hari=="Wednesday") {
    echo "Rabu";
}elseif ($hari=="Thursday") {
    echo("Kamis");
}elseif ($hari=="Friday") {
    echo "Jum'at";
}elseif ($hari=="Saturday") {
    echo "Sabtu";
}
?>,
<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
    echo " Januari ";
}elseif ($bulan=="February") {
    echo " Februari ";
}elseif ($bulan=="March") {
    echo " Maret ";
}elseif ($bulan=="April") {
    echo " April ";
}elseif ($bulan=="May") {
    echo " Mei ";
}elseif ($bulan=="June") {
    echo " Juni ";
}elseif ($bulan=="July") {
    echo " Juli ";
}elseif ($bulan=="August") {
    echo " Agustus ";
}elseif ($bulan=="September") {
    echo " September ";
}elseif ($bulan=="October") {
    echo " Oktober ";
}elseif ($bulan=="November") {
    echo " November ";
}elseif ($bulan=="December") {
    echo " Desember ";
}
$tahun=date('Y');
echo $tahun;
?>
                    </div>

<ul class="nav navbar-right top-nav">
                
                @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                            
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hai,
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout <i class="fa fa-fw fa-power-off">
                                        </a></i>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        
            </ul>
    <div id="app">
            <div class="container">
                <div class="navbar-brand">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        
                    </ul>
                </div>
            </div>
        </nav>
<br>
<div class="col-md-3">
<div class="panel panel-warning">
    <a  href="{{url('/')}}" class="button button3">Home
    <a  href="{{url('golongan')}}" class="button button3">Golongan
    <a  href="{{url('jabatan')}}" class="button button3">Jabatan
    <a  href="{{url('pegawai')}}" class="button button3">Pegawai
    <a  href="{{url('kategori')}}" class="button button3">Kategori Lembur
    <a  href="{{url('lemburp')}}" class="button button3">Lembur Pegawai
    <a  href="{{url('tunjangan')}}" class="button button3">Kategori Tunjangan
    <a  href="{{url('tunjanganp')}}" class="button button3">Tunjangan Pegawai
    <a  href="{{url('penggajian')}}" class="button button3">Penggajian
    </a>
    <table border="1" class="table table-success table-border table-hover">
    </table>
</div>
</div>

                            @yield('content')
                        </div>
                    </div>
                </div>
                @yield('content1')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
</body>
</html>
