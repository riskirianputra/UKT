

@extends('layouts.applay')

@section('content')

<form action="{{ route('pendaftaran.update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
    <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                <div class="card-header bg-info">EDIT PENDAFTARAN</div>
                  <div class="card">
                    <div class="card-body">
                          <div class="form-row">                            
                            <label for="idJalur" class="col-md-2 col-form-label">ID Jalur</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                                                                      
                                     <input id="idJalur" type="text" class="form-control" name="idJalur" value="{{$data->idJalur}}" readonly="" >                          
                                </div>
                        </div>                        

                        <br>
                        <h4><b>DATA PESERTA</b></h4>
                        <br>                                
                            
                        <div class="form-row">
                            <label for="noPendaftaran" class="col-md-2 col-form-label">NO PENDAFTARAN</label>  
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                        
                                    <input id="noPendaftaran" type="text" class="form-control" name="noPendaftaran" value="{{ $data->noPendaftaran }}" required>
                                    @if ($errors->has('noPendaftaran'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('noPendaftaran') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                         <div class="form-row">     
                            <label for="level" class="col-md-2 col-form-label">BIDIK MISI</label>                       
                                <div class="form-group col-md-6">                                                        
                                    <input id="bidikMisi" type="text" class="form-control" name="bidikMisi" value="{{ $data->bidikMisi }}" required>                                                       
                                </div> 
                        </div>   

                         <div class="form-row">                 
                            <label for="ptnke" class="col-md-2 col-form-label">PTNKE</label>                     
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                          
                                    <input id="ptnke" type="text" class="form-control" name="ptnke" value="{{ $data->ptnke }}" required>
                                    @if ($errors->has('ptnke'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ptnke') }}</strong>
                                        </span>
                                    @endif                           
                                </div>
                        </div>


                        <div class="form-row">                 
                            <label for="angkatan" class="col-md-2 col-form-label">ANGKATAN</label>                                  
                                <div class="form-group col-md-6">                                                                
                                    <input id="angkatan" type="text" class="form-control" name="angkatan" value="{{ $data->angkatan }}" required>
                                        @if ($errors->has('angkatan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('angkatan') }}</strong>
                                            </span>
                                        @endif                                    
                                </div>
                        </div>

                         <div class="form-row">
                            <label for="kodeProdi" class="col-md-2 col-form-label">KODE PRODI</label>
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                            
                                    <input id="kodeProdi" type="text" class="form-control" name="kodeProdi" value="{{ $data->kodeProdi }}" required>
                                    @if ($errors->has('kodeProdi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kodeProdi') }}</strong>
                                        </span>
                                    @endif                           
                                </div>
                        </div>   


                        <div class="form-row">
                            <label for=" namaProdi" class="col-md-2 col-form-label">NAMA PRODI</label>   
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                         
                                    <input id=" namaProdi" type="text" class="form-control" name=" namaProdi" value="{{ $data->namaProdi }}" required>
                                    @if ($errors->has(' namaProdi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first(' namaProdi') }}</strong>
                                        </span>
                                    @endif                         
                                </div>
                        </div>


                         <br>
                        <h4><b>BIODATA DIRI</b></h4>
                        <br>


                         <div class="form-row">
                            <label for="namaPeserta" class="col-md-2 col-form-label">NAMA PESERTA</label>     
                                 <div class="form-group col-md-6">                                                      
                                    <input id="namaPeserta" type="text" class="form-control" name="namaPeserta" value="{{ $data->namaPeserta }}" required>
                                    @if ($errors->has('namaPeserta'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('namaPeserta') }}</strong>
                                        </span>
                                    @endif                                                    
                                </div> 
                        </div>       

                        <div class="form-row">
                            <label for="nik" class="col-md-2 col-form-label">NIK</label>
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                            
                                    <input id="nik" type="text" class="form-control" name="nik" value="{{ $data->nik }}" required>
                                    @if ($errors->has('nik'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nik') }}</strong>
                                        </span>
                                    @endif
                                </div>    
                        </div>        
                                           
                        <div class="form-row">
                            <label for="alamat" class="col-md-2 col-form-label">ALAMAT</label>
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                           
                                    <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $data->alamat }}" required>
                                    @if ($errors->has('alamat'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif                 
                                </div>
                        </div>  
                                                                                                                
                        <div class="form-row">
                            <label for="alamatKab" class="col-md-2 col-form-label">KABUPATEN</label>
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                            
                                    <input id="alamatKab" type="text" class="form-control" name="alamatKab" value="{{ $data->alamatKab }}" required>
                                    @if ($errors->has('alamatKab'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamatKab') }}</strong>
                                        </span>
                                    @endif                         
                                </div>
                        </div>
                       
                        <div class="form-row">
                            <label for="alamatProv" class="col-md-2 col-form-label">PROVINSI</label>
                                <div class="form-group col-md-6">                                                            
                                    <input id="alamatProv" type="text" class="form-control" name="alamatProv" value="{{ $data->alamatProv }}" required>
                                    @if ($errors->has('alamatProv'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamatProv') }}</strong>
                                        </span>
                                    @endif                                                    
                                </div>     
                        </div>                  
                        
                        <div class="form-row">
                            <label for="level" class="col-md-2 col-form-label">JENIS KELAMIN</label>  
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                          
                                    <input id="jeniskelamin" type="text" class="form-control" name="jeniskelamin" value="{{ $data->jeniskelamin }}" required>
                                </div>            
                        </div>
               


                        <div class="form-row">
                            <label for="tanggalLahir" class="col-md-2 col-form-label">TANGGAL LAHIR</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                           
                                    <input id="tanggalLahir" type="date" class="form-control" name="tanggalLahir" value="{{  $data->tanggalLahir }}" required>
                                    @if ($errors->has('tanggalLahir'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tanggalLahir') }}</strong>
                                        </span>
                                    @endif                         
                                </div>
                        </div>
                       
                        <div class="form-row">
                            <label for="tempatLahir" class="col-md-2 col-form-label">TEMPAT LAHIR</label> 
                                <div class="form-group col-md-6">                                                           
                                    <input id="tempatLahir" type="text" class="form-control" name="tempatLahir" value="{{  $data->tempatLahir }}" required>
                                    @if ($errors->has('tempatLahir'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tempatLahir') }}</strong>
                                        </span>
                                    @endif                                                       
                                </div>  
                        </div>      

                        <div class="form-row">
                            <label for="agama" class="col-md-2 col-form-label">AGAMA</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                           
                                    <input id="agama" type="text" class="form-control" name="agama" value="{{  $data->agama }}" required>
                                    @if ($errors->has('agama'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('agama') }}</strong>
                                        </span>
                                    @endif
                                </div>            
                        </div>
             
                       
                        <div class="form-row">
                            <label for="kewarganegaraan" class="col-md-2 col-form-label">KEWARGANEGARAAN</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                           
                                    <input id="kewarganegaraan" type="text" class="form-control" name="kewarganegaraan" value="{{  $data->kewarganegaraan }}" required>
                                    @if ($errors->has('kewarganegaraan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kewarganegaraan') }}</strong>
                                        </span>
                                    @endif                         
                                </div>
                        </div>
                       
                        <div class="form-row">
                            <label for="telepon" class="col-md-2 col-form-label">TELEPON</label>       
                                <div class="form-group col-md-6">                                                     
                                    <input id="telepon" type="text" class="form-control" name="telepon" value="{{  $data->telepon }}" required>
                                    @if ($errors->has('telepon'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telepon') }}</strong>
                                        </span>
                                    @endif                                                       
                                </div> 
                        </div>
                        
                        <div class="form-row">
                            <label for="nisn" class="col-md-2 col-form-label">NISN</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                          
                                    <input id="nisn" type="text" class="form-control" name="nisn" value="{{  $data->nisn }}" required>
                                    @if ($errors->has('nisn'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nisn') }}</strong>
                                        </span>
                                    @endif                         
                                </div>                                                                      
                        </div>

                        
                        <div class="form-row">               
                            <label for="email" class="col-md-2 col-form-label">EMAIL</label>                                    
                                <div class="form-group col-md-6">                                                           
                                    <input id="email" type="text" class="form-control" name="email" value="{{  $data->email }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif                                                       
                                </div>                                                                           
                        </div>                      


                        <br>
                        <h4><b>DATA KELUARGA</b></h4>
                        <br>

                         <div class="form-row">
                            <label for="namaAyah" class="col-md-2 col-form-label">NAMA AYAH</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                
                                    <input id="namaAyah" type="text" class="form-control" name="namaAyah" value="{{  $data->namaAyah }}" required>
                                    @if ($errors->has('namaAyah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('namaAyah') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                       
                        <div class="form-row">
                            <label for="pendidikanAyah" class="col-md-2 col-form-label">PENDIDIKAN AYAH</label>  
                                <div class="form-group col-md-6">                                                         
                                    <input id="pendidikanAyah" type="text" class="form-control" name="pendidikanAyah" value="{{  $data->pendidikanAyah }}" required>
                                    @if ($errors->has('pendidikanAyah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pendidikanAyah') }}</strong>
                                        </span>
                                    @endif                                            
                                </div> 
                        </div>      
                        
                        <div class="form-row">
                            <label for="pekerjaanAyah" class="col-md-2 col-form-label">PEKERJAAN AYAH</label>
                                <div class="form-group col-md-6">                                                        
                                    <input id="pekerjaanAyah" type="text" class="form-control" name="pekerjaanAyah" value="{{  $data->pekerjaanAyah }}" required>
                                    @if ($errors->has('pekerjaanAyah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pekerjaanAyah') }}</strong>
                                        </span>
                                    @endif                                       
                                </div>  
                        </div>     
                        
                        <div class="form-row">
                            <label for="penghasilanAyah" class="col-md-2 col-form-label">PENGHASILAN AYAH</label>
                                <div class="form-group col-md-6">                                                      
                                    <input id="penghasilanAyah" type="text" class="form-control" name="penghasilanAyah" value="{{ $data->penghasilanAyah }}" required>
                                    @if ($errors->has('penghasilanAyah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('penghasilanAyah') }}</strong>
                                        </span>
                                    @endif                                      
                                </div>                                                                           
                        </div>       


                        <div class="form-row">
                            <label for="namaAyah" class="col-md-2 col-form-label">NAMA IBU</label>
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                         
                                    <input id="namaIbu" type="text" class="form-control" name="namaIbu" value="{{  $data->namaIbu }}" required>
                                    @if ($errors->has('namaIbu'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('namaIbu') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>    
                        
                        <div class="form-row">
                            <label for="pendidikanIbu" class="col-md-2 col-form-label">PENDIDIKAN IBU</label>
                                <div class="form-group col-md-6">                                                          
                                    <input id="pendidikanIbu" type="text" class="form-control" name="pendidikanIbu" value="{{  $data->pendidikanIbu }}" required>
                                    @if ($errors->has('pendidikanIbu'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pendidikanIbu') }}</strong>
                                        </span>
                                    @endif                                         
                                </div> 
                        </div>      
                        
                        <div class="form-row">
                            <label for="pekerjaanIbu" class="col-md-2 col-form-label">PEKERJAAN IBU</label> 
                                <div class="form-group col-md-6">                                                           
                                    <input id="pekerjaanIbu" type="text" class="form-control" name="pekerjaanIbu" value="{{  $data->pekerjaanIbu }}" required>
                                    @if ($errors->has('pekerjaanIbu'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pekerjaanIbu') }}</strong>
                                        </span>
                                    @endif                                 
                                </div> 
                        </div>

                        <div class="form-row">
                            <label for="penghasilanIbu" class="col-md-2 col-form-label">PENGHASILAN IBU</label> 
                                <div class="form-group col-md-6">                                                          
                                    <input id="penghasilanIbu" type="text" class="form-control" name="penghasilanIbu" value="{{  $data->penghasilanIbu }}" required>
                                    @if ($errors->has('penghasilanIbu'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('penghasilanIbu') }}</strong>
                                        </span>
                                    @endif                                    
                                </div>                                                                           
                        </div>                                                                                                   
                                            
                        <div class="form-row">
                            <label for="jumlahkakak" class="col-md-2 col-form-label">JUMLAH KAKAK</label>
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                           
                                    <input id="jumlahkakak" type="text" class="form-control" name="jumlahkakak" value="{{  $data->jumlahkakak }}" required>
                                    @if ($errors->has('jumlahkakak'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jumlahkakak') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        
                        <div class="form-row">
                            <label for="jumlahadik" class="col-md-2 col-form-label">JUMLAH ADIK</label>
                                <div class="form-group col-md-6">                                                           
                                    <input id="jumlahadik" type="text" class="form-control" name="jumlahadik" value="{{  $data->jumlahadik }}" required>
                                    @if ($errors->has('jumlahadik'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jumlahadik') }}</strong>
                                        </span>
                                    @endif                                        
                                </div>                                                                                                 
                        </div>               
                        

                        <br>
                        <h4><b>DATA SEKOLAH</b></h4>
                        <br>

                        <div class="form-row">
                            <label for="npsn" class="col-md-2 col-form-label">NPSN</label>
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                            
                                    <input id="npsn" type="text" class="form-control" name="npsn" value="{{  $data->npsn }}" required>
                                    @if ($errors->has('npsn'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('npsn') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        
                        <div class="form-row">
                            <label for="namaSekolah" class="col-md-2 col-form-label">NAMA SEKOLAH</label>
                                <div class="form-group col-md-6">                                                          
                                    <input id="namaSekolah" type="text" class="form-control" name="namaSekolah" value="{{  $data->namaSekolah }}" required>
                                    @if ($errors->has('namaSekolah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('namaSekolah') }}</strong>
                                        </span>
                                    @endif                                      
                                </div> 
                        </div>   

                        <div class="form-row">   
                            <label for="kabSekolah" class="col-md-2 col-form-label">KABUPATEN SEKOLAH</label>
                                <div class="form-group col-md-6">                                                            
                                    <input id="kabSekolah" type="text" class="form-control" name="kabSekolah" value="{{ $data->kabSekolah }}" required>
                                    @if ($errors->has('kabSekolah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kabSekolah') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                                                                                   
                        </div>     
                          
                        <div class="form-row">
                            <label for="provSekolah" class="col-md-2 col-form-label">PROVINSI SEKOLAH</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                       
                                    <input id="provSekolah" type="text" class="form-control" name="provSekolah" value="{{  $data->provSekolah }}" required>
                                    @if ($errors->has('provSekolah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('provSekolah') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        
                        <div class="form-row">
                            <label for="tahunLulus" class="col-md-2 col-form-label">TAHUN LULUS</label>
                                <div class="form-group col-md-6">                                                            
                                    <input id="tahunLulus" type="text" class="form-control" name="tahunLulus" value="{{ $data->tahunLulus }}" required>
                                    @if ($errors->has('tahunLulus'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tahunLulus') }}</strong>
                                        </span>
                                    @endif                                 
                                </div>   
                        </div>    
                        
                        <div class="form-row">
                            <label for="sppSekolah" class="col-md-2 col-form-label">SPP SEKOLAH</label> 
                                <div class="form-group col-md-6">                                                          
                                    <input id="sppSekolah" type="text" class="form-control" name="sppSekolah" value="{{  $data->sppSekolah }}" required>
                                    @if ($errors->has('sppSekolah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sppSekolah') }}</strong>
                                        </span>
                                    @endif                         
                                </div>                                                                                                   
                        </div>     

                        <div class="form-row">
                            <label for="sppSekolahdibayar" class="col-md-2 col-form-label">SPP SEKOLAH YANG DI BAYAR</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                         
                                    <input id="sppSekolahdibayar" type="text" class="form-control" name="sppSekolahdibayar" value="{{  $data->sppSekolahdibayar }}" required>
                                    @if ($errors->has('sppSekolahdibayar'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sppSekolahdibayar') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        
                        <div class="form-row">
                            <label for="uangPembangunan" class="col-md-2 col-form-label">UANG PEMBANGUNAN</label> 
                                <div class="form-group col-md-6">                                                           
                                    <input id="uangPembangunan" type="text" class="form-control" name="uangPembangunan" value="{{  $data->uangPembangunan }}" required>
                                    @if ($errors->has('uangPembangunan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('uangPembangunan') }}</strong>
                                        </span>
                                    @endif                           
                                </div>  
                        </div>     
                        
                        <div class="form-row">
                            <label for="uangPembangunandibayar" class="col-md-2 col-form-label">UANG PEMBANGUNAN YANG DI BAYAR</label>
                                <div class="form-group col-md-6">                                                             
                                    <input id="uangPembangunandibayar" type="text" class="form-control" name="uangPembangunandibayar" value="{{  $data->uangPembangunandibayar }}" required>
                                    @if ($errors->has('uangPembangunandibayar'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('uangPembangunandibayar') }}</strong>
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
                       <a href="/pendaftaran" class="btn btn-light pull-right">Back</a>
                  </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>




@endsection