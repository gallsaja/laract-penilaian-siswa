@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA SISWA</h2>
        <form method="post" action="/siswa/store">
            @csrf 
            <table width="50%">
                <tr>
                    <td class="bar"> NIS </td>
                    <td class="bar":>
                    <input type="text" name="nis">
</td>
</tr>
            <td class="bar">Nama Siswa</td>
            <td class="bar">
                <input type="text" name="nama_siswa">
</td>
</tr>
            <tr>
                <td class="bar">Jenis Kelamin</td>
                <td class="bar">
                    <input type="radio" name="jk" value="L">Laki-Laki
                    <input type="radio" name="jk" value="P">Perempuan
</td>
</tr>
            <tr>
                <td class="bar">Alamat</td>
                <td class="bar">
                    <textarea name="alamat" cols="30" rows="5"></textarea></td>
</tr>
</td>
<tr>
                <td class="bar">Kelas</td>
                <td class="bar">
                    <select name="kelas_id">
                        <option></option>
                        @foreach ($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                        @endforeach
                    </select>
</td>
</tr>
            <tr>
                <td class="bar">Password</td>
                <td class="bar">
                <input type="password" name="password"></td>
</tr>
</td>
            <td colspan="2">
                <center><button class="button-primary" type="submit">Simpan</button></center>
</table>
</form>
</center>

@endsection     