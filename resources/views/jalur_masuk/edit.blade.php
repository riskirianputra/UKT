@extends('layouts.applay')

@section('content')

 
<form action="{{ route('jalur_masuk.update', $data->idJalur) }}" method="post">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header bg-info">EDIT JALUR MASUK</div>     
                    <div class="card-body">
                   
                        <div class="form-group{{ $errors->has('kdJalur') ? ' has-error' : '' }}">
                            <label for="kdJalur" class="col-md-4 control-label">KODE JALUR</label>
                            <div class="col-md-12">
                                <input id="kdJalur" type="text" class="form-control" name="kdJalur" value="{{ $data->kdJalur }}" required>
                                @if ($errors->has('kdJalur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kdJalur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('namaJalur') ? ' has-error' : '' }}">
                            <label for="namaJalur" class="col-md-4 control-label">NAMA JALUR</label>
                            <div class="col-md-12">
                                <input id="namaJalur" type="text" class="form-control" name="namaJalur" value="{{ $data->namaJalur }}" required>
                                @if ($errors->has('namaJalur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaJalur') }}</strong>
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

</div>
</form>

@endsection