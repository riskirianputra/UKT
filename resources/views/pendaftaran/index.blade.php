@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.applay')
@section('content')
 <div class="col-lg-12 col-lg-offset-1">
<div class=" font-weight-bold">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
    </ol>
</div>
@role('admin') 

  <!-- <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header bg-info"> PENDAFTARAN </div>     
          <div class="card-body"  >         
            <a href="{{ route('pendaftaran.create') }}" class="btn btn-danger"> +Tambah </a>            
              <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">IMPORT EXCEL</button>    
              <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <form method="post" action="/pendaftaran/import_excel" enctype="multipart/form-data">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                      </div>
                      <div class="modal-body">
                        {{ csrf_field() }}
                        <label>Pilih file excel</label>
                        <div class="form-group">
                          <input type="file" name="file" required="required">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>                                                   
          </div>
      </div>
    </div>     
  </div>
 -->


    <h3>          
            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <form method="post" action="/pendaftaran/import_excel" enctype="multipart/form-data">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                      </div>
                        <div class="modal-body">

                           <div class="form-row">

                              <div class="form-group col-md-12">                                                      
                                <select class="btn btn-info" name="jalur" required="">                            
                                  @foreach($jalur_masuk as $jalur)
                                    <option value="{{$jalur->idJalur}}">{{$jalur->namaJalur}}</option>
                                  @endforeach                                                         
                                </select>                                 
                              </div>                                                       
                                                                                                             
                              <div class="form-group col-md-12 {{ $errors->has('file') ? ' has-error' : '' }}">  
                          {{ csrf_field() }}
                          <label>Pilih file excel</label>
                          <div class="form-group">
                            <input type="file" name="file" required="required">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                  </div>
                </form>
              </div>
            </div>          </h3> 
   
 <hr>
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                 
                <div class="card-header bg-info">
                  <div class="btn-group dropright ">
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TEMPLATE</button>
                      <div class="dropdown-menu">
                        <a href="/downloadTemplateSnmptn"  class="dropdown-item"><i class="fa fa-download">SNMPTN</i></a></option>                                              
                        <a href="/downloadTemplateSbmptn"  class="dropdown-item"><i class="fa fa-download">SBMPTN</i></a></option>                                 
                      </div> 
                  </div> 
                  <i class="btn btn-light" data-target="#importExcel"  data-toggle="modal">Upload</i>  
                  <a href="{{ route('pendaftaran.create') }}" class="btn btn-light pull-right"> + Add</a>                     
                </div>     

                <div class="card-body">                 
                  <div class="table-responsive">
                    <table class="table table-secondary table-striped" id="table">
                      <thead>
                        <tr align="center">                             
                          <th><b>JALUR</b></th>
                          <th><b>NOMOR PENDAFTARAN</b></th>
                          <th><b>NAMA</b></th>
                          <th><b>ANGKATAN</b></th>                                                            
                          <th><b>NAMA PRODI</th>                                                                                             
                          <th><b>AKSI</b></th>
                        </tr>        
                      <tbody>

                      @foreach($datas as $data)
                        <tr align="center">                                            
                          <td class="py-1">{{ $data->jalur_masuk->namaJalur}}</td>
                          <td>{{ $data->noPendaftaran }}</td>
                          <td>{{ $data->namaPeserta}}</td>
                          <td>{{ $data->angkatan}}</a></td>                                                                    
                          <td>{{ $data->namaProdi}}</td>                                                                               
                          <td>
                              <div class="btn-group dropright ">
                                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-cogs" aria-hidden="true"></i> <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                <div class="dropdown-menu">
                                  <a href="{{route('pendaftaran.show', $data->id)}}" class="dropdown-item ">Detail</a>                                                
                                  <a href="{{route('pendaftaran.edit', $data->id)}}"  class="dropdown-item">Edit</a>
                                  @role('admin')
                                  <form action="{{ route('pendaftaran.destroy', $data->id) }}" class="pull-left"  method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete  </button>                           
                                  </form> 
                                  @endrole 
                                </div>
                              </div>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endrole

@role('Mahasiswa') 
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                         
                        <div class="form-row">                                                                                    
                            <div class="form-group col-md-6">
                                <label for="pendaftaran_id" class="col-md-6 control-label">ID PENDAFTARAN</label>                                                             
                                    @foreach($pendaftaran as $daftar)
                                        <input id="pendaftaran_id" type="text" class="form-control" name="pendaftaran_id" value="{{$daftar->id}}" readonly="" >
                                    @endforeach                               
                            </div>
                       
                            <div class="form-group col-md-6">
                                <label for="idJalur" class="col-md-6 control-label">ID Jalur</label>
                                     @foreach($pendaftaran as $daftar)                                                      
                                        <input id="idJalur" type="text" class="form-control" name="idJalur" value="{{ $daftar->idJalur }}" readonly="">
                                    @endforeach     
                            </div>                           
                        </div> 

                        <br>
                        <h4><b>BIODATA DIRI</b></h4>
                        <br>

                        <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('nama') ? ' has-error' : '' }}">
                               <label for="nama" class="col-md-4 control-label">NAMA</label>
                               @foreach($pendaftaran as $daftar)
                                    <input id="nama" type="text" class="form-control" name="nama" value="{{ $daftar->namaPeserta }}" readonly="" >                                   
                               @endforeach                                
                            </div>

                            <div class="form-group col-md-4">
                                <label for="npm" class="col-md-4 control-label">NPM</label>                                  
                                   @foreach($pendaftaran as $daftar)
                                     <input id="npm" type="text" class="form-control" name="npm" value="{{ $daftar->npm }}" readonly="" >
                                    @endforeach                            
                            </div>   

                             <div class="form-group col-md-4 {{ $errors->has('nisn') ? ' has-error' : '' }}">
                               <label for="nisn" class="col-md-4 control-label">NISN</label>
                               @foreach($pendaftaran as $daftar)
                                     <input id="nisn" type="text" class="form-control" name="nisn" value="{{ $daftar->nisn }}" readonly="" >
                                    @endforeach 
                            </div>                     
                        </div>                  

                         <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('angkatan') ? ' has-error' : '' }}">
                               <label for="angkatan" class="col-md-4 control-label">ANGKATAN</label>
                               @foreach($pendaftaran as $daftar)
                                    <input id="angkatan" type="text" class="form-control" name="angkatan" value="{{ $daftar->angkatan }}" readonly="" >                                   
                               @endforeach                                
                            </div>

                            <div class="form-group col-md-4">
                                <label for="npm" class="col-md-4 control-label">NAMA PRODI</label>                                  
                                   @foreach($pendaftaran as $daftar)
                                     <input id="namaProdi" type="text" class="form-control" name="namaProdi" value="{{ $daftar->namaProdi }}" readonly="" >
                                    @endforeach                            
                            </div>   

                             <div class="form-group col-md-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                               <label for="email" class="col-md-4 control-label">EMAIL</label>
                               @foreach($pendaftaran as $daftar)
                                     <input id="email" type="text" class="form-control" name="email" value="{{ $daftar->email }}" readonly="" >
                                    @endforeach 
                            </div>                     
                        </div>                    
                       
                        <div class="form-row">                           
                            <div class="form-group col-md-4">
                                <label for="jurusan" class="col-md-4 control-label">JURUSAN</label>
                                    @foreach($pendaftaran as $daftar)
                                     <input id="jurusan" type="text" class="form-control" name="jurusan" value="{{ $daftar->jurusan }}" readonly="" >
                                    @endforeach 
                            </div>

                            <div class="form-group col-md-4">   
                                <label for="alamat" class="col-md-4 control-label">ALAMAT</label>
                                @foreach($pendaftaran as $daftar)
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $daftar->alamat }}" readonly="">
                                @endforeach                                
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('agama') ? ' has-error' : '' }}">
                               <label for="agama" class="col-md-4 control-label">AGAMA</label>
                                @foreach($pendaftaran as $daftar)
                                    <input id="agama" type="text" class="form-control" name="agama" value="{{ $daftar->agama }}" readonly="" >                                     
                                @endforeach
                            </div>
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-4">
                                <label for="telepon" class="col-md-4 control-label">NO TELEPON / HP</label>
                                @foreach($pendaftaran as $daftar)
                                    <input id="telepon" type="text" class="form-control" name="telepon" value="{{ $daftar->telepon }}" readonly="">                              
                                @endforeach
                            </div>

                            <div class="form-group col-md-4">
                                <label for="level" class="col-md-4 control-label">BIDIK MISI</label>
                                @foreach($pendaftaran as $daftar)
                                    <input id="bidikMisi" type="text" class="form-control" name="bidikMisi" value="{{ $daftar->bidikMisi }}" readonly="">                              
                                @endforeach
                            </div>

                             <div class="form-group col-md-4 {{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
                               <label for="tgl_lahir" class="col-md-4 control-label">TANGGAL LAHIR</label>
                                @foreach($pendaftaran as $daftar)
                                     <input id="tanggalLahir" type="text" class="form-control" name="tanggalLahir" value="{{ $daftar->tanggalLahir }}" readonly="" >
                                @endforeach     
                            </div>
                        </div>


                        <div class="form-row">                           
                            <div class="form-group col-md-4">
                                <label for="tempatLahir" class="col-md-4 control-label">TEMPAT LAHIR</label>
                                   @foreach($pendaftaran as $daftar)
                                   <input id="tempatLahir" type="text" class="form-control" name="tempatLahir" value="{{ $daftar->tempatLahir }}"  readonly="">
                                @endforeach  
                            </div>

                            <div class="form-group col-md-4">
                                <label for="level" class="col-md-4 control-label">JENIS KELAMIN</label>
                                    @foreach($pendaftaran as $daftar)
                                        <input id="jk" type="text" class="form-control" name="jk" value="{{ $daftar->jeniskelamin }}" readonly="">                              
                                    @endforeach
                            </div>

                            <div class="form-group col-md-4">
                                <label for="level" class="col-md-4 control-label">NAMA SEKOLAH</label>
                                    @foreach($pendaftaran as $daftar)
                                        <input id="namaSekolah" type="text" class="form-control" name="namaSekolah" value="{{ $daftar->namaSekolah}}" readonly="">                              
                                    @endforeach
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('namaAyah') ? ' has-error' : '' }}">
                               <label for="namaAyah" class="col-md-4 control-label">NAMA AYAH</label>
                                @foreach($pendaftaran as $daftar)
                                     <input id="namaAyah" type="text" class="form-control" name="namaAyah" value="{{$daftar->namaAyah }}" readonly="" >                                    
                                @endforeach
                            </div>

                            <div class="form-group col-md-4">
                                <label for="pekerjaanAyah" class="col-md-4 control-label">PEKERJAAN AYAH</label>
                                  @foreach($pendaftaran as $daftar)
                                     <input id="pekerjaanAyah" type="text" class="form-control" name="pekerjaanAyah" value="{{$daftar->pekerjaanAyah }}" readonly="" >                                    
                                @endforeach
                            </div>

                            <div class="form-group col-md-4">
                                <label for="penghasilanAyah" class="col-md-4 control-label">PENGHASILAN AYAH</label>
                                   @foreach($pendaftaran as $daftar)
                                     <input id="penghasilanAyah" type="text" class="form-control" name="penghasilanAyah" value="{{$daftar->penghasilanAyah }}" readonly="" >                                    
                                @endforeach
                            </div>
                        </div>       


                        <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('namaIbu') ? ' has-error' : '' }}">
                               <label for="namaIbu" class="col-md-4 control-label">NAMA IBU</label>
                                @foreach($pendaftaran as $daftar)
                                     <input id="namaIbu" type="text" class="form-control" name="namaIbu" value="{{$daftar->namaIbu }}" readonly="" >                                    
                                @endforeach
                            </div>

                            <div class="form-group col-md-4">
                                <label for="pekerjaanIbu" class="col-md-4 control-label">PEKERJAAN IBU</label>
                                   @foreach($pendaftaran as $daftar)
                                     <input id="pekerjaanIbu" type="text" class="form-control" name="pekerjaanIbu" value="{{$daftar->pekerjaanIbu }}" readonly="" >                                    
                                @endforeach
                            </div>

                            <div class="form-group col-md-4">
                                <label for="penghasilanIbu" class="col-md-4 control-label">PENGHASILAN IBU</label>
                                @foreach($pendaftaran as $daftar)
                                     <input id="penghasilanIbu" type="text" class="form-control" name="penghasilanIbu" value="{{$daftar->penghasilanIbu }}" readonly="" >                                    
                                @endforeach
                            </div>
                        </div>                                                   
                                                
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
@endrole
@endsection