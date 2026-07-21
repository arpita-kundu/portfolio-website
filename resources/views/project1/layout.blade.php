<!DOCTYPE html>
<html lang="en">
<head>
    <title>LibraryMS</title>
    <link rel="stylesheet" href="/css/library.css">
</head>
<body>

<div class="dashboard">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo">
            <h2>LibraryMS</h2>
        </div>

        <ul>
            <li><a href="{{ route('library_management') }}">Dashboard</a></li>
            <li><a href="{{ route('add.book') }}">Add Book</a></li>
            <li><a href="{{ route('book.list') }}">Book List</a></li>
            <li><a href="{{ route('member.page') }}">Members</a></li>
            <li><a href="{{ route('issue.book') }}">Issue Book</a></li>
            <li><a href="{{ route('issued.books') }}">Issued Books</a></li>
            <li><a href="{{ route('return.book') }}">Return Book</a></li>
            <li><a href="{{ route('category.page') }}">Categories</a></li>
        </ul>
    </div>

    <!-- MAIN AREA -->
    <div class="main-area">

        <!-- TOPBAR -->
        <div class="topbar">

            <div class="search-box">
                <input type="text" placeholder="Search anything...">
            </div>

          
        <a href="{{ route('portfolio') }}" class="admin-profile-link">
           <div class="admin-profile">
                 <img src="/images/admin.png" alt="Admin">
                <span>Admin User</span>
            </div>
         </a>

   </div>

        <!-- PAGE CONTENT -->
        <div class="page-content">
            @yield('content')
        </div>

    </div>

</div>

</body>
</html>