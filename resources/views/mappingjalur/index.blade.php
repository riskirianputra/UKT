
@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 7
    });

} );
</script>
@stop
@extends('layouts.applay')
@section('content')

<div class="col-lg-12 col-lg-offset-1">
  <h3><i class="fa fa-graduation-cap"></i> MAPPING JALUR
    <a href="{{ route('mappingjalur.create') }}" class="btn btn-info pull-right"> + Add </a>                         
      <hr> </h3>
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
							              <th><b>NAMA JALUR</b></th>										
                          	<th><b>LEVEL</b></th>
                            <th><b>JALUR</b></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">                         
                         	<td>{{ $data->jalurmasuk->namaJalur}}</td>
							            <td>{{ $data->level }}</td>
                          <TD>{{ $data->jalur }}</TD>						                          	
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
        </div>
@endsection