@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('registrasi.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header bg-info"> REGISTRASI </div>  
                    <div class="card-body">
                         
                        <div class="form-row">     
                          <label for="nomorSeleksiMandiri" class="col-md-4 col-form-label">NOMOR PESERTA SELEKSI MANDIRI</label>
                            <div class="form-group col-md-6">                                   
                                <input id="nomorSeleksiMandiri" type="text" class="form-control" name="nomorSeleksiMandiri" value="" >
                            </div>              
                        </div>

                        <div class="form-row">     
                          <label for="namaSeleksiMandiri" class="col-md-4 col-form-label">NAMA PESERTA SELEKSI MANDIRI</label>
                            <div class="form-group col-md-6">                                   
                                <input id="namaSeleksiMandiri" type="text" class="form-control" name="namaSeleksiMandiri" value="" >
                            </div>              
                        </div>

                        <div class="form-row">     
                          <label for="jeniskelamin" class="col-md-4 col-form-label">JENIS KELAMIN</label>
                            <div class="form-group col-md-6">                                   
                                <input id="jeniskelamin" type="text" class="form-control" name="jeniskelamin" value="" >
                            </div>              
                        </div>

                        <div class="form-row">     
                          <label for="nomorhp" class="col-md-4 col-form-label">NOMOR HP</label>
                            <div class="form-group col-md-6">                                   
                                <input id="nomorhp" type="text" class="form-control" name="nomorhp" value="" >
                            </div>              
                        </div>

                        <div class="form-row">     
                          <label for="email" class="col-md-4 col-form-label">EMAIL</label>
                            <div class="form-group col-md-6">                                   
                                <input id="email" type="text" class="form-control" name="email" value="" >
                            </div>              
                        </div>

                        <div class="form-row">     
                          <label for="asalsekolah" class="col-md-4 col-form-label">ASAL SEKOLAH</label>
                            <div class="form-group col-md-6">                                   
                                <input id="asalsekolah" type="text" class="form-control" name="asalsekolah" value="" >
                            </div>              
                        </div>

                        <div class="form-row">     
                          <label for="prodi" class="col-md-4 col-form-label">PROGRAM STUDI</label>
                            <div class="form-group col-md-6">                                   
                                <input id="prodi" type="text" class="form-control" name="prodi" value="" >
                            </div>              
                        </div>

                        <div class="form-row">         
                            <label for="kategoriseleksi" class="col-md-4 col-form-label">KATEGORI SELEKSI</label>        
                              <div class="form-group col-md-6">                                
                                  <select class="form-control" name="kategoriseleksi" id="jumlah_Tanggungan">
                                    <option></option>
                                    <option value="1">SELEKSI MANDIRI BERDASARKAN KEMAMPUAN AKADEMIK (SMBKA)</option>
                                    <option value="2">SELEKSI MANDIRI BERDASARKAN PRESTASI UNGGUL (SMBPU)</option>
                                    
                                </select>
                              </div>
                          </div>

                           <div class="form-row">         
                            <label for="kip_kuliah" class="col-md-4 col-form-label">APAKAH ANDA PEMEGANG KARTU INDONESIA PINTAR KULIAH</label>        
                              <div class="form-group col-md-6">                                
                                  <select class="form-control" name="kip_kuliah" id="jumlah_Tanggungan">
                                    <option></option>
                                    <option value="1">IYA</option>
                                    <option value="2">TIDAK</option>
                                    
                                </select>
                              </div>
                          </div>

                       
                          
                                                                
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
</form>       
@endsection