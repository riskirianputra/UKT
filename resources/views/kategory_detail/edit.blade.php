
@extends('layouts.applay')

@section('content')

<form action="{{ route('kategory_detail.update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header bg-info">TAMBAH KATEGORY DETAIL BOBOT</div>
                      <div class="card-body">
                                                                             

                        <div class="form-group{{ $errors->has('idKategory') ? ' has-error' : '' }}">
                            <label for="idKategory" class="col-md-4 control-label">KATEGORY</label>
                            <div class="col-md-12">
                                <select class="form-control" name="idKategory" required="">
                                <option value=""></option>
                                @foreach($kategory as $kat)
                                    <option value="{{$kat->id}}">{{$kat->namaKategory}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('isiKategory') ? ' has-error' : '' }}">
                            <label for="isiKategory" class="col-md-4 control-label">ISI KATEGORY</label>
                            <div class="col-md-12">
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $data->isiKategory }}" required>
                                @if ($errors->has('isiKategory'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isiKategory') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    

                         <div class="form-group{{ $errors->has('poin') ? ' has-error' : '' }}">
                            <label for="poin" class="col-md-4 control-label">POIN</label>
                            <div class="col-md-12">
                                <input id="poin" type="text" class="form-control" name="poin" value="{{ $data->poin }}" required>
                                @if ($errors->has('poin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('poin') }}</strong>
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
                       <a href="/kategory_detail" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>

  

@endsection