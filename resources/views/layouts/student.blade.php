@extends('layouts.mainlayouts')

@section('title', 'student')

@section('content')
    <h1>List murid</h1>
    <table>
        <thead>
            <tr>
                <td>no.</td>
                <td>nama</td>
                <td>jenkel</td>
                <td>nim</td>
                <td>kelas</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($liststudent as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_murid }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->nama_kelas }}</td>
                    <td><a href="/editmurid/{{ $data->id }}"><button>edit</button></a>
                        <a href="\hapusmurid\{{ $data->id }}"><button>hapus</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/createstudent"><button>Tambah murid</button></a>
@endsection
