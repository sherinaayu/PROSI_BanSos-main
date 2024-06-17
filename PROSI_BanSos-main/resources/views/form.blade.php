
@extends('rt.template')
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
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <section>
                <button class="back">Kembali</button>
                <form action="/submit" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="no_kartu_keluarga">No. Kartu Keluarga</label>
                        <input type="number" id="no_kartu_keluarga" name="no_kartu_keluarga" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No. Telepon</label>
                        <input type="number" id="no_telepon" name="no_telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan Sesuai KTP</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_kondisi">Deskripsi Singkat Tentang Kondisi Ekonomi Anda</label>
                        <textarea id="deskripsi_kondisi" name="deskripsi_kondisi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                        <select id="jumlah_tanggungan" name="jumlah_tanggungan" required>
                            <option value="">Pilih Opsi</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                            <option value="">>12</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="penghasilan">Penghasilan</label>
                        <select id="penghasilan" name="penghasilan" required>
                            <option value="">Pilih Opsi</option>
                            <option value="">0-1.000.000</option>
                            <option value="">1.000.000-2.500.000</option>
                            <option value="">>2.500.000</option>
                            <!-- Add options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bansos_sebelumnya">Apakah Pernah menerima Bansos Sebelumnya</label>
                        <select id="bansos_sebelumnya" name="bansos_sebelumnya" required>
                            <option value="">Pilih Opsi</option>
                            <option value="">Ya</option>
                            <option value="">Tidak</option>
                            <!-- Add options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis_bansos">Jenis Bansos yang ingin diajukan</label>
                        <select id="jenis_bansos" name="jenis_bansos" required>
                            <option value="">Pilih Opsi</option>
                            <option value="">BPNT</option>
                            <option value="">PKH</option>
                            <option value="">BLT</option>
                            <option value="">BSB</option>
                            <!-- Add options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan_tidak_mampu">Surat Keterangan Tidak Mampu</label>
                        <input type="file" id="keterangan_tidak_mampu" name="keterangan_tidak_mampu" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan_tidak_mampu">Slip Gaji</label>
                        <input type="file" id="keterangan_tidak_mampu" name="keterangan_tidak_mampu" required>
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
                    <button type="submit" class="submit">Simpan</button>
                </form>
            </section>
        </div>
    </div>
@endsection
