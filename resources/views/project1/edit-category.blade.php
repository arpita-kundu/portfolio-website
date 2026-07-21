<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Category</title>
    <link rel="stylesheet" href="/css/library.css">
</head>
<body>

<div class="container">
    <h2>Edit Category</h2>

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf

        <label>Category Name</label>
        <input type="text" name="name" value="{{ $category->name }}" required>

        <button type="submit">Update Category</button>
    </form>

    <br>

    <a href="{{ route('category.page') }}">
        <button type="button">Back</button>
    </a>
</div>

</body>
</html>