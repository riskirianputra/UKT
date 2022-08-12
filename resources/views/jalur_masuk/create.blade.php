@extends('layouts.applay')

@section('content')
<div class="col-lg-12 col-lg-offset-1">
    <div class="col-lg-12 col-lg-offset-1">
    <div class=" font-weight-bold">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('jalur_masuk.index') }}">Jalur Masuk</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
      </ol>
</div>
<form action="{{ route('jalur_masuk.store') }}" method="post">
    {{ csrf_field() }}
<div class="row">
            
                <div class="col-12">
                  <div class="card">
                
                    <div class="card-body">
                    
                      
                        <div class="form-group{{ $errors->has('kdJalur') ? ' has-error' : '' }}">
                            <label for="kdJalur" class="col-md-4 control-label">KODE JALUR</label>
                            <div class="col-md-12">
                                <input id="kdJalur" type="text" class="form-control" name="kdJalur" value="{{ old('kdJalur') }}" required>
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
                                <input id="namaJalur" type="text" class="form-control" name="namaJalur" value="{{ old('namaJalur') }}" required>
                                @if ($errors->has('namaJalur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaJalur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                     
                        <div class="col-12">
                            <button type="submit" class="btn btn-info" id="submit">
                                       Add
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