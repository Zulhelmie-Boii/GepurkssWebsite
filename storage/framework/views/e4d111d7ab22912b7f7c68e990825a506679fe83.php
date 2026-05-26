<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - Ayam Gepuk Specialist</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fffdf5;
            color: #333;
        }

        /* HERO */
        .about-hero {
            background:
                linear-gradient(
                    rgba(255, 190, 51, 0.35),
                    rgba(255, 214, 102, 0.58)
                ),
                url('images/aboutbg.png');

            background-size: cover;
            background-position: center;
            height: 55vh;

            display: flex;
            align-items: center;
            text-align: center;

            color: #2b2b2b;
        }

        .about-hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }

        .about-hero p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* SECTION TITLE */
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .section-title span {
            color: #ffbe33;
        }

        /* GLASS CARD */
        .glass-card {
            background: rgba(255, 255, 255, 0.88);
            border: 1px solid rgba(255, 190, 51, 0.3);
            border-radius: 16px;
            padding: 25px;
            transition: 0.3s;
            box-shadow: 0 8px 20px rgba(255, 190, 51, 0.1);
        }

        .glass-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(255, 190, 51, 0.25);
        }

        /* ICON */
        .why-icon {
            font-size: 30px;
            margin-bottom: 10px;
            color: #ffbe33;
        }

        /* BUTTON */
        .btn-warning {
            background: linear-gradient(135deg, #ffbe33, #ff9f1a);
            border: none;
            font-weight: 600;
            color: #111;
            border-radius: 30px;
            padding: 10px 18px;
        }

        .btn-warning:hover {
            transform: scale(1.05);
        }

        .btn-dark {
            background: #333;
            border: none;
        }

        /* STORY BOX */
        .story-box {
            background: #fff;
            border-radius: 18px;
            padding: 30px;
            border: 1px solid rgba(255, 190, 51, 0.25);
            height: 100%;
        }

    </style>
</head>

<body>

<!-- HERO -->
<section class="about-hero">

    <div class="container">

        <div>

            <h1>About Ayam Gepuk Specialist</h1>

            <p>
                Spicy, crispy, and full of flavor — our story of passion for ayam gepuk 🔥
            </p>

            <a href="#story" class="btn btn-warning mt-3">
                Our Story
            </a>

        </div>

    </div>

</section>

<!-- BACK BUTTON -->
<div class="container mt-4 mb-4">

    <a href="/main" class="btn btn-dark">
        <i class="fa fa-arrow-left"></i> Back Home
    </a>

</div>

<!-- STORY SECTION -->
<section id="story" class="container mt-5">

    <h2 class="section-title">
        Our <span>Story</span>
    </h2>

    <div class="row g-4">

        <div class="col-md-6 mb-4">
            <div class="story-box">
                <h4>How We Started</h4>
                <p>
                    Ayam Gepuk Specialist started with a simple passion — bringing
                    authentic Indonesian-style spicy fried chicken to Malaysia.
                    We wanted every bite to be crispy, juicy, and full of sambal heat.
                </p>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="story-box">
                <h4>Our Signature Taste</h4>
                <p>
                    What makes us different is our homemade sambal recipe.
                    Every chicken is freshly fried and smashed before being topped
                    with our signature spicy chili blend.
                </p>
            </div>
        </div>

    </div>

</section>

<!-- WHY US -->
<section class="container mt-5 mb-5">

    <h2 class="section-title">
        Why People <span>Love Us</span>
    </h2>

    <div class="row g-4">

        <div class="col-md-4 mb-4">
            <div class="glass-card text-center">
                <div class="why-icon"><i class="fa fa-fire"></i></div>
                <h5>Super Spicy Taste</h5>
                <p>Perfect balance of heat and flavor for spicy lovers.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="glass-card text-center">
                <div class="why-icon"><i class="fa fa-cutlery"></i></div>
                <h5>Fresh Ingredients</h5>
                <p>We use only fresh chicken and homemade sambal daily.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="glass-card text-center">
                <div class="why-icon"><i class="fa fa-heart"></i></div>
                <h5>Made With Passion</h5>
                <p>Every dish is prepared with love and consistency.</p>
            </div>
        </div>

    </div>

</section>

</body>
</html><?php /**PATH C:\Users\mzulh\group-assignment4\resources\views/about.blade.php ENDPATH**/ ?>