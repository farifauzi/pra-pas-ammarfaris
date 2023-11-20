@extends('layouts.main')

@section('container')
    <h1>Detail ikan</h1>
    <div style="display: flex; align-items: center; justify-content: center;">
        <table class="table table-bordered" style="text-align: center; width: 600px;">
            <tr>
                <th>Nama Ikan</th>
                <td>{{ $ikans->nama_ikan }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $ikans->deskripsi }}</td>
            </tr>
            <tr>
                <th>Asal</th>
                <td>{{ $ikans->asal }}</td>
            </tr>
        </table>
    </div>
@endsection
