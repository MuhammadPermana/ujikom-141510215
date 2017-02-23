@extends('layouts.app')
@section('kategori')
    active
@endsection
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DAFTAR KATEGORI LEMBUR</h1></div>
	<table border="1" class="table table-success table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Kategori Lembur</th>
				<th>Nama Golongan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		@php $no=1; @endphp
			@foreach($kategori as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_l}}</td>
				<td>{{$data->golongan->nama_g}}</td>
				<td>{{$data->jabatan->nama_j}}</td>
				<td>Rp.{{$data->besar_uang}}</td>
				<td>
					<a href="{{route('kategori.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['kategori.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
				</thead>

	</table>
<a  href="{{url('kategori/create')}}" class="button button3">Tambah</button>
 </a>
@endsection