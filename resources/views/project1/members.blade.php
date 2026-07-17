@extends('project1.layout')

@section('content')

<div class="page-title">
    <h1>Members</h1>
    <p>Dashboard > Members</p>
</div>

<!-- ADD MEMBER FORM -->
<div class="form-card">

    <div class="form-top">
        <div class="circle-icon">👤</div>

        <div>
            <h2>Add New Member</h2>
            <p>Fill in member details.</p>
        </div>
    </div>

    <hr>

    <form action="{{ isset($member) ? route('member.update', $member->id) : route('member.store') }}" method="POST">
    @csrf

    <div class="form-row">

        <div class="form-group">
            <label>Member Name *</label>
            <input type="text" name="name"
                   value="{{ isset($member) ? $member->name : '' }}"
                   placeholder="Enter member name" required>
        </div>

        <div class="form-group">
            <label>Email *</label>
            <input type="email" name="email"
                   value="{{ isset($member) ? $member->email : '' }}"
                   placeholder="Enter email" required>
        </div>

    </div>

    <div class="form-row">
        <div class="form-group">
            <label>Phone *</label>
            <input type="text" name="phone"
                   value="{{ isset($member) ? $member->phone : '' }}"
                   placeholder="Enter phone number" required>
        </div>
    </div>

    <hr>

    <div class="save-btn">
        <button type="submit">
            {{ isset($member) ? 'Update Member' : 'Save Member' }}
        </button>
    </div>
</form>

</div>

<!-- MEMBER LIST -->
<div class="table-card" style="margin-top:30px;">
    <h2>Member List</h2>

    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

    @foreach($members as $member)
    <tr>
        <td>{{ $member->id }}</td>
        <td>{{ $member->name }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->phone }}</td>
        <td>
            <a href="{{ route('member.edit', $member->id) }}">
                <button>Edit</button>
            </a>

            <a href="{{ route('member.delete', $member->id) }}"
               onclick="return confirm('Are you sure?')">
                <button>Delete</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>
</div>

@endsection