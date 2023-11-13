@extends('layouts.main')

@section('container')
    <h2 style="color: #0;">Senjata Senjata Di Faris Gun Shop</h2>
    <table class="table table-bordered military-table">
        <thead>
            <th>ID</th>
            <th>Model</th>
            <th>Date Of Manufacture</th>
            <th>Accessories</th>
            <th>Purchase Address</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($farisgunshop as $key => $farisgunshops)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $farisgunshops["model"] }}</td>
                    <td>{{ $farisgunshops["date_of_manufacture"] }}</td>
                    <td>{{ $farisgunshops["accessories"] }}</td>
                    <td>{{ $farisgunshops["purchase_address"] }}</td>
                    <td>
                        <a href="/farisgunshop/detail{{ $farisgunshops->id}}" class="btn btn-primary military-btn">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
