@extends('rw.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $breadcrumb->title ?? 'Detail Pengajuan' }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body"> 
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> {{ session('error') }}
            </div>
        @else
            @if(!$entry)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> Data yang Anda cari tidak ditemukan.
                </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $entry->id }}</td>
                    </tr>
                    <tr>
                        <th>Kode Kategori</th>
                        <td>{{ $entry->kategori_kode }}</td>
                    </tr>
                    <tr>
                        <th>Nama Kategori</th>
                        <td>{{ $entry->kategori_nama }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $entry->nama }}</td>
                    </tr>
                    <tr>
                        <th>No Kartu Keluarga</th>
                        <td>{{ $entry->no_kartu_keluarga }}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan</th>
                        <td>{{ $entry->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Pengajuan</th>
                        <td>{{ $entry->tanggal_pengajuan }}</td>
                    </tr>
                </table>
            @endif
        @endif
        <a href="{{ url('datapengajuan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush
