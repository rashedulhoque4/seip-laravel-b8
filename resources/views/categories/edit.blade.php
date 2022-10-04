<x-master>
    <x-slot:title>
        Category Details
    </x-slot:title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category Edit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
            </div>
            <a href="{{ route('categories.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

<<<<<<< HEAD
    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $category->name }}"
                </div>

            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input name="price" type="number" class="form-control" id="price" value="{{ $category->price }}"
                    </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Product Quantity</label>
                    <input name="unit" type="number" class="form-control" id="quantity"
                        value="{{ $category->unit }}" </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="is_active">
                        <label class="form-check-label" for="is_active">Is active ?</label>
                        @if ($category->is_active)
                            chacked
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-master>
=======
    <x-forms.errors />

    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="nameInput" class="form-label">Title</label>
          
            <input 
            name="name" 
            type="text" 
            class="form-control" 
            id="nameInput" 
            value="{{ old('name', $category->name) }}"
            >

            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
            
        </div>
        
        <div class="mb-3 form-check">
            <input 
            name="is_active" 
            type="checkbox" 
            class="form-check-input" 
            id="isActiveInput"
            @if($category->is_active) checked @endif
            >
            <label class="form-check-label" for="isActiveInput">Is Active ?</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-master>
>>>>>>> 8c71e4fe4da87e01cacd24dd1bf932a9cef256bd
