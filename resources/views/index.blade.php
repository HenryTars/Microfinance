@extends('layout.app')

@section('content')

<div class="card me-10">
<div class="d-flex h-100 text-center text-bg-blue">
<div class="container">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <div class="px-3">
    <h1>KUWA MICROFINANCE COMPANY Ltd.</h1>
    <p class="lead">A Company trusted to offer MICROFINANCE services to every legit customer. Feel comfortable  </p>
    <p class="lead">
        <a href=" {{ url('pages/login') }}" class="btn btn-lg btn-secondary fw-bold border-white text-dark"><b>Login</b></a>
    </p>
    </div>


</div>

</div>  
</div>

@endsection