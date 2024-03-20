<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/favicon.jpg" type="image/png">

    <!--=============== REMIXICONS ===============-->
    {{-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <!--=============== CSS ===============-->
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            line-height: 1.5;
        }

        .card-wrapper {
            max-width: 1100px;
            margin: 0 auto;
        }

        img {
            width: 100%;
            display: block;
        }

        .img-display {
            overflow: hidden;
        }

        .img-showcase {
            display: flex;
            width: 100%;
            transition: all 0.5s ease;
        }

        .img-showcase img {
            min-width: 100%;
        }

        .img-select {
            display: flex;
        }

        .img-item {
            margin: 0.3rem;
        }

        .img-item:nth-child(1),
        .img-item:nth-child(2),
        .img-item:nth-child(3) {
            margin-right: 0;
        }

        .img-item:hover {
            opacity: 0.8;
        }

        .product-content {
            padding: 2rem 1rem;
        }

        .product-title {
            font-size: 3rem;
            text-transform: capitalize;
            font-weight: 700;
            position: relative;
            color: #12263a;
            margin: 1rem 0;
        }

        .product-title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            width: 80px;
            background: #12263a;
        }

        .product-link {
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 0.5rem;
            background: #256eff;
            color: #fff;
            padding: 0 0.3rem;
            transition: all 0.5s ease;
        }

        .product-link:hover {
            opacity: 0.9;
        }

        .product-rating {
            color: #ffc107;
        }

        .product-rating span {
            font-weight: 600;
            color: #252525;
        }

        .product-price {
            margin: 1rem 0;
            font-size: 1rem;
            font-weight: 700;
        }

        .product-price span {
            font-weight: 400;
        }

        .last-price span {
            color: #f64749;
            text-decoration: line-through;
        }

        .new-price span {
            color: #256eff;
        }

        .product-detail h2 {
            text-transform: capitalize;
            color: #12263a;
            padding-bottom: 0.6rem;
        }

        .product-detail p {
            font-size: 0.9rem;
            padding: 0.3rem;
            opacity: 0.8;
        }

        .product-detail ul {
            margin: 1rem 0;
            font-size: 0.9rem;
        }

        .product-detail ul li {
            margin: 0;
            list-style: none;
            background: url(shoes_images/checked.png) left center no-repeat;
            background-size: 18px;
            padding-left: 1.7rem;
            margin: 0.4rem 0;
            font-weight: 600;
            opacity: 0.9;
        }

        .product-detail ul li span {
            font-weight: 400;
        }

        .purchase-info {
            margin: 1.5rem 0;
        }

        .purchase-info input,
        .purchase-info .btn {
            border: 1.5px solid #ddd;
            border-radius: 25px;
            text-align: center;
            padding: 0.45rem 0.8rem;
            outline: 0;
            margin-right: 0.2rem;
            margin-bottom: 1rem;
        }

        .purchase-info input {
            width: 60px;
        }

        .purchase-info .btn {
            cursor: pointer;
            color: #fff;
        }

        .purchase-info .btn:first-of-type {
            background: #256eff;
        }

        .purchase-info .btn:last-of-type {
            background: #f64749;
        }

        .purchase-info .btn:hover {
            opacity: 0.9;
        }

        .social-links {
            display: flex;
            align-items: center;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            color: #000;
            border: 1px solid #000;
            margin: 0 0.2rem;
            border-radius: 50%;
            text-decoration: none;
            font-size: 0.8rem;
            transition: all 0.5s ease;
        }

        .social-links a:hover {
            background: #000;
            border-color: transparent;
            color: #fff;
        }

        @media screen and (min-width: 992px) {
            .card {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 1.5rem;
            }

            .card-wrapper {
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .product-imgs {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .product-content {
                padding-top: 0;
            }
        }
    </style>
    <title>Photos and Typography</title>
</head>

<body>
    <div class="card-wrapper">
        <div class="card">
            @forelse ($paket_wisata as $paket)
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div style="height: 400px" class="img-showcase">
                            <img style="object-fit: cover; width: 500px; height: 600px;"
                                src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto1 }}">
                            <img style="object-fit: cover"
                                src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto2 }}">
                            <img style="object-fit: cover"
                                src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto3 }}">
                            <img style="object-fit: cover"
                                src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto4 }}">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img style="object-fit: cover; width: 150px; height: 100px;"
                                    src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto1 }}">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img style="object-fit: cover;  width: 150px; height: 100px;"
                                    src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto2 }}">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img style="object-fit: cover;  width: 150px; height: 100px;"
                                    src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto3 }}">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img style="object-fit: cover;  width: 150px; height: 100px;"
                                    src="{{ asset('uploads/image_uploads') }}/{{ $paket->foto4 }}">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                    <h2 class="product-title">{{ $paket->nama_paket }}</h2>
                    <a href="#" class="product-link">visit Wisata</a>

                    <div class="product-price">
                        <!-- <p class = "last-price">Old Price: <span>$257.00</span></p> -->
                        <p class="new-price">Harga Per-pack:
                            <span>RP.{{ number_format($paket->harga_per_pack) }}</span>
                        </p>
                    </div>

                    <div class="product-detail">
                        <h2>detail this wisata: </h2>
                        <p>{{ $paket->deskripsi }}</p>
                        <ul>
                            <li>Fasilitas: <span>{{ $paket->fasilitas }}</span></li>
                            <li>Diskon: <span>{{ number_format($paket->diskon) }}%</span></li>
                        </ul>
                    </div>

                    <div class="purchase-info">
                        <input type="number" min="0" value="1">
                        <a href="{{ route('reservasi') }}" type="submit" class="btn">
                            Buy <i class="fas fa-shopping-cart"></i>
                        </a>
                        {{-- <button type="button" class="btn">Compare</button> --}}
                    </div>
                </div>
        </div>
    </div>
@empty
    No Data Found
    @endforelse

    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>
</body>

</html>
