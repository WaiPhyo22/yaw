<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital City - လျှပ်စစ်နှင့် ဖုန်းပစ္စည်းဆိုင်</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        /* Style for the map iframe */
        .map-container {
            position: relative;
            width: 100%;
            height: 400px;
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">🔌 Digital City</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">မူလစာမျက်နှာ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ပစ္စည်းများ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ဝန်ဆောင်မှုများ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ဆက်သွယ်ရန်</a></li>
                    <li class="nav-item"><a class="nav-link" href="#location">လိပ်စာ</a></li> <!-- Added Location Link -->
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <header class="bg-primary text-white text-center py-5">
            <h1>📱🔌 Digital City</h1>
            <p class="lead">လျှပ်စစ်ပစ္စည်းများ၊ ဖုန်းနှင့် ဆက်စပ်ပစ္စည်းများအတွက် ယုံကြည်စိတ်ချရသောဆိုင်</p>
        </header>

        <section class="container py-4">
            <div class="row text-center">
                <div class="col-md-4">
                    <h3>📦 အရည်အသွေးမြင့်ပစ္စည်းများ</h3>
                    <p>TV, Fan, Rice Cooker, LED Bulb, Wire & Cable စတဲ့ အရည်အသွေးမြင့်လျှပ်စစ်ပစ္စည်းများ ရရှိနိုင်ပါသည်။</p>
                </div>
                <div class="col-md-4">
                    <h3>📱 ဖုန်းနှင့် ဆက်စပ်ပစ္စည်း</h3>
                    <p>Samsung, Oppo, Vivo စတဲ့ Smartphone များနှင့် Earphone, Charger, Power Bank စသည်တို့ရောင်းချပေးပါသည်။</p>
                </div>
                <div class="col-md-4">
                    <h3>🔧 ဝန်ဆောင်မှု</h3>
                    <p>လျှပ်စစ်လိုင်းတပ်ဆင်မှု၊ ဖုန်းပြုပြင်မှု ဝန်ဆောင်မှုများကိုလည်း ယုံကြည်စိတ်ချစွာ အသုံးပြုနိုင်ပါတယ်။</p>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section id="location" class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h3>🏢 ဆိုင်လိပ်စာ</h3>
                    <p>Digital City - လျှပ်စစ်နှင့် ဖုန်းပစ္စည်းဆိုင်</p>
                    <p>On Manawharry Rd, Bet: 48st x 49th St, Mandalay, Mandalay, Myanmar</p>
                </div>
            </div>

            <!-- Map Embed -->
            <div class="map-container mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.211840399314!2d96.1292871!3d21.932665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb730077bf4f17%3A0x651c306e41d7c668!2sDigital%20City!5e0!3m2!1sen!2smm!4v1683202032720!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>© 2025 Digital City. ဆက်သွယ်ရန် - 09 441 443 993 | Mandalay, Myanmar</p>
        <p class="mb-0 mt-2">Developed by <a href="/waiphyo" target="_blank">Wai Phyo</a></p>
    </footer>

</body>
</html>
