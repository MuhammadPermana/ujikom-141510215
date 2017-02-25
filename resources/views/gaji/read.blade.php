@extends('layouts.app')

@section('penggajian')
    active
@endsection
@section('content')
<style type="text/css">
    td,th{
        text-align: center ;
    }
    img{
        border-image-repeat: 3px ;
        border-style: circle ;
    }
</style>
                                
                        
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>CEK DATA PENGGAJIAN</h1></div>
    <table border="1" class="table table-success table-border table-hover">                        
                        <div class="col-md-12">
                        <center>
                            <p><img width="350px" height="300px" src="<?php echo url('assets/image/') ?>/<?php echo $datapenggajian->tunjangan_pegawai->pegawai->photo; ?>" class="img-circle" alt="Cinque Terre" ></p>

                        <h3>{{$datapenggajian->tunjangan_pegawai->pegawai->User->name}}</h3>
                        <h4>{{$datapenggajian->tunjangan_pegawai->pegawai->nip}}</h4>
                        <b>@if($datapenggajian->tanggal_pengambilan == ""&&$datapenggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @elseif($datapenggajian->tanggal_pengambilan == ""||$datapenggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @else
                            Gaji Sudah Diambil Pada <b><u>{{$datapenggajian->tanggal_pengambilan}}</b></u>
                        @endif</b>
                        <h5>Gaji Lembur Sebesar Rp.{{$datapenggajian->jumlah_uang_lembur}} <br>
                        <br>Gaji Pokok Sebesar Rp.{{$datapenggajian->gaji_pokok}} <br>
                        <br>Mendapat Tunjangan Sebesar Rp.{{$datapenggajian->tunjangan_pegawai->tunjangan->besar_uang}}</u><u> <br>
                        <br><u>Jadi Total Gaji Rp.{{$datapenggajian->gaji_total}}</u>



                        </h5>
                        
                                <a class="button button3" href="{{url('gaji')}}">Kembali</a>
                                <a class="button button3" href="{{url('gaji/create')}}">Tambah</a>
                        </center>
                        </div> 
                        
                    </table>
        
@endsection