@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>UBAH DATA MAPEL</h2>
        <form method="post" action="/mapel/update/{{ $mapel->id }}">
            @csrf 
            <table width="50%">
                <tr>
                    <td class="bar">MAPEL</td>
                    <td class="bar":>
                    <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}">
</td>
</tr>
            <td colspan="2">
                <center><button class="button-primary" type="submit">Simpan</button></center>
</table>
</form>
</center>

@endsection     