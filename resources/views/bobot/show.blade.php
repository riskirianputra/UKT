

@extends('layouts.applay')

@section('content')
      
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h2 align="center">HASIL PERHITUNGAN UKT</h2>
                  <br>
                    <div class="form-row">
                          <label for="bobot" class="col-md-4 control-label">BOBOT</label>
                            <div class="form-group col-md-4">                                                                                        
                                <input id="bobot" type="text" class="form-control" name="bobot" value="{{$bobot->bobot}}" readonly="">                                                                  
                            </div>
                    </div>                                                 
                            
                    <div class="form-row">
                        <label for="level" class="col-md-4 control-label">LEVEL UKT</label>
                          <div class="form-group col-md-4 {{ $errors->has('nama') ? ' has-error' : '' }}">  
                               <input id="level" type="text" class="form-control" name="level" value="LEVEL {{ $bobot->level }}" readonly="">                                                     
                          </div>
                    </div>   

                    <br>                         
                      <br/>
                      <a href="{{route('bobot.cetak_pdf')}}" class="btn btn-primary" target="_blank">CETAK</a>                      
                </div>  
            </div>
        </div>

        <div class="col-lg-2 grid-margin stretch-card">           
        </div>         
    </div>

@endsection