@extends('layout.app')

@section('content')
<h1 style="text-align: center;">PLEASE LOG IN</h1>
<div class="avatar" style="text-align:center;">
<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
</div>

{!! Form::open(['url' => 'login/submit']) !!}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="mb-3">
                    {{Form::label('Username', 'Username', ['class' => 'form-label'])}}
                    {{Form::text('username', '',['class' => 'form-control'])}}
                </div>

                <div class="mb-3">
                    {{Form::label('password', 'Password', ['class' => 'form-label'])}}
                    {{Form::password('password', ['class' => 'form-control'])}}
                </div>
                
                <div>
                    {{Form::submit('Login', ['class' => 'btn btn-primary mb-2'])}}
                </div>
                @include('inc.warnings')
            </div>  
    </div>
</div>

{!! Form::close() !!}
@endsection