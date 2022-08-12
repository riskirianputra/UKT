{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.applay')

@section('title','| Roles')

@section('content')

<div class=" font-weight-bold">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Roles</li>
    </ol>
</div>


    <hr>
<div class="row" >
    <div class="col-lg-12">
        <div class="card">        
            <div class="card-header bg-info"><a href="{{ route('roles.create') }}" class="btn btn-light pull-right"> + Add</a></div>  
            <div class="card-body">               
                <div class="table-responsive">
                    <table class="table table-secondary table-striped">
                        <thead>
                            <tr align="center">                                
                                <th><b>ROlE</b></th>
                                <th><b>PERMISSIONS</b></th>
                                <th><b>OPERATIONS</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr align="center">
                                <td>{{ $role->name }}</td>
                                <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                                <td>                            
                                    <div class="btn-group dropright ">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cogs" aria-hidden="true"></i> <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">                                                                  
                                        <a href="{{ route('roles.edit', $role->id)}}"  class="dropdown-item">Edit</a>                                 
                                        <form action="{{ route('roles.destroy', $role->id) }}" class="pull-left"  method="post">
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
            </div> 
        </div>  
    </div>
</div>
@endsection