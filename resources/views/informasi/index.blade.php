
@section('content')
<!-- <div class="row">
  <div class="col-lg-12">
    <div class="card">
       <div class="card-header bg-info"> INFORMASI</div>         
        <div class="card-body" >
         
              <a href="{{ route('informasi.create') }}" class="btn btn-danger"> +Tambah </a>      
                                         
        </div>
    </div>
  </div>     
</div> -->
@role('admin')
@extends('layouts.applay')

<div class="col-lg-12 col-lg-offset-1">
    <h3><i class="fa fa-info-circle"></i> INFORMASI
      <a href="{{ route('informasi.create') }}" class="btn btn-info pull-right"> + Add </a>             
         <hr></h3>



        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                 <div class="card-header bg-info"> &nbsp;</div>     
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  
                  <div class="table-responsive">
                    <table class="table table-secondary table-striped" id="table">
                      <thead> 
                        <tr align="center">                                                  
                           <th><b>INFORMASI</b></th>                    
                            <th><b>AKSI</b></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr >                         
                       
              <td>{!! $data->isiInformasi !!}</td>                  
                            <td>
                              <div class="btn-group dropright">
                                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fa fa-cogs" aria-hidden="true"></i>
                                  </button>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                  <a class="dropdown-item" href="{{route('informasi.edit', $data->id)}}"> Edit </a>
                                  <form action="{{ route('informasi.destroy', $data->id) }}" class="pull-left"  method="post">
                                      {{ csrf_field() }}
                                      {{ method_field('delete') }}
                                      <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete  </button>                           
                                  </form>                           
                                </div>
                              </div>
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

@endrole

@extends('layouts.app')


@inject('informasi', 'App\Informasi')
@inject('periode', 'App\Periode')

<div class="col-lg-12 col-lg-offset-1">
        
<div class="login100-more" style="background-image: url('images/biru.jpg');">
            <br>          
        <div class="row">  
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12   "></div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
            @forelse($informasi->all() as $period)
              <div class="card text-center">               
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <table>
                    <tr>
                      <td>{!! $period->periode !!}</td>
                      <td></td>
                    </tr>
                  </table>
                  <p></p>
                </div>
              </div>          
            @empty
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p>Belum ada informasi</p>
                </div>
              </div>
            @endforelse
            </div>
        </div> 

        <br>              
                  
        <div class="row">          
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
            @forelse($informasi->all() as $info)
              <div class="card ">               
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <table>
                    <tr>
                      <td>{!! $info->isiInformasi !!}</td>
                      <td></td>
                    </tr>
                  </table>
                  <p></p>
                </div>
              </div>          
            @empty
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p>Belum ada informasi</p>
                </div>
              </div>
            @endforelse
            </div>
        </div>

      <br>

         <div class="row">  
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3   "></div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
            @forelse($informasi->all() as $info)                              
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <table>
                    <tr>
                      <td>{!! $info->pengunguman !!}</td>
                      <td></td>
                    </tr>
                  </table>
                  <p></p>
                </div>               
              </div>
            @empty
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p>Belum ada informasi</p>
                </div>
              </div>
            @endforelse
            </div>
        </div>

      <br>

        <div class="row">  
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3   "></div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
            @forelse($informasi->all() as $info)                          
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <table>
                    <tr>
                      <td>{!! $info->peringatan !!}</td>
                      <td></td>
                    </tr>
                  </table>
                  <p></p>
                </div>                
              </div>
            @empty
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p>Belum ada informasi</p>
                </div>
              </div>
            @endforelse
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  
  @endsection