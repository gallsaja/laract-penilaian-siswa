@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA KELAS</h2>
            <a href="/kelas/create" class="button-primary"> Tambah Data </a>
        <table cellpadding="10">
            <tr>
                <th>NO</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>ACTION</th>
                
            </tr>
            @foreach($kelas as $k)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $k->nama_kelas}}</td>
                <td>{{ $k->jurusan->nama_jurusan }}</td>
                <td>
                    <a href="/kelas/edit/{{ $k->id }}" class="button-warning">Edit</a>
                    <a href="/kelas/destroy/{{ $k->id }}" class="button-danger" onclick="return confirm ('Yakin Hapus?')">Hapus</a>
                </td>
                    </tr>
                    @endforeach
                    </table>
                    </b>
                    </center>    
@endsection