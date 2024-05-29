<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Login Website Intero</title>
</head>

<body>
    <div class="content-layout">
        <div class="row">
            <div class="col-md-6 order-1">
                <img src="{{ asset('img/img-auth.png') }}" alt="" class="img-fluid">
                <p class="text-center ghoib" style="font-size: 20px;font-weight: 400;">Belum punya akun? <span><a
                            href="{{ route('register') }}" style="color: #6DA9E5;;">Register</a></span></p>
            </div>
            <div class="col-md-4 order-2">
                <div style="font-family: Poppins;font-size: 36px;font-weight: 600; margin-bottom: 40px;">Login</div>
                <div>
                    <div class="d-flex colom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path
                                d="M12.5 0C14.1576 0 15.7473 0.65848 16.9194 1.83058C18.0915 3.00268 18.75 4.5924 18.75 6.25C18.75 7.9076 18.0915 9.49732 16.9194 10.6694C15.7473 11.8415 14.1576 12.5 12.5 12.5C10.8424 12.5 9.25268 11.8415 8.08058 10.6694C6.90848 9.49732 6.25 7.9076 6.25 6.25C6.25 4.5924 6.90848 3.00268 8.08058 1.83058C9.25268 0.65848 10.8424 0 12.5 0ZM12.5 15.625C19.4062 15.625 25 18.4219 25 21.875V25H0V21.875C0 18.4219 5.59375 15.625 12.5 15.625Z"
                                fill="black" />
                        </svg>
                        <div class="input-group mb-3 input-edit">
                            <input type="text" class="form-control regis" placeholder="Nama Lengkap"
                                aria-label="Username">
                        </div>
                    </div>
                    <div class="d-flex mt-5 colom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                            <path
                                d="M3.125 27C2.26562 27 1.53021 26.7484 0.91875 26.2453C0.307291 25.7421 0.00104167 25.1366 0 24.4286V11.5714C0 10.8643 0.30625 10.2591 0.91875 9.756C1.53125 9.25286 2.26667 9.00086 3.125 9H4.6875V6.42857C4.6875 4.65 5.44948 3.13414 6.97344 1.881C8.49739 0.627858 10.3396 0.00085802 12.5 8.7762e-07C14.6604 -0.000856265 16.5031 0.626144 18.0281 1.881C19.5531 3.13586 20.3146 4.65171 20.3125 6.42857V9H21.875C22.7344 9 23.4703 9.252 24.0828 9.756C24.6953 10.26 25.001 10.8651 25 11.5714V24.4286C25 25.1357 24.6943 25.7413 24.0828 26.2453C23.4714 26.7493 22.7354 27.0009 21.875 27H3.125ZM12.5 20.5714C13.3594 20.5714 14.0953 20.3199 14.7078 19.8167C15.3203 19.3136 15.626 18.708 15.625 18C15.624 17.292 15.3182 16.6869 14.7078 16.1846C14.0974 15.6823 13.3615 15.4303 12.5 15.4286C11.6385 15.4269 10.9031 15.6789 10.2937 16.1846C9.68437 16.6903 9.37812 17.2954 9.375 18C9.37187 18.7046 9.67812 19.3101 10.2937 19.8167C10.9094 20.3233 11.6448 20.5749 12.5 20.5714ZM7.8125 9H17.1875V6.42857C17.1875 5.35714 16.7318 4.44643 15.8203 3.69643C14.9089 2.94643 13.8021 2.57143 12.5 2.57143C11.1979 2.57143 10.0911 2.94643 9.17969 3.69643C8.26823 4.44643 7.8125 5.35714 7.8125 6.42857V9Z"
                                fill="black" />
                        </svg>
                        <div class="input-group mb-3 input-edit">
                            <input type="text" class="form-control regis" placeholder="Password" aria-label="Username">
                        </div>
                    </div>
                </div>
                <div class="button-auth mt-5">Login</div>
                <p class="text-center tidak-ghoib" style="font-size: 20px;font-weight: 400;">Belum punya akun? <span><a
                            href="{{ route('register') }}" style="color: #6DA9E5;">Register</a></span></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>