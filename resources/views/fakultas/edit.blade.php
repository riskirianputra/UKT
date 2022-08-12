@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>
@stop

@extends('layouts.applay')

@section('content')
<div class='col-lg-12 col-lg-offset-12'>
    <div class=" font-weight-bold">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
             <li class="breadcrumb-item"><a href="{{ route('fakultas.index') }}">Fakultas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </div>

<form action="{{ route('fakultas.update', $data->id) }}" method="post">
    {{ csrf_field() }}
      {{ method_field('put') }}
<div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">                      
                        <div class="form-group{{ $errors->has('namaFakultas') ? ' has-error' : '' }}">
                            <label for="namaFakultas" class="col-md-4 control-label">NAMA FAKULTAS</label>
                            <div class="col-md-12">
                                <input id="namaFakultas" type="text" class="form-control" name="namaFakultas" value="{{ $data->namaFakultas }}" required>
                                @if ($errors->has('namaFakultas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaFakultas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                        <div class="form-group{{ $errors->has('idFakultasSia') ? ' has-error' : '' }}">
                            <label for="idFakultasSia" class="col-md-4 control-label">ID FAKULTAS SIA</label>
                            <div class="col-md-12">
                                <input id="idFakultasSia" type="text" class="form-control" name="idFakultasSia" value="{{ $data->idFakultasSia}}" required>
                                @if ($errors->has('idFakultasSia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idFakultasSia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('dbFakultas') ? ' has-error' : '' }}">
                            <label for="dbFakultas" class="col-md-4 control-label"> DB FAKULTAS</label>
                            <div class="col-md-12">
                                <input id="dbFakultas" type="text" class="form-control" name="dbFakultas" value="{{ $data->dbFakultas }}" required>
                                @if ($errors->has('dbFakultas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dbFakultas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('urutanNim') ? ' has-error' : '' }}">
                            <label for="urutanNim" class="col-md-4 control-label">URUTAN NIM</label>
                            <div class="col-md-12">
                                <input id="urutanNim" type="number" maxlength="4" class="form-control" name="urutanNim" value="{{ $data->urutanNim }}" required>
                                @if ($errors->has('urutanNim'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('urutanNim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                        <div class="col-12">
                            <button type="submit" class="btn btn-info" id="submit">
                                       Edit
                            </button>
                        </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection