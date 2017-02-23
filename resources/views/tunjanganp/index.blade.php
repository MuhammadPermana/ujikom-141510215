@extends('layouts.app')
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DAFTAR TUNJANGAN PEGAWAI</h1></div>
	<table border="1" class="table table-success table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Kategori Tunjangan</th>
				<th>Nama Pegawai</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($tunjanganp as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_tunjangan_id}}</td>
				<td>{{$data->pegawai->user->name}}</td>
				<td>{{$data->besaran_uang}}</td>

				<td>
					<a href="{{route('tunjanganp.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['tunjanganp.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
<a  href="{{url('tunjanganp/create')}}" class="button button3">Tambah</button>
 </a>
@endsection