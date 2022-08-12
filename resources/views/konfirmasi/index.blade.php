@extends('layouts.applay')

@section('content')

        <form action="{{ action('KonfirmasiController@store') }}" method="POST">
          {!! csrf_field() !!}
          @foreach($mahasiswa as $mhs)
            <input type="hidden" name="mahasiswa_id" value="{{ $mhs->id }}">
          @endforeach
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-header bg-info"> KONFIRMASI</div>  
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  
                   <div class="form-row">
                          <label for="idKategory" class="col-md-4 control-label">NO PENDAFTARAN</label>
                            <div class="form-group col-md-8">    
                             @foreach($pendaftaran as $daftar)                                                           
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{$daftar->noPendaftaran}}" readonly=""> @endforeach                                             
                            </div>
                    </div>                                                                                                

                    <div class="form-row">
                      <label for="poin" class="col-md-4 control-label">NAMA</label>
                        <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">         
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
                      <label for="poin" class="col-md-4 control-label">TANGGAL LAHIR</label>
                        <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">         
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
                          <label for="idKategory" class="col-md-4 control-label">PROGRAM STUDI</label>
                            <div class="form-group col-md-8">       
                             @foreach($pendaftaran as $daftar)                                                          
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->namaProdi }}" readonly="">
                             @endforeach                                               
                            </div>
                    </div>                                                                                           

                    <div class="form-row">
                      <label for="poin" class="col-md-4 control-label">JALUR MASUK</label>
                        <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">    
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
                          <label for="idKategory" class="col-md-4 control-label">NISN</label>
                            <div class="form-group col-md-8">              
                            @foreach($pendaftaran as $daftar)                                                  
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->nisn }}" readonly="">  
                            @endforeach                                            
                            </div>
                    </div>                                                 
                            
                    <div class="form-row">
                        <label for="isiKategory" class="col-md-4 control-label">NAMA AYAH</label>
                          <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">    
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
                      <label for="poin" class="col-md-4 control-label">PEKERJAAN AYAH</label>
                        <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}"> 
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
                          <label for="idKategory" class="col-md-4 control-label">PENDIDIKAN AYAH</label>
                            <div class="form-group col-md-8">                                             
                            @foreach($pendaftaran as $daftar)                   
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->pendidikanAyah }}" readonly=""> 
                                @endforeach                                             
                            </div>
                    </div>                                                 
                            
                   <!--  <div class="form-row">
                        <label for="isiKategory" class="col-md-4 control-label">Penghasilan Ayah</label>
                          <div class="form-group col-md-4 {{ $errors->has('nama') ? ' has-error' : '' }}"> 
                          @foreach($pendaftaran as $daftar)                                                           
                              <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->penghasilanAyah }}" readonly="">
                              @endforeach
                                @if ($errors->has('isiKategory'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('isiKategory') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div>    
 -->
                  <div class="form-row">
                      <label for="poin" class="col-md-4 control-label">NAMA IBU</label>
                        <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">    
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
                      <label for="poin" class="col-md-4 control-label">PEKERJAAN IBU</label>
                        <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">       
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
                          <label for="idKategory" class="col-md-4 control-label">PENDIDIKAN IBU</label>
                            <div class="form-group col-md-8">                                                   
                            @foreach($pendaftaran as $daftar)             
                                <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->pendidikanIbu }}" readonly="">
                                @endforeach                                              
                            </div>
                    </div>                                                 
                            
                   <!--  <div class="form-row">
                        <label for="isiKategory" class="col-md-4 control-label">Penghasilan Ibu</label>
                          <div class="form-group col-md-4 {{ $errors->has('nama') ? ' has-error' : '' }}">      
                          @foreach($pendaftaran as $daftar)                                                      
                              <input id="isiKategory" type="text" class="form-control" name="isiKategory" value="{{ $daftar->penghasilanIbu }}" readonly="">
                              @endforeach
                                @if ($errors->has('isiKategory'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('isiKategory') }}</strong>
                                  </span>
                                @endif
                          </div>
                    </div>   -->
                    
        
                  </div>      
                    <a href="#"><div class="card-header bg-info"></div></a>      
                </div>
              </div>
        
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-header bg-info">&nbsp;</div>  
                <div class="card-body">
                  <h4 class="card-title"></h4>     
                  
                   <div class="form-row">
                        <label for="pangan" class="col-md-4 control-label">PANGAN</label>
                          <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">     
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
                        <label for="non_pangan" class="col-md-4 control-label">NON PANGAN</label>
                          <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">     
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
                        <label for="penghasilan_ortu" class="col-md-4 control-label">PENGHASILAN ORANG TUA</label>
                          <div class="form-group col-md-8{{ $errors->has('nama') ? ' has-error' : '' }}">     
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
                        <label for="jumlah_tanggungan" class="col-md-4 control-label">JUMLAH TANGGUNGAN</label>
                          <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">     
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
                        <label for="kepemilikan_rumah" class="col-md-4 control-label">KEPEMILIKAN RUMAH</label>
                          <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">     
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
                        <label for="luas_bangunan" class="col-md-4 control-label">LUAS BANGUNAN</label>
                          <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">     
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
                        <label for="alat_transportasi" class="col-md-4 control-label">ALAT TRANSPORTASI</label>
                          <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">     
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
                        <label for="daya_listrik" class="col-md-4 control-label">DAYA LISTRIK</label>
                          <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">     
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
                        <label for="file" class="col-md-4 control-label">DOKUMEN</label>
                          <div class="form-group col-md-8 {{ $errors->has('nama') ? ' has-error' : '' }}">     
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
                        <label for="isiKategory" class="col-md-4 control-label">data</label>
                          <div class="form-group col-md-4 {{ $errors->has('nama') ? ' has-error' : '' }}"> 
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
                      OK
                    </button>   
                     @foreach($mahasiswa as $data)
                    <a class="btn btn btn-warning" href="{{route('mahasiswa.edit', $data->id)}}"> Edit </a>             
                    @endforeach            

                    <a href="{{route('bobot.cetak_pdf')}}" class="btn btn-info pull-right" target="_blank">CETAK</a>             
                  </div> 
                    <a href="#"><div class="card-header bg-info"></div></a>          
                  </div>                 

              </div>
            </div>
          </div>
        </form>
                                                
@endsection