<!DOCTYPE html>
<html>
<head>
	<title>Laporan bobot</title>
	
</head>

<body>


	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
hr.style2 {
	border-top: 3px double #8c8b8b;
	
}
	
	</style>

	<center>
		 <body bgcolor="white">		 
  <h2>  UNIVERSITAS ANDALAS </h2>
  <h2> LAPORAN HASIL UANG KULIAH TUNGGAL </h2> 
 <hr class="style2" />	
	</center>
	<br>
				<fieldset>
				 <!--  	<legend>UKT</legend> -->
				<p>
					<label>No Pendaftaran &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</label>
	           	 	@foreach($pendaftaran as $daftar)                                                           
	                   	{{$daftar->noPendaftaran}}
	                @endforeach 
                </p>        

                <p>
					<label>Angkatan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</label>
	           	 	@foreach($pendaftaran as $daftar)                                                           
	                   	{{ $daftar->angkatan }}
	                @endforeach 
                </p>        

                <p>
					<label>Nama Peserta &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</label>
	           	 	@foreach($pendaftaran as $daftar)                                                           
	                   	{{ $daftar->namaPeserta }}
	                @endforeach 
                </p>        

                <p>
					<label>Tanggal Lahir &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</label>
	           	 	@foreach($pendaftaran as $daftar)                                                           
	                   	{{ $daftar->tanggalLahir }}
	                @endforeach 
                </p>              

                <p>
					<label>Program Studi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</label>
	           	 	@foreach($pendaftaran as $daftar)                                                           
	                   	{{ $daftar->namaProdi }}
	                @endforeach 
                </p>                       

                <p>
					<label >NISN &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</label>
	           	 	@foreach($pendaftaran as $daftar)                                                           
	                   	{{ $daftar->nisn }}
	                @endforeach 
                </p>  

                <p>
					<label >Jalur &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:</label>
	           	 	@foreach($pendaftaran as $daftar)                                                           
	                   	{{ $daftar->jalur_masuk->namaJalur }}
	                @endforeach 
                </p>  

                <p>
					<label>Penghasilan Orang Tua &nbsp; &nbsp; :</label>
	           	 	@foreach($mahasiswa as $siswa)                                                           
	                   {{ $siswa->getpenghasilanortu() }}
	                @endforeach 
                </p>  

                <p>
					<label>Luas Bangunan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</label>
	           	 	@foreach($mahasiswa as $siswa)                                                           
	                   	{{ $siswa->getLuasbangunan() }}
	                @endforeach 
                </p>  

                 <p>
					<label>Daya Listrik &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</label>
	           	 	@foreach($mahasiswa as $siswa)                                                           
	                   	{{ $siswa->getDayaListrikList() }}
	                @endforeach 
                </p>  

                 <p>
					<label>Jumlah Tanggungan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</label>
	           	 	@foreach($mahasiswa as $siswa)                                                           
	                   {{ $siswa->getjumlahtanggungan() }}
	                @endforeach 
                </p>  

                 <p>
					<label>Kepemilikan Rumah &nbsp; &nbsp; &nbsp; &nbsp; :</label>
	           	 	@foreach($mahasiswa as $siswa)                                                           
	                   	{{ $siswa->getkepemilikanrumah() }}
	                @endforeach 
                </p>  

                <p>
					<label>Alat trasnportasi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</label>
	           	 	@foreach($mahasiswa as $siswa)                                                           
	                   	{{ $siswa->getAlattrans() }}
	                @endforeach 
                </p>               

                		<!-- <div class="form-row">                                                                                    
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
 -->
                
                </fieldset>      			 			

</body>
</html>