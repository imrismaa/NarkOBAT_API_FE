@extends('layouts.layout');

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="content-layout">
        <div class="row">
            <div class="col-md-6 order-1">
                <img src="{{ asset('img/img-auth.png') }}" alt="" class="img-fluid">
                <p class="text-center ghoib" style="font-size: 20px;font-weight: 400;">Sudah punya akun? <span><a
                            href="{{ route('login') }}"
                            style="color: #6DA9E5; text-decoration: none;">Login</a></span></p>
            </div>

            <div class="col-md-4 order-2">
                <div style="font-family: Poppins;font-size: 36px;font-weight: 600; margin-bottom: 40px;">Register</div>
                <!-- Name -->
                <div>
                    <div class="d-flex colom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path
                                d="M12.5 0C14.1576 0 15.7473 0.65848 16.9194 1.83058C18.0915 3.00268 18.75 4.5924 18.75 6.25C18.75 7.9076 18.0915 9.49732 16.9194 10.6694C15.7473 11.8415 14.1576 12.5 12.5 12.5C10.8424 12.5 9.25268 11.8415 8.08058 10.6694C6.90848 9.49732 6.25 7.9076 6.25 6.25C6.25 4.5924 6.90848 3.00268 8.08058 1.83058C9.25268 0.65848 10.8424 0 12.5 0ZM12.5 15.625C19.4062 15.625 25 18.4219 25 21.875V25H0V21.875C0 18.4219 5.59375 15.625 12.5 15.625Z"
                                fill="black" />
                        </svg>
                        <div class="input-group mb-3 input-edit">
                            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                                autocomplete="name" class="form-control noneborder" placeholder="Masukkan Nama Anda" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <!-- Email Address -->
                <div class="mt-4">
                    <div class="d-flex colom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="21" viewBox="0 0 25 21" fill="none">
                            <path
                                d="M22.5 0.5H2.5C1.125 0.5 0.0125 1.625 0.0125 3L0 18C0 19.375 1.125 20.5 2.5 20.5H22.5C23.875 20.5 25 19.375 25 18V3C25 1.625 23.875 0.5 22.5 0.5ZM22.5 5.5L12.5 11.75L2.5 5.5V3L12.5 9.25L22.5 3V5.5Z"
                                fill="black" />
                        </svg>
                        <div class="input-group mb-3 input-edit">
                            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="email" class="form-control noneborder"
                                placeholder="Masukkan Email Anda" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <div class="d-flex colom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                            <path
                                d="M3.125 27C2.26562 27 1.53021 26.7484 0.91875 26.2453C0.307291 25.7421 0.00104167 25.1366 0 24.4286V11.5714C0 10.8643 0.30625 10.2591 0.91875 9.756C1.53125 9.25286 2.26667 9.00086 3.125 9H4.6875V6.42857C4.6875 4.65 5.44948 3.13414 6.97344 1.881C8.49739 0.627858 10.3396 0.00085802 12.5 8.7762e-07C14.6604 -0.000856265 16.5031 0.626144 18.0281 1.881C19.5531 3.13586 20.3146 4.65171 20.3125 6.42857V9H21.875C22.7344 9 23.4703 9.252 24.0828 9.756C24.6953 10.26 25.001 10.8651 25 11.5714V24.4286C25 25.1357 24.6943 25.7413 24.0828 26.2453C23.4714 26.7493 22.7354 27.0009 21.875 27H3.125ZM12.5 20.5714C13.3594 20.5714 14.0953 20.3199 14.7078 19.8167C15.3203 19.3136 15.626 18.708 15.625 18C15.624 17.292 15.3182 16.6869 14.7078 16.1846C14.0974 15.6823 13.3615 15.4303 12.5 15.4286C11.6385 15.4269 10.9031 15.6789 10.2937 16.1846C9.68437 16.6903 9.37812 17.2954 9.375 18C9.37187 18.7046 9.67812 19.3101 10.2937 19.8167C10.9094 20.3233 11.6448 20.5749 12.5 20.5714ZM7.8125 9H17.1875V6.42857C17.1875 5.35714 16.7318 4.44643 15.8203 3.69643C14.9089 2.94643 13.8021 2.57143 12.5 2.57143C11.1979 2.57143 10.0911 2.94643 9.17969 3.69643C8.26823 4.44643 7.8125 5.35714 7.8125 6.42857V9Z"
                                fill="black" />
                        </svg>
                        <div class="input-group mb-3 input-edit">
                            <x-text-input id="password" type="password" name="password" required
                                autocomplete="new-password" placeholder="Masukkan Password"
                                class="form-control noneborder" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <div class="d-flex colom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                            <path
                                d="M3.125 27C2.26562 27 1.53021 26.7484 0.91875 26.2453C0.307291 25.7421 0.00104167 25.1366 0 24.4286V11.5714C0 10.8643 0.30625 10.2591 0.91875 9.756C1.53125 9.25286 2.26667 9.00086 3.125 9H4.6875V6.42857C4.6875 4.65 5.44948 3.13414 6.97344 1.881C8.49739 0.627858 10.3396 0.00085802 12.5 8.7762e-07C14.6604 -0.000856265 16.5031 0.626144 18.0281 1.881C19.5531 3.13586 20.3146 4.65171 20.3125 6.42857V9H21.875C22.7344 9 23.4703 9.252 24.0828 9.756C24.6953 10.26 25.001 10.8651 25 11.5714V24.4286C25 25.1357 24.6943 25.7413 24.0828 26.2453C23.4714 26.7493 22.7354 27.0009 21.875 27H3.125ZM12.5 20.5714C13.3594 20.5714 14.0953 20.3199 14.7078 19.8167C15.3203 19.3136 15.626 18.708 15.625 18C15.624 17.292 15.3182 16.6869 14.7078 16.1846C14.0974 15.6823 13.3615 15.4303 12.5 15.4286C11.6385 15.4269 10.9031 15.6789 10.2937 16.1846C9.68437 16.6903 9.37812 17.2954 9.375 18C9.37187 18.7046 9.67812 19.3101 10.2937 19.8167C10.9094 20.3233 11.6448 20.5749 12.5 20.5714ZM7.8125 9H17.1875V6.42857C17.1875 5.35714 16.7318 4.44643 15.8203 3.69643C14.9089 2.94643 13.8021 2.57143 12.5 2.57143C11.1979 2.57143 10.0911 2.94643 9.17969 3.69643C8.26823 4.44643 7.8125 5.35714 7.8125 6.42857V9Z"
                                fill="black" />
                        </svg>
                        <div class="input-group mb-3 input-edit">
                            <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                                required autocomplete="current-password" placeholder="Masukkan Kembali Password"
                                class="form-control noneborder" required autocomplete="new-password" />
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div class="d-flex justify-content-center text-center my-4">
                    <x-primary-button class="button-auth mt-3">
                        {{ __('Kirim') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>
</form>