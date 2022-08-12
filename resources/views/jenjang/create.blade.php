@extends('layouts.applay')

@section('content')

<div class="col-lg-12 col-lg-offset-1">
    <div class=" font-weight-bold">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('jenjang.index') }}">Jenjang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </div>
<form action="{{ route('jenjang.store') }}" method="post">
    {{ csrf_field() }}
        <div class="row">
                <div class="col-12">
                  <div class="card">  
                    <div class="card-body">
                                                                    
                        <div class="form-group{{ $errors->has('namaJenjang') ? ' has-error' : '' }}">
                            <label for="namaJenjang" class="col-md-4 control-label">NAMA JENJANG</label>
                            <div class="col-md-12">
                                <input id="namaJenjang" type="text" class="form-control" name="namaJenjang" value="{{ old('namaJenjang') }}" required>
                                @if ($errors->has('namaJenjang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaJenjang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                     
                        <div class="col-12">
                            <button type="submit" class="btn btn-info" >
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