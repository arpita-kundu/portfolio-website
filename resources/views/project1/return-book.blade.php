@extends('project1.layout')

@section('content')

<div class="page-title">
    <h1>Return Book</h1>
</div>

<div class="form-card">

<form action="{{ route('return.update') }}" method="POST">
    @csrf

    <label>Select Member</label>
    <select name="member_id">
        @foreach($members as $member)
        <option value="{{ $member->id }}">{{ $member->name }}</option>
        @endforeach
    </select>

    <label>Select Book</label>
    <select name="book_id">
        @foreach($issuedBooks as $issue)
        <option value="{{ $issue->book_id }}">
            {{ $issue->book->title }}
        </option>
        @endforeach
    </select>

    <label>Return Date</label>
    <input type="date" name="return_date">

    <div class="save-btn">
        <button type="submit">Return Book</button>
    </div>

</form>

</div>

@endsection