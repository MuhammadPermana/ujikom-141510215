@extends('layouts.app')
@section('lemburp')
    active
@endsection
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DAFTAR LEMBUR PEGAWAI</h1></div>
	<table border="1" class="table table-success table-border table-hover">
		<thead>
			<tr>
				<th><center>Lembur Ke-</center></th>
				<th><center>Nama Pegawai</center></th>
				<th><center>Kode Kategori Lembur</center></th>
				<th><center>Jumlah Jam</center></th>
				<th colspan="2"><center>Action</center></center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($lembur as $data)
			<tr>
				<td><center>{{$no++}}</center></td>
				<td><center>{{$data->pegawai->user->name}}</center></td>
				<td><center>{{$data->kategori->kode_l}}</center></td>
				<td><center>{{$data->Jumlah_jam}}</center></td>
				<td>
				<center>
					<a href="{{route('lemburp.edit',$data->id)}}" class='btn btn-warning'><span class="glyphicon glyphicon-pencil"></span></a>
				</center></td>
				<td>
				<center>
					{!! Form::open(['method'=>'DELETE','route'=>['lemburp.destroy',$data->id]]) !!}
<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>					{!! Form::close() !!}
				</center></td>
			</tr>
			@endforeach
		</tbody>
	</table>
<a  href="{{url('lemburp/create')}}" class="button button3">Tambah</button>
 </a>
@endsection