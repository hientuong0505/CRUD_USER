@extends('layouts.master')


@section('title')
    CRUD Users
@endsection

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success')}}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>

            <div class="col-9">
                <table class="table  table-striped table-hover">
                    <thead class="table thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('user.show', ['id' => $user->id]) }}">
                                        <button class="btn btn-primary">Show</button>
                                    </a>

                                    <a href="{{ route('user.edit', ['id' => $user->id]) }}">
                                        <button class="btn btn-success">Edit</button>
                                    </a>

                                    <form method="post" 
                                            action="{{ route('user.delete', ['id'=>$user->id]) }}"
                                            onsubmit="return confirm('Please confirm you want to delete {{ $user->name }}')"   
                                    >
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    
                </table>
                {{ $users->links() }}
            </div>

            <div class="col-1"></div>
        </div>
    </div>


@endsection