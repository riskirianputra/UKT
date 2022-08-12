@section('js')

<script type="text/javascript">
$(document).ready(function() {
    $(".users").select2();
});
</script>

@stop
@extends('layouts.applay')
@section('content')

<form action="{{ route('mahasiswa.update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card-header bg-info">EDIT DATA {{$data->nama}}</div>
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"></b></h4>
                      <form class="forms-sample">  
                        
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
                          <label for="pangan" class="col-md-2 control-label">PANGAN</label>
                            <div class="form-group col-md-6 {{ $errors->has('pangan') ? ' has-error' : '' }}">                               
                              <input id="pangan" type="text" class="form-control" name="pangan" value="{{ $data->pangan }}" required >
                                @if ($errors->has('pangan'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('pangan') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                          <label for="non_pangan" class="col-md-2 control-label">NON PANGAN</label>
                            <div class="form-group col-md-6">                                
                                   <input id="non_pangan" type="text" class="form-control" name="non_pangan" value="{{ $data->non_pangan }}" maxlength="8" required>
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

                       
                    </div>

                     <div class="card-header bg-light">
                         <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>                        
                        @role('admin')
                        <a href="{{route('mahasiswa.index')}}" class="btn btn-light pull-right">Back</a>
                        @endrole

                        @role('Mahasiswa')
                        <a href="{{route('konfirmasi.index')}}" class="btn btn-light pull-right">Back</a>
                        @endrole
                  </div>
                  
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection