


@extends('layouts.applay')

@section('content')
<div class='col-lg-12 col-lg-offset-12'>
    <div class=" font-weight-bold">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
             <li class="breadcrumb-item"><a href="{{ route('tarif.index') }}">Tarif</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </div>
<form action="{{ route('tarif.update', $data->idTarif) }}" method="post">
    {{ csrf_field() }}
     {{ method_field('put') }}
<div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Prodi</h4>
                        <div class="form-group{{ $errors->has('idPeriode') ? ' has-error' : '' }}">
                            <label for="idPeriode" class="col-md-4 control-label">idPeriode</label>
                            <div class="col-md-12">
                                <input id="idPeriode" type="text" class="form-control" name="idPeriode" value="{{ $data->idPeriode }}" required>
                                @if ($errors->has('idPeriode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idPeriode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('idProgramStudi') ? ' has-error' : '' }}">
                            <label for="idProgramStudi" class="col-md-4 control-label">idProgramStudi</label>
                            <div class="col-md-12">
                                <input id="idProgramStudi" type="text" class="form-control" name="idProgramStudi" value="{{ $data->idProgramStudi }}" required>
                                @if ($errors->has('idProgramStudi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idProgramStudi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('idJalur') ? ' has-error' : '' }}">
                            <label for="idJalur" class="col-md-4 control-label">idJalur</label>
                            <div class="col-md-12">
                                <input id="idJalur" type="text" class="form-control" name="idJalur" value="{{ $data->idJalur }}" required>
                                @if ($errors->has('idJalur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idJalur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('idJenisBiaya') ? ' has-error' : '' }}">
                            <label for="idJenisBiaya" class="col-md-4 control-label">idJenisBiaya</label>
                            <div class="col-md-12">
                                <input id="idJenisBiaya" type="text" class="form-control" name="idJenisBiaya" value="{{ $data->idJenisBiaya }}" required>
                                @if ($errors->has('idJenisBiaya'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idJenisBiaya') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                                                                     
                        <div class="form-group{{ $errors->has('angkatan') ? ' has-error' : '' }}">
                            <label for="angkatan" class="col-md-4 control-label">ANGKATAN</label>
                            <div class="col-md-12">
                               <select class="form-control" name="idJenisbiaya" required="">
                                    <option value="">{{ $data->angkatan }}</option>                                   
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jumlah') ? ' has-error' : '' }}">
                            <label for="jumlah" class="col-md-4 control-label">JUMLAH</label>
                            <div class="col-md-12">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ $data->jumlah }}" required>
                                @if ($errors->has('jumlah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('syarat') ? ' has-error' : '' }}">
                            <label for="syarat" class="col-md-4 control-label">SYARAT</label>
                            <div class="col-md-12">
                                <input id="syarat" type="text" class="form-control" name="syarat" value="{{ $data->syarat }}" required>
                                @if ($errors->has('syarat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('syarat') }}</strong>
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