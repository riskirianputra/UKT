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
        
<img src="/images/ukt_unand.jpg" width="100%" class="img-fluid img-thumbnail rounded">


@endsection
