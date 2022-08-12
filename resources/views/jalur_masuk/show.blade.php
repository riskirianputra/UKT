@extends('layouts.applay')

@section('content')



<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header bg-info">JALUR MASUK</div>     
                    <div class="card-body">
                      <h4 class="card-title"></h4>
                      
                        <div class="form-group{{ $errors->has('kdJalur') ? ' has-error' : '' }}">
                            <label for="kdJalur" class="col-md-4 control-label">Kode Jalur</label>
                            <div class="col-md-6">
                                <input id="kdJalur" type="text" class="form-control" name="kdJalur" value="{{ $data->kdJalur }}" required readonly="">
                                @if ($errors->has('kdJalur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kdJalur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('namaJalur') ? ' has-error' : '' }}">
                            <label for="namaJalur" class="col-md-4 control-label">Nama Jalur</label>
                            <div class="col-md-6">
                                <input id="namaJalur" type="text" class="form-control" name="namaJalur" value="{{ $data->namaJalur }}" required readonly="">
                                @if ($errors->has('namaJalur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaJalur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                                                     
                            <a href="{{route('jalur_masuk.edit', $data->idJalur)}}"  class="dropdown-item">Edit</a>
                            <form action="{{ route('jalur_masuk.destroy', $data->idJalur) }}" class="pull-left"  method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete  </button>                           
                            </form>  
                        <a href="/jalur_masuk" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection