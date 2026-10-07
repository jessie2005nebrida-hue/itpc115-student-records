@extends('layouts.app')

@section('title', 'All Students')

@section('content')
<h2>All Students</h2>
<p><a href="{{ route('students.create') }}">Add a student</a></p>

@if ($students->isEmpty())
    <p>No students have been added yet.</p>
@else
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Student Number</th>
            <th>Name</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->student_number }}</td>
            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
            <td>{{ $student->course }}</td>
            <td>
                <a href="{{ route('students.edit', $student) }}">Edit</a>
                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this student?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif
@endsection