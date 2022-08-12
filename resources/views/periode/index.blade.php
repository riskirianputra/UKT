
@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength":
    });

} );
</script>
@stop
@extends('layouts.applay')

@section('content')
<!-- <div class="row">
  <div class="col-lg-12">
    <div class="card">
       <div class="card-header bg-info"> PERIODE</div>          
        <div class="card-body" >         
              <a href="{{ route('periode.create') }}" class="btn btn-danger"> +Tambah </a>                                               
        </div>
    </div>
  </div>     
</div> -->

<div class="col-lg-12 col-lg-offset-1">
    <div class="col-lg-12 col-lg-offset-1">
    <div class=" font-weight-bold">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Periode</li>
      </ol>
</div>
<hr>

        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                 <div class="card-header bg-info">   <a href="{{ route('periode.create') }}" class="btn btn-light pull-right"> + Add </a>             </div>     
                <div class="card-body">                                   
                  <div class="table-responsive">
                    <table class="table table-secondary table-striped" id="table">    
                    <thead>                 
                        <tr align="center">                                                     
                             <th><b> NAMA PERIODE</b></th>                    
                             <th><b> TANGGAL PEMBUKAAN</b></th>
                             <th><b> TANGGAL DITUTUP</b></th>
                             <th><b> STATUS</b></th>                            
                             <th><b> AKSI</b></th>
                        </tr>                     
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">                         
                          <td>{{ $data->namaPeriode }}</a></td>
                          <td>{{ $data->tglBuka }}</td> 
                          <td>{{ $data->tglTutup }}</td>                                      
                          <td>  
                                @if($data->status == 'aktif')
                              <label class="badge badge-warning">Aktif</label>
                                @else
                            <label class="badge badge-success">NonAktif</label>
                                @endif
                          </td>                    
                           <td>                             
                                <div class="btn-group dropdown">
                                  <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i></button>                                  
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                      
                                      @if($data->status == 'aktif')
                                        <form action="{{ route('periode.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                          {{ method_field('put') }}
                                            <button class="dropdown-item" onclick="return confirm('Anda yakin periode ini sudah tidak aktif?')"> Tidak Aktif </button>                                
                                        </form>
                                      @endif                                        
                                        <form action="{{ route('periode.destroy', $data->id) }}" class="pull-left"  method="post">
                                          {{ csrf_field() }}
                                          {{ method_field('delete') }}
                                            <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete </button>                                
                                        </form>                                                                          
                                    </div>
                                </div>                                                                                      
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection