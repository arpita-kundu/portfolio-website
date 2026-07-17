@extends('project1.layout')

@section('content')

<div class="page-title">
    <h1>Dashboard</h1>
    <p>Welcome back, Admin! Here's what's happening in your library.</p>
</div>

<div class="dashboard-cards">

    <div class="card">
        <h3>Total Books</h3>
        <p>{{ $totalBooks }}</p>
    </div>

    <div class="card">
        <h3>Total Members</h3>
        <p>{{ $totalMembers }}</p>
    </div>

    <div class="card">
        <h3>Issued Books</h3>
        <p>{{ $issuedBooks }}</p>
    </div>

    <div class="card">
        <h3>Overdue Books</h3>
        <p>{{ $overdueBooks }}</p>
    </div>

</div>

<div class="table-card">
    <h2>Recent Issued Books</h2>

    <table>
        <tr>
            <th>Book ID</th>
            <th>Member ID</th>
            <th>Issue Date</th>
            <th>Due Date</th>
            <th>Status</th>
        </tr>

        @foreach($recentIssued as $issue)
        <tr>
            <td>{{ $issue->book_id }}</td>
            <td>{{ $issue->member_id }}</td>
            <td>{{ $issue->issue_date }}</td>
            <td>{{ $issue->due_date }}</td>
            <td>{{ $issue->status }}</td>
        </tr>
        @endforeach

    </table>
</div>

@endsection