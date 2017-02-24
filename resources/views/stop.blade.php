@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Haram Kembali.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'verdana', verdana;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Maaf Anda Tidak Bisa Mengakses Halaman Ini.</div>
                 
            </div>
            <center><img src="{{url('image/not.jpg')}}" width="1000px" height="500px" alt="nama" />
</img>
        </div>
    </body>
</html>
@endsection

