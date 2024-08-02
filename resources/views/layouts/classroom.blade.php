@extends('layouts.mainlayouts')

@section('title', 'classroom')

@section('content')
    <h1>test</h1>
    <table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Kelas</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($classlist as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
