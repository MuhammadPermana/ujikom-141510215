@extends('layouts.app')
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DAFTAR JABATAN</h1>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th><center>No</center></th>
				<th><center>Kode Jabatan</center></th>
				<th><center>Nama Jabatan</center></th>
				<th><center>Besar Uang</center></th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($jabatan as $data)
			<tr>
				<td><center>{{$no++}}</center></td>
				<td><center>{{$data->kode_j}}</center></td>
				<td><center>{{$data->nama_j}}</center></td>
				<td><center>Rp. {{$data->besar_uang}}</center></td>
				<td><center>
					<a href="{{route('jabatan.edit',$data->id)}}" class='btn btn-warning'><span class="glyphicon glyphicon-pencil"></a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$data->id]]) !!}
					<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
					{!! Form::close() !!}
				</td>
				</center>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('jabatan/create')}}" class="button button3">Tambah
	</a>
	</div>
</div>
@endsection