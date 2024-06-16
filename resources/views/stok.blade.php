@extends('layouts.layout');
<title>Stok</title>


<nav class="navbar navbar-expand-lg admin">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/NarkOBAT.png') }}" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M22.1333 24L13.7333 15.6C13.0667 16.1333 12.3 16.5556 11.4333 16.8667C10.5667 17.1778 9.64445 17.3333 8.66667 17.3333C6.24445 17.3333 4.19467 16.4942 2.51733 14.816C0.840001 13.1378 0.000889594 11.088 7.05467e-07 8.66667C-0.000888183 6.24533 0.838223 4.19556 2.51733 2.51733C4.19645 0.839111 6.24622 0 8.66667 0C11.0871 0 13.1373 0.839111 14.8173 2.51733C16.4973 4.19556 17.336 6.24533 17.3333 8.66667C17.3333 9.64444 17.1778 10.5667 16.8667 11.4333C16.5556 12.3 16.1333 13.0667 15.6 13.7333L24 22.1333L22.1333 24ZM8.66667 14.6667C10.3333 14.6667 11.7502 14.0836 12.9173 12.9173C14.0844 11.7511 14.6676 10.3342 14.6667 8.66667C14.6658 6.99911 14.0827 5.58267 12.9173 4.41733C11.752 3.252 10.3351 2.66844 8.66667 2.66667C6.99822 2.66489 5.58178 3.24844 4.41733 4.41733C3.25289 5.58622 2.66933 7.00267 2.66667 8.66667C2.664 10.3307 3.24756 11.7476 4.41733 12.9173C5.58711 14.0871 7.00356 14.6702 8.66667 14.6667Z"
                            fill="#6DA9E5" />
                    </svg></button>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <form class="d-flex">
                <div style="margin-top: 10px;margin-right: 20px;">Dianne Russell</div>
                <a href="{{ route('profile') }}"><img src="{{ asset('img/admin-profile.png') }}" alt=""
                        class="img-fluid"></a>
            </form>
        </div>
    </div>
</nav>

<div class="content-container">
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{route('apotik')}}"><svg xmlns="http://www.w3.org/2000/svg" class="me-2"
                        width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <path
                            d="M15.4545 14.2087H17V15.7609H0V14.2087H1.54545V1.01522C1.54545 0.809391 1.62687 0.611991 1.77178 0.466446C1.9167 0.320902 2.11324 0.239136 2.31818 0.239136H14.6818C14.8868 0.239136 15.0833 0.320902 15.2282 0.466446C15.3731 0.611991 15.4545 0.809391 15.4545 1.01522V14.2087ZM7.72727 4.89566H6.18182V6.44783H7.72727V8H9.27273V6.44783H10.8182V4.89566H9.27273V3.34348H7.72727V4.89566ZM10.0455 14.2087H11.5909V9.55218H5.40909V14.2087H6.95455V11.1044H10.0455V14.2087Z"
                            fill="#B5B5B5" />
                    </svg>Apotek</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('obat')}}"><svg xmlns="http://www.w3.org/2000/svg" class="me-2"
                        width="15" height="18" viewBox="0 0 15 18" fill="none">
                        <path
                            d="M1.07143 0.23999H13.9286V2.18666H1.07143V0.23999ZM12.8571 3.15999H2.14286C0.964286 3.15999 0 4.03599 0 5.10666V15.8133C0 16.884 0.964286 17.76 2.14286 17.76H12.8571C14.0357 17.76 15 16.884 15 15.8133V5.10666C15 4.03599 14.0357 3.15999 12.8571 3.15999ZM11.7857 11.92H9.10714V14.3533H5.89286V11.92H3.21429V8.99999H5.89286V6.56666H9.10714V8.99999H11.7857V11.92Z"
                            fill="#B5B5B5" />
                    </svg>Obat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:window.location.href=window.location.href">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="17" height="18" viewBox="0,0,256,256">
                    <g fill-opacity="0.28" fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M1,3v12h48v-12zM3,17v31h44v-31zM17.5,20h15c1.38281,0 2.5,1.11719 2.5,2.5c0,1.38281 -1.11719,2.5 -2.5,2.5h-15c-1.38281,0 -2.5,-1.11719 -2.5,-2.5c0,-1.38281 1.11719,-2.5 2.5,-2.5z"></path></g></g>
                    </svg>
                    Kelola Apotek</a>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content" style="background: #F7F7F7;">
        <div class="row mb-3">
            <div class="col-md-6">
                <div style="font-size: 24px;font-weight: 500;">Pengelolaan Apotek</div>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-primary" style="background: #6DA9E5;">+ Tambah</button>
            </div>
        </div>


        <div class="table-responsive" style="box-shadow: 0px 0px 9.1px 0px rgba(0, 0, 0, 0.25);">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Obat</th>
                        <th>Jenis Obat</th>
                        <th>Penyakit</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $obat)
                        <tr>
                            <td data-label="#">{{$obat['id']}}</td>
                            <td data-label="Name">{{$obat['nama obat']['nama obat']}}</td>
                            <td data-label="Jenis_Obat">{{$obat['nama obat']['jenis obat']}}</td>
                            <td data-label="penyakit">{{$obat['nama obat']['penyakit']}}</td>
                            <td data-label="harga">RP {{$obat['nama obat']['harga']}} ,00</td>
                            <td data-label="stok">{{$obat['stok']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>