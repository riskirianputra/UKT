
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
<!-- <div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header bg-info">JALUR MASUK</div>           
        <div class="card-body" >
         
              <a href="{{ route('jalur_masuk.create') }}" class="btn btn-danger"> +Tambah </a>      
                                         
        </div>
    </div>
  </div>     
</div> -->
<div class="col-lg-12 col-lg-offset-1">
    <div class="col-lg-12 col-lg-offset-1">
    <div class=" font-weight-bold">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Jalur Masuk</li>
      </ol>
</div>
<hr>  
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header bg-info"> <a href="{{ route('jalur_masuk.create') }}" class="btn btn-light pull-right"> + Add </a> </div>     
                <div class="card-body">                            
                  <div class="table-responsive">
                    <table class="table table-secondary table-striped" id="table">
                      <thead>
                        <tr align="center">                          
                          <th><b>KODE JALUR</b></th>
                          <th><b>NAMA JALUR</b></th>                    
                          
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">                         
                          <td>{{ $data->kdJalur }}</td> 
                          <td>{{ $data->namaJalur }}</td>                 
                          
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