@extends('layouts.applay')

@section('title', '| Add Role')

@section('content')

<div class='col-lg-12 col-lg-offset-12'>
    <div class=" font-weight-bold">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
             <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </div>
   
    <hr>
    <div class="row" >
        <div class="col-lg-12" >
            <div class="card" >  
              
                <div class="card-body" >  
                    {{ Form::open(array('url' => 'roles')) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                        <h5><b>Assign Permissions</b></h5>
                        <div class='form-group'>
                            @foreach ($permissions as $permission)
                                {{ Form::checkbox('permissions[]',  $permission->id ) }}
                                {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
                            @endforeach
                        </div>
                                            
                
                <div class="col-lg-12">                        
                        {{ Form::submit('Add', array('class' => 'btn btn-info')) }}
                        {{ Form::close() }}        
                  </div> 
            </div> 
        </div>  
    </div>
</div>


@endsection