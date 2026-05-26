<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Career - Ayam Gepuk Specialist</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fffdf5;
            color: #333;
        }

        /* HERO */
        .career-hero {
            background:
                linear-gradient(
                    rgba(255, 190, 51, 0.35),
                    rgba(255, 214, 102, 0.58)
                ),
                url('images/career-bg.png');

            background-size: cover;
            background-position: center;
            height: 55vh;

            display: flex;
            align-items: center;
            text-align: center;

            color: #2b2b2b;
        }

        .career-hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }

        .career-hero p {
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
            background: rgba(255, 255, 255, 0.85);
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

        /* JOB CARD */
        .job-card {
            background: #fff;
            border-radius: 18px;
            padding: 28px;
            border: 1px solid rgba(255, 190, 51, 0.25);
            transition: 0.3s;

            height: 100%;
            display: flex;
            flex-direction: column;

            margin-bottom: 20px;
        }

        .job-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(255, 190, 51, 0.25);
        }

        .job-card ul {
            flex-grow: 1;
            margin-top: 10px;
        }

        .job-card h4 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .badge-custom {
            background: #ffbe33;
            color: #111;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            width: fit-content;
        }

        /* BUTTON */
        .btn-warning {
            background: linear-gradient(135deg, #ffbe33, #ff9f1a);
            border: none;
            font-weight: 600;
            color: #111;
            border-radius: 30px;
            padding: 10px 18px;
            transition: 0.3s;
        }

        .btn-warning:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #ff9f1a, #ffbe33);
        }

        .btn-dark {
            background: #333;
            border: none;
        }

        /* ICON */
        .why-icon {
            font-size: 28px;
            margin-bottom: 10px;
            color: #ffbe33;
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <section class="career-hero">

        <div class="container">

            <div>

                <h1>Careers at Ayam Gepuk Specialist</h1>

                <p>
                    A fun working environment, delicious food,
                    and opportunities to grow with us 
                </p>

                <a href="#jobs" class="btn btn-warning mt-3">
                    View Positions
                </a>

            </div>

        </div>

    </section>

    <!-- BACK -->
    <div class="container mt-4 mb-4">

        <a href="/main" class="btn btn-dark">
            <i class="fa fa-arrow-left"></i> Back Home
        </a>

    </div>

    <!-- WHY JOIN -->
    <section class="container mt-5">

        <h2 class="section-title">
            Why Join <span>Us?</span>
        </h2>

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-md-4 mb-4">

                <div class="glass-card text-center">

                    <div class="why-icon">
                        <i class="fa fa-fire"></i>
                    </div>

                    <h5>Positive Environment</h5>

                    <p>
                        Work in a fun, friendly, and stress-free environment.
                    </p>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="col-md-4 mb-4">

                <div class="glass-card text-center">

                    <div class="why-icon">
                        <i class="fa fa-book"></i>
                    </div>

                    <h5>Training Provided</h5>

                    <p>
                        No experience? Don’t worry, we will guide and train you.
                    </p>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="col-md-4 mb-4">

                <div class="glass-card text-center">

                    <div class="why-icon">
                        <i class="fa fa-cutlery"></i>
                    </div>

                    <h5>Staff Meals</h5>

                    <p>
                        Enjoy spicy Ayam Gepuk meals during every shift 
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- JOB LIST -->
    <section id="jobs" class="container mt-5 mb-5">

        <h2 class="section-title">
            Available <span>Positions</span>
        </h2>

        <div class="row g-4">

            <!-- JOB 1 -->
            <div class="col-md-6 mb-4 d-flex">

                <div class="job-card w-100">

                    <span class="badge-custom">
                        Full Time
                    </span>

                    <h4>Restaurant Crew</h4>

                    <p>
                        Serve customers, prepare meals,
                        and maintain cleanliness.
                    </p>

                    <ul>
                        <li>Friendly working environment</li>
                        <li>Training provided</li>
                        <li>Career growth opportunities</li>
                    </ul>

                    <button class="btn btn-warning mt-auto">
                        Apply Now
                    </button>

                </div>

            </div>

            <!-- JOB 2 -->
            <div class="col-md-6 mb-4 d-flex">

                <div class="job-card w-100">

                    <span class="badge-custom">
                        Part Time
                    </span>

                    <h4>Kitchen Assistant</h4>

                    <p>
                        Assist in preparing Ayam Gepuk
                        and spicy sambal.
                    </p>

                    <ul>
                        <li>Flexible working hours</li>
                        <li>Meals provided</li>
                        <li>No experience required</li>
                    </ul>

                    <button class="btn btn-warning mt-auto">
                        Apply Now
                    </button>

                </div>

            </div>

            <!-- JOB 3 -->
            <div class="col-md-6 mb-4 d-flex">

                <div class="job-card w-100">

                    <span class="badge-custom">
                        Full Time
                    </span>

                    <h4>Cashier</h4>

                    <p>
                        Handle payments and provide excellent customer service.
                    </p>

                    <ul>
                        <li>Fast-paced environment</li>
                        <li>Performance bonuses available</li>
                        <li>Complete training provided</li>
                    </ul>

                    <button class="btn btn-warning mt-auto">
                        Apply Now
                    </button>

                </div>

            </div>

            <!-- JOB 4 -->
            <div class="col-md-6 mb-4 d-flex">

                <div class="job-card w-100">

                    <span class="badge-custom">
                        Internship
                    </span>

                    <h4>Marketing Intern</h4>

                    <p>
                        Help promote Ayam Gepuk Specialist
                        on social media platforms.
                    </p>

                    <ul>
                        <li>Learn digital marketing skills</li>
                        <li>Creative working environment</li>
                        <li>Certificate provided</li>
                    </ul>

                    <button class="btn btn-warning mt-auto">
                        Apply Now
                    </button>

                </div>

            </div>

        </div>

    </section>

</body>

</html>