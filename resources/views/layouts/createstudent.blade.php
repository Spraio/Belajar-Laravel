    @extends('layouts.mainlayouts')

    @section('title', 'student')

    @section('content')
        <h1>test input</h1>
        @foreach ($classt as $item)
        @endforeach
        <form action="{{ route('tambahstudent') }}" method="get">
            @csrf
            <label for="name">NAMA:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="gender">Jenis Kelamin:</label>
            <select name="gender" id="gender">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <br>
            <label for="name">Nim:</label>
            <input type="text" name="nim" id="nim">
            <br>
            <label for="class_id">Kelas:</label>
            <select name="class_id" id="class_id">
                @foreach ($classt as $kelas)
                    <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                @endforeach
            </select>
            <br>
            <input type="submit" value="create">

            </table>
        </form>



    @endsection
