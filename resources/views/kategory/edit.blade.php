
@extends('layouts.applay')

@section('content')

<form action="{{ route('kategory.update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header bg-info">EDIT KATEGORY BOBOT</div>
                    <div class="card-body">
                            
                        <div class="form-group{{ $errors->has('idPeriode') ? ' has-error' : '' }}">
                            <label for="idPeriode" class="col-md-4 control-label">PERIODE</label>
                            <div class="col-md-12">
                              <select class="form-control" name="idPeriode" required="">
                                <option value="">(Cari Periode)</option>
                                @foreach($periode as $priod)
                                    <option value="{{$priod->id}}">{{$priod->namaPeriode}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('isiKategory') ? ' has-error' : '' }}">
                            <label for="namaKategory" class="col-md-4 control-label">NAMA KATEGORY</label>
                            <div class="col-md-12">
                                <input id="namaKategory" type="text" class="form-control" name="namaKategory" value="{{ $data->namaKategory }}" required>
                                @if ($errors->has('namaKategory'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaKategory') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                                                                                              
                                                                                                                             
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                       <a href="/kategory" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>

  

@endsection