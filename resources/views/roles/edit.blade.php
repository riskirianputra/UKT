@extends('layouts.applay')

@section('title', '| Edit Role')

@section('content')

<div class='col-lg-12 col-lg-offset-12'>
   <div class=" font-weight-bold">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
             <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </div>
    <hr>    
    <div class="row" >
        <div class="col-lg-12" >
            <div class="card" > 
               
                <div class="card-body" >   
                    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Role Name') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                        <h5><b>Assign Permissions</b></h5>
                            @foreach ($permissions as $permission)
                                {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                                {{Form::label($permission->name, ucfirst($permission->name)) }}<br>
                            @endforeach
                            <br>
                                                            
                
                <div class="col-lg-12">                        
                        {{ Form::submit('Edit', array('class' => 'btn btn-info')) }}
                        {{ Form::close() }}           
                  </div> 
            </div> 
        </div>  
    </div>
</div>

@endsection
