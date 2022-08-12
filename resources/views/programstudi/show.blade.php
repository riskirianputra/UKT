
@extends('layouts.applay')

@section('content')
<div class="col-lg-12 col-lg-offset-1">
    <div class=" font-weight-bold">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('jenjang.index') }}">Jenjang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </div>
<div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">                     
                         <div class="form-group{{ $errors->has('idProdi') ? ' has-error' : '' }}">
                            <label for="idProdi" class="col-md-4 control-label">ID PRODI </label>
                            <div class="col-md-12">
                                <input id="idProdi" type="text" class="form-control" name="idProdi" value="{{ $data->idProdi }}" readonly="">
                                @if ($errors->has('idProdi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idProdi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    

                        <div class="form-group{{ $errors->has('idFakultas') ? ' has-error' : '' }}">
                            <label for="idFakultas" class="col-md-4 control-label">ID FAKULTAS</label>
                            <div class="col-md-12">
                                <input id="idFakultas" type="text" class="form-control" name="idFakultas" value="{{ $data->idFakultas }}" readonly="">
                                @if ($errors->has('idFakultas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idFakultas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    

                        <div class="form-group{{ $errors->has('namaPendekFak') ? ' has-error' : '' }}">
                            <label for="namaPendekFak" class="col-md-4 control-label">NAMA PENDEK FAKULTAS</label>
                            <div class="col-md-12">
                                <input id="namaPendekFak" type="text" class="form-control" name="namaPendekFak" value="{{ $data->namaPendekFak }}" readonly="">
                                @if ($errors->has('namaPendekFak'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaPendekFak') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                                                                                        
                        <div class="form-group{{ $errors->has('idProdiSia') ? ' has-error' : '' }}">
                            <label for="idProdiSia" class="col-md-4 control-label">ID PRODI SIA</label>
                            <div class="col-md-12">
                                <input id="idProdiSia" type="text" class="form-control" name="idProdiSia" value="{{ $data->idProdiSia }}" readonly="">
                                @if ($errors->has('idProdiSia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idProdiSia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                                               

                        <div class="form-group{{ $errors->has('kodeProdiUniv') ? ' has-error' : '' }}">
                            <label for="kodeProdiUniv" class="col-md-4 control-label">KODE PRODI UNIV</label>
                            <div class="col-md-12">
                                <input id="kodeProdiUniv" type="text" class="form-control" name="kodeProdiUniv" value="{{ $data->kodeProdiUniv }}" readonly="">
                                @if ($errors->has('kodeProdiUniv'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kodeProdiUniv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('kodeProdiDikti') ? ' has-error' : '' }}">
                            <label for="kodeProdiDikti" class="col-md-4 control-label">KODE PRODI DIKTI</label>
                            <div class="col-md-12">
                                <input id="kodeProdiDikti" type="text" class="form-control" name="kodeProdiDikti" value="{{ $data->kodeProdiDikti }}" readonly="">
                                @if ($errors->has('kodeProdiDikti'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kodeProdiDikti') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                         <div class="form-group{{ $errors->has('namaProgramStudi') ? ' has-error' : '' }}">
                            <label for="namaProgramStudi" class="col-md-4 control-label">NAMA PROGRAM STUDI</label>
                            <div class="col-md-12">
                                <input id="namaProgramStudi" type="text" class="form-control" name="namaProgramStudi" value="{{ $data->namaProgramStudi }}" readonly="">
                                @if ($errors->has('namaProgramStudi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaProgramStudi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                            

                        <div class="form-group{{ $errors->has('idJenjang') ? ' has-error' : '' }}">
                            <label for="idJenjang" class="col-md-4 control-label">ID JENJANG</label>
                            <div class="col-md-12">
                                <input id="idJenjang" type="text" class="form-control" name="idJenjang" value="{{ $data->idJenjang }}" readonly="">
                                @if ($errors->has('idJenjang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idJenjang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                           
                        <div class="col-12">
                            <button type="submit" class="btn btn-info" id="submit">
                                        Submit
                            </button>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection