@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        

<center><video width="500" weight="900" controls>
  <source src="{{url('assets/video.mp4')}}" type="video/mp4">
  Your browser does not support HTML5 video.
</video>   

<p>
Video courtesy of 
<a href="https://www.bigbuckbunny.org/" target="_blank">Web Application</a>.
</p>
</center>
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <div class="panel-primary">

                    <center><h1>Selamat Datang Di APeKa Internasional</h1></center>
                    </div>
                </div>
            </div>
</div>
        </div>
    </div>
</div>
@endsection
