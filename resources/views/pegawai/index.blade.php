@extends('layouts.app')
@section('pegawai')
    active
@endsection
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DATA PEGAWAI</h1></div>
	<table border="1" class="table table-success table-border table-hover">
									<thead >
										<tr>

											<th><center>No</center></th>
											<th><center>NIP</center></th>
											<th><center>Nama Golongan</center></th>
											<th><center>Nama Jabatan</center></th>
											<th colspan="2"><center>Action</center></th>					
										</tr>
									</thead>
									@php $no=1; @endphp
									<tbody>
										@foreach($pegawai as $data)
										<tr>
											<td><center>{{$no++}}</center></td>
											<td><center>{{$data->nip}}</center></td>
											<td><center>{{$data->golongan->nama_g}}</center></td>
											<td><center>{{$data->jabatan->nama_j}}</center></td>

										
											<td>
												<center><a href="{{route('pegawai.edit',$data->id)}}" class='btn btn-warning'><span class="glyphicon glyphicon-pencil"></span></a>
												</center>
											</td>
											<td>
											<center>
												{!! Form::open(['method'=>'DELETE','route'=>['pegawai.destroy',$data->id]]) !!}
												<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
												{!! Form::close() !!}
												</center>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
			                </div>
			            </div>
			        </div>
			        
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DATA USER</h1></div>
	<table border="1" class="table table-success table-border table-hover">
									<thead >
										<tr>
											<th><center>Name</center></th>
											<th><center>Type User</center></th>
											<th><center>Email</center></th>
											<th><center>Photo</center></th>
										</tr>
									</thead>
									@php $no=1; @endphp
									<tbody>
										@foreach($pegawai as $data)
										<tr>
											<td><center>{{$data->user->name}}</center>
											<td><center>{{$data->user->type_user}}</center>
											<td><center>{{$data->user->email}}</center>
											<td>
											

<div class="dropdown">
  <img src="assets/image/{{$data->photo}}" alt="Trolltunga Norway" width="100" height="50">
  <div class="dropdown-content">
    <img src="assets/image/{{$data->photo}}" alt="Trolltunga Norway" width="300" height="200">
    <div class="desc">Beautiful Trolltunga, Norway</div>
  </div>
</div>	
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<div align="right">
								<a  href="{{url('pegawai/create')}}" class="button button3">Tambah
	</a>
	</div>
			                </div>
			            </div>
			        </div>	

@endsection