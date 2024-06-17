@extends('rw.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div class="info-box-container" style="display: flex;gap:50px;align-items: center; justify-content: center;">
                <div class="info-box" style="background-color: #1b3b40; border-radius: 10px;width: 300px; height: 150px;">
                    <span class="info-box-icon"><i class="fas fa-cloud-download-alt" style="color: #d6d0d0"></i></span>

                    <div class="info-box-content" style="color: #d6d0d0">
                        <span class="info-box-text" style="font-size: 18px;font-weight:bold;text-align:center">Pengajuan
                            Bansos</span>
                        <span class="info-box-number" style="font-size: 18px;font-weight:bold;text-align:center">89</span>
                    </div>
                </div>

                <div class="info-box" style="background-color: #1b3b40; border-radius: 10px;width: 300px; height: 150px;">
                    <span class="info-box-icon"><i class="far fa-comment" style="color: #d6d0d0"></i></span>

                    <div class="info-box-content" style="color: #d6d0d0">
                        <span class="info-box-text" style="font-size: 18px;font-weight:bold;text-align:center">Jumlah
                            Warga</span>
                        <span class="info-box-number" style="font-size: 18px;font-weight:bold;text-align:center">500</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
        <iframe width="800" height="450"
            src="https://lookerstudio.google.com/embed/reporting/c5ffc4ce-5796-43c4-83d1-666e6f4a398b/page/YMd2D"
            frameborder="0" style="border:0" allowfullscreen
            sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
    </div>
@endsection
