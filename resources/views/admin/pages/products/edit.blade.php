@extends('admin.layouts.side')
@section('admin.content')


<div class="container pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-4">Product Edit</h6>
        <form method="post" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input required name="title" value="{{ $product->title }}" placeholder="Enter Title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input required name="description" value="{{ $product->description }}" placeholder="Enter description" type="text" class="form-control" id="description" aria-describedby="emailHelp">
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
            <div class="col-6 mb-3">
                <label for="price" class="form-label">price</label>
                <input required name="price" value="{{ $product->price }}" placeholder="Enter price" type="text" class="form-control" id="price" aria-describedby="emailHelp">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-6 mb-3">
                <label for="quantity" class="form-label">quantity</label>
                <input required name="quantity" value="{{ $product->quantity }}" placeholder="Enter quantity" type="number" class="form-control" id="quantity" aria-describedby="emailHelp">
                @error('quantity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Image</label>
                <input name="image" class="form-control bg-dark" type="file" id="formFile">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <h6 class="mb-4">Select</h6>
            <select name="sub_category_id" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                <option disabled selected>Open this select menu</option>
                @foreach($subCats as $subCat)
                <option {{ $subCat->id === $product->subCategory->id ? ' selected ' : ''}} value="{{ $subCat->id }}">{{ $subCat->title }}</option>
                @endforeach
            </select>
            @error('sub_category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">status</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="status" id="gridRadios2" value="1" {{ $product->status === '1'? 'checked' : '' }}>
                        <label class="form-check-lael" for="gridRadios2">
                            Active
                        </label>
                    </div>
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="status" id="gridRadios1" value="0" {{ $product->status === '0'? 'checked' : '' }}>
                        <label class="form-check-label" for="gridRadios1">
                            Disable
                        </label>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

@endsection
