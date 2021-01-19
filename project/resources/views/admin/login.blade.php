@extends('layouts.front')

@section('content')

<form id="loginform" action="{{ route('admin.login.submit') }}" method="POST"> 
@csrf

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (Session::has('message'))
<div class="alert alert-success">
    <ul>
        <li>{{Session::get('message') }}</li>
    </ul>
</div>
@endif


    <div class="container my-5">
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email">
      
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</div>


  </form>

@endsection

