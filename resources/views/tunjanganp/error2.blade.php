@extends('layouts.app')
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>DAFTAR TUNJANGAN PEGAWAI</h1></div>
    <table border="1" class="table table-success table-border table-hover">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/tunjanganp') }}">
                        {{ csrf_field() }}

                      
                        <div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                            <label for="pegawai_id" class="col-md-4 control-label">Pegawai </label>

                            <div class="col-md-6">
                                <select name="pegawai_id" class="form-control">
                                    <option value="">pilih</option>
                                    @foreach($pegawai as $data)
                                    <option value="{{$data->id}}">{{$data->user->name}} &nbsp;&nbsp;&nbsp;&nbsp;{{$data->nip}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('pegawai_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pegawai_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 <center><label><font color="red"> Pegawai tidak memiliki kategori Tunjangan!! Harus membuat dahulu kategori Tunjangan buat pegawai!!</font></label></center><br>
                       
                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary form-control">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </tunjangan>
        </div>
    </div>
</div>

@endsection