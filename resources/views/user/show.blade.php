@extends('layouts.master')


@section('title')
    CRUD Users
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>

            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                        <th scope="row">{{ $user->id}}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a href="{{ route('user.edit', ['id' => $user->id]) }}">
                                <button class="btn btn-success">Edit</button>
                            </a>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                        </tr>
                        
                    </tbody>
                    
                </table>
            </div>

            <div class="col-2"></div>
        </div>
    </div>


@endsection