@extends('kelurahan.template')

@section('content')

<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">{{__('Detail Informasi Bansos')}}</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <a>Coba</a>
        <a></a>
        <a href="{{ url('informasik') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>

@endsection
