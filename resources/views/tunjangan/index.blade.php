@extends('layouts.app')
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DAFTAR KATEGORI TUNJANGAN</h1></div>
	<table border="1" class="table table-success table-border table-hover">
		<thead>
			<tr>
				<th><center>No</center></th>
				<th><center>Kode Tunjangan</center></th>
				<th><center>Nama Golongan</center></th>
				<th><center>Nama Jabatan</center></th>
				<th><center>Besar Uang</center></th>
				<th><center>Status</center></th>
				<th><center>Jumlah Anak</center></th>
				<th colspan="2"><center>Action</center></center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($tunjangan as $data)
			<tr>
				<td><center>{{$no++}}</center></td>
				<td><center>{{$data->kode_t}}</center></td>
				<td><center>{{$data->golongan->nama_g}}</center></td>
				<td><center>{{$data->jabatan->nama_j}}</center></td>
				<td><center>Rp. {{$data->besar_uang}}</center></td>
				<td><center>{{$data->status}}</center></td>
				<td><center>{{$data->jumlah_anak}}</center></td>
				<td>
				<center>
					<a href="{{route('tunjangan.edit',$data->id)}}" class='btn btn-warning'><span class="glyphicon glyphicon-pencil"></span></a>
				</center></td>
				<td>
				<center>
					{!! Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$data->id]]) !!}
<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>					
					{!! Form::close() !!}
				</center></td>
			</tr>
			@endforeach
		</tbody>
	</table>
<a  href="{{url('tunjangan/create')}}" class="button button3">Tambah</button>
 </a>
@endsection