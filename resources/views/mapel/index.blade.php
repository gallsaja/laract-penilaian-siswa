@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA MAPEL</h2>
            <a href="/mapel/create" class="button-primary"> Tambah Mapel </a>
        <table cellpadding="10">
            <tr>
                <th>NO</th>
                <th>MAPEL</th>
                <th>ACTION</th>
                
            </tr>
            @foreach($mapel as $m)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $m->nama_mapel}}</td>
                <td>
                    <a href="/mapel/edit/{{ $m->id }}" class="button-warning">Edit</a>
                    <a href="/mapel/destroy/{{ $m->id }}" class="button-danger" onclick="return confirm ('Yakin Hapus?')">Hapus</a>
                </td>
                    </tr>
                    @endforeach
                    </table>
                    </b>
                    </center>    
@endsection