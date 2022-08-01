<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin Dashboard</title>
    <!-- General CSS Files -->
    <link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/stisla-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/stisla-assets/css/components.css') }}">
</head>

<body>

    @include("admin.nav")

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Dashboard</h1>
            </div>

            <div class="">
                <div class="hero text-white hero-bg-image" data-background="{{ asset('/stisla-assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg') }}">
                    <div class=" hero-inner">
                        <h1>Selamat Datang, Admin!</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- End Main Content -->
    @include("admin.footer")