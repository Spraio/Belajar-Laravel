@extends('layouts.mainlayouts')

@section('title', 'edit student')

@section('content')
    <h1>test Edit</h1>

    <form action="{{ route('editmurid2', $liststudent->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">NAMA:</label>
        <input type="text" name="name" id="name" value="{{ $liststudent->name }}">
        <br>

        <label for="gender">Jenis Kelamin:</label>
        <select name="gender" id="gender">
            <option value="L" {{ $liststudent->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ $liststudent->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
        <br>

        <label for="nim">Nim:</label>
        <input type="text" name="nim" id="nim" value="{{ $liststudent->nim }}">
        <br>

        <label for="class_id">Kelas:</label>
        <select name="class_id" id="class_id">
            @foreach ($liststudent as $kelas)
                <option value={{ $kelas->class_id }}>
                    {{ $kelas->id }}
                </option>
            @endforeach
        </select>
        <br>


        <input type="submit" value="Ubah">
    </form>




@endsection
