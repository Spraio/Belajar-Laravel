@extends('layouts.mainlayouts')

@section('title', 'about')

@section('content')
    <h1>Test Edit Clasroom</h1>
    <h2>Edit kelas</h2>
    <form action="\editt" method="get">

        <input type="text" name="namanya" value="{{ $classlist->name }}">
        <button type="submit"> Edit Kelas</button>
    </form>
@endsection
