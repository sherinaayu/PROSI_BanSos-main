@extends('rw.template')

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #bdc3c7;
        }

        th,
        td {
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

        .info-button {
            margin-top: 20px;
            text-align: right;
        }

        .info-button button {
            background-color: #1b3b40;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-detail {
            background-color: #1b3b40;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-success {
            background-color: #07db2e;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-delete {
            background-color: red;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
    <div class="card">
        <div class="card-header">
            <h1 style="font-size:30px;font-weight:bold;text-align:center;">FORM VALIDASI PENGAJUAN BANTUAN SOSIAL RW 08</h1>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div class="table-controls">
                <label for="entries-per-page">Show:</label>
                <select id="entries-per-page">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> entries
            </div>
            <div class="card-body">
                <div class="info-button">
                    <input type="text" id="search-input" placeholder="Search...">
                </div>
                <h3 style="font-size:25px;font-weight:bold;text-align:center;">Menunggu Persetujuan</h3>
                <table>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">NAMA</th>
                        <th style="text-align: center;">NO KARTU KELUARGA</th>
                        <th style="text-align: center;">TANGGAL PENGAJUAN</th>
                        <th style="text-align: center;">STATUS</th>
                    </tr>
                    @forelse($dataPengajuan->whereNull('status') as $pengajuan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengajuan->nama }}</td>
                            <td>{{ $pengajuan->no_KK }}</td>
                            <td>{{ $pengajuan->created_at->format('d M Y') }}</td>
                            <td>
                                <form method="POST" action="{{ route('store.pengajuan') }}" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btn-success" id="1" value="1">Disetujui</button>
                                    <button class="btn-delete" id="0" value="0">Ditolak</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center;">Tidak ada data pengajuan.</td>
                        </tr>
                    @endforelse
                </table>
            </div>

            <div class="card-body">
                <h3 style="font-size:30px;font-weight:bold;text-align:center;">Pengajuan Disetujui</h3>
                <div class="info-button">
                    <input type="text" id="search-input" placeholder="Search...">
                </div>
                <table>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">NAMA</th>
                        <th style="text-align: center;">NO KARTU KELUARGA</th>
                        <th style="text-align: center;">STATUS</th>
                    </tr>
                    @forelse($dataPengajuan->where('status', 1) as $pengajuan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengajuan->nama }}</td>
                            <td>{{ $pengajuan->no_KK }}</td>
                            <td><a href="#" class="btn-success">Disetujui</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center;">Tidak ada data pengajuan.</td>
                        </tr>
                    @endforelse
                </table>
            </div>

            <div class="card-body">
                <h3 style="font-size:30px;font-weight:bold;text-align:center;">Pengajuan Ditolak</h3>
                <div class="info-button">
                    <input type="text" id="search-input" placeholder="Search...">
                </div>
                <table>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">NAMA</th>
                        <th style="text-align: center;">NO KARTU KELUARGA</th>
                        <th style="text-align: center;">STATUS</th>
                    </tr>
                    @forelse($dataPengajuan->whereNotNull('status')->where('status', 0) as $pengajuan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengajuan->nama }}</td>
                            <td>{{ $pengajuan->no_KK }}</td>
                            <td><a href="#" class="btn-delete">Ditolak</a></td>
                        </tr>
                    @empty
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
