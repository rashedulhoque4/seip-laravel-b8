<x-master>
    <x-slot:title>
        Category List
        </x-slot>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Categories</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                </div>
                <a href="{{ route('categories.create') }}">
<<<<<<< HEAD
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="plus"></span>
                    Add New
                </button>
            </a>
=======
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <span data-feather="plus"></span>
                        Add New
                    </button>
                </a>
>>>>>>> 8c71e4fe4da87e01cacd24dd1bf932a9cef256bd
            </div>
        </div>

        <x-forms.message />

        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->price }}</td>
                    <td>{{ $category->unit }}</td>

                    <td>
                        <a class="btn btn-sm btn-outline-info" href="{{ route('categories.show', $category->id) }}">Show</a>
<<<<<<< HEAD

                        <a class="btn btn-sm btn-outline-info" href="{{ route('categories.edit', $category->id) }}">Edit</a>
=======
>>>>>>> 8c71e4fe4da87e01cacd24dd1bf932a9cef256bd

                        <a class="btn btn-sm btn-outline-info" href="{{ route('categories.edit', $category->id) }}">Edit</a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
<<<<<<< HEAD
</x-master>
=======

</x-master>
>>>>>>> 8c71e4fe4da87e01cacd24dd1bf932a9cef256bd
