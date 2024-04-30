@extends('admin.layouts.side')
@section('admin.content')


<div class="container pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-4">Product Create</h6>
        <form method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input required name="title" value="{{ old('title') }}" placeholder="Enter Title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input required name="description" value="{{ old('description') }}" placeholder="Enter description" type="text" class="form-control" id="description" aria-describedby="emailHelp">
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
            <div class="col-6 mb-3">
                <label for="price" class="form-label">price</label>
                <input required name="price" value="{{ old('price') }}" placeholder="Enter price" type="text" class="form-control" id="price" aria-describedby="emailHelp">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-6 mb-3">
                <label for="quantity" class="form-label">quantity</label>
                <input required name="quantity" value="{{ old('quantity') }}" placeholder="Enter quantity" type="number" class="form-control" id="quantity" aria-describedby="emailHelp">
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

            <h6 class="mt-4">Select category</h6>
            <select name="sub_category_id" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                <option disabled selected>Open this select category</option>
                @foreach($subCats as $subCat)

                <option value="{{ $subCat->id }}">{{ $subCat->title }}</option>

                @endforeach
            </select>
            @error('sub_category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <h6 class="mt-4">Select color</h6>
            <select name="color_id[]" class="form-select" multiple aria-label="multiple select example">
                @foreach($colors as $color)
                <option value="{{ $color->id }}">{{ $color->title }}</option>

                @endforeach
            </select>
            @error('color')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">status</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="status" id="gridRadios2" value="1" checked>
                        <label class="form-check-lael" for="gridRadios2">
                            Active
                        </label>
                    </div>
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="status" id="gridRadios1" value="0">
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




<div class="col-12 container pt-5 mb-5">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Products Data</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">title</th>
                        <th scope="col">image</th>
                        <th scope="col">description</th>
                        <th scope="col">colors</th>
                        <th scope="col">price</th>
                        <th scope="col">sub category</th>
                        <th scope="col">quantity</th>
                        <th scope="col">status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)

                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>
                            @if(count($product->getMedia('images')) > 0)
                                <img src="{{ $product->getFirstMedia('images')->getUrl() }}" alt="..." width="50">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <ul style="padding: 0; margin: 0; list-style: none;">
                            @foreach($product->colors as $color)
                                <li>{{ $color->title }}</li>
                            @endforeach
                            </ul>
                        </td>
                        <td>$ {{ $product->price }}</td>
                        <td>{{ $product->subCategory->title }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->status === '1' ? 'active' : 'disabled' }}</td>
                        <td>
                            <a href="{{ route( 'admin.product.edit', $product->id ) }}" class="btn btn-outline-info m-2"><i class="fas fa-edit"></i></a>
                            <form class="d-inline-block" action="{{ route( 'admin.product.destroy', $product->id ) }}" method="post">
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
