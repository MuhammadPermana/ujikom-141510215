<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name2', 'Laravel') }}</title>

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
<br>
<div style="color: white;
            padding: 15px 50px 5px 50px;
            float: left;
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
                                           <!-- Authentication Links -->
                       <ul class="nav navbar-right top-nav">
                <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: left;
            font-size: 16px;"> 
                @if (Auth::guest())
                            
                            
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
            @endif

        <div class="container">
            <div class="row">
                <div class="col-md-15 col-md-offset-0">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
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
