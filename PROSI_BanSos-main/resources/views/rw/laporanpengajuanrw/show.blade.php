@extends('rw.template')

@section('content')

<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">{{__('Detail Laporan Pengajuan')}}</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm">
            <tr>
                <th>ID</th>
                <td></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td></td>
            </tr>
            <tr>
                <th>No Kartu Keluarga</th>
                <td></td>
            </tr>
            <tr>
                <th>Jenis Bansos</th>
                <td></td>
            </tr>
            <tr>
                <th>Status</th>
                <td></td>
            </tr>
            <tr>
                <th>Tanggal Pengajuan</th>
                <td></td>
            </tr>
        </table>
        <a href="{{ url('laporanpengajuanrw') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>

@endsection
