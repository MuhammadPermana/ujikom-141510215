@extends('layouts.app-login')

@section('content')


  
<br>
<br>
<center><a href="pegawai" ><h2><u>BERANDA</u></h2></a></center>

<center><img src="{{url('image/Sang_Saka_Merah_Putih_by_pamanjee.jpg')}}" width="1000px" height="500px" alt="nama" />
</img>
<center><h1><b><u>Haiii....{{ Auth::user()->name }}</u></s></b></h1></center>
<p>
</p>
</center>
                <div class="panel-primary">
                    <center><h1><b>SELAMAT DATANG DI APLIKASI PENGGAJIAN <br><s>SMK ASSALAAM BANDUNG</s></b></h1></center>
                    </div>
                </div>
            </div>
</div>
        </div>
    </div>
</div>
@endsection
