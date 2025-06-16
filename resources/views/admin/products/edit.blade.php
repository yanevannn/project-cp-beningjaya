<x-main-layout>
    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Product / </span>Edit</h5>
    <div>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit products</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" placeholder="Input your product name" name="name"
                            value="{{ old('name', $product->name) }}" />
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">Photo <span>( optional )</span>
                        </label>
                        <br>
                        <img src="{{ '/storage/' . $product->photo }}" alt="Current Photo" style="height: 300px;">
                        <input type="file" class="form-control" placeholder="Input your product price"
                            name="photo" />
                        @error('photo')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description Product</label>
                        <textarea name="description" class="form-control" placeholder="description product ...">{{ $product->description }}</textarea>
                        @error('description')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
    </x-main-laout>
