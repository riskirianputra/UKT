
@extends('layouts.applay')

@section('content')

<form method="POST" action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">

            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                    <div class=" font-weight-bold">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                             <li class="breadcrumb-item"><a href="{{ route('pendaftaran.index') }}">Pendaftaran</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </div>
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

                        <br>
                        <h4><b>DATA PESERTA</b></h4>
                        <br>                                
                            
                        <div class="form-row">
                            <label for="noPendaftaran" class="col-md-2 col-form-label">NO PENDAFTARAN</label>  
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                        
                                    <input id="noPendaftaran" type="text" class="form-control" name="noPendaftaran" value="">
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
                                    <select class="form-control" name="bidikMisi" required="">
                                        <option value=""></option>
                                        <option value="IYA">Iya</option>
                                        <option value="TIDAK">Tidak</option>
                                    </select>
                                </div>                 
                        </div>                                                                                                                 
                        
                        <div class="form-row">                 
                            <label for="ptnke" class="col-md-2 col-form-label">PTNKE</label>                     
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                          
                                    <input id="ptnke" type="text" class="form-control" name="ptnke" >
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
                                    <select class="form-control" name="angkatan" required="">
                                            <option value=""></option>                                            
                                            <option value="2014">2014</option>   
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option> 
                                            <option value="2020">2020</option>   
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>                                                                       
                                        </select>                                     
                                </div>
                        </div>               

                         <div class="form-row">
                            <label for="kodeProdi" class="col-md-2 col-form-label">KODE PRODI</label>
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                            
                                    <input id="kodeProdi" type="text" class="form-control" name="kodeProdi" value="{{ old('kodeProdi') }}" readonly>
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
                                    <input id=" namaProdi" type="text" class="form-control" name=" namaProdi" value="{{ old(' namaProdi') }}" readonly>
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
                                    <input id="namaPeserta" type="text" class="form-control" name="namaPeserta" value="{{ old('namaPeserta') }}" readonly>
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
                                    <input id="nik" type="text" class="form-control" name="nik" value="{{ old('nik') }}" readonly>
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
                                    <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" readonly>
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
                                    <input id="alamatKab" type="text" class="form-control" name="alamatKab" value="{{ old('alamatKab') }}" readonly>
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
                                    <input id="alamatProv" type="text" class="form-control" name="alamatProv" value="{{ old('alamatProv') }}" readonly>
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
                                    <select class="form-control" name="jeniskelamin" required="">
                                        <option value=""></option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>            
                        </div>
               


                        <div class="form-row">
                            <label for="tanggalLahir" class="col-md-2 col-form-label">TANGGAL LAHIR</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                           
                                    <input id="tanggalLahir" type="date" class="form-control" name="tanggalLahir" value="{{  old('tanggalLahir') }}" readonly>
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
                                    <input id="tempatLahir" type="text" class="form-control" name="tempatLahir" value="{{  old('tempatLahir') }}" readonly>
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
                                   <select class="form-control" name="agama" required="">
                                        <option value=""></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Khatolik">Khatolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>                             
                                    </select>
                                </div>            
                        </div>                                                                                                                    
                       
                       <div class="form-row">
                            <label for="kewarganegaraan" class="col-md-2 col-form-label">KEWARGANEGARAAN</label> 
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                           
                                    <input id="kewarganegaraan" type="text" class="form-control" name="kewarganegaraan" value="{{  old('kewarganegaraan') }}" readonly>
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
                                    <input id="telepon" type="text" class="form-control" name="telepon" value="{{  old('telepon') }}" readonly>
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
                                    <input id="nisn" type="text" class="form-control" name="nisn" value="{{  old('nisn') }}" readonly>
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
                                    <input id="email" type="text" class="form-control" name="email" value="{{  old('email') }}" readonly>
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
                                    <input id="namaAyah" type="text" class="form-control" name="namaAyah" value="{{  old('namaAyah') }}" readonly>
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
                                     <select class="form-control" name="pendidikanAyah" required="">
                                        <option value=""></option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>            
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>                                                           
                                    </select>                                                   
                                </div> 
                        </div>      
                        
                        <div class="form-row">
                            <label for="pekerjaanAyah" class="col-md-2 col-form-label">PEKERJAAN AYAH</label>
                                <div class="form-group col-md-6">                                                        
                                    <input id="pekerjaanAyah" type="text" class="form-control" name="pekerjaanAyah" value="{{  old('pekerjaanAyah') }}" readonly>
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
                                    <input id="penghasilanAyah" type="text" class="form-control" name="penghasilanAyah" value="{{ old('penghasilanAyah') }}" readonly>
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
                                    <input id="namaIbu" type="text" class="form-control" name="namaIbu" value="{{  old('namaIbu') }}" readonly>
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
                                    <input id="pendidikanIbu" type="text" class="form-control" name="pendidikanIbu" value="{{  old('pendidikanIbu') }}" readonly>
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
                                    <input id="pekerjaanIbu" type="text" class="form-control" name="pekerjaanIbu" value="{{  old('pekerjaanIbu') }}" readonly>
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
                                     <select class="form-control" name="pendidikanIbu" required="">
                                        <option value=""></option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>            
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>                                                           
                                    </select>                                        
                                </div>                                                                           
                        </div>                                                                                                   
                                            
                        <div class="form-row">
                            <label for="jumlahkakak" class="col-md-2 col-form-label">JUMLAH KAKAK</label>
                                <div class="form-group col-md-6 {{ $errors->has('nama') ? ' has-error' : '' }}">                                                           
                                    <input id="jumlahkakak" type="text" class="form-control" name="jumlahkakak" value="{{  old('jumlahkakak') }}" readonly>
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
                                    <input id="jumlahadik" type="text" class="form-control" name="jumlahadik" value="{{  old('jumlahadik') }}" readonly>
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
                                    <input id="npsn" type="text" class="form-control" name="npsn" value="{{  old('npsn') }}" readonly>
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
                                    <input id="namaSekolah" type="text" class="form-control" name="namaSekolah" value="{{  old('namaSekolah') }}" readonly>
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
                                    <input id="kabSekolah" type="text" class="form-control" name="kabSekolah" value="{{ old('kabSekolah') }}" readonly>
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
                                    <input id="provSekolah" type="text" class="form-control" name="provSekolah" value="{{ old('>provSekolah') }}" readonly>
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
                                    <select class="form-control" name="tahunLulus" required="">
                                            <option value=""></option>                                            
                                            <option value="2014">2014</option>   
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option> 
                                            <option value="2020">2020</option>   
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>                                                                       
                                        </select>                                  
                                </div>   
                        </div>    
                        
                        <div class="form-row">
                            <label for="sppSekolah" class="col-md-2 col-form-label">SPP SEKOLAH</label> 
                                <div class="form-group col-md-6">                                                          
                                    <input id="sppSekolah" type="text" class="form-control" name="sppSekolah" value="{{  old('sppSekolah') }}" readonly>
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
                                    <input id="sppSekolahdibayar" type="text" class="form-control" name="sppSekolahdibayar" value="{{  old('sppSekolahdibayar') }}" readonly>
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
                                    <input id="uangPembangunan" type="text" class="form-control" name="uangPembangunan" value="{{  old('uangPembangunan') }}" readonly>
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
                                    <input id="uangPembangunandibayar" type="text" class="form-control" name="uangPembangunandibayar" value="{{  old('uangPembangunandibayar') }}" readonly>
                                    @if ($errors->has('uangPembangunandibayar'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('uangPembangunandibayar') }}</strong>
                                        </span>
                                    @endif                     
                                </div>                                                                                                   
                        </div>          

                        <br>                                           
                         
                        
                  
                     <div class="col-12">
                        <button type="submit" class="btn btn-info" id="submit">
                                    Add
                        </button>
                       
                  </div>
                  </div>
                 
                </div>
              </div>
            </div>

</div>
</form>

  

@endsection