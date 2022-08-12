@inject('informasi', 'App\Informasi')
@inject('periode', 'App\Periode')
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