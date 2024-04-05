@extends('admin.layouts.side')
@section('admin.content')


<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-4">Sub Categories</h6>
        <form method="post" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input name="name" value="{{ old('name') }}" placeholder="Enter name" type="text" class="form-control" id="name">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input name ="username" value="{{ old('username') }}" placeholder="Enter username" type="text" class="form-control" id="username">
                @error('username')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input name ="email" value="{{ old('email') }}" placeholder="Enter email" type="email" class="form-control" id="email">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">address</label>
                <input name ="address" value="{{ old('address') }}" placeholder="Enter address" type="text" class="form-control" id="address">
                @error('address')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input name ="password" value="{{ old('password') }}" placeholder="Enter password" type="password" class="form-control" id="password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input name ="confirmPassword" value="{{ old('confirmPassword') }}" placeholder="Enter confirmPassword" type="password" class="form-control" id="confirmPassword">
                @error('confirmPassword')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                @if(Session::has('confirmError'))
                    <div class="text-danger">{{ Session::get('confirmError') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Upload image</label>
                <input name="image" class="form-control bg-dark" type="file" id="formFile">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="row">

            <fieldset class="row col-6 mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">role</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="role2" value="user" checked>
                            <label class="form-check-label" for="gridRadios1">
                                User
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="role1" value="seller">
                            <label class="form-check-lael" for="gridRadios2">
                                Seller
                            </label>
                        </div>
                    </div>
                </fieldset>


                <fieldset class="row col-6 mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="1" checked>
                            <label class="form-check-lael" for="gridRadios2">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="0">
                            <label class="form-check-label" for="gridRadios1">
                                Disable
                            </label>
                        </div>
                    </div>
                </fieldset>

            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

<div class="col-12 container pt-5">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Users Data</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Role</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $users as $user )
                    <tr>
                        <td>
                            @if(count($user->getMedia('images')) > 0)
                                <img src="{{ $user->getFirstMedia('images')->getUrl() }}" alt="..." width="50" style="border-radius: 50%;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->role}}</td>

                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-outline-info m-2"><i class="fas fa-edit"></i></a>
                            <form class="d-inline-block" action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger m-2"><i class="fas fa-user-times"></i></button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
