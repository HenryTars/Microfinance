@extends('layout.app')

@section('content') 
<div class="d-flex flex-nowrap">
  
</div>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Client
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              Staff
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Documents
            </a>
          </li>      
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @include('inc.warnings')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clients</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!--addClient Button -->
          <a href="{{ url('clients/create') }}">
          <button type="button" class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              addClient
          </Button> 
          </a>            
          <!-- end -->
        </div>
      </div>

      <h2>Client details</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th ">Client ID</th>
              <th>First Name</th>
              <th>Middle name</th>
              <th>Last name</th>
              <th>Address</th>
              <th>Edit</th>
              <th>Delete</th>

            </tr>
          </thead>
          <tbody>
          @if(count($clients) > 0)
            @foreach($clients as $client)
            <tr>
              <td>{{$client->id}}</td>
              <td>{{$client->firstname}}</td>
              <td>{{$client->middlename}}</td>
              <td>{{$client->lastname}}</td>
              <td>{{$client->address}}</td>
              <td>
                  <a href="{{ url('clients/'.$client->id.'/edit') }}" class="btn btn-small btn-primary">Edit</a>
              </td>
              <td>
                <form action="{{ url('clients/'.$client->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                    <button type="submit" class="btn btn-small btn-danger">Delete</a>
                </form>
              </td>
              </tr>
            @endforeach
          @endif  
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
@endsection