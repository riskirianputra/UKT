{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.applay')

@section('title', '| Add User')

@section('content')



<div class='col-lg-12 col-lg-offset-12'>
    <div class=" font-weight-bold">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
             <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </div>
   <hr>    
    <div class="row" >
        <div class="col-lg-12" >
            <div class="card" >
                <div class="card-body" >  
                    {{ Form::open(array('url' => 'users')) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                    </div>   

                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', '', array('class' => 'form-control')) }}
                    </div>

                    <div class='form-group'>
                        @foreach ($roles as $role)
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                        @endforeach
                    </div>

                    <div class="form-group">
                        {{ Form::label('password', 'Password') }}<br>
                        {{ Form::password('password', array('class' => 'form-control')) }}

                    </div>

                    <div class="form-group">
                        {{ Form::label('password', 'Confirm Password') }}<br>
                        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

                    </div>

            
                 <div class="col-lg-12">
                        
                    {{ Form::submit('Add', array('class' => 'btn btn-info')) }}

                    {{ Form::close() }}
                  </div> 
            </div> 

        </div>
    </div>        
</div>
</div>
@endsection