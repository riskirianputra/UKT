@extends('layouts.applay')

@section('content')
 <div class=" font-weight-bold">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                             <li class="breadcrumb-item"><a href="{{ route('periode.index') }}">Periode</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </div>
<form action="{{ route('periode.store') }}" method="post">
    {{ csrf_field() }}
<div class="row">
           
                <div class="col-12">
                  <div class="card">
                  
                        <div class="card-body">                                            
                        <div class="form-group{{ $errors->has('namaPeriode') ? ' has-error' : '' }}">
                            <label for="namaPeriode" class="col-md-4 control-label">NAMA PERIODE</label>
                            <div class="col-md-12">
                                <input id="namaPeriode" type="text" class="form-control" name="namaPeriode" value="{{ old('namaPeriode') }}" required>
                                @if ($errors->has('namaPeriode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaPeriode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('tglBuka') ? ' has-error' : '' }}">
                            <label for="tglBuka" class="col-md-4 control-label">Tanggal Pembukaan</label>
                            <div class="col-md-12">
                                <input id="tglBuka" type="date" class="form-control" name="tglBuka" required>
                                @if ($errors->has('tglBuka'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tglBuka') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tglTutup') ? ' has-error' : '' }}">
                            <label for="tglTutup" class="col-md-4 control-label">Tanggal Ditutup</label>
                            <div class="col-md-12">
                                <input id="tglTutup" type="date" class="form-control" name="tglTutup" required>
                                @if ($errors->has('tglTutup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tglTutup') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('informasi') ? ' has-error' : '' }}">
                            <label for="informasi" class="col-md-4 control-label">INFORMASI</label>
                            <div class="col-md-12">
                                <textarea class="ckeditor" id="ckeditor" name="informasi"></textarea>
                                @if ($errors->has('informasi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('informasi') }}</strong>
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
</form>
@endsection

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('informasi');
</script>