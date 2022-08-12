@extends('layouts.applay')

@section('content')
<div class="col-lg-12 col-lg-offset-1">
    <div class="col-lg-12 col-lg-offset-1">
    <div class=" font-weight-bold">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('jenisbiaya.index') }}">Jenis Biaya</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
      </ol>
</div>
<form action="{{ route('jenisbiaya.store') }}" method="post">
    {{ csrf_field() }}
<div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">                     
                        <div class="form-group{{ $errors->has('jenisBiaya') ? ' has-error' : '' }}">
                            <label for="jenisBiaya" class="col-md-4 control-label">JENIS BIAYA</label>
                            <div class="col-md-12">
                                <input id="jenisBiaya" type="text" class="form-control" name="jenisBiaya" value="{{ old('jenisBiaya') }}" required>
                                @if ($errors->has('jenisBiaya'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenisBiaya') }}</strong>
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