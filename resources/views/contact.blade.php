<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact - Ayam Gepuk Specialist</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fffdf5;
            overflow-x: hidden;
        }

        /* ================= HERO ================= */
        .contact-hero {
            position: relative;
            height: 55vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            overflow: hidden;

            background:
                linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('images/contactbg.png');

            background-size: cover;
            background-position: center;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .contact-hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
        }

        .contact-hero p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* ================= SECTION TITLE ================= */
        .section-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 35px;
        }

        .section-title span {
            color: #ff9f1a;
        }

        /* ================= MAIN WRAPPER (FIX HEIGHT ISSUE) ================= */
        .contact-wrapper {
            display: flex;
            align-items: stretch;
        }

        .equal-height {
            display: flex;
        }

        /* ================= GLASS CARD ================= */
        .glass {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(14px);
            border-radius: 22px;
            border: 1px solid rgba(255, 190, 51, 0.25);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);

            width: 100%;
            height: 100%;

            display: flex;
            flex-direction: column;

            padding: 30px;
        }

        /* ================= LEFT ITEMS ================= */
        .contact-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px;
            border-radius: 14px;
            margin-bottom: 14px;
            transition: 0.3s;
        }

        .contact-item:hover {
            background: rgba(255, 190, 51, 0.08);
            transform: translateX(4px);
        }

        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: linear-gradient(135deg, #ffbe33, #ff9f1a);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #111;
            font-size: 18px;
        }

        .contact-item h6 {
            margin: 0;
            font-weight: 700;
        }

        .contact-item p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }

        /* ================= FORM FIX ================= */
        .form-control {
            border-radius: 14px;
            padding: 12px;
            border: 1px solid #eee;
        }

        .form-control:focus {
            border-color: #ffbe33;
            box-shadow: 0 0 0 0.2rem rgba(255, 190, 51, 0.2);
        }

        textarea.form-control {
            resize: none;
        }

        /* push button to bottom */
        .form-footer {
            margin-top: auto;
        }

        /* ================= BUTTON ================= */
        .btn-gold {
            background: linear-gradient(135deg, #ffbe33, #ff9f1a);
            border: none;
            font-weight: 700;
            border-radius: 30px;
            padding: 12px;
            color: #111;
            transition: 0.3s;
        }

        .btn-gold:hover {
            transform: scale(1.03);
            box-shadow: 0 12px 25px rgba(255, 190, 51, 0.3);
        }

        /* ================= BACK BUTTON ================= */
        .back-wrapper {
            margin-top: 20px;
        }

        /* ================= WHATSAPP ================= */
        .wa-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #25D366;
            width: 58px;
            height: 58px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: white;
            z-index: 999;
        }

        .wa-btn:hover {
            transform: scale(1.1);
        }

        /* ================= RESPONSIVE ================= */
        @media(max-width:768px) {
            .contact-wrapper {
                display: block;
            }

            .glass {
                margin-bottom: 20px;
            }

            .contact-hero h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <section class="contact-hero">
        <div class="hero-content">
            <h1>Contact Us</h1>
            <p>We are ready to serve you anytime</p>
        </div>
    </section>

    <!-- BACK BUTTON (UNCHANGED POSITION) -->
    <div class="container back-wrapper">
        <a href="/main" class="btn btn-dark px-4 py-2">
            <i class="fa fa-arrow-left"></i> Back Home
        </a>
    </div>

    <!-- CONTACT -->
    <section class="container mt-5 mb-5">

        <h2 class="section-title text-center">
            Get In <span>Touch</span>
        </h2>

        <div class="row g-4 contact-wrapper">

            <!-- LEFT -->
            <div class="col-md-5 equal-height">
                <div class="glass">

                    <div class="contact-item">
                        <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                        <div>
                            <h6>Location</h6>
                            <p>Klang, Selangor</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="icon-box"><i class="fa fa-phone"></i></div>
                        <div>
                            <h6>Phone</h6>
                            <p>+60 12-345 6789</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="icon-box"><i class="fa fa-envelope"></i></div>
                        <div>
                            <h6>Email</h6>
                            <p>contact@ayamgepuk.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                        <div>
                            <h6>Hours</h6>
                            <p>10:00 AM - 10:00 PM</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-md-7 equal-height">
                <div class="glass">

                    <form method="POST" action="#" class="h-100 d-flex flex-column">
                        @csrf

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" rows="6"
                                    placeholder="Write your message..."></textarea>
                            </div>

                        </div>

                        <!-- BUTTON ALWAYS AT BOTTOM -->
                        <div class="form-footer mt-4">
                            <button class="btn btn-gold w-100">
                                Send Message 
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

    <!-- WHATSAPP -->
    <a class="wa-btn" href="https://wa.me/60123456789">
        <i class="fa fa-whatsapp"></i>
    </a>

</body>

</html>