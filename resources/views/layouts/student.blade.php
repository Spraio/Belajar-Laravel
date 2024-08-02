@extends('layouts.mainlayouts')

@section('title', 'student')

@section('content')
    <h1>test</h1>
    <table>
        <thead>
            <tr>
                <td>no.</td>
                <td>nama</td>
                <td>nim</td>
                <td>kelas</td>
                <td>jenkel</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($liststudent as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->class_id }}</td>
                    <td>{{ $data->gender }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
