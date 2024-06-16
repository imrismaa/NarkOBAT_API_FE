@extends('layouts.layout')
<title>Website Intero</title>

<div class="layout-btn">
    <a href="{{ route('obat') }}">
        <button type="button" class="btn btn-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFF" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"></path>
            </svg>
                Back to dashboard
        </button>
    </a>
</div>
<div class="layout-profile profile">
    <div class="row">
        <div class="col-md-3" style="background: #6DA9E5;">
            <img src="{{ asset('img/profile.png') }}" alt="" class="img-fluid img-profil">
            <div class="heading text-center mt-4" style="color: #fff;"> {{Auth::User()->name}} </div>
            <div class="title text-center mb-3" style="color: #fff;">Public</div>
        </div>
        <div class="col-md-9">
            <div class="heading mb-4">Information</div>
            <div>
                <div class="title">Nama</div>
                <div class="subtitle"> {{Auth::user()->name}} </div>
            </div>

            <div class="mt-3">
                <div class="title">Email</div>
                <div class="subtitle">{{Auth::user()->email}}</div>
            </div>
            <br>

            
            <div class="mt-3 mb-3">
                <form action="{{ route('apotik-connect') }}" method="POST">
                    @csrf
                    <input type="text" class="form-control token" placeholder="Masukkan Token Anda" name="token" id="token">
                    <br>
                    <button type="submit" class="btn btn-back">
                        Hubungkan Ke Apotik
                    </button>
                </form>
            </div>
            <br><br><br>
            <div class="mt-3 mb-3">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-back">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFF" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</div>