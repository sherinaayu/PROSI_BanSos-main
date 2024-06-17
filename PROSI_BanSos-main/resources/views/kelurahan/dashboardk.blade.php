@extends('kelurahan.template')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <div class="info-box-container" style="display: flex;gap:50px;align-items: center; justify-content: center;">
            <div class="info-box" style="background-color: #1b3b40; border-radius: 10px;width: 300px; height: 150px;">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt" style="color: #d6d0d0"></i></span>
        
              <a href="/informasik" class="button">
                <div class="info-box-content" style="color: #d6d0d0">
                    <span class="info-box-text" style="font-size: 18px; font-weight: bold; text-align: center;">Data Pengajuan Bansos</span>
                    <span class="info-box-number" style="font-size: 18px; font-weight: bold; text-align: center;">89</span>
                </div>
            </a>
            
            </div>
          </div>
        </div>      
    </div>
</div>
@endsection