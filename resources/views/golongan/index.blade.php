@extends('layouts.app')
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DAFTAR GOLONGAN</h1></div>
	<table border="1" class="table table-success table-border table-hover">
		<thead>
			<tr class="btn-primary">
				<th><center>No</center></th>
				<th><center>Kode Golongan</center></th>
				<th><center>Nama Golongan</center></th>
				<th><center>Besar Uang</center></th>
				<th colspan="3"><center>Action</center></center></th>
			</tr>
		</thead>
		@php 
		$no=1; 
		@endphp
		<tbody>
		
			@foreach($golongan as $data)
			<tr class="btn-danger">
			<tr>
				<td><center>{{$no++}}</center></td>
				<td><center>{{$data->kode_g}}</center></td>
				<td><center>{{$data->nama_g}}</center></td>
				<td><center>Rp. {{$data->besar_uang}}</center></td>
				<td><center>
					<a href="{{route('golongan.edit',$data->id)}}" class='btn btn-warning'><span class="glyphicon glyphicon-pencil"></span></a>
				</center></td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$data->id]]) !!}
					<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{url('golongan/create')}}" class="button button3">Tambah</button>
 </a>
	</div>
	</div>
</div>
</div>
	
@endsection