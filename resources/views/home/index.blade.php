<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/rsq.png') }}">
    <title>Keluhan Pasien RS Qadr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        @media screen and (min-width: 768px) {
            .logo {
                display: flex;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="py-2 sticky-top bg-qadr">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-start">
                    <img src="{{ asset('img/rsq.png') }}" alt="" width="60" height="54" class="img-fluid">
                    <img src="{{ asset('img/kars.png') }}" alt="" width="60" height="54" class="img-fluid">
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <span class="pe-3 contact-link text-decoration-none text-white">Hubungi Kami | </span>
                    <a href="tel:+0215464466" class="link-header text-decoration-none text-white">
                        <i class="fa fa-phone contact-icon"></i>
                        <span class="contact-link">(021) 546 4466</span>
                    </a>
                    <a href="https://wa.me/+6285158432664" class="link-header text-decoration-none text-white" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-whatsapp contact-icon"></i>
                        <span class="contact-link">0851-5843-2664</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Form -->
    <form class="form py-2" id="regForm" action="/home/store" method="POST">
        @csrf
        <div class="container my-2 pt-2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Maaf!</strong> ada kesalahan</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="row my-3">
                <div class="col-md-2 d-flex align-items-center">
                    <p class="mb-0 p-0">
                        Jenis Rawat
                        <span class="text-danger">*</span>
                    </p>
                </div>
                <div class="col-md-10">
                    <select id="jenisrawat" name="layanan" class="form-select">
                        <option>Pilih Jenis Rawat</option>
                        <option class="IGD" value="IGD">IGD</option>
                        <option class="RJ" value="RAWAT JALAN">RAWAT JALAN</option>
                        <option class="RI" value="RAWAT INAP">RAWAT INAP</option>
                    </select>
                </div>
            </div>
            <div class="my-3 RI RJ box">
                <div class="row">
                    <div class="col-md-2 d-flex align-items-center">
                        <p class="mb-0 p-0">Nama Ruangan</p>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="namaruangan" name="namaruangan"
                            placeholder="Ketik Nama Ruangan">
                    </div>
                </div>
            </div>
            <div class="IGD RI RJ box">
                <div class="row my-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <p class="mb-0 p-0">
                            Tanggal Kejadian
                            <span class="text-danger">*</span>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="tglkejadian" name="tglkejadian"
                            placeholder="Ketik Tanggal Kejadian">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <p class="mb-0 p-0">Nama Perawat</p>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="namaperawat" name="namaperawat"
                            placeholder="Ketik Nama Perawat">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <p class="mb-0 p-0">Nama Dokter</p>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="namadokter" name="namadokter"
                            placeholder="Ketik Nama Dokter">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <p class="mb-0 p-0">
                            Isi Keluhan
                            <span class="text-danger">*</span>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <textarea class="form-control" id="isikeluhan" name="isikeluhan" rows="3"></textarea>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <p class="mb-0 p-0">
                            Nomor Whatsapp
                            <span class="text-danger">*</span>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <input type="number" class="form-control" id="nomorwa" name="nomorwa"
                            placeholder="Ketik Nomor Whatsapp">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <p class="mb-0 p-0">
                            Captcha
                            <span class="text-danger">*</span>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                                Ganti Captcha
                            </button>
                        </div>
                        <input id="captcha" type="text" class="form-control my-2" placeholder="Ketik Captcha" name="captcha">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-2 d-flex align-items-center">
                        <p class="mb-0 p-0">
                            Rating
                            <span class="text-danger">*</span>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="rate">
                            <input type="radio" id="star5" class="rate" name="rating" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" class="rate" name="rating" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" class="rate" name="rating" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" class="rate" name="rating" value="2">
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" class="rate" name="rating" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>
                </div>
                <span class="text-danger">* Wajib</span>
                <div class="my-3 col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                    <input type="submit" value="Kirim Keluhan" class="btn bg-qadr text-light">
                </div>
            </div>
        </div>
    </form>

    <!-- Footer -->
    <div class="text-center">
        <p>Copyright © 2023 - <a href="https://rsqadr.co.id/" target="_blank" rel="noopener noreferrer"
                class="text-decoration-none text-dark">RS Qadr</a>
        </p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        // Dropdown
        $(document).ready(function () {
            $("select").change(function () {
                $(this).find("option:selected").each(function () {
                    var optionClass = $(this).attr("class");
                    if (optionClass) {
                        $(".box").not("." + optionClass).hide();
                        $("." + optionClass).show();
                    } else {
                        $(".box").hide();
                    }
                });
            }).change();
        });

        // Captcha
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
</body>
</html>