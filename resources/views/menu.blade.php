<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Menu - Ayam Gepuk Specialist</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fffdf5;
            color: #333;
        }

        .menu-hero {
            background:
                linear-gradient(135deg,
                    rgba(255, 190, 51, 0.45),
                    rgba(255, 140, 0, 0.65)),
                url('images/aboutbg.png');

            background-size: cover;
            background-position: center;
            height: 55vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #2b2b2b;
        }

        .menu-hero h1 {
            font-size: 3.8rem;
            font-weight: 800;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 30px;
        }

        .section-title span {
            color: #ff9f1a;
        }

        .menu-filter {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 40px;
        }

        .filter-btn {
            padding: 8px 18px;
            border-radius: 25px;
            border: 1px solid #ffd28a;
            background: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: linear-gradient(135deg, #ffbe33, #ff9f1a);
            color: #111;
            transform: scale(1.05);
        }

        .menu-card {
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid rgba(255, 190, 51, 0.25);
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
            transition: 0.3s;
            height: 100%;
        }

        .menu-card:hover {
            transform: translateY(-8px);
        }

        .menu-img {
            height: 180px;
            overflow: hidden;
        }

        .menu-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .menu-body {
            padding: 18px;
        }

        .menu-footer {
            display: flex;
            justify-content: space-between;
        }

        .price {
            font-weight: 800;
            color: #ff9f1a;
        }

        .order-btn {
            background: linear-gradient(135deg, #ffbe33, #ff9f1a);
            border: none;
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 13px;
        }

        .back-wrapper {
            margin-top: 20px;
        }

        .btn-dark {
            border-radius: 10px;
            padding: 10px 18px;
        }

        .hide {
            display: none !important;
        }
    </style>
</head>

<body>

<!-- HERO -->
<section class="menu-hero">
    <div>
        <h1>Our Menu</h1>
        <p>Spicy, Crispy & Legendary Ayam Gepuk Experience </p>
    </div>
</section>

<!-- BACK -->
<div class="container back-wrapper">
    <a href="/main" class="btn btn-dark">
        <i class="fa fa-arrow-left"></i> Back Home
    </a>
</div>

<!-- MENU -->
<section class="container mt-5 mb-5">

    <h2 class="section-title text-center">Explore <span>Menu</span></h2>

    <!-- FILTER -->
    <div class="menu-filter">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="ayam">Ayam Gepuk</button>
        <button class="filter-btn" data-filter="spicy">Spicy</button>
        <button class="filter-btn" data-filter="combo">Combo</button>
        <button class="filter-btn" data-filter="sides">Sides</button>
        <button class="filter-btn" data-filter="drinks">Drinks</button>
    </div>

    <div class="row g-4">

        <!-- AYAM -->
        <div class="col-md-4 menu-item ayam">
            <div class="menu-card">
                <div class="menu-img"><img src="images/agori.jpg"></div>
                <div class="menu-body">
                    <h5>Ayam Gepuk Original</h5>
                    <div class="menu-footer">
                        <span class="price">RM 8.90</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 menu-item ayam">
            <div class="menu-card">
                <div class="menu-img"><img src="images/agcris.jpg"></div>
                <div class="menu-body">
                    <h5>Extra Crispy Ayam</h5>
                    <div class="menu-footer">
                        <span class="price">RM 9.90</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SPICY -->
        <div class="col-md-4 menu-item spicy">
            <div class="menu-card">
                <div class="menu-img"><img src="images/ayam_spicy.png"></div>
                <div class="menu-body">
                    <h5>Level 3 Spicy</h5>
                    <div class="menu-footer">
                        <span class="price">RM 10.90</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 menu-item spicy">
            <div class="menu-card">
                <div class="menu-img"><img src="images/ayam_challenge.jpg"></div>
                <div class="menu-body">
                    <h5>Level 5 Challenge</h5>
                    <div class="menu-footer">
                        <span class="price">RM 12.90</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- COMBO -->
        <div class="col-md-4 menu-item combo">
            <div class="menu-card">
                <div class="menu-img"><img src="images/combo1.png"></div>
                <div class="menu-body">
                    <h5>Student Combo</h5>
                    <div class="menu-footer">
                        <span class="price">RM 10.90</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 menu-item combo">
            <div class="menu-card">
                <div class="menu-img"><img src="images/family.jpg"></div>
                <div class="menu-body">
                    <h5>Family Combo</h5>
                    <div class="menu-footer">
                        <span class="price">RM 39.90</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SIDES -->
        <div class="col-md-4 menu-item sides">
            <div class="menu-card">
                <div class="menu-img"><img src="images/tempe.jpg"></div>
                <div class="menu-body">
                    <h5>Fried Tempe</h5>
                    <div class="menu-footer">
                        <span class="price">RM 3.00</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 menu-item sides">
            <div class="menu-card">
                <div class="menu-img"><img src="images/telur.jpeg"></div>
                <div class="menu-body">
                    <h5>Fried Egg</h5>
                    <div class="menu-footer">
                        <span class="price">RM 2.00</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- DRINKS -->
        <div class="col-md-4 menu-item drinks">
            <div class="menu-card">
                <div class="menu-img"><img src="images/teh_ais.jpg"></div>
                <div class="menu-body">
                    <h5>Iced Tea</h5>
                    <div class="menu-footer">
                        <span class="price">RM 2.50</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 menu-item drinks">
            <div class="menu-card">
                <div class="menu-img"><img src="images/limau.jpg"></div>
                <div class="menu-body">
                    <h5>Ice Lime Juice</h5>
                    <div class="menu-footer">
                        <span class="price">RM 3.50</span>
                        <button class="order-btn">Order</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FILTER SCRIPT -->
<script>
const buttons = document.querySelectorAll(".filter-btn");
const items = document.querySelectorAll(".menu-item");

buttons.forEach(btn => {
    btn.addEventListener("click", () => {

        buttons.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        const filter = btn.dataset.filter;

        items.forEach(item => {
            if (filter === "all") {
                item.classList.remove("hide");
            } else {
                item.classList.contains(filter)
                    ? item.classList.remove("hide")
                    : item.classList.add("hide");
            }
        });

    });
});
</script>

</body>
</html>