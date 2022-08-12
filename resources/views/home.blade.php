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


          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics">
                 <div class="card-header bg-secondary">MAHASISWA BIDIK MISI SNMPTN</div>
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-secondary icon-lg"></i>
                    </div>
                    <div class="float-right">
                    
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0"> {{$pendaftaran->count()}} </h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">    
                  <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total Mahasiswa Bidik Misi Snmptn              
                  </p>

                </div>
                <a href="#"><div class="card-header bg-secondary"></div></a>
              </div>

            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics">
                 <div class="card-header bg-secondary">MAHASISWA NON BIDIK MISI</div>
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-secondary icon-lg"></i>
                    </div>
                    <div class="float-right">
                   
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0">  {{$jalurmasuk->count()}}  </h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">     
                  <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total Mahasiswa Non bidik Misi     
                  </p>
                </div>
                <a href="#"><div class="card-header bg-secondary"></div></a>
              </div>
            </div>

             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-header bg-info">MAHASISWA SUDAH ENTRI </div>
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-book text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                     
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0"> {{$mahasiswa->count()}} </h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total Mahasiswa Entri
                  </p>
                </div>
                <a href="#"><div class="card-header bg-info"></div></a>
              </div>
            </div>
          </div>
            
          <div class="row">                      
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-header bg-info">MAHASISWA BELUM ENTRI </div>
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-book text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                     
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0"></h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total Mahasiswa Belum Entri
                  </p>
                </div>
                <a href="#"><div class="card-header bg-info"></div></a>
              </div>
            </div>
                
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-header bg-success">MAHASISWA SUDAH ENTRI VALIDASI </div>
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-book text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                     
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0"></h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total Mahasiswa Sudah Entri Validasi
                  </p>
                </div>
                <a href="#"><div class="card-header bg-success"></div></a>
              </div>
            </div>

             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-header bg-success">MAHASISWA BELUM ENTRI VALIDASI </div>
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-book text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                     
                      <div class="fluid-container">
                        <h1 class="font-weight-medium text-right mb-0"></h1>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total Mahasiswa Belum Entri Validasi
                  </p>
                </div>
                <a href="#"><div class="card-header bg-success"></div></a>
              </div>
            </div>
          </div>
  @endrole      

        @role('Mahasiswa')
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-header bg-info" align="center">LANGKAH LANGKAH PENGISIAN UKT</div>
                  <div class="card-body">
                  
                  <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-3 grid-margin stretch-card">
                      <div class="card card-statistics">
                        <div class="card-body">
                          <div class="clearfix">1. 
                           <!-- <a href="{{url('upload')}}" target="blank"> --> <i class="fa fa-upload text-success"> UPLOAD DOKUMEN </i>  </a>                                   
                          </div>
                        </div>
                      </div>
                    </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 grid-margin stretch-card">
                    <div class="card card-statistics">
                      <div class="card-body">
                        <div class="clearfix"> 2.                
                          <!-- <a href="{{url('mahasiswa')}}" target="blank"> --> <i class="fa fa-id-card text-danger"> DATA KELUARGA </i> </a>                                    
                        </div>                  
                      </div>                                                    
                    </div>
                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 grid-margin stretch-card">
                    <div class="card card-statistics">
                      <div class="card-body">
                        <div class="clearfix">3.
                          <!-- <a href="{{url('konfirmasi')}}" target="blank"> --> <i class="fa fa-check text-primary"> KONFIRMASI DATA </i> </a>                                  
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-3 grid-margin stretch-card">
                    <div class="card card-statistics">
                      <div class="card-body">
                        <div class="clearfix">4.
                          <!-- <a href="{{url('cetak')}}" target="blank"> --> <i class="fa fa-print text-success"> CETAK BUKTI </i> </a>                                  
                        </div>
                      </div>
                    </div>
                  </div>
                
                </div>
<br>
                <a href="{{url('upload')}}"> <div class="btn btn-info"> MULAI PENGISIAN </div> </a> 

                          <div class="clearfix">
                        <div align="center">
                      <h2> </h2>   
                    </div>                                      
                  </div>
                </div>
              </div>
            </div>
          </div> 

           

        @endrole



 <!--
@if(Auth::user()->level == 'user')
 <form method="POST" action="{{ route('mahasiswa.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <h4><b>BIODATA DIRI</b></h4>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('nama') ? ' has-error' : '' }}">
                               <label for="nama" class="col-md-4 control-label">NAMA</label>
                                     <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required >
                                     @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="npm" class="col-md-4 control-label">NPM</label>
                                   <input id="npm" type="text" class="form-control" name="npm" value="{{ old('npm') }}" maxlength="8" required>
                                @if ($errors->has('npm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('npm') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="noPendaftaran" class="col-md-4 control-label">NO. PENDAFTARAN</label>
                                    <input id="noPendaftaran" type="text" class="form-control" name="noPendaftaran" value="{{ old('noPendaftaran') }}" required>
                                @if ($errors->has('noPendaftaran'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('noPendaftaran') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                       
                          <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('nisn') ? ' has-error' : '' }}">
                               <label for="nisn" class="col-md-4 control-label">NISN</label>
                                     <input id="nisn" type="text" class="form-control" name="nisn" value="{{ old('nisn') }}" required >
                                     @if ($errors->has('nisn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nisn') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="jurusan" class="col-md-4 control-label">JURUSAN</label>
                                   <input id="jurusan" type="text" class="form-control" name="jurusan" value="{{ old('jurusan') }}" maxlength="8" required>
                                @if ($errors->has('jurusan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jurusan') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="alamat" class="col-md-4 control-label">ALAMAT</label>
                                    <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required>
                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                          <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('agama') ? ' has-error' : '' }}">
                               <label for="agama" class="col-md-4 control-label">AGAMA</label>
                                     <input id="agama" type="text" class="form-control" name="agama" value="{{ old('agama') }}" required >
                                     @if ($errors->has('agama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agama') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="telepon" class="col-md-4 control-label">NO TELEPON / HP</label>
                                   <input id="telepon" type="text" class="form-control" name="telepon" value="{{ old('telepon') }}" maxlength="8" required>
                                @if ($errors->has('telepon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="level" class="col-md-4 control-label">Bidik Misi</label>
                                    <select class="form-control" name="bidikMisi" required="">
                                <option value=""></option>
                                <option value="IYA">Iya</option>
                                <option value="TIDAK">Tidak</option>
                            </select>
                            </div>
                        </div>


                         <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
                               <label for="tgl_lahir" class="col-md-4 control-label">TANGGAL LAHIR</label>
                                     <input id="tgl_lahir" type="text" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required >
                                     @if ($errors->has('tgl_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="tempat_lahir" class="col-md-4 control-label">TEMPAT LAHIR</label>
                                   <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}" maxlength="8" required>
                                @if ($errors->has('tempat_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="level" class="col-md-4 control-label">JENIS KELAMIN</label>
                            <select class="form-control" name="jk" required="">
                                <option value=""></option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            </div>
                        </div>



                    <br>                    
                    <h4><b> STATUS EKONOMI KELUARGA </b></h4>
                    <br>

                         <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('namaAyah') ? ' has-error' : '' }}">
                               <label for="namaAyah" class="col-md-4 control-label">NAMA AYAH</label>
                                     <input id="namaAyah" type="text" class="form-control" name="namaAyah" value="{{ old('namaAyah') }}" required >
                                     @if ($errors->has('namaAyah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaAyah') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="pekerjaanAyah" class="col-md-4 control-label">PEKERJAAN AYAH</label>
                                   <input id="pekerjaanAyah" type="text" class="form-control" name="pekerjaanAyah" value="{{ old('pekerjaanAyah') }}" maxlength="8" required>
                                @if ($errors->has('pekerjaanAyah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pekerjaanAyah') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="penghasilanAyah" class="col-md-4 control-label">PENGHASILAN AYAH</label>
                                    <input id="penghasilanAyah" type="text" class="form-control" name="penghasilanAyah" value="{{ old('penghasilanAyah') }}" required>
                                @if ($errors->has('penghasilanAyah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penghasilanAyah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>       


                        <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('namaIbu') ? ' has-error' : '' }}">
                               <label for="namaIbu" class="col-md-4 control-label">NAMA IBU</label>
                                     <input id="namaIbu" type="text" class="form-control" name="namaIbu" value="{{ old('namaIbu') }}" required >
                                     @if ($errors->has('namaIbu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaIbu') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="pekerjaanIbu" class="col-md-4 control-label">PEKERJAAN IBU</label>
                                   <input id="pekerjaanIbu" type="text" class="form-control" name="pekerjaanIbu" value="{{ old('pekerjaanIbu') }}" maxlength="8" required>
                                @if ($errors->has('pekerjaanIbu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pekerjaanIbu') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="penghasilanIbu" class="col-md-4 control-label">PENGHASILAN IBU</label>
                                    <input id="penghasilanIbu" type="text" class="form-control" name="penghasilanIbu" value="{{ old('penghasilanIbu') }}" required>
                                @if ($errors->has('penghasilanIbu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penghasilanIbu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>       

                      

                         <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('pangan') ? ' has-error' : '' }}">
                               <label for="pangan" class="col-md-4 control-label">PANGAN</label>
                                     <input id="pangan" type="text" class="form-control" name="pangan" value="{{ old('pangan') }}" required >
                                     @if ($errors->has('pangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pangan') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="non_pangan" class="col-md-4 control-label">NON PANGAN</label>
                                   <input id="non_pangan" type="text" class="form-control" name="non_pangan" value="{{ old('non_pangan') }}" maxlength="8" required>
                                @if ($errors->has('non_pangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('non_pangan') }}</strong>
                                    </span>
                                @endif
                            </div>

                           <div class="form-group col-md-4">
                                <label for="jumlah_tanggungan" class="col-md-4 control-label">JUMLAH TANGGUNGAN</label>
                                   <input id="jumlah_tanggungan" type="text" class="form-control" name="jumlah_tanggungan" value="{{ old('jumlah_tanggungan') }}" maxlength="8" required>
                                @if ($errors->has('jumlah_tanggungan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_tanggungan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                          <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('kepemilikan_rumah') ? ' has-error' : '' }}">
                               <label for="kepemilikan_rumah" class="col-md-4 control-label">kepemilikan_rumah</label>
                                     <input id="kepemilikan_rumah" type="text" class="form-control" name="kepemilikan_rumah" value="{{ old('kepemilikan_rumah') }}" required >
                                     @if ($errors->has('kepemilikan_rumah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kepemilikan_rumah') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="luas_bangunan" class="col-md-4 control-label">LUAS BANGUNAN</label>
                                   <input id="luas_bangunan" type="text" class="form-control" name="luas_bangunan" value="{{ old('luas_bangunan') }}" maxlength="8" required>
                                @if ($errors->has('luas_bangunan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('luas_bangunan') }}</strong>
                                    </span>
                                @endif
                            </div>

                           <div class="form-group col-md-4">
                                <label for="alat_transportasi" class="col-md-4 control-label">ALAT TRANSPORTASI</label>
                                   <input id="alat_transportasi" type="text" class="form-control" name="alat_transportasi" value="{{ old('alat_transportasi') }}" maxlength="8" required>
                                @if ($errors->has('alat_transportasi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alat_transportasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-row">
                            <div class="form-group col-md-4 {{ $errors->has('daya_listrik') ? ' has-error' : '' }}">
                               <label for="daya_listrik" class="col-md-4 control-label">DAYA LISTRIK</label>
                                     <input id="daya_listrik" type="text" class="form-control" name="daya_listrik" value="{{ old('daya_listrik') }}" required >
                                     @if ($errors->has('daya_listrik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('daya_listrik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>                    
                        <h4> <b> HASIL </b></h4>
                        <br>


                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="bobot" class="col-md-6 control-label">BOBOT</label>
                                   <input id="bobot" type="text" class="form-control" name="bobot" value="{{ old('bobot') }}" maxlength="8" required>
                                @if ($errors->has('bobot'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bobot') }}</strong>
                                    </span>
                                @endif
                            </div>

                           <div class="form-group col-md-6">
                                <label for="level" class="col-md-6 control-label">LEVEL</label>
                                   <input id="level" type="text" class="form-control" name="level" value="{{ old('level') }}" maxlength="8" required>
                                @if ($errors->has('level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('level') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                          <div class="form-row">

                            <div class="form-group col-md-6 {{ $errors->has('pendaftaran_id') ? ' has-error' : '' }}">
                                <label for="pendaftaran_id" class="col-md-6 control-label">User Login</label>
                                    <select class="form-control" name="pendaftaran_id" required="">
                                <option value="">(Cari User)</option>
                                @foreach($pendaftaran as $pendaftaran)
                                    <option value="{{$pendaftaran->id}}">{{$pendaftaran->namaPeserta}}</option>
                                @endforeach
                            </select>
                            </div>

                            

                            <div class="form-group col-md-6">
                                <label for="idJalur" class="col-md-6 control-label">ID Jalur</label>
                                  <select class="form-control" name="idJalur" required="">
                                <option value="">(Cari Jalur)</option>
                                @foreach($jalurmasuk as $jalur)
                                    <option value="{{$jalur->idJalur}}">{{$jalur->namaJalur}}</option>
                                @endforeach
                            </select>
                            </div>

                           
                        </div>                                                                                       


                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        <a href="{{route('mahasiswa.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>

@endif
-->


@endsection
