@extends('masyarakat.template')

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

        .btn-detail {
            background-color: #1b3b40;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-confirm {
            background-color: #007bff;
            color: black;
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

        .btn-secondary {
            background-color: #636363;
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
            <h1 style="font-size:30px;font-weight:bold;text-align:center;">KONFIRMASI BANTUAN SOSIAL</h1>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <table style="width: 100%;border-collapse: collapse;margin-top: 20px;border: 1px solid #bdc3c7;">
                <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">NAMA</th>
                    <th style="text-align: center;">NO KK</th>
                    <th style="text-align: center;">JENIS BANSOS</th>
                    <th style="text-align: center;">STATUS</th>
                </tr>
                @foreach($datapengajuan as $pengajuan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pengajuan->nama }}</td>
                    <td>{{ $pengajuan->no_KK }}</td>
                    <td>{{ $pengajuan->jenisBansos->name }}</td> <!-- Display the name of the jenis_bansos -->
                    <td style="text-align: center;">
                        @if($pengajuan->status === 1)
                        <span class="btn-success">Disetujui</span>
                        @elseif($pengajuan->status === 0)
                        <span class="btn-delete">Ditolak</span>
                        @elseif($pengajuan->status === null)
                        <span class="btn-secondary">Pending</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script>
        // JavaScript functions
    </script>
    @endsection
