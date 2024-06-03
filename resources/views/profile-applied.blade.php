@extends('layouts.layout');
<title>Profil</title>

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
                <div class=" d-flex mb-5 apply">
                    <input type="text" class="form-control token" placeholder="TyjahfstJKHJYnkj" disabled>
                    <button class="btn btn-success ms-3">Applied</button>
                </div>
            </div>
        </div>
    </div>
</div>