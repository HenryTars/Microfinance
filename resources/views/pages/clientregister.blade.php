@extends('layout.app')

@section('content')
<div class="container-">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>CLIENT INFORMATION</h3>
                </div>

                <div class="card-footer">
                <main class="form-signin w-100 m-auto">
            <!-- register form begins -->
            {!! Form::open(['url' => 'clients']) !!}

            @csrf
            <div class="mb-3">
                {{Form::label('firstname', 'First name', ['class' => 'form-label'])}}
                {{Form::text('firstname', '',['class' => 'form-control'], ['id'=>'floatingInput'])}}
            </div>

            <div class="mb-3">
                {{Form::label('middlename', 'Middle name', ['class' => 'form-label'])}}
                {{Form::text('middlename', '',['class' => 'form-control'])}}
            </div>

            <div class="mb-3">
                {{Form::label('lastname', 'Last name', ['class' => 'form-label'])}}
                {{Form::text('lastname', '',['class' => 'form-control'])}}
            </div>

            <div class="mb-3">
                {{Form::label('addres', 'Address', ['class' => 'form-label'])}}
                {{Form::text('address', '',['class' => 'form-control'])}}
            </div>
            
            {{Form::submit('Register', ['class' => 'btn btn-primary mb-2'])}}                  
            
            {!! Form::close() !!}
            <!-- register form ends here -->            
                   </main>
                </div>
            </div>
        </div>
    </div>
</div>

    
        
@endsection