@role('admin')
@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@endrole

@extends('layouts.applay')

@section('content')

<!--  @role('Mahasiswa')
<div class="row">

  <div class="col-xl-3 col-lg-3 col-md-3 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">               
          <a href="{{url('mahasiswa')}}" target="blank"> <i class="fa fa-id-card text-danger"> ISI DATA EKONOMI KELUARGA</i> </a>                                    
        </div>                  
      </div>                                                    
    </div>
  </div>                                                
                  
  <div class="col-xl-3 col-lg-3 col-md-3 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <a href="{{url('konfirmasi')}}" target="blank"> <i class="fa fa-check text-primary"> KONFIRMASI DATA </i> </a>                                  
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-lg-3 col-md-3 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <a href="{{url('cetak')}}" target="blank"> <i class="fa fa-print text-warning"> CETAK BUKTI </i> </a>                                  
        </div>
      </div>
    </div>
  </div>    

</div>
@endrole -->
 
  @role('Mahasiswa')           
<div class="row">  
    <div class="col-xl-12 col-lg-12 col-md-12 grid-margin stretch-card">    
      <div class="card-body">                  
        <div class="modal fade bd-example-modal-lg" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" class="col-lg-12">
            <form method="post" action="{{ route('upload.store') }}" enctype="multipart/form-data">
              <div class="modal-content" style="background: #fff;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">UPLOAD DATA</h5>
                </div>
                <div class="modal-body">
                {{ csrf_field() }}
                        <div class="form-row">                           
                            <div class="form-group col-md-12 {{ $errors->has('id_file') ? ' has-error' : '' }}">                            
                                 <select class="form-control" name="id_file">
                                <option value="">PILIH NAMA DOKUMEN</option>
                                @foreach($jenis_file as $jenis)
                                    <option value="{{$jenis->id}}">{{$jenis->nama_dokumen}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-row">
                             <div class="form-group col-md-12 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                         
                                <input id="tglUpload" type="hidden" class="form-control" name="tglUpload" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" placeholder="TANGGAL UPLOAD" readonly="">
                                @if ($errors->has('tglUpload'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tglUpload') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>     
                                                    
                        <div class="form-row">                                                                                             
                            <div class="form-group col-md-12 {{ $errors->has('file') ? ' has-error' : '' }}">                                                    
                                <input id="file" type="file" class="form-control" name="file" value="" placeholder="PILIH FILE">
                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>      
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12 {{ $errors->has('nama') ? ' has-error' : '' }}">  

                                <input id="keterangan" type="text" class="form-control" name="keterangan" value="" placeholder="KETERANGAN ( Tidak wajib di isi) ">
                                @if ($errors->has('keterangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keterangan') }}</strong>
                                    </span>
                                @endif
                            </div>                                      
                        </div> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-info">UPLOAD</button>
                </div>
              </div>
            </form>
          </div>
        </div>                                               
      </div>

    </div>
</div>
@endrole
                                    
        <div class="row" >
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-header bg-info">&nbsp;
                  @role('Mahasiswa')           
                      <button type="button" class="btn btn-light mr-5" data-toggle="modal" data-target="#importExcel"><i class="fa fa-upload"> UPLOAD</i>
                      </button>                                                
                    @endrole    </div>
              <div class="card-body">
                  
                      <div class="table-responsive">        
                   
                          <table class="table table-secondary table-striped" id="table">
                            <thead>
                              <tr align="center"> 
                                    @role('admin')   
                                <th><b> NOMOR PENDAFTARAN <b></th> 
                                    @endrole             
                                <th><b> NAMA DOKUMEN<b></th>
                                <th><b> FILE<b></th>
                                <th><b> TANGGAL UPLOAD<b></th>                                                            
                                <th><b> KETERANGAN</b></th>                                                                                             
                                <th><b> AKSI </b></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($datas as $data)
                              <tr align="center">                   
                                    @role('admin')  
                                <td>{{ $data->user->name}}</td>     
                                    @endrole                                                  
                                <td>{{ $data->jenis_file->nama_dokumen }}</td>                                  
                                <td><a href=""></a> {{ $data->file }}</td>                                                       
                                <td>{{ $data->tglUpload }}</td>
                                <td>{{ $data->keterangan }}</td>                          
                                <td>                       
                                      @role('Mahasiswa')                                                                    
                                            <form action="{{ route('upload.destroy', $data->id) }}" class="pull-left"  method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="fa fa-trash"><i class="fa fa-trash"></i>   </button>                           
                                            </form>                                                                                     
                                      </div>   
                                      @endrole
                                      @role('admin')
                                       <div class="btn-group dropright">
                                         <a href="{{route('upload.show', $data->id) }}"  class="btn btn-info"><i class="fa fa-download"></i></a>                                            
                                      </div>   
                                      @endrole                                            
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                      </div>               
                </div>
              </div>
            </div>
              
          </div>
@endsection