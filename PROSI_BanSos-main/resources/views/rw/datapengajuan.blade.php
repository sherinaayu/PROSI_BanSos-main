@extends('rw.template')

@section('content')

<style>
  table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #bdc3c7;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #1b3b40;
        color: white;
    }

    td {
        background-color: white;
        color: #34495e;
    }

    .btn {
        background-color: #1b3b40;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
    }

    .btn i {
        margin-right: 5px;
    }
    .data-table .btn-detail {
        background-color: #1b3b40;
        color: #fff;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 5px;
    }

    .table-controls {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .entries-per-page {
        display: flex;
        align-items: center;
    }

    .search-container {
        display: flex;
        align-items: center;
    }

    #entries-per-page {
        margin-left: 0.5rem;
        margin-right: 0.5rem;
    }

    #search-input {
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .table-pagination {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1rem;
    }

    .pagination-info {
        font-size: 0.9rem;
    }

    .pagination-links .pagination-link {
        text-decoration: none;
        margin-left: 0.5rem;
    }
</style>

<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">DATA PENGAJUAN BANSOS</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <!-- Table controls and search input -->
        
        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Kartu Keluarga</th>
                    <th>Pekerjaan</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datapengajuan as $index => $pengajuan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pengajuan->nama }}</td>
                    <td>{{ $pengajuan->no_KK }}</td>
                    <td>{{ $pengajuan->Pekerjaan }}</td>
                    <td>{{ $pengajuan->created_at->format('d-m-Y') }}</td>
                    <td><a href="{{ url('/datapengajuan/detail/' . $pengajuan->id_data) }}" class="btn-detail"><i class="fas fa-info-circle"></i> Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <!-- Pagination links -->
        <div class="table-pagination">
            <!-- You can customize pagination links using the provided JavaScript functions -->
        </div>
    </div>
</div>
@endsection