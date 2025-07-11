@extends('app.home')
@section('content')

@php
    use Carbon\Carbon;

    $hariIni = (int) Carbon::now()->format('d');
    $gambarPoster = null;

    if ($hariIni >= 15 && $hariIni <= 21) {
        $pathGambar = public_path("frontend/popup/poster.png");
        if (file_exists($pathGambar)) {
            $gambarPoster = asset("frontend/popup/poster.png") . '?v=' . time();
        }
    } elseif ($hariIni >= 22 && $hariIni <= 28) {
        $pathGambar = public_path("frontend/popup/poster-$hariIni.png");
        if (file_exists($pathGambar)) {
            $gambarPoster = asset("frontend/popup/poster-$hariIni.png") . '?v=' . time();
        }
    }
@endphp


@if($gambarPoster)
    <!-- Modal CSS -->
    
    <style>
        .modal-backdrop.show {
            backdrop-filter: blur(5px);
            background-color: rgba(0, 0, 0, 0.4);
        }

        #posterModal .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 100%;
            width: auto;
        }

        #posterModal .modal-content {
            border-radius: 0.5rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            background: #fff;
            overflow: hidden;
            width: auto;
        }

        .img-poster {
            display: block;
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 90vh;
        }

        .btn-close {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 10;
            background-color: #fff;
            border-radius: 50%;
            padding: 0.4rem;
        }
    </style>

    <!-- Modal Poster -->
    <div class="modal fade" id="posterModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content position-relative">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                <img src="{{ $gambarPoster }}" class="img-fluid img-poster" alt="Poster">
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Auto Show Modal -->
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            var myModal = new bootstrap.Modal(document.getElementById('posterModal'));
            myModal.show();
        });
    </script>
@endif


<div class="page-content">
        
    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button></a>Welcome</h2>
        <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>
    

                    <div data-card-height="cover-card" class="card card-style" style="background-image:url({{ asset('frontend') }}/images/pictures/kubar.jpg)">
                        <div class="card-center text-center">
                            <h1 class="mb-5"><img src="{{ asset('frontend') }}/images/pictures/logokubar.png" class="me-3 rounded-circle shadow-l bg-fade-red-dark" width="200"></i></h1>
                            <h1 class="color-white bolder fa-2x">PEKAN DAERAH (PEDA) XI KTNA KALTIM  <br> TAHUN 2025</h1>
                            <h6 class="color-white mb-4 ">MELALUI PEKAN DAERAH XI PETANI NELAYAN PROVINSI KALIMANTAN TIMUR TAHUN 2025 KITA TINGKATKAN DAYA SAING DAN PRODUK UNGGULAN PETANI NELAYAN MENDUKUNG KALIMANTAN TIMUR 
                                SEBAGAI PENYANGGA IBUKOTA NUSANTARA</h6>

                            {{-- <div class="row mb-0 text-center">
                                <div class="col-4 pe-1">
                                   
                                </div>
                                <div class="col-4 ps-1 pe-1">
                                    <div class="row mb-0">
                                    <div class="col-2 ps-1 pe-1"> 
                                    </div>
                                    <div class="col-8 ps-1 pe-1">
                                        <a href="{{ route('beranda') }}" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-mint-dark">Login</a>
                                    </div>
                                    <div class="col-2 ps-1 pe-1">    
                                    </div>
                                </div>
                                </div>
                                <div class="col-4 ps-1">
                                   
                                </div>
                            </div> --}}

            <div class="content mb-0">

                <div class="row mb-0 align-content-center ">
                    <div class="col-2 ps-1 pe-1">
                        {{-- <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-blue-dark">Button</a> --}}
                                              
                    </div>
                    <div class="col-4 pe-1">
                        <a href="{{ route('login') }}" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-blue-light">Login</a>
                        
                    </div>
                    <div class="col-4 ps-1">
                        <a href="{{ route('beranda') }}" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-green-light">Started</a>
                
                    </div>
                    <div class="col-2 ps-1 pe-1">
                        {{-- <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-blue-dark">Button</a> --}}
                                              
                    </div>
                </div>
            </div>
                        </div>
                        
                        <div class="card-overlay bg-black opacity-60"></div>
                    </div>         

    
</div>    

@endsection