@extends('layouts.app')
@section('lemburp')
    active
@endsection
@section('content')
<div class="col-md-9">
<div class="panel panel-warning">
<div align="center">
<h1>Edit Lembur Pegawai</h1></div>
    <table border="1" class="table table-success table-border table-hover">
                    {!! Form::model($lembur,['method'=>'PATCH','route'=>['lemburp.update',$lembur->id]])!!}
						{!! Form::hidden('id',null,['class'=>'form-control']) !!}
                        <div class="form-group{{ $errors->has('kode_lembur_id') ? ' has-error' : '' }}">
                            <label for="kode_lembur_id" class="col-md-4 control-label">Kode Lembur Pegawai</label>

                            <div class="col-md-6">
                                {!! Form::text('kode_lembur_id',null,['class'=>'form-control']) !!}
                                @if ($errors->has('kode_lembur_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lembur_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">nip</label>

                            <div class="col-md-6">
                                <select name="nip" class="form-control">
                                    @foreach($pegawai as $data)
                                    <option value="{{$data->id}}">{{$data->nip}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group{{ $errors->has('Jumlah_jam') ? ' has-error' : '' }}">
                            <label for="Jumlah_jam" class="col-md-4 control-label">Jumlah_jam </label>

                            <div class="col-md-6">
                                <input id="Jumlah_jam" type="text" class="form-control" name="Jumlah_jam" value="{{ old('Jumlah_jam') }}"  autofocus>

                                @if ($errors->has('Jumlah_jam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Jumlah_jam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary button button3">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection