@extends('layouts.applay')

@section('content')

<form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">

                    <div class="card-body">
                            
                           

                        <div class="form-row">                           
                            <div class="form-group col-md-6 {{ $errors->has('id_file') ? ' has-error' : '' }}">
                                <label for="id_file" class="col-md-6 control-label">FILE</label>
                                 <select class="form-control" name="id_file" required="">
                                <option value="">(Cari Jenis File)</option>
                                @foreach($jenis_file as $jenis)
                                    <option value="{{$jenis->id}}">{{$jenis->nama_dokumen}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>     
                        
                            
                        <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('nama') ? ' has-error' : '' }}">
                                 <label for="tglUpload" class="col-md-4 control-label">TANGGAL UPLOAD</label>                           
                                <input id="tglUpload" type="text" class="form-control" name="tglUpload" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" required>
                                @if ($errors->has('tglUpload'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tglUpload') }}</strong>
                                    </span>
                                @endif
                            </div>
                                                                  
                            <div class="form-group col-md-4 {{ $errors->has('file') ? ' has-error' : '' }}">
                                 <label for="file" class="col-md-4 control-label">NAMA FILE</label>                           
                                <input id="file" type="file" class="form-control" name="file" value="" required>
                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>      

                            <div class="form-group col-md-4 {{ $errors->has('nama') ? ' has-error' : '' }}">
                                 <label for="keterangan" class="col-md-4 control-label">Keterangan</label>
                           
                                <input id="keterangan" type="text" class="form-control" name="keterangan" value="" required>
                                @if ($errors->has('keterangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keterangan') }}</strong>
                                    </span>
                                @endif
                            </div>      
                                
                        </div> 

                        <button type="submit" class="btn btn-primary" value="Upload" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                       <a href="/upload" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>

  

@endsection
                                             