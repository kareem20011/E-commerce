@extends('admin.layouts.side')
@section('admin.content')


<div class="container-fluid pt-4 px-4">
    @if(Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
    @endif
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-4">Color Create</h6>
        <form method="post" action="{{ route('admin.colors.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input name="title" value="{{ old('title') }}" placeholder="Enter color title" type="text" class="form-control" id="title">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="row">


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


<div class="col-12 container py-5">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Users Data</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">title</th>
                        <th scope="col">status</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $colors as $color )
                    <tr>
                        <td>{{$color->title}}</td>
                        <td>{{$color->status}}</td>

                        <td>
                            <a href="{{ route('admin.colors.edit', $color->id) }}" class="btn btn-outline-info m-2"><i class="fas fa-edit"></i></a>
                            <form class="d-inline-block" action="{{ route('admin.colors.destroy', $color->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger m-2"><i class="fas fa-trash"></i></button>
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