@extends('project1.layout')

@section('content')

<div class="page-title">
    <h1>Issued Books</h1>
    <p>Dashboard > Issued Books</p>
</div>

<div class="table-card">

    <div class="table-top">
        <h2>Issued Books List</h2>
    </div>

    <table>
        <tr>
            <th>#</th>
            <th>Book Title</th>
            <th>Member Name</th>
            <th>Issue Date</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach($issuedBooks as $issue)
        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $issue->book->title }}</td>

            <td>{{ $issue->member->name }}</td>

            <td>{{ $issue->issue_date }}</td>

            <td>{{ $issue->due_date }}</td>

            <td>
                @if($issue->return_date)
                    <span class="returned-status">Returned</span>

                @elseif(\Carbon\Carbon::now()->gt($issue->due_date))
                    <span class="overdue-status">Overdue</span>

                @else
                    <span class="issued-status">Issued</span>
                @endif
            </td>

            <td>

               <a href="{{ route('issue.edit', $issue->id) }}" class="edit-btn">
                    Edit
                </a>

                <form action="{{ route('issue.delete', $issue->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="delete-btn">
                        Delete
                    </button>
                </form>

            </td>

        </tr>
        @endforeach

    </table>

</div>

@endsection