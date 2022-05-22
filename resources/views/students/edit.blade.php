@extends('layouts.master')

@section('pageTitle', 'Edit Students Details')

@section('content')

<h1 class="display-6">Edit Student</h1>

<hr />
<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<?php echo route('students.update', $student->id); ?>
<form action="{{ route('students.update', $student->id) }}" method="put">
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input class="form-control" name="first_name" type="text" value="test231" id="first_name">
    </div>

    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input class="form-control" name="last_name" type="text" value="1231" id="last_name">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input class="form-control" name="age" type="number" value="123" id="age">
    </div>

    <div class="form-group">
        <label for="email">E-Mail Address</label>
        <input class="form-control" name="email" type="text" value="test@mail.ru" id="email">
    </div>

    <input class="btn btn-primary" type="submit" value="Update!">
</form>

@endsection