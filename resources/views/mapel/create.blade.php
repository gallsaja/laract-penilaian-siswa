@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA MAPEL</h2>
        <form method="post" action="/mapel/store">
            @csrf 
            <table width="50%">
                <tr>
                    <td class="bar"> Nama Mapel </td>
                    <td class="bar":>
                    <input type="text" name="nama_mapel">
</td>
</tr>
            <td colspan="2">
                <center><button class="button-primary" type="submit">Simpan</button></center>
</table>
</form>
</center>

@endsection     