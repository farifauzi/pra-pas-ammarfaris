@extends('layouts.main')

@section('container')
    <div class="container text-center mt-4">
        <h2>Gun Details</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($farisgunshop)
                    <img class="farisgunshop-image img-fluid" src="{{ asset($farisgunshop->image) }}" alt="{{ $farisgunshop->name }}">
                @else
                    <p>AK-47.</p>
                @endif
            </div>
        </div>
            <div class="col-md-12 mt-3">
                <strong>Description:</strong> {{ $farisgunshop->description ?? 'AK-47 (singkatan dari Avtomat Kalashnikova 1947, bahasa Rusia: Автомат Калашникова образца 1947 года) adalah senapan serbu yang dirancang oleh Mikhail Kalashnikov, diproduksi oleh pembuat senjata Rusia IZhMASh, dan digunakan oleh banyak negara Blok Timur semasa Perang Dingin. Senapan ini diadopsi dan dijadikan senapan standar Uni Soviet pada tahun 1947..' }}
            </div>
        </div>
    </div>
@endsection
