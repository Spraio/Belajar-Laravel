@extends('layouts.mainlayouts')

@section('title', 'student')

@section('content')
    <h1>test input</h1>
    <form action="{{ route('student.create') }}" method="post">
        <table>
            <tr>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td> <input type="submit" value="create"></td>
            </tr>
        </table>
    </form>
@endsection
