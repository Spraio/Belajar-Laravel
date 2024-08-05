@extends('layouts.mainlayouts')

@section('title', 'classroom')

@section('content')

    <form action="\classt" method="GET">
        <input type="text" name="namanya">
        <button type="submit"> Tambah Kelas</button>
    </form>
    <h1>List kelas</h1>
    <table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Kelas</td>
                <td>ID</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($classlist as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->id }}</td>
                    <td><button>Ubah</button></td>
                </tr>
                <tr>

                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
