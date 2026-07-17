@extends('project1.layout')

@section('content')

<div class="page-title">
    <h1>Add Book</h1>
    <p>Dashboard > Books > Add Book</p>
</div>

<div class="form-card">

    <div class="form-top">
        <div class="circle-icon">📖</div>

        <div>
            <h2>Add New Book</h2>
            <p>Fill in the details to add a new book to the library.</p>
        </div>
    </div>

    <hr>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="form-row">
            <div class="form-group">
                <label>Book Title *</label>
                <input type="text" name="title" placeholder="Enter book title">
            </div>

            <div class="form-group">
                <label>Author Name *</label>
                <input type="text" name="author" placeholder="Enter author name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Category *</label>
                <select name="category_id">
                    <option>Select category</option>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Quantity *</label>
                <input type="number" name="quantity" placeholder="Enter quantity">
            </div>
        </div>

        <hr>

        <div class="save-btn">
            <button type="submit">Save Book</button>
        </div>

    </form>

</div>

@endsection