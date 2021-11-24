@extends('layouts.master')


@section('title')
    CRUD Users
@endsection

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

            @if(session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
                <h4>Create a new User</h4>
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group ">
                        <label for="name" class="text-uppercase font-weight-bold" >Name</label>
                        <input id="name" name="name" type="text" class="form-control rounded-0" >
                    </div>

                    <div class="form-group ">
                        <label for="email" class="text-uppercase font-weight-bold">Email</label>
                        <input id="email" name="email" type="email" class="form-control rounded-0" >
                    </div>

                    <div class="form-group ">
                        <label for="password" class="text-uppercase font-weight-bold">Password</label>
                        <input id="password" name="password" type="password" class="form-control rounded-0" >
                    </div>

                    <div class="form-group ">
                        <label for="address" class="text-uppercase font-weight-bold">Address</label>
                        <input id="address" name="address" type="text" class="form-control rounded-0" >
                    </div>

                    <br />
                    <button type="submit"  class="btn btn-danger text-uppercase rounded-0 font-weight-bold">Create</button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

@endsection