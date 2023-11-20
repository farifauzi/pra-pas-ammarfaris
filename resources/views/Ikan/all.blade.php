@extends('layouts.main')

@section('container')
    <h1>Ini adalah halaman deskripsi Ikan</h1>
    <div style="display: flex; align-items: center; justify-content:center;">
        <table class="table table-bordered" style="text-align: center; width: 1000px; ">
            <thead>
                <th>NO</th>
                <th>Nama Ikan</th>
                <th>Tanggal Menetas</th>
                <th>Jenis Ikan</th>
                <th>Harga</th>
                <th>Action</th>
            </thead>
            <tbody> 
               @foreach ($ikans as $Ikan)
                    <tr>
                        <<th scope="row">{{ $Ikan["id"] }}</th>
                        <td>{{ $Ikan->nama_ikan }}</td>
                        <td>{{ $Ikan->tanggal_menetas }}</td>
                        <td>{{ $Ikan->jenis_ikan }}</td>
                        <td>{{ $Ikan->harga_ikan }}</td>
                        <td>
                        <a class="btn btn-primary" href="/Ikan/detail/{{ $Ikan->id }}">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
