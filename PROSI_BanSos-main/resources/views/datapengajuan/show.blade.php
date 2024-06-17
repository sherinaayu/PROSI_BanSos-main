@extends('rw.template')

@section('content')

<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">{{__('Detail Pengajuan')}}</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm">
            <tr>
                <th>Nama</th>
                <td>{{ $pengajuan->nama }}</td>
            </tr>
            <tr>
                <th>No Kartu Keluarga</th>
                <td>{{ $pengajuan->no_KK }}</td>
            </tr>
            <tr>
                <th>No Telepon</th>
                <td>{{ $pengajuan->no_tlp }}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>{{ $pengajuan->Pekerjaan }}</td>
            </tr>
            <tr>
                <th>Kondisi Rumah</th>
                <td>{{ $pengajuan->kondisi_rumah }}</td>
            </tr>
            <tr>
                <th>Jumlah Tanggungan</th>
                <td>{{ $pengajuan->jumlah_tanggungan }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $pengajuan->status ? 'Disetujui' : 'Menunggu Persetujuan' }}</td>
            </tr>
            <tr>
                <th>Tanggal Pengajuan</th>
                <td>{{ $pengajuan->created_at->format('d-m-Y') }}</td>
            </tr>
        </table>
        <a href="{{ url('datapengajuan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
@endsection
