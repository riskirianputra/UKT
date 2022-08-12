@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });
} );
</script>
@stop
@extends('layouts.applay')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">          
        <div class="card-body" >         
              <a href="{{ route('mahasiswa_entry.create') }}" class="btn btn-primary"> +Tambah </a>                                                                  
        </div>
    </div>
  </div>     
</div>

        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Pendaftaran</h4>                  
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" id="table">
                      <thead>
                        <tr align="center">      
                            @role('admin')                       
                              <th>NOMOR PENDAFTARAN</th>
                            @endrole
                          <th>KATEGORY</th>  
                          <th>Poin</th>                                                                                                
                          <th>AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">            
                             @role('admin')        
                          <td class="py-1">{{ $data->user->username}}</td>
                          @endrole
                          <td>{{ $data->kategory->namaKategory }}</td>
                          <td>{{ $data->Kategory_detail->poin }}</td>                                                                                                          
                          <td>
                                <div class="btn-group dropright ">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                      <div class="dropdown-menu">                                                                               
                                        <a href="{{route('mahasiswa_entry.edit', $data->id)}}"  class="dropdown-item">Edit</a>
                                       <form action="{{ route('mahasiswa_entry.destroy', $data->id) }}" class="pull-left"  method="post">
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