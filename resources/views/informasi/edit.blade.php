    @extends('layouts.applay')

@section('content')

 
<form action="{{ route('informasi.update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
            <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                     <div class="card-header bg-info"> EDIT INFORMASI</div>     
                    <div class="card-body">                    
                      
                       <div class="form-group{{ $errors->has('isiInformasi') ? ' has-error' : '' }}">
                            <label for="isiInformasi" class="col-md-6 control-label" >INFORMASI</label>
                            <div class="col-md-6">
                                <textarea class="ckeditor" id="ckeditor" name="isiInformasi" > {{ $data->isiInformasi }}</textarea>
                                @if ($errors->has('isiInformasi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isiInformasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>        
                        
                        <div class="form-group{{ $errors->has('pengunguman') ? ' has-error' : '' }}">
                            <label for="pengunguman" class="col-md-4 control-label">PENGUNGUMAN</label>
                            <div class="col-md-6">
                                <textarea class="ckeditor" id="ckeditor" name="pengunguman">{{ $data->pengunguman }}</textarea>
                                @if ($errors->has('pengunguman'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pengunguman') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>      
                             
                       <div class="form-group{{ $errors->has('peringatan') ? ' has-error' : '' }}">
                            <label for="peringatan" class="col-md-4 control-label">PERINGATAN</label>
                            <div class="col-md-6">
                                <textarea class="ckeditor" id="ckeditor" name="peringatan">{{ $data->peringatan }}</textarea>
                                @if ($errors->has('peringatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('peringatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>      

                        <div class="form-group{{ $errors->has('periode') ? ' has-error' : '' }}">
                            <label for="periode" class="col-md-4 control-label">PERIODE</label>
                            <div class="col-md-6">
                                <textarea class="ckeditor" id="ckeditor" name="periode">{{ $data->periode }}</textarea>
                                @if ($errors->has('periode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('periode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>      
                        
                    </div>
                    <div class="card-header bg-light">                        
                        <button type="submit" class="btn btn-primary" id="submit"> Submit </button>
                        <button type="reset" class="btn btn-danger"> Reset </button>
                        <a href="/informasi" class="btn btn-light pull-right">Back</a>
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
    CKEDITOR.replace('isiInformasi','pengunguman','peringatan');
</script>