<!DOCTYPE html>
@extends('project1.layout')

@section('content')
<html lang="en">
<head>
    <title>Categories</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
</head>
<body>

<div class="container">
    <h2>Add Category</h2>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <label>Category Name</label>
        <input type="text" name="name" required>

        <button type="submit">Add Category</button>
    </form>

    <hr>

    <h2>Category List</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('category.edit', $category->id) }}">
                    <button type="button">Edit</button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

</div>

</body>
@endsection
</html>