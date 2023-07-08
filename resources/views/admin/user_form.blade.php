@extends('layouts.system')

@section('content')

<div class="card">
    <div class="card-header">List of Users</div>

        <div class="card-body">

        <form action="{{ route('app.admin.user.store') }}" method="post">
        @csrf <!-- eliminate page expired -->
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td><input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </td>
                    
                </tr>
                
                <tr>
                    <th>Staff ID</th>
                    <td><input type="text" class="form-control" name="staffid" value="{{ old('staffid') }}">
                    @error('staffid')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td><input type="text" class="form-control" name="department" value="{{ old('department') }}">
                    @error('department')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" class="form-control" name="password">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <th>Password Confirmation</th>
                    <td><input type="password" class="form-control" name="passwordconfirmation">
                    @error('passwordconfirmation')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>
                        <select name="role" id="" class="form-control">
                            <option value="user" @if(old('role')=='') selected @endif>User</option>
                            <option value="admin" @if(old('role')=='') selected @endif>Admin</option>
                        </select>
                        @error('role')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </td>
                </tr>
            </table>
            <a href="{{ route('app.admin.user.index') }}" class="btn btn-primary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>

        </form>

        </div>
    </div>
</div>
  
@endsection