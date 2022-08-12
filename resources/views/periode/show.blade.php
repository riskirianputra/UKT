@extends('layouts.applay')

@section('content')


<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Periode</h4>
                      
                        <div class="form-group{{ $errors->has('namaPeriode') ? ' has-error' : '' }}">
                            <label for="namaPeriode" class="col-md-4 control-label">NAMA PERIODE</label>
                            <div class="col-md-6">
                                <input id="namaPeriode" type="text" class="form-control" name="namaPeriode" value="{{ old('namaPeriode') }}" readonly="">
                                @if ($errors->has('namaPeriode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaPeriode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('tglBuka') ? ' has-error' : '' }}">
                            <label for="tglBuka" class="col-md-4 control-label">Tanggal Pembukaan</label>
                            <div class="col-md-6">
                                <input id="tglBuka" type="text" class="form-control" name="tglBuka" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" readonly="">
                                @if ($errors->has('tglBuka'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tglBuka') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tglTutup') ? ' has-error' : '' }}">
                            <label for="tglTutup" class="col-md-4 control-label">Tanggal Ditutup</label>
                            <div class="col-md-6">
                                <input id="tglTutup" type="text" class="form-control" name="tglTutup" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" readonly="">
                                @if ($errors->has('tglTutup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tglTutup') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('informasi') ? ' has-error' : '' }}">
                            <label for="informasi" class="col-md-4 control-label">INFORMASI</label>
                            <div class="col-md-6">
                                <input id="informasi" type="text" maxlength="4" class="form-control" name="informasi" value="{{ old('informasi') }}" readonly="">
                                @if ($errors->has('informasi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('informasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                                <form action="{{ route('periode.destroy', $data->id) }}" class="pull-left"  method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete </button>                                
                                </form> 
                        <a href="/periode" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>

@endsection