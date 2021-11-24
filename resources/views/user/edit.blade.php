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
                <h4>Edit User</h4>
                <form action="{{ route('user.update', ['id' => $user->id]) }}" method="post">
                    @csrf
                    @method('PUT')


                    <div>
                        <label for="name"  class="text-uppercase font-weight-bold">Name</label>
                        <input id="name" name="name" type="text" value="<?php echo  $user->name ?>" class="form-control rounded-0">
                    </div>

                    <div>
                        <label for="email"  class="text-uppercase font-weight-bold">Email</label>
                        <input id="email" name="email" type="email" value="<?php echo  $user->email ?>" class="form-control rounded-0">
                    </div>

                    <div>
                        <label for="address"  class="text-uppercase font-weight-bold">Address</label>
                        <input id="address" name="address" type="text" value="<?php echo  $user->address ?>" class="form-control rounded-0">
                    </div>

                    <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">Update</button>
                </form>
            </div>

            <div class="col-2"></div>
        </div>
    </div>


@endsection