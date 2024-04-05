@extends('admin.layouts.side')
@section('admin.content')



<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-4">Edit User:</h6>
        <form method="post" action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input onchange="handleUserInfo(this, 'name')" type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{$user->name}}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input onchange="handleUserInfo(this, 'username')" type="text" class="form-control" id="username" aria-describedby="emailHelp" value="{{$user->username}}">
                @error('username')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input onchange="handleUserInfo(this, 'email')" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="address" class="form-label">address</label>
                <input onchange="handleUserInfo(this, 'address')" type="text" class="form-control" id="address" aria-describedby="emailHelp" value="{{$user->address}}">
                @error('address')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input onchange="handleUserInfo(this, 'password')" value="{{ old('password') }}" placeholder="Enter password" type="password" class="form-control" id="password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input onchange="handleUserInfo(this, 'confirmPassword')" value="{{ old('confirmPassword') }}" placeholder="Enter confirmPassword" type="password" class="form-control" id="confirmPassword">
                @error('confirmPassword')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                @if(Session::has('confirmError'))
                    <div class="text-danger">{{ Session::get('confirmError') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Image</label>
                <input name="image" class="form-control bg-dark" type="file" id="formFile">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

             <!-- Role -->

             <div class="row">
             <fieldset class="row col-6 mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">role</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="role2" value="user" {{ $user->role === 'user'? 'checked' : '' }}>
                            <label class="form-check-label" for="role2">
                                User
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="role1" value="seller" {{ $user->role === 'seller'? 'checked' : '' }}>
                            <label class="form-check-lael" for="role1">
                                Seller
                            </label>
                        </div>
                    </div>
                </fieldset>

             <fieldset class="row col-6 mb-3">
                <legend class="col-form-label col-sm-2 pt-0">status</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="1" {{ $user->status === '1'? 'checked' : '' }}>
                        <label class="form-check-lael" for="gridRadios2">
                            Active
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="0" {{ $user->status === '0'? 'checked' : '' }}>
                        <label class="form-check-label" for="gridRadios1">
                            Disable
                        </label>
                    </div>
                </div>
            </fieldset>
             </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script>

    function handleUserInfo(e, value) {
        e.setAttribute('name', value)
    }



</script>
@endsection
