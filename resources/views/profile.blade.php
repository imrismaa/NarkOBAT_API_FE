@extends('layouts.layout');
<title>Website Intero</title>

<div class="layout-profile profile">
    <div class="row">
        <div class="col-md-3" style="background: #6DA9E5;">
            <img src="{{ asset('img/profile.png') }}" alt="" class="img-fluid img-profil">
            <div class="heading text-center mt-4" style="color: #fff;">Wade Warren</div>
            <div class="title text-center mb-3" style="color: #fff;">Public</div>
        </div>
        <div class="col-md-9">
            <div class="heading mb-4">Information</div>
            <div>
                <div class="title">Nama Lengkap</div>
                <div class="subtitle">Wade Warren</div>
            </div>

            <div class="mt-3">
                <div class="title">Email</div>
                <div class="subtitle">grothoff@icloud.com</div>
            </div>

            <div class="mt-3">
                <div class="title">Password</div>
                <div class="subtitle">********</div>
            </div>

            <div class="mt-3">
                <div class="title">Token</div>
                <div class="mb-5 d-flex apply">
                    <input type="text" class="form-control token" placeholder="Masukkan Token Anda">
                    <a href="{{ route('profile-applied') }}">
                        <button class="btn btn-outline-success ms-3">Apply</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>