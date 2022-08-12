@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 5
    });

} );
</script>
@stop
@extends('layouts.applay')

@section('content')


<div class="col-lg-12 col-lg-offset-1">
    <div class=" font-weight-bold">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Fakultas</li>
      </ol>
</div>
<hr>
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                 <div class="card-header bg-info"><a href="{{ route('fakultas.create') }}" class="btn btn-light pull-right"> + Add</a></div>     
                <div class="card-body">               
                  <div class="table-responsive">
                    <table class="table table-secondary table-striped" id="table">
                      <thead>
                        <tr align="center">                                                                              
                            <th><b> NAMA FAKULTAS</b></th>                  
                            <th><b> ID Fakultas Sia </b></th>
                            <th><b> DB Fakultas </b></th>
                            <th><b> URUTAN NIM </b></th>    
                            <th><b> AKSI </b></th>                      
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">                         
                             <td>{{ $data->namaFakultas }}</td>                   
                             <td>{{ $data->idFakultasSia }}</td>
                             <td>{{ $data->dbFakultas }}</td>
                             <td>{{ $data->urutanNim }}</td>
                             <td>
                                <div class="btn-group dropright ">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cogs" aria-hidden="true"></i> <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                      <div class="dropdown-menu">
                                        <a href="{{route('fakultas.show', $data->id)}}" class="dropdown-item">Detail</a>                                                
                                        <a href="{{route('fakultas.edit', $data->id)}}"  class="dropdown-item">Edit</a>
                                        <form action="{{ route('fakultas.destroy', $data->id) }}" class="pull-left"  method="post">
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