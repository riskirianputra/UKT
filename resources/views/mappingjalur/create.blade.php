
@extends('layouts.applay')

@section('content')

<form method="POST" action="{{ route('mappingjalur.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                    <div class="card-header bg-info">TAMBAH MAPPING JALUR</div>
                  <div class="card">
                    <div class="card-body">        

                        <div class="form-row">      
                            <label for="idJalur" class="col-md-2 col-form-label">JALUR MASUK</label>                     
                                <div class="form-group col-md-6">                                
                                     <select class="form-control" name="idJalur" required="">
                                    <option value=""></option>
                                    @foreach($jalur_masuk as $jalur)
                                        <option value="{{$jalur->idJalur}}">{{$jalur->namaJalur}}</option>
                                    @endforeach
                                </select>
                                </div>
                        </div>     

             
                        <div class="form-row">                 
                            <label for="level" class="col-md-2 col-form-label">level</label>                     
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                          
                                    <input id="level" type="text" class="form-control" name="level" >
                                    @if ($errors->has('level'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('level') }}</strong>
                                        </span>
                                    @endif                           
                                </div>
                        </div>

                        <div class="form-row">                 
                            <label for="jalur" class="col-md-2 col-form-label">jalur</label>                     
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                          
                                    <input id="jalur" type="text" class="form-control" name="jalur" >
                                    @if ($errors->has('jalur'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jalur') }}</strong>
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
                       <a href="/mappingjalur" class="btn btn-light pull-right">Back</a>
                  </div>
                  </div>
                 
                </div>
              </div>
            </div>

</div>
</form>

  

@endsection