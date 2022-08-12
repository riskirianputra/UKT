
@extends('layouts.applay')

@section('content')

<form method="POST" action="{{ route('bobot.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                            
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Penghasilan Orang Tua</label>
                                <select class="form-control" name="penghasilanOrtu" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option> KURANG DARI Rp 1.500.000 </option>
                                    <option>Rp. 1.500.000 - Rp. 3.000.000</option>
                                    <option>Rp. 3.000.000 - Rp. 4.500.000</option>
                                    <option>Rp. 4.500.000 - Rp. 6.000.000</option>
                                    <option>Rp. 6.000.000 - Rp. 8.000.000</option>
                                    <option>Rp. 8.000.000 - Rp. 10.000.000</option>
                                    <option> LEBIH DARI Rp 10.000.000 </option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jumlah Tanggungan</label>
                                <select class="form-control" name="jmlTanggungan" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option>Lebih dari 6</option>
                                    <option>6</option>
                                    <option>5</option>
                                    <option>4</option>
                                    <option>3</option>
                                    <option>2</option>
                                    <option>1</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kepemilikan Rumah</label>
                                <select class="form-control" name="kepemilikanRumah" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option>Menumpang / Rumah Bersama</option>
                                    <option>Mengontrak / Menyewa</option>
                                    <option>Milik Sendiri dan Lantai tanah</option>
                                    <option>Milik Sendiri Semi Permanen</option>
                                    <option>Milik Sendiri 1 Lantai</option>
                                    <option>Milik Sendiri Permanen Lebih 1 Lantai</option>
                                    <option>Milik Sendiri Lebih Dari 1 Rumah</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Luas Bangunan</label>
                                <select class="form-control" name="luasBangunan" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option>36  m2 - 60 m2</option>
                                    <option>61 m2 - 90 m2</option>
                                    <option>91 m2 - 120 m2</option>
                                    <option>121 m2 - 150 m2</option>
                                    <option>151  m2 - 180 m2</option>
                                    <option>Lebih dari 180 m2</option>                                    
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Alat Transportasi</label>
                                <select class="form-control" name="alatTransportasi" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option>Tidak Memiliki</option>
                                    <option>Roda Dua / Perahu 1 unit</option>
                                    <option>Roda Dua / Perahu Lebih dari 1 Unit</option>
                                    <option>Roda Empat / Perahu 1 unit</option>
                                    <option>Roda Empat / Perahu 2 unit</option>
                                    <option>Roda Empat / Perahu Lebih dari 2 unit</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Daya Listrik</label>
                                <select class="form-control" name="dayaListrik" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option>Rp. 50.000</option>
                                    <option>Rp. 51.000 - Rp. 100.000 </option>
                                    <option>Rp. 101.000 - Rp. 200.000 </option>
                                    <option>Rp. 201.000 - Rp. 300.000</option>
                                    <option>Rp. 301.000 - Rp. 450.000</option>
                                    <option>Rp. 451.000 - Rp. 600.000</option>
                                    <option>Lebih Dari Rp. 600.000 </option>
                                   
                                </select>   
                        </div>

                         <div class="form-group">
                            <label for="exampleFormControlSelect1">LEVEL</label>
                                <select class="form-control" name="level" id="exampleFormControlSelect1">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>                                   
                                </select>   
                        </div>
                        
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                       <a href="/bobot" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>

  

@endsection