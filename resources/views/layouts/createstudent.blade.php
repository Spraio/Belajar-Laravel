@extends('layouts.mainlayouts')

@section('title', 'student')

@section('content')

        <h1>test input</h1>
        <form action="{{ route('class.create') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

@endsection
