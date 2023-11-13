@extends('layouts.main')

@section('container')
    <div style="text-align: center; margin-top: 20px;">
        <h1 style="color: #2c3e50; font-size: 32px; margin-bottom: 10px;">{{ $title }}</h1>
        <table style="width: 80%; margin: 20px auto; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <tr>
                <td style="background-color: #3498db; padding: 20px; color: #ffffff; text-align: center;">
                    <h2 style="font-size: 24px; margin: 0;">{{ $nama }}</h2>
                </td>
            </tr>
            <tr>
                <td style="background-color: #2ecc71; padding: 20px; color: #ffffff; text-align: center;">
                    <h2 style="font-size: 24px; margin: 0;">{{ $kelas }}</h2>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <img src="{{('image/farisimage.jpg') }}" alt="" style="width: 80%; max-width: 300px; height: auto; border-radius: 20px;">
                </td>
            </tr>   
        </table>
    </div>
@endsection
