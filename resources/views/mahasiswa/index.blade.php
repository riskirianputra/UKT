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

@role('admin')
<div class="col-lg-12 col-lg-offset-1">
  <h3><i class="fa fa-graduation-cap"></i> MAHASISWA
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-info pull-right"> + Add </a>                         
      <hr> </h3>
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-header bg-info">&nbsp;</div>     
                <div class="card-body">                                   
                  <div class="table-responsive">
                    <table class="table table-secondary table-striped" id="table">
                      <thead>
                        <tr align="center">
                          <th><b> NOMOR PENDAFTARAN</b> </th>                         
                          <th><b> NAMA </b> </th>
                          <th> <b>JENIS KELAMIN </b> </th>
                          <th><b>PROGRAM STUDI</b></th>
                          <th> <b> AKSI </b></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">
                          <td>{{$data->user->name}}</td>          
                          <td>{{$data->nama}}</td>                                                                                                             
                          <td> {{$data->jk === "L" ? "Laki - Laki" : "Perempuan"}}</td>   
                          <td>{{$data->pendaftaran->namaProdi}}</td>                      
                          <td>
                              <div class="btn-group dropright">
                                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-cogs" aria-hidden="true"></i>
                                  </button>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                   <a href="{{route('mahasiswa.show', $data->id)}}" class="dropdown-item"> Detail </a>
                                  <a class="dropdown-item" href="{{route('mahasiswa.edit', $data->id)}}"> Edit </a>
                                  @role('admin')
                                  <form action="{{ route('mahasiswa.destroy', $data->id) }}" class="pull-left"  method="post">
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
        </div>

@endrole

@role('Mahasiswa')
<div class="row">  
    <div class="col-xl-12 col-lg-12 col-md-12 grid-margin stretch-card">    
      <div class="card-body">                  
        <div class="modal fade bd-example-modal-lg" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" class="col-lg-12">
            <form action="{{ action('KonfirmasiController@store') }}" method="POST" enctype="multipart/form-data">
              <div class="modal-content" style="background: #33E8FF;">
                <div class="modal-header">
                  <h5 class="modal-title" class="card-header bg-danger" id="exampleModalLabel">KONFIRMASI DATA</h5>
                </div>
                <div class="modal-body">
                {{ csrf_field() }}
                        
                        @foreach($mahasiswa as $mhs)
            <input type="hidden" name="mahasiswa_id" value="{{ $mhs->id }}">
          @endforeach
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">  
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  
                   <div class="form-row">
                          <label for="idKategory" class="col-md-6 control-label">NO PENDAFTARAN</label>
                            <div class="form-group col-md-6">    
                             @foreach($pendaftaran as $daftar)                                                           
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{$daftar->noPendaftaran}}" readonly=""> @endforeach                                             
                            </div>
                    </div>                                                                                                

                    <div class="form-row">
                      <label for="poin" class="col-md-6 control-label">NAMA</label>
                        <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">         
                          @foreach($pendaftaran as $daftar)                                                         
                          <input id="poin" type="text" class="form-control" name="poin" value="{{ $daftar->namaPeserta }}" readonly="">
                          @endforeach 
                            @if ($errors->has('poin'))
                              <span class="help-block">
                                <strong>{{ $errors->first('poin') }}</strong>
                              </span>
                                @endif
                        </div>
                    </div>    

                    <div class="form-row">
                      <label for="poin" class="col-md-6 control-label">TANGGAL LAHIR</label>
                        <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">         
                          @foreach($pendaftaran as $daftar)                                                         
                          <input id="poin" type="text" class="form-control" name="poin" value="{{ $daftar->tanggalLahir }}" readonly="">
                          @endforeach 
                            @if ($errors->has('poin'))
                              <span class="help-block">
                                <strong>{{ $errors->first('poin') }}</strong>
                              </span>
                                @endif
                        </div>
                    </div>    

                    <div class="form-row">
                          <label for="idKategory" class="col-md-6 control-label">PROGRAM STUDI</label>
                            <div class="form-group col-md-6">       
                             @foreach($pendaftaran as $daftar)                                                          
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->namaProdi }}" readonly="">
                             @endforeach                                               
                            </div>
                    </div>                                                                                           

                    <div class="form-row">
                      <label for="poin" class="col-md-6 control-label">JALUR MASUK</label>
                        <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">    
                        @foreach($pendaftaran as $daftar)                                                      
                          <input id="poin" type="text" class="form-control" name="poin" value="{{ $daftar->jalur_masuk->namaJalur }}" readonly="">
                          @endforeach
                            @if ($errors->has('poin'))
                              <span class="help-block">
                                <strong>{{ $errors->first('poin') }}</strong>
                              </span>
                                @endif
                        </div>
                    </div>   

                    <div class="form-row">
                          <label for="idKategory" class="col-md-6 control-label">NISN</label>
                            <div class="form-group col-md-6">              
                            @foreach($pendaftaran as $daftar)                                                  
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->nisn }}" readonly="">  
                            @endforeach                                            
                            </div>
                    </div>                                                 
                            
                    <div class="form-row">
                        <label for="isiKategory" class="col-md-6 control-label">NAMA AYAH</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">    
                          @foreach($pendaftaran as $daftar)                                                        
                              <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->namaAyah }}" readonly="">
                              @endforeach
                                @if ($errors->has('isiKategory'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('isiKategory') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div>    

                    <div class="form-row">
                      <label for="poin" class="col-md-6 control-label">PEKERJAAN AYAH</label>
                        <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}"> 
                        @foreach($pendaftaran as $daftar)                                                         
                          <input id="poin" type="text" class="form-control" name="poin" value="{{ $daftar->pekerjaanAyah }}" readonly="">
                          @endforeach
                            @if ($errors->has('poin'))
                              <span class="help-block">
                                <strong>{{ $errors->first('poin') }}</strong>
                              </span>
                                @endif
                        </div>
                    </div> 

                    <div class="form-row">
                          <label for="idKategory" class="col-md-6 control-label">PENDIDIKAN AYAH</label>
                            <div class="form-group col-md-6">                                             
                            @foreach($pendaftaran as $daftar)                   
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->pendidikanAyah }}" readonly=""> 
                                @endforeach                                             
                            </div>
                    </div>                                                 
                            
                 
              <div class="form-row">
                      <label for="poin" class="col-md-6 control-label">NAMA IBU</label>
                        <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">    
                        @foreach($pendaftaran as $daftar)                                                       
                          <input id="poin" type="text" class="form-control" name="poin" value="{{ $daftar->namaIbu }}" readonly="">
                          @endforeach
                            @if ($errors->has('poin'))
                              <span class="help-block">
                                <strong>{{ $errors->first('poin') }}</strong>
                              </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-row">
                      <label for="poin" class="col-md-6 control-label">PEKERJAAN IBU</label>
                        <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">       
                        @foreach($pendaftaran as $daftar)                                                    
                          <input id="poin" type="text" class="form-control" name="poin" value="{{ $daftar->pekerjaanIbu }}" readonly="">
                          @endforeach
                            @if ($errors->has('poin'))
                              <span class="help-block">
                                <strong>{{ $errors->first('poin') }}</strong>
                              </span>
                                @endif
                        </div>
                    </div> 

                    <div class="form-row">
                          <label for="idKategory" class="col-md-6 control-label">PENDIDIKAN IBU</label>
                            <div class="form-group col-md-6">                                                   
                            @foreach($pendaftaran as $daftar)             
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->pendidikanIbu }}" readonly="">
                                @endforeach                                              
                            </div>
                    </div>                                                 
                   
                   <div class="form-row">
                        <label for="pangan" class="col-md-6 control-label">PANGAN</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">     
                           @foreach($mahasiswa as $siswa)                                                       
                              <input id="pangan" type="text" class="form-control" name="pangan" value="{{ $siswa->pangan }}" readonly="">
                              @endforeach
                                @if ($errors->has('pangan'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('pangan') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> 

                     <div class="form-row">
                        <label for="non_pangan" class="col-md-6 control-label">NON PANGAN</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">     
                           @foreach($mahasiswa as $siswa)                                                       
                              <input id="non_pangan" type="text" class="form-control" name="non_pangan" value="{{ $siswa->non_pangan }}" readonly="">
                              @endforeach
                                @if ($errors->has('non_pangan'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('non_pangan') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> 

                     <div class="form-row">
                        <label for="penghasilan_ortu" class="col-md-6 control-label">PENGHASILAN ORANG TUA</label>
                          <div class="form-group col-md-6{{ $errors->has('nama') ? ' has-error' : '' }}">     
                           @foreach($mahasiswa as $siswa)                                                       
                              <input id="penghasilan_ortu" type="text" class="form-control" name="penghasilan_ortu" value="{{ $siswa->getpenghasilanortu() }}" readonly="">
                              @endforeach
                                @if ($errors->has('penghasilan_ortu'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('penghasilan_ortu') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> 

                     <div class="form-row">
                        <label for="jumlah_tanggungan" class="col-md-6 control-label">JUMLAH TANGGUNGAN</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">     
                           @foreach($mahasiswa as $siswa)                                                       
                              <input id="jumlah_tanggungan" type="text" class="form-control" name="jumlah_tanggungan" value="{{ $siswa->getjumlahtanggungan() }}" readonly="">
                              @endforeach
                                @if ($errors->has('jumlah_tanggungan'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('jumlah_tanggungan') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> 

                     <div class="form-row">
                        <label for="kepemilikan_rumah" class="col-md-6 control-label">KEPEMILIKAN RUMAH</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">     
                           @foreach($mahasiswa as $siswa)                                                       
                              <input id="kepemilikan_rumah" type="text" class="form-control" name="kepemilikan_rumah" value="{{ $siswa->getkepemilikanrumah() }}" readonly="">
                              @endforeach
                                @if ($errors->has('kepemilikan_rumah'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('kepemilikan_rumah') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> 

                     <div class="form-row">
                        <label for="luas_bangunan" class="col-md-6 control-label">LUAS BANGUNAN</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">     
                           @foreach($mahasiswa as $siswa)                                                       
                              <input id="luas_bangunan" type="text" class="form-control" name="luas_bangunan" value="{{ $siswa->getLuasbangunan() }}" readonly="">
                              @endforeach
                                @if ($errors->has('luas_bangunan'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('luas_bangunan') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> 

                    <div class="form-row">
                        <label for="alat_transportasi" class="col-md-6 control-label">ALAT TRANSPORTASI</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">     
                           @foreach($mahasiswa as $siswa)                                                       
                              <input id="alat_transportasi" type="text" class="form-control" name="alat_transportasi" value="{{ $siswa->getAlattrans() }}" readonly="">
                              @endforeach
                                @if ($errors->has('alat_transportasi'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('alat_transportasi') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> 

                    <div class="form-row">
                        <label for="daya_listrik" class="col-md-6 control-label">DAYA LISTRIK</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">     
                           @foreach($mahasiswa as $siswa)
                              <input id="daya_listrik" type="text" class="form-control" name="daya_listrik" value="{{ $siswa->getDayaListrikList() }}" readonly="">
                              @endforeach
                                @if ($errors->has('daya_listrik'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('daya_listrik') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> 

                    <div class="form-row">
                        <label for="file" class="col-md-6 control-label">DOKUMEN</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">     
                           @foreach($upload_file as $upload)                                                       
                              <input id="file" type="text" class="form-control" name="file" value="{{ $upload->file }}" readonly="">
                              @endforeach
                                @if ($errors->has('file'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('file') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> 

                  <!--   <div class="form-row">
                        <label for="isiKategory" class="col-md-6 control-label">data</label>
                          <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}"> 
                            @foreach($mahasiswa_entry as $entry)                                                           
                              <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $entry->kategory_detail->isiKategory }}" readonly="">
                            @endforeach                            
                                @if ($errors->has('isiKategory'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('isiKategory') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div> -->
                    
                  <br>
                    
                </div>      

                 <div class="card-header bg-light">

                       <button type="submit" class="btn btn-primary" id="submit" onclick="return confirm('Anda yakin Data Sudah Benar ?  Data tidak bisa di Rubah jika sudah disimpan !!')">
                      SIMPAN DATA
                    </button>   
                     @foreach($mahasiswa as $data)
                    <a class="btn btn btn-info pull-right" href="{{route('mahasiswa.edit', $data->id)}}"> Edit </a>             
                    @endforeach            

                  </div> 
                    <a href="#"></a>          
                  </div>                 

              </div>
            </div>
          </div>
                </div>
              </div>
            </form>
          </div>
        </div>                                               
      </div>
</div>



<form method="POST" action="{{ route('mahasiswa.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header bg-info"> MAHASISWA</div>  
                    <div class="card-body">
                         
                        <div class="form-row">     
                          <label for="idJalur" class="col-md-2 col-form-label">NAMA JALUR</label>
                            <div class="form-group col-md-6">                                
                                     @foreach($pendaftaran as $daftar)                                                      
                                        <input id="idJalur" type="text" class="form-control" name="idJalur" value="{{ $daftar->idJalur }}" readonly="">
                                    @endforeach     
                            </div>              
                        </div>

                        <div class="form-row">     
                            <div class="form-group col-md-6">
                                                                                      
                                    @foreach($pendaftaran as $daftar)
                                        <input id="pendaftaran_id" type="hidden" class="form-control" name="pendaftaran_id" value="{{$daftar->id}}" readonly="" >
                                    @endforeach                               
                            </div>                                                                      
                        </div> 

                        <br>
                        <h4><b>BIODATA DIRI</b></h4>
                        <br>

                          <div class="form-row">                                                    
                            <label for="nama" class="col-md-2 col-form-label">NAMA</label>                                                                               
                            <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                               
                                @foreach($pendaftaran as $daftar)
                                  <input id="nama" type="text" class="form-control" name="nama" value="{{ $daftar->namaPeserta }}" readonly="" >                                   
                                @endforeach                                
                            </div>                           
                          </div>

                          <div class="form-row">     
                             <label for="nisn" class="col-md-2 col-form-label">NISN</label>
                               <div class="form-group col-md-6 {{ $errors->has('nisn') ? ' has-error' : '' }}">                              
                                 @foreach($pendaftaran as $daftar)
                                       <input id="nisn" type="text" class="form-control" name="nisn" value="{{ $daftar->nisn }}" readonly="" >
                                      @endforeach 
                              </div>                     
                          </div>                    
                       
                          <div class="form-row">                                         
                              <label for="alamat" class="col-md-2 col-form-label">ALAMAT</label>
                              <div class="form-group col-md-6">                                   
                                  @foreach($pendaftaran as $daftar)
                                  <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $daftar->alamat }}" readonly="">
                                  @endforeach                                
                              </div>
                          </div>

                          <div class="form-row">      
                              <label for="agama" class="col-md-2 col-form-label">AGAMA</label>       
                                <div class="form-group col-md-6 {{ $errors->has('agama') ? ' has-error' : '' }}">                              
                                @foreach($pendaftaran as $daftar)
                                    <input id="agama" type="text" class="form-control" name="agama" value="{{ $daftar->agama }}" readonly="" >                                     
                                @endforeach
                              </div>
                          </div>
                        


                          <div class="form-row"> 
                            <label for="telepon" class="col-md-2 col-form-label">NO TELEPON / HP</label>                           
                              <div class="form-group col-md-6">                                
                                  @foreach($pendaftaran as $daftar)
                                      <input id="telepon" type="text" class="form-control" name="telepon" value="{{ $daftar->telepon }}" readonly="">                              
                                  @endforeach
                            </div>
                          </div>

                          <div class="form-row">
                            <label for="level" class="col-md-2 col-form-label">BIDIK MISI</label>
                            <div class="form-group col-md-6">                                
                                @foreach($pendaftaran as $daftar)
                                    <input id="bidikMisi" type="text" class="form-control" name="bidikMisi" value="{{ $daftar->bidikMisi }}" readonly="">                              
                                @endforeach
                            </div>
                          </div>

                          <div class="form-row">
                            <label for="tgl_lahir" class="col-md-2 col-form-label">TANGGAL LAHIR</label>
                              <div class="form-group col-md-6 {{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">                              
                                @foreach($pendaftaran as $daftar)
                                     <input id="tgl_lahir" type="text" class="form-control" name="tgl_lahir" value="{{ $daftar->tanggalLahir }}" readonly="" >
                                @endforeach     
                            </div>
                          </div>


                          <div class="form-row">        
                            <label for="tempatLahir" class="col-md-2 col-form-label">TEMPAT LAHIR</label>                  
                              <div class="form-group col-md-6">                                
                                   @foreach($pendaftaran as $daftar)
                                   <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ $daftar->tempatLahir }}"  readonly="">
                                @endforeach  
                            </div>
                          </div>
                          
                          <div class="form-row">
                            <label for="level" class="col-md-2 col-form-label">JENIS KELAMIN</label>
                              <div class="form-group col-md-6">                                
                                    @foreach($pendaftaran as $daftar)
                                        <input id="jk" type="text" class="form-control" name="jk" value="{{ $daftar->jeniskelamin }}" readonly="">                              
                                    @endforeach
                            </div>
                          </div>
                          
                          <div class="form-row">
                            <label for="namaAyah" class="col-md-2 col-form-label">NAMA AYAH</label>
                              <div class="form-group col-md-6 {{ $errors->has('namaAyah') ? ' has-error' : '' }}">                               
                                @foreach($pendaftaran as $daftar)
                                     <input id="namaAyah" type="text" class="form-control" name="namaAyah" value="{{$daftar->namaAyah }}" readonly="" >                                    
                                @endforeach
                            </div>
                          </div>

                          <div class="form-row">    
                            <label for="pekerjaanAyah" class="col-md-2 col-form-label">PEKERJAAN AYAH</label>                
                              <div class="form-group col-md-6">                               
                                  @foreach($pendaftaran as $daftar)
                                     <input id="pekerjaanAyah" type="text" class="form-control" name="pekerjaanAyah" value="{{$daftar->pekerjaanAyah }}" readonly="" >                                    
                                @endforeach
                            </div>   
                          </div>                         
                          
                          <div class="form-row">
                            <label for="namaIbu" class="col-md-2 col-form-label">NAMA IBU</label>
                              <div class="form-group col-md-6 {{ $errors->has('namaIbu') ? ' has-error' : '' }}">                               
                                @foreach($pendaftaran as $daftar)
                                     <input id="namaIbu" type="text" class="form-control" name="namaIbu" value="{{$daftar->namaIbu }}" readonly="" >                                    
                                @endforeach
                            </div>
                          </div>

                          <div class="form-row">
                            <label for="pekerjaanIbu" class="col-md-2 col-form-label">PEKERJAAN IBU</label>
                              <div class="form-group col-md-6">                                
                                   @foreach($pendaftaran as $daftar)
                                     <input id="pekerjaanIbu" type="text" class="form-control" name="pekerjaanIbu" value="{{$daftar->pekerjaanIbu }}" readonly="" >                                    
                                @endforeach
                            </div>
                          </div>       

                          <div class="form-row">                                                    
                            <div class="form-group col-md-4">
                             
                                   @foreach($pendaftaran as $daftar)
                                     <input id="penghasilanAyah" type="hidden" class="form-control" name="penghasilanAyah" value="{{$daftar->penghasilanAyah }}" readonly="" >                                    
                                @endforeach
                            </div>
                          </div>
                          
                          <div class="form-row">
                            <div class="form-group col-md-4">
                               
                                @foreach($pendaftaran as $daftar)
                                     <input id="penghasilanIbu" type="hidden" class="form-control" name="penghasilanIbu" value="{{$daftar->penghasilanIbu }}" readonly="" class="hidden"  >                                    
                                @endforeach
                            </div>
                        </div>       

                        <br>                    
                        <h4><b> STATUS EKONOMI KELUARGA </b></h4>
                        <br>
                                              
                                              
                          <div class="form-row">
                            <label for="pangan" class="col-md-2 col-form-label">PANGAN</label>
                              <div class="form-group col-md-6 {{ $errors->has('pangan') ? ' has-error' : '' }}">                               
                                     <input id="pangan" type="text" class="form-control" name="pangan" value="{{ old('pangan') }}" required placeholder="Total Pengeluaran Pangan 1 bulan dalam bentuk Rupiah">
                                     @if ($errors->has('pangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pangan') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>

                          <div class="form-row">
                            <label for="non_pangan" class="col-md-2 col-form-label">NON PANGAN</label>
                              <div class="form-group col-md-6">                                
                                   <input id="non_pangan" type="text" class="form-control" name="non_pangan" value="{{ old('non_pangan') }}"  required placeholder="Total Pengeluaran NonPangan 1 bulan dalam bentuk Rupiah">
                                @if ($errors->has('non_pangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('non_pangan') }}</strong>
                                    </span>
                                @endif
                              </div>
                          </div>

                          <div class="form-row">         
                            <label for="jumlah_tanggungan" class="col-md-2 col-form-label">JUMLAH TANGGUNGAN</label>        
                              <div class="form-group col-md-6">                                
                                  <select class="form-control" name="jumlah_tanggungan" id="jumlah_Tanggungan">
                                    <option></option>
                                    <option value="1">Lebih dari 6</option>
                                    <option value="2">6</option>
                                    <option value="3">5</option>
                                    <option value="4">4</option>
                                    <option value="5">3</option>
                                    <option value="6">2</option>
                                    <option value="7">1</option>
                                </select>
                              </div>
                          </div>

                       
                          <div class="form-row">
                            <label for="penghasilan_ortu" class="col-md-2 col-form-label">PENGHASILAN ORANG TUA</label>
                              <div class="form-group col-md-6">                                
                                  <select class="form-control" name="penghasilan_ortu" id="penghasilan_ortu">
                                    <option></option>
                                    <option value="1">Kurang dari Rp.1.500.000</option>
                                    <option value="2">Rp.1.500.001 sd Rp.3.000.000</option>
                                    <option value="3">Rp.3.000.001 sd Rp.4.500.000</option>
                                    <option value="4">Rp.4.500.001 sd Rp.6.000.000</option>
                                    <option value="5">Rp.6.000.001 sd Rp.8.000.000</option>
                                    <option value="6">Rp.8.000.001 sd Rp.10.000.000</option>
                                    <option value="7">Lebih dari Rp.10.000.000</option>                                   
                                </select>
                              </div>
                          </div>
                          
                          <div class="form-row">
                            <label for="kepemilikan_rumah" class="col-md-2 col-form-label">KEPEMILIKAN RUMAH</label>
                              <div class="form-group col-md-6 {{ $errors->has('kepemilikan_rumah') ? ' has-error' : '' }}">                              
                                  <select class="form-control" name="kepemilikan_rumah" id="kepemilikan_rumah">
                                      <option></option>
                                      <option value="1">Menumpang / Rumah Bersama</option>
                                      <option value="2">Mengontrak / Menyewa</option>
                                      <option value="3">Milik Sendiri dan Lantai tanah</option>
                                      <option value="4">Milik Sendiri Semi Permanen</option>
                                      <option value="5">Milik Sendiri 1 Lantai</option>
                                      <option value="6">Milik Sendiri Permanen Lebih 1 Lantai</option>
                                      <option value="7">Milik Sendiri Lebih Dari 1 Rumah</option>
                                  </select>
                              </div>
                          </div>
                          
                          <div class="form-row">
                            <label for="luas_bangunan" class="col-md-2 col-form-label">LUAS BANGUNAN</label>
                              <div class="form-group col-md-6">                                
                                   <select class="form-control" name="luas_bangunan" id="luas_bangunan">
                                    <option></option>
                                    <option value="1">Kurang dari 36 m2</option>
                                    <option value="2">36  m2 - 60 m2</option>
                                    <option value="3">61 m2 - 90 m2</option>
                                    <option value="4">91 m2 - 120 m2</option>
                                    <option value="5">121 m2 - 150 m2</option>
                                    <option value="6">151  m2 - 180 m2</option>
                                    <option value="7">Lebih dari 180 m2</option>                                    
                                </select>
                              </div>                        
                          </div>


                          <div class="form-row">
                            <label for="alat_transportasi" class="col-md-2 col-form-label">ALAT TRANSPORTASI</label>
                              <div class="form-group col-md-6">                                
                                  <select class="form-control" name="alat_transportasi" id="alat_transportasi">
                                    <option></option>
                                    <option value="1">Tidak Memiliki</option>
                                    <option value="2">Roda Dua / Perahu 1 unit</option>
                                    <option value="3">Roda Dua / Perahu Lebih dari 1 Unit</option>
                                    <option value="4">Roda Empat / Perahu 1 unit</option>
                                    <option value="5">Roda Empat / Perahu 2 unit</option>
                                    <option value="6">Roda Empat / Perahu Lebih dari 2 unit</option>
                                </select>
                              </div>
                          </div>

                          <div class="form-row">
                            <label for="daya_listrik" class="col-md-2 col-form-label">DAYA LISTRIK</label>
                              <div class="form-group col-md-6 {{ $errors->has('daya_listrik') ? ' has-error' : '' }}">                               
                                  <select class="form-control" name="daya_listrik" id="daya_listrik">
                                    <option></option>
                                    <option value="1">Rp. 50.000</option>
                                    <option value="2">Rp. 51.000 - Rp. 100.000 </option>
                                    <option value="3">Rp. 101.000 - Rp. 200.000 </option>
                                    <option value="4">Rp. 201.000 - Rp. 300.000</option>
                                    <option value="5">Rp. 301.000 - Rp. 450.000</option>
                                    <option value="6">Rp. 451.000 - Rp. 600.000</option>
                                    <option value="7">Lebih Dari Rp. 600.000 </option>                                   
                                </select>   
                              </div>
                        </div>

                        <button type="button" class="btn btn-light mr-5" data-toggle="modal" data-target="#konfirmasi">OK                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>                                         
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
</form>   
@endrole       
@endsection