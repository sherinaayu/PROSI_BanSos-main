@extends('masyarakat.template')

@section('content')
    <style>
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }


        button.back {
            background-color: #333;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        button.submit {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        form {
            max-width: 600px;
            margin: auto;
        }
    </style>
    <div class="card">
        <div class="card-header">
            <h1 style="font-size:30px;font-weight:bold;text-align:center;">FORM PENGAJUAN BANTUAN SOSIAL</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
            @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <section>
                <form method="POST" action="{{ route('pengajuan.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Form fields as in your provided form -->
                    <div class="form-group">
                        <label for="no_KK">No. Kartu Keluarga</label>
                        <input type="text" id="no_KK" name="no_KK" maxlength="16" required value="{{ old('no_KK') }}">
                    </div>
                    <div class="form-group">
                        <label for="no_tlp">No. Telepon</label>
                        <input type="text" id="no_tlp" name="no_tlp" maxlength="15" required value="{{ old('no_tlp') }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="Pekerjaan">Pekerjaan Sesuai KTP</label>
                        <input type="text" id="Pekerjaan" name="Pekerjaan" required value="{{ old('Pekerjaan') }}">
                    </div>
                    <style>
                        /* Apply styles to the textarea */
                        textarea {
                            resize: vertical;
                            min-height: 4rem; /* Set a minimum height to prevent it from becoming too small */
                        }
                    </style>
                    
                    <div class="form-group">
                        <label for="kondisi_rumah">Deskripsi Singkat Tentang Kondisi Ekonomi Anda</label>
                        <textarea id="kondisi_rumah" name="kondisi_rumah" required>{{ old('kondisi_rumah') }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                        <select id="jumlah_tanggungan" name="jumlah_tanggungan" required>
                            <option value="">Pilih Opsi</option>
                            <option value="1" {{ old('jumlah_tanggungan') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('jumlah_tanggungan') == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ old('jumlah_tanggungan') == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ old('jumlah_tanggungan') == '4' ? 'selected' : '' }}>4</option>
                            <option value="5" {{ old('jumlah_tanggungan') == '5' ? 'selected' : '' }}>5</option>
                            <option value="6" {{ old('jumlah_tanggungan') == '6' ? 'selected' : '' }}>6</option>
                            <option value="7" {{ old('jumlah_tanggungan') == '7' ? 'selected' : '' }}>7</option>
                            <option value="8" {{ old('jumlah_tanggungan') == '8' ? 'selected' : '' }}>8</option>
                            <option value="9" {{ old('jumlah_tanggungan') == '9' ? 'selected' : '' }}>9</option>
                            <option value="10" {{ old('jumlah_tanggungan') == '10' ? 'selected' : '' }}>10</option>
                            <option value="11" {{ old('jumlah_tanggungan') == '11' ? 'selected' : '' }}>11</option>
                            <option value="12" {{ old('jumlah_tanggungan') == '12' ? 'selected' : '' }}>12</option>
                            <option value="13" {{ old('jumlah_tanggungan') == '13' ? 'selected' : '' }}>>12</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="penghasilan">Penghasilan</label>
                        <select id="penghasilan" name="penghasilan" required>
                            <option value="">Pilih Opsi</option>
                            <option value="1" {{ old('penghasilan') == '1' ? 'selected' : '' }}>0-1.000.000</option>
                            <option value="2" {{ old('penghasilan') == '2' ? 'selected' : '' }}>1.000.000-2.500.000</option>
                            <option value="3" {{ old('penghasilan') == '3' ? 'selected' : '' }}>>2.500.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bansos_sebelumnya">Apakah Pernah menerima Bansos Sebelumnya</label>
                        <select id="bansos_sebelumnya" name="bansos_sebelumnya" required>
                            <option value="">Pilih Opsi</option>
                            <option value="1" {{ old('bansos_sebelumnya') == '1' ? 'selected' : '' }}>Ya</option>
                            <option value="2" {{ old('bansos_sebelumnya') == '2' ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis_bansos">Jenis Bansos yang ingin diajukan</label>
                        <select id="jenis_bansos" name="jenis_bansos" required>
                            <option value="">Pilih Opsi</option>
                            <option value="1" {{ old('jenis_bansos') == '1' ? 'selected' : '' }}>BPNT (Bantuan Pangan Non Tunai)</option>
                            <option value="2" {{ old('jenis_bansos') == '2' ? 'selected' : '' }}>PKH (Program Keluarga Harapan)</option>
                            <option value="3" {{ old('jenis_bansos') == '3' ? 'selected' : '' }}>BLT (Bantuan Langsung Tunai)</option>
                            <option value="4" {{ old('jenis_bansos') == '4' ? 'selected' : '' }}>BSB (Bantuan Sosial Beras)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="surat_keterangan_tidak_mampu">Surat Keterangan Tidak Mampu</label>
                        <input type="file" id="surat_keterangan_tidak_mampu" name="surat_keterangan_tidak_mampu" required>
                    </div>
                    <div class="form-group">
                        <label for="slip_gaji">Slip Gaji</label>
                        <input type="file" id="slip_gaji" name="slip_gaji" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_depan">Foto Rumah Tampak Depan</label>
                        <input type="file" id="foto_depan" name="foto_depan" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_ruang_tamu">Foto Rumah Ruang Tamu</label>
                        <input type="file" id="foto_ruang_tamu" name="foto_ruang_tamu" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_dapur">Foto Rumah Tampak Dapur</label>
                        <input type="file" id="foto_dapur" name="foto_dapur" required>
                    </div>
                    <style>
                        /* Add your custom styles here */
                        button[type="submit"] {
                            background-color: #1b3b40;
                            color: #ffffff;
                            border: none;
                            padding: 10px 20px;
                            border-radius: 5px;
                            font-size: 16px;
                            cursor: pointer;
                            transition: background-color 0.3s ease;
                        }
                    
                        button[type="submit"]:hover {
                            background-color: #1b3b40;
                        }
                    </style>
                    
                    <button type="submit">Simpan</button>
                    
                </form>
            </section>
        </div>
    </div>
@endsection
