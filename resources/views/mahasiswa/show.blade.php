@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>
@stop

@extends('layouts.applay')

@section('content')

<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                    <div class="card-header bg-info">DATA LENGKAP {{$data->nama}}</div>
                  <div class="card">
                    <div class="card-body">                      
                      <form class="forms-sample">
<br>
                         <div class="form-row">     
                            <label for="pendaftaran_id" class="col-md-2 col-form-label">ID PENDAFTARAN</label>                                                                          
                              <div class="form-group col-md-6">                                                                                                                              
                                    <input id="pendaftaran_id" type="text" class="form-control" name="pendaftaran_id" value="{{ $data->pendaftaran->noPendaftaran }}" readonly="" >                                                             
                              </div>
                          </div>

                          <div class="form-row">                               
                            <label for="idJalur" class="col-md-2 col-form-label">ID Jalur</label>      
                              <div class="form-group col-md-6">                                                                                  
                                  <input id="idJalur" type="text" class="form-control" name="idJalur" value="{{ $data->idJalur }}" readonly="">                                       
                              </div>                           
                          </div> 

                        <br>
                        <h4><b>BIODATA DIRI</b></h4>
                        <br>
                          <div class="form-row">
                            <label for="nama" class="col-md-2 col-form-label">NAMA</label>
                            <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                               
                               <input id="nama" type="text" class="form-control" name="nama" value="{{ $data->nama }}" readonly="" >                                                                                 
                            </div>                           
                          </div>

                          <div class="form-row">
                            <label for="nisn" class="col-md-2 col-form-label">NISN</label>
                              <div class="form-group col-md-6 {{ $errors->has('nisn') ? ' has-error' : '' }}">                                                             
                                <input id="nisn" type="text" class="form-control" name="nisn" value="{{ $data->nisn }}" readonly="" >                                  
                              </div>                     
                        </div>                    
                                               
                        <div class="form-row">
                          <label for="alamat" class="col-md-2 col-form-label">ALAMAT</label>
                            <div class="form-group col-md-6">                                                                  
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $data->alamat }}" readonly="">                                                              
                            </div>
                        </div>

                        <div class="form-row">
                           <label for="agama" class="col-md-2 col-form-label">AGAMA</label>
                              <div class="form-group col-md-6 {{ $errors->has('agama') ? ' has-error' : '' }}">                                                           
                                  <input id="agama" type="text" class="form-control" name="agama" value="{{ $data->agama }}" readonly="" >                                                                     
                              </div>
                        </div>


                        <div class="form-row">         
                          <label for="telepon" class="col-md-2 col-form-label">NO TELEPON / HP</label>                   
                            <div class="form-group col-md-6">                                                            
                                    <input id="telepon" type="text" class="form-control" name="telepon" value="{{ $data->telepon }}" readonly="">                                                             
                            </div>
                        </div>

                        <div class="form-row">
                            <label for="level" class="col-md-2 col-form-label">BIDIK MISI</label>
                              <div class="form-group col-md-6">                                                               
                                      <input id="bidikMisi" type="text" class="form-control" name="bidikMisi"value="{{ $data->bidikMisi }}" readonly="">                                                              
                              </div>
                        </div>

                        <div class="form-row">
                            <label for="tgl_lahir" class="col-md-2 col-form-label">TANGGAL LAHIR</label>
                              <div class="form-group col-md-6 {{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">                                                              
                                <input id="tanggalLahir" type="text" class="form-control" name="tanggalLahir" value="{{$data->tgl_lahir }}" readonly="" >                                
                              </div>
                        </div>


                        <div class="form-row">          
                          <label for="tempatLahir" class="col-md-2 col-form-label">TEMPAT LAHIR</label>                 
                            <div class="form-group col-md-6">                                                              
                                   <input id="tempatLahir" type="text" class="form-control" name="tempatLahir" value="{{ $data->tempat_lahir }}"  readonly="">                               
                            </div>
                        </div>
                        
                        <div class="form-row">
                          <label for="level" class="col-md-2 col-form-label">JENIS KELAMIN</label>
                            <div class="form-group col-md-6">                                                             
                                <input id="jk" type="text" class="form-control" name="jk" value="{{ $data->jk }}" readonly="">                                                                  
                            </div>
                        </div>

                        <div class="form-row">
                          <label for="namaAyah" class="col-md-2 col-form-label">NAMA AYAH</label>
                            <div class="form-group col-md-6 {{ $errors->has('namaAyah') ? ' has-error' : '' }}">                                                              
                                  <input id="namaAyah" type="text" class="form-control" name="namaAyah" value="{{ $data->namaAyah }}" readonly="" >                                                                    
                            </div>
                        </div>

                        <div class="form-row">
                          <label for="pekerjaanAyah" class="col-md-2 col-form-label">PEKERJAAN AYAH</label>
                            <div class="form-group col-md-6">                                                                
                                  <input id="pekerjaanAyah" type="text" class="form-control" name="pekerjaanAyah" value="{{ $data->pekerjaanAyah }}" readonly="" >                                                                   
                            </div>
                        </div>
                        
                        <div class="form-row">
                          <label for="penghasilanAyah" class="col-md-2 col-form-label">PENGHASILAN AYAH</label>
                            <div class="form-group col-md-6">                                                                   
                                <input id="penghasilanAyah" type="text" class="form-control" name="penghasilanAyah" value="{{ $data->penghasilanAyah }}" readonly="" >                                                                  
                            </div>
                        </div>       


                        <div class="form-row">
                          <label for="namaIbu" class="col-md-2 col-form-label">NAMA IBU</label>
                            <div class="form-group col-md-6 {{ $errors->has('namaIbu') ? ' has-error' : '' }}">                                                            
                                  <input id="namaIbu" type="text" class="form-control" name="namaIbu" value="{{ $data->namaIbu }}" readonly="" >                                                                    
                            </div>
                        </div>
                        
                        <div class="form-row">
                          <label for="pekerjaanIbu" class="col-md-2 col-form-label">PEKERJAAN IBU</label>
                            <div class="form-group col-md-6">                                                                
                                  <input id="pekerjaanIbu" type="text" class="form-control" name="pekerjaanIbu" value="{{ $data->pekerjaanIbu }}" readonly="" >                                                              
                            </div>
                        </div>
                        
                        <div class="form-row">
                          <label for="penghasilanIbu" class="col-md-2 col-form-label">PENGHASILAN IBU</label>
                            <div class="form-group col-md-6">                                                                
                                <input id="penghasilanIbu" type="text" class="form-control" name="penghasilanIbu" value="{{ $data->penghasilanIbu }}" readonly=""  >                                                               
                            </div>
                        </div>     
      
                                                
                    <br>                    
                    <h4><b> STATUS EKONOMI KELUARGA </b></h4>
                    <br>
                      
                        <div class="form-row">
                            <label for="pangan" class="col-md-2 col-form-label">PANGAN</label>
                                <div class="form-group col-md-6 {{ $errors->has('pangan') ? ' has-error' : '' }}">                               
                                    <input id="pangan" type="text" class="form-control" name="pangan" value="{{ $data->pangan }}" readonly >
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
                                   <input id="non_pangan" type="text" class="form-control" name="non_pangan" value="{{ $data->non_pangan }}"  readonly>
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
                                   <input id="jumlah_tanggungan" type="text" class="form-control" name="jumlah_tanggungan" value="{{ $data->jumlah_tanggungan }}"  readonly>
                                @if ($errors->has('jumlah_tanggungan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_tanggungan') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>

                       
                        <div class="form-row">
                            <label for="kepemilikan_rumah" class="col-md-2 col-form-label">kepemilikan_rumah</label>
                                <div class="form-group col-md-6 {{ $errors->has('kepemilikan_rumah') ? ' has-error' : '' }}">                               
                                     <input id="kepemilikan_rumah" type="text" class="form-control" name="kepemilikan_rumah" value="{{ $data->kepemilikan_rumah }}" readonly >
                                     @if ($errors->has('kepemilikan_rumah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kepemilikan_rumah') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>
                        
                        <div class="form-row">
                            <label for="luas_bangunan" class="col-md-2 col-form-label">LUAS BANGUNAN</label>
                                <div class="form-group col-md-6">                                
                                   <input id="luas_bangunan" type="text" class="form-control" name="luas_bangunan" value="{{ $data->luas_bangunan}}"  readonly>
                                @if ($errors->has('luas_bangunan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('luas_bangunan') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>
                        
                        <div class="form-row">
                            <label for="alat_transportasi" class="col-md-2 col-form-label">ALAT TRANSPORTASI</label>
                                <div class="form-group col-md-6">                                
                                   <input id="alat_transportasi" type="text" class="form-control" name="alat_transportasi" value="{{ $data->alat_transportasi }}"  readonly>
                                @if ($errors->has('alat_transportasi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alat_transportasi') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>

                        <div class="form-row">
                            <label for="daya_listrik" class="col-md-2 col-form-label">DAYA LISTRIK</label>
                                <div class="form-group col-md-6 {{ $errors->has('daya_listrik') ? ' has-error' : '' }}">                               
                                     <input id="daya_listrik" type="text" class="form-control" name="daya_listrik" value="{{ $data->daya_listrik }}" readonly >
                                     @if ($errors->has('daya_listrik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('daya_listrik') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>           

                        
                    </div>

                    <div class="card-header bg-light">
                      <a class="btn btn-primary" href="{{route('mahasiswa.edit', $data->id)}}"> Edit </a>                                
                          <form action="{{ route('mahasiswa.destroy', $data->id) }}" class="pull-left"  method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete  </button>                           
                          </form> 
                        <a href="{{route('mahasiswa.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
@endsection