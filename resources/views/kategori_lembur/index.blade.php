@extends('layouts.app')
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DAFTAR KATEGORI LEMBUR</h1></div>
	<table border="1" class="table table-success table-border table-hover">
		<thead>
			<tr>
				<th><center>No</th>
				<th><center>Kode Kategori Lembur</th>
				<th><center>Nama Golongan</th>
				<th><center>Nama Jabatan</th>
				<th><center>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		@php $no=1; @endphp
			@foreach($kategori as $data)
			<tr>
				<td><center>{{$no++}}</center></td>
				<td><center>{{$data->kode_l}}</center></td>
				<td><center>{{$data->golongan->nama_g}}</center></td>
				<td><center>{{$data->jabatan->nama_j}}</center></td>
				<td><center>Rp. {{$data->besar_uang}}</center></td>
				<td>
				<center>
					<a href="{{route('kategori.edit',$data->id)}}" class='btn btn-warning'><span class="glyphicon glyphicon-pencil"></span></a>
				</center>
				</td>
				<td>
				<center>
					{!! Form::open(['method'=>'DELETE','route'=>['kategori.destroy',$data->id]]) !!}
<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>					{!! Form::close() !!}
					</center>
				</td>
			</tr>
			@endforeach
		</tbody>
				</thead>

	</table>
<a  href="{{url('kategori/create')}}" class="button button3">Tambah</button>
 </a>
@endsection