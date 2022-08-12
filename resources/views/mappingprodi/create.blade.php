
@extends('layouts.applay')

@section('content')

<form method="POST" action="{{ route('mappingprodi.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                    <div class="card-header bg-info">TAMBAH MAPPING JALUR</div>
                  <div class="card">
                    <div class="card-body">                     
             
                        <div class="form-row">                 
                            <label for="kodeProdiSnmptn" class="col-md-2 col-form-label">kodeProdiSnmptn</label>                     
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                          
                                    <input id="kodeProdiSnmptn" type="text" class="form-control" name="kodeProdiSnmptn" >
                                    @if ($errors->has('kodeProdiSnmptn'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kodeProdiSnmptn') }}</strong>
                                        </span>
                                    @endif                           
                                </div>
                        </div>

                        <div class="form-row">                 
                            <label for="kodeProdiSbmptn" class="col-md-2 col-form-label">kodeProdiSbmptn</label>                     
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                          
                                    <input id="kodeProdiSbmptn" type="text" class="form-control" name="kodeProdiSbmptn" >
                                    @if ($errors->has('kodeProdiSbmptn'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kodeProdiSbmptn') }}</strong>
                                        </span>
                                    @endif                           
                                </div>
                        </div>

                           <div class="form-row">                 
                            <label for="namaProdi" class="col-md-2 col-form-label">namaProdi</label>                     
                                <div class="form-group col-md-6 {{ $errors->has('namaProdi') ? ' has-error' : '' }}">                                                          
                                    <input id="namaProdi" type="text" class="form-control" name="namaProdi" >
                                    @if ($errors->has('namaProdi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('namaProdi') }}</strong>
                                        </span>
                                    @endif                           
                                </div>
                        </div>

                           <div class="form-row">                 
                            <label for="idprodisireg" class="col-md-2 col-form-label">idprodisireg</label>                     
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                          
                                    <input id="idprodisireg" type="text" class="form-control" name="idprodisireg" >
                                    @if ($errors->has('idprodisireg'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('idprodisireg') }}</strong>
                                        </span>
                                    @endif                           
                                </div>
                        </div>


                        
                        <br>                                           
                         
                        
                    </div>
                     <div class="card-header bg-light">
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                       <a href="/mappingprodi" class="btn btn-light pull-right">Back</a>
                  </div>
                  </div>
                 
                </div>
              </div>
            </div>

</div>
</form>

  

@endsection