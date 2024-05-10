<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>James Esparrago - Web</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- script -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts.nav')
            <!-- Header-->
            <header class="py-5 mt-5" id="home">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">IoT &middot; WebDev &middot; Cybersecurity</div></div>
                                <div class="fs-3 fw-light text-muted">Greeting! humans from earth</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">I'm James Esparrago</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="https://profile.indeed.com/p/jamese-bdhbttx">Resume</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects">Projects</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile bg-gradient-primary-to-secondary">
                                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                    <img class="profile-img" src="{{url('images/avatar.png')}}" alt="..." />
                                    <div class="dots-1">
                                        <!-- SVG Dots-->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                                <path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
                                                <path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
                                                <path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
                                                <path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
                                                <path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
                                                <path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
                                                <path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
                                                <path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
                                                <path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
                                                <path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
                                                <path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
                                                <path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
                                                <path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
                                                <path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
                                                <path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
                                                <path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
                                                <path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
                                                <path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
                                                <path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
                                                <path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
                                            </g>
                                        </svg>
                                        <!-- END of SVG dots-->
                                    </div>
                                    <div class="dots-2">
                                        <!-- SVG Dots-->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                                <path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
                                                <path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
                                                <path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
                                                <path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
                                                <path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
                                                <path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
                                                <path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
                                                <path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
                                                <path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
                                                <path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
                                                <path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
                                                <path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
                                                <path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
                                                <path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
                                                <path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
                                                <path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
                                                <path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
                                                <path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
                                                <path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
                                                <path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
                                            </g>
                                        </svg>
                                        <!-- END of SVG dots-->
                                    </div>
                                    <div class="dots-3">
                                        <!-- SVG Dots-->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                                <path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
                                                <path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
                                                <path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
                                                <path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
                                                <path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
                                                <path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
                                                <path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
                                                <path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
                                                <path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
                                                <path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
                                                <path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
                                                <path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
                                                <path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
                                                <path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
                                                <path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
                                                <path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
                                                <path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
                                                <path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
                                                <path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
                                                <path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
                                            </g>
                                        </svg>
                                        <!-- END of SVG dots-->
                                    </div>
                                    <div class="dots-4">
                                        <!-- SVG Dots-->
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                                <path d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z"></path>
                                                <path d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z"></path>
                                                <path d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z"></path>
                                                <path d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z"></path>
                                                <path d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z"></path>
                                                <path d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z"></path>
                                                <path d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z"></path>
                                                <path d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z"></path>
                                                <path d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z"></path>
                                                <path d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z"></path>
                                                <path d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z"></path>
                                                <path d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z"></path>
                                                <path d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z"></path>
                                                <path d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z"></path>
                                                <path d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z"></path>
                                                <path d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z"></path>
                                                <path d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z"></path>
                                                <path d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z"></path>
                                                <path d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z"></path>
                                                <path d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z"></path>
                                            </g>
                                        </svg>
                                        <!-- END of SVG dots-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- blogs-->
            <section class="py-5 d-none d-md-block" id="blogs">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Blogs</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">OJT-PhlPost Week 1</h2>
                                            <p>In Week 1, I focused on identifying and discussing the existing problems within PhilPost's office environment, particularly those related to outdated systems and processes. As an IT student interning here, I delved into the intricacies of these challenges and began brainstorming potential technological approaches to address them. Join me as I kickstarted this journey by unraveling the complexities and laying the groundwork for innovative solutions that can revolutionize PhilPost's operations</p>
                                        </div>
                                        <div class="">
                                            <img class="img-fluid m-0" src="{{url('ojt-pics/week1.jpg')}}" alt="..." />
                                        </div>
                                    </div>
                                    <div class="mb-2 mx-5 text-start"><a href="#">Read full-></a></div>
                                </div>
                            </div>
                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">OJT-PhlPost Week 2</h2>
                                            <p>In Week 2, our focus shifted towards identifying the approach to tackle the identified problems within PhilPost's office environment. With the issues pinpointed, it was crucial to delineate the roles of each team member. Assigned as the lead programmer, my responsibility was to spearhead the technical aspect of the solution. Join me as I navigate through the process of structuring our approach and defining the roles essential to executing our plan effectively.</p>
                                        </div>
                                        <div class="">
                                            <img class="img-fluid" src="{{url('ojt-pics/week2.jpg')}}" alt="..." />
                                        </div>
                                    </div>
                                    <div class="mb-2 mx-5 text-start"><a href="#">Read full-></a></div>
                                </div>
                            </div>
                            <div class="show-more mt-5 text-end">
                                <a href="#">Show more -></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section-->
            <section class="bg-light py-5" id="aboutme">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                                <p class="lead fw-light mb-4">My name is James Esparrago and I'm here to help you with?...</p>
                                <p class="text-muted">Hey there! I'm James Esparrago, a passionate Information Technology student with a knack for diving deep into the world of tech. My interests span across various domains, from web development to embedded systems, networking, and cybersecurity.

                                    I find joy in crafting seamless user experiences through web development, exploring the intricacies of embedded systems, ensuring robust network infrastructures, and delving into the ever-evolving realm of cybersecurity.
                                    
                                    When I'm not immersed in lines of code or exploring the latest tech trends, you can find me enjoying a good cup of coffee, tinkering with new gadgets, or exploring the great outdoors.
                                    
                                    Join me on this exciting journey as we navigate through the vast landscape of technology together!</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="https://www.facebook.com/james.esparrago.92"><i class="bi bi-facebook"></i></a>
                                    <a class="text-gradient" href="https://www.linkedin.com/in/james-esparrago-82b7b1231/"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="https://github.com/0roc4n"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <!-- Page content-->
             <section class="py-5" id="contact">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Get in touch</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Full name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email address</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Phone number</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Message</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; EsparragoWeb-IoT 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>

</html>
