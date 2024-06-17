@extends('masyarakat.template')

@section('content')
    <style>
        .card {
            margin-top: 20px;
        }

        .card-header {
            background-color: #1b3b40;
            color: white;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .card-body {
            padding: 20px;
        }

        .card-body p {
            font-size: 16px;
            color: #34495e;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #bdc3c7;
            padding: 8px;
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
    </style>
    <div class="card">
        <div class="card-header">
            {{ $jenisBansos->name }}
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>{{ $jenisBansos->name }}</td>
                    <td>{{ $jenisBansos->deskripsi}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
