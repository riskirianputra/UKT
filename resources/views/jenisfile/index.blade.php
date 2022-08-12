
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
                          	<th><b>ID JENIS FILE</b></th>
							              <th><b>NAMA DOKUMEN</b></th>										
                          	<th><b>KETERANGAN</b></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">                         
                         	<td>{{ $data->id }}</td>
							            <td>{{ $data->nama_dokumen }}</td>
                          <TD>{{ $data->keterangan }}</TD>						                          	
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