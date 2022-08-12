@extends('layouts.applay')

@section('content')
<div class="col-lg-12 col-lg-offset-1">
    <div class="col-lg-12 col-lg-offset-1">
    <div class=" font-weight-bold">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bobot</li>
      </ol>
</div>
<hr>


<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">

              <div class="card">
                 <div class="card-header bg-info">&nbsp;</div>
                <div class="card-body">
                  <h4 class="card-title"></h4>                  
                  <div class="table-responsive">
                    <table class="table table-secondary table-striped" id="table">
                     <thead>
                        <tr align="center">
                          <th><b> NAMA MAHASISWA </b></th>                         
                          <th><b> BOBOT </b></th>
                          <th><b> LEVEL </b></th>  
                          <th> <b>AKSI</b></th>                    
                        </tr>
                  </thead>
                      <tbody>
                      @foreach($bobot as $data)
                        <tr align="center">
                          <td>{{$data->mahasiswa->nama}}</td>                                               
                          
                          <td>{{$data->bobot}}</td>
                         
                          <td> {{$data->level}}</td>

                          <td>   
                            <a href="{{route('bobot.cetak_pdf', ['mahasiswa_id' => $data->mahasiswa_id]) }}" class="btn btn-info" target="_blank"><i class="fa fa-download"></i></a>        
                          </td>
                                                  
                        </tr>                        
                      @endforeach
                      </tbody>
                    </table>  
                  </div>           
                </div>
              </div>
            </div>
          </div>
@endsection