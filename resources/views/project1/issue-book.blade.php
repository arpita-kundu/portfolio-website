@extends('project1.layout')

@section('content')

<div class="page-title">
    <h1>Issue Book</h1>
    <p>Dashboard > Issue Book</p>
</div>

<div class="form-card">

    <div class="form-top">
        <div class="circle-icon">📚</div>

        <div>
            <h2>Issue Book Information</h2>
            <p>Fill in the details to issue a book.</p>
        </div>
    </div>

    <hr>

    <form action="{{ route('issue.store') }}" method="POST">
        @csrf

        <div class="form-row">

            <div class="form-group">
                <label>Select Member *</label>
                <select name="member_id" required>
                    <option value="">Choose Member</option>
                    @foreach($members as $member)
                        <option value="{{ $member->id }}">
                            {{ $member->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Select Book *</label>
                <select name="book_id" required>
                    <option value="">Choose Book</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}">
                            {{ $book->title }}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="form-row">

            <div class="form-group">
                <label>Issue Date *</label>
                <input type="date" name="issue_date" required>
            </div>

            <div class="form-group">
                <label>Due Date *</label>
                <input type="date" name="due_date" required>
            </div>

        </div>

       

        <hr>

        <div class="save-btn">
            <button type="reset">Reset</button>
            <button type="submit">Issue Book</button>
        </div>

    </form>

</div>

@endsection