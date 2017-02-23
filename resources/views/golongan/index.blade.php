@extends('layouts.app')
@section('golongan')
	active
@endsection
@section('content')

<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DAFTAR GOLONGAN</h1></div>
	<table border="1" class="table table-success table-border table-hover">
		<thead>
			<tr class="btn-primary">
				<th>No</th>
				<th>Kode Golongan</th>
				<th>Nama Golongan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($golongan as $data)
			<tr class="btn-danger">
				<td>{{$no++}}</td>
				<td>{{$data->kode_g}}</td>
				<td>{{$data->nama_g}}</td>
				<td>Rp.{{$data->besar_uang}}</td>
				<td>
					<a href="{{route('golongan.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-warning']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('golongan/create')}}" class="button button3">Tambah</button>
 </a>
	</div>
	</div>
</div>
</div>
	
@endsection