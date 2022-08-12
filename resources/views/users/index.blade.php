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

<div class=" font-weight-bold">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Users</li>
    </ol>
</div>
       

    <hr>
<div class="row" >
    <div class="col-lg-12" >
        <div class="card" >

             <div class="card-header bg-info">  <a href="{{ route('users.create') }}" class="btn btn-light pull-right"> + Add</a></div>     
            
            <div class="card-body" >                                  
                <div class="table-responsive">
                    <table class="table table-secondary table-striped">
                        <thead>
                            <tr align="center">                               
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>USER ROLES</th>
                                <th>DATE ADDED</th>
                                <th>OPERATIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr align="center">
                                <td>{{ $user->name }}</td>                           
                                <td>{{ $user->email }}</td>
                                <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                <td>{{ $user->created_at->format('F d, Y ') }}</td>                              
                                <td>                        
                                    <div class="btn-group dropright ">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cogs" aria-hidden="true"></i> <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">                                                                  
                                        <a href="{{ route('users.edit', $user->id)}}"  class="dropdown-item">Edit</a>                                 
                                        <form action="{{ route('users.destroy', $user->id) }}" class="pull-left"  method="post">
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