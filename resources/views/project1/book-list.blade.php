@extends('project1.layout')

@section('content')

<div class="page-title">
    <h1>Books</h1>
    <p>Dashboard > Books > Book List</p>
</div>

<div class="table-card">

    <div class="table-top">
        <h2>Book List</h2>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Quantity</th>
        </tr>

        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
           <td>{{ $book->category->name ?? 'No Category' }}</td>
            <td>{{ $book->quantity }}</td>
        </tr>
        @endforeach

    </table>

</div>

@endsection