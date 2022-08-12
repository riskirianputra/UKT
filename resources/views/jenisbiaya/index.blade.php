
@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

} );
</script>
@stop
@extends('layouts.applay')

@section('content')
<!-- <div class="row">
  <div class="col-lg-12">
    <div class="card">
       <div class="card-header bg-info">JENIS BIAYA</div>             
        <div class="card-body" >
         
              <a href="{{ route('jenisbiaya.create') }}" class="btn btn-danger"> +Tambah </a>      
                                         
        </div>
    </div>
  </div>     
</div> -->
<div class="col-lg-12 col-lg-offset-1">
    <div class="col-lg-12 col-lg-offset-1">
    <div class=" font-weight-bold">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Jenis Biaya</li>
      </ol>
</div>
<hr>  
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
               <div class="card-header bg-info">  <a href="{{ route('jenisbiaya.create') }}" class="btn btn-light pull-right"> + Add </a> </div>     
                <div class="card-body">
                  
                  
                  <div class="table-responsive">
                    <table class="table table-secondary table-striped" id="table">
                      <thead>
                        <tr align="center">                          
                            <th><b>ID JENIS BIAYA</b></th>
                             <th><b>JENIS BIAYA</b></th>
                             <th><b>AKSI</b></th>                 
                            
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">                         
                          <td>{{ $data->idJenisbiaya }}</td>
                          <td>{{ $data->jenisBiaya }}</td>
                           <td>
                                <div class="btn-group dropright ">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cogs" aria-hidden="true"></i> <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                      <div class="dropdown-menu">                                                                           
                                        <a href="{{ route('jenisbiaya.edit', $data->idJenisbiaya) }}"  class="dropdown-item">Edit</a>
                                       <form action="{{ route('jenisbiaya.destroy', $data->idJenisbiaya) }}" class="pull-left"  method="post">
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
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection