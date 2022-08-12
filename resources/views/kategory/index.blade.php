
@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 8
    });

} );
</script>
@stop
@extends('layouts.applay')

@section('content')

<div class="col-sm-12 col-lg-offset-1">
  <h3><i class="fa fa-money"></i> KATEGORY BOBOT <a href="{{ route('kategory.create') }}" class="btn btn-info pull-right"> +Add </a></h3>
    <!--<a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>-->
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
                          	<th>ID KATEGORY</th>
							              <th>NAMA KATEGORY</th>										
                          	<th>PERIODE</th>
                            <th>AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">                         
                         	<td>{{ $data->id }}</td>
							            <td>{{ $data->namaKategory }}</td>
                          <TD>{{ $data->idPeriode }}</TD>				  
                           <td>
                                <div class="btn-group dropright ">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cogs" aria-hidden="true"></i> <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                      <div class="dropdown-menu">                                                                    
                                        <a href="{{route('kategory.edit', $data->id)}}"  class="dropdown-item">Edit</a>
                                       <form action="{{ route('kategory.destroy', $data->id) }}" class="pull-left"  method="post">
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