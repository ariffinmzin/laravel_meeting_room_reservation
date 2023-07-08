@extends('layouts.system')

@section('content')

<div class="card">
    <div class="card-header">List of Users</div>

        <div class="card-body">

            <a href="{{ route('app.admin.user.create') }}" class="btn btn-primary">Create User</a>

            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Staff ID</th>
                    <th>Department</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                @php($i = 0)
                @foreach($users as $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->staff_id }}</td>
                    <td>{{ $user->department }}</td>
                    <td></td>
                    <td><a class="btn btn-primary">Edit</a></td>
                </tr>
                @endforeach
            </table>
           
        </div>
    </div>
</div>
  
@endsection