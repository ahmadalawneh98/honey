<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Ensures proper rendering in IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Bee & Honey - Natural Honey Products</title>
    <meta name="description"
        content="Bee & Honey offers the finest natural honey from our farm. Explore our honey products, e-catalog, and branch locations.">
    <meta name="keywords" content="Bee & Honey, honey products, natural honey, Yemeni Honey, e-catalog, honey farm">
    <meta name="author" content="Bee & Honey">
    <meta name="robots" content="index, follow">
    @php
        $seo = \App\Models\SeoSetting::first();
    @endphp

    {!! $seo->meta ?? '' !!}

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bee & Honey - Natural Honey Products">
    <meta property="og:description"
        content="Explore the finest natural honey from Bee & Honey. Shop honey products and learn more about our farm.">
    <meta property="og:url" content="https://www.yourwebsite.com/">
    <meta property="og:image" content="https://www.yourwebsite.com/assets/og-image.jpg">
    <meta property="og:site_name" content="Bee & Honey">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bee & Honey - Natural Honey Products">
    <meta name="twitter:description"
        content="Explore the finest natural honey from Bee & Honey. Shop honey products and learn more about our farm.">
    <meta name="twitter:image" content="https://www.yourwebsite.com/assets/og-image.jpg">
    <meta name="twitter:site" content="@BeeAndHoney">
    <meta name="twitter:creator" content="@BeeAndHoney">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/logo.png">
    <link rel="mask-icon" href="assets/logo.png" color="#ffc107">
    <meta name="msapplication-TileColor" content="#ffc107">
    <meta name="theme-color" content="#ffffff">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="css/main.css">
</head>


<body class="home-body">

    <section class="hero">
        <div class="hero-video-wrapper">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="assets/header.mp4" type="video/mp4">
            </video>
        </div>
        @include('layouts.header')

        <div class="hero-inner py-5">
            <div class="rotating-text-wrapper mb-4">
                <h2 class="t1">the best quality Honey from our farm</h2>

                <h2 class="t2">second title is shown here</h2>

                <h2 class="t3">
                    third title is shown here
                </h2>
            </div>
            <div class="hero-btns">
                <a href="#brief" class="btn btn-warning">
                    <span data-en="Explore More" data-ar="اكتشف المزيد" data-es="Explorar más" data-fr="Explorer plus">
                        Explore More
                    </span>
                    <span class="arrow-circle"><i class="fas fa-arrow-down"></i></span>
                </a>
            </div>

        </div>
    </section>
    <section class="py-5 about-brief" id="brief">
        <div class="container py-5">
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="text p-3">
                        <h2 data-en="Brief About Bee&Honey" data-ar="نبذة عن Bee&Honey"
                            data-es="Breve sobre Bee&Honey" data-fr="Bref sur Bee&Honey">
                            Brief About Bee&Honey
                        </h2>
                        <p class="text-muted"
                            data-en="Bee&Honey is a brand under Yemeni Honey House, founded in 2007, with extensive experience in producing and marketing natural honey to the highest quality standards."
                            data-ar="Bee&Honey هي علامة تجارية تابعة لـ Yemeni Honey House، تأسست عام 2007، ولديها خبرة واسعة في إنتاج وتسويق العسل الطبيعي بأعلى معايير الجودة."
                            data-es="Bee&Honey es una marca de Yemeni Honey House, fundada en 2007, con amplia experiencia en la producción y comercialización de miel natural con los más altos estándares de calidad."
                            data-fr="Bee&Honey est une marque de Yemeni Honey House, fondée en 2007, avec une vaste expérience dans la production et la commercialisation de miel naturel aux normes de qualité les plus élevées.">
                            Bee&Honey is a brand under Yemeni Honey House, founded in 2007, with extensive experience in
                            producing and marketing natural honey to the highest quality standards.
                        </p>
                        <p class="text-muted"
                            data-en="Bee&Honey was born from our passion for offering modern, natural products that meet the needs of today's consumer, providing a unique experience that blends flavor and benefits."
                            data-ar="تأسست Bee&Honey من شغفنا بتقديم منتجات طبيعية وعصرية تلبي احتياجات المستهلك اليوم، موفرة تجربة فريدة تمزج بين الطعم والفوائد."
                            data-es="Bee&Honey nació de nuestra pasión por ofrecer productos modernos y naturales que satisfagan las necesidades del consumidor actual, proporcionando una experiencia única que combina sabor y beneficios."
                            data-fr="Bee&Honey est née de notre passion pour offrir des produits modernes et naturels répondant aux besoins du consommateur d'aujourd'hui, offrant une expérience unique mêlant saveur et bienfaits.">
                            Bee&Honey was born from our passion for offering modern, natural products that meet the
                            needs of today's consumer, providing a unique experience that blends flavor and benefits.
                        </p>

                        <p class="text-muted"
                            data-en="We take great care in selecting our apiaries and use sustainable methods in our production that protect the environment and safeguard bees. Our products, whether raw honey or natural honey beverages, reflect our commitment to unmatched quality and true purity, free from any artificial additives."
                            data-ar="نولي اهتمامًا كبيرًا في اختيار مزارعنا ونستخدم طرقًا مستدامة في الإنتاج تحمي البيئة وتحافظ على النحل. منتجاتنا، سواء كانت عسلًا خامًا أو مشروبات عسل طبيعية، تعكس التزامنا بالجودة الفائقة والنقاء الحقيقي، خالية من أي إضافات صناعية."
                            data-es="Cuidamos mucho la selección de nuestras colmenas y usamos métodos sostenibles en nuestra producción que protegen el medio ambiente y resguardan a las abejas. Nuestros productos, ya sea miel cruda o bebidas de miel natural, reflejan nuestro compromiso con una calidad inigualable y pureza verdadera, libres de aditivos artificiales."
                            data-fr="Nous prenons grand soin dans la sélection de nos ruches et utilisons des méthodes durables dans notre production qui protègent l'environnement et préservent les abeilles. Nos produits, qu'il s'agisse de miel brut ou de boissons au miel naturel, reflètent notre engagement envers une qualité inégalée et une pureté réelle, sans aucun additif artificiel.">
                            We take great care in selecting our apiaries and use sustainable methods in our production
                            that protect the environment and safeguard bees. Our products, whether raw honey or natural
                            honey beverages, reflect our commitment to unmatched quality and true purity, free from any
                            artificial additives.
                        </p>

                        <p class="text-muted"
                            data-en="At Bee&Honey, we believe that honey is more than just food, it's a lifestyle that energizes you, strengthens immunity, and naturally supports the body's balance."
                            data-ar="في Bee&Honey، نؤمن أن العسل أكثر من مجرد طعام، إنه أسلوب حياة يمنحك الطاقة، يقوي المناعة، ويدعم توازن الجسم بشكل طبيعي."
                            data-es="En Bee&Honey, creemos que la miel es más que un alimento, es un estilo de vida que te energiza, fortalece la inmunidad y apoya naturalmente el equilibrio del cuerpo."
                            data-fr="Chez Bee&Honey, nous croyons que le miel est plus qu'un simple aliment, c'est un mode de vie qui vous énergise, renforce l'immunité et soutient naturellement l'équilibre du corps.">
                            At Bee&Honey, we believe that honey is more than just food, it's a lifestyle that energizes
                            you, strengthens immunity, and naturally supports the body's balance.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="image">
                        <img src="assets/brief-image.png" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-divider"></div>

    <section class="py-5 swiper-section">
        <div class="swiper products-swiper">
            <div class="swiper-wrapper">
                @foreach ($products as $product)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                            class="img-fluid">
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="map-section py-5" data-aos="zoom-in">
        <div class="container-fluid px-0 pt-5">
            <div class="heading">
                <div class="container pb-4">
                    <h2 class="text-center mb-2" data-en="Our Branch Locations" data-ar="مواقع فروعنا"
                        data-es="Nuestras ubicaciones de sucursales" data-fr="Nos emplacements de succursales">
                        Our Branch Locations
                    </h2>

                </div>
            </div>
            <div class="row g-4 align-items-center mt-4">
                <div class="col-lg-6">
                    <div class="map-container">
                        <div id="chartdiv"></div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="branches px-2">
                        <div class="row g-4">
                            <div class="col-sm-6 col-md-4 col-lg-6">
                                <div class="branch-box shadow-sm">
                                    <div class="title">
                                        <h3 data-en="Yemen" data-ar="اليمن" data-fr="Yémen" data-es="Yemen">
                                            Yemen
                                        </h3>

                                    </div>
                                    <div class="desc">
                                        <p class="text-muted"
                                            data-en="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, architecto."
                                            data-ar="هذا نص تجريبي يُستخدم لعرض شكل المحتوى داخل التصميم، ويمكن استبداله بالنص الحقيقي لاحقًا."
                                            data-fr="Ceci est un texte factice utilisé pour montrer la mise en page du contenu, pouvant être remplacé ultérieurement."
                                            data-es="Este es un texto de ejemplo utilizado para mostrar el diseño del contenido y puede ser reemplazado más adelante.">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit
                                            iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                                            architecto.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-6">
                                <div class="branch-box shadow-sm">
                                    <div class="title">
                                        <h3 data-en="Jordan" data-ar="الأردن" data-fr="Jordanie" data-es="Jordania">
                                            Jordan
                                        </h3>

                                    </div>
                                    <div class="desc">
                                        <p class="text-muted"
                                            data-en="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, architecto."
                                            data-ar="هذا نص تجريبي يُستخدم لعرض شكل المحتوى داخل التصميم، ويمكن استبداله بالنص الحقيقي لاحقًا."
                                            data-fr="Ceci est un texte factice utilisé pour montrer la mise en page du contenu, pouvant être remplacé ultérieurement."
                                            data-es="Este es un texto de ejemplo utilizado para mostrar el diseño del contenido y puede ser reemplazado más adelante.">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit
                                            iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                                            architecto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-6">
                                <div class="branch-box shadow-sm">
                                    <div class="title">
                                        <h3 data-en="Saudi Arabia" data-ar="المملكة العربية السعودية"
                                            data-fr="Arabie saoudite" data-es="Arabia Saudita">
                                            Saudi Arabia
                                        </h3>

                                    </div>
                                    <div class="desc">
                                        <p class="text-muted"
                                            data-en="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, architecto."
                                            data-ar="هذا نص تجريبي يُستخدم لعرض شكل المحتوى داخل التصميم، ويمكن استبداله بالنص الحقيقي لاحقًا."
                                            data-fr="Ceci est un texte factice utilisé pour montrer la mise en page du contenu, pouvant être remplacé ultérieurement."
                                            data-es="Este es un texto de ejemplo utilizado para mostrar el diseño del contenido y puede ser reemplazado más adelante.">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit
                                            iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                                            architecto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-6">
                                <div class="branch-box shadow-sm">
                                    <div class="title">
                                        <h3 data-en="Qatar" data-ar="قطر" data-fr="Qatar" data-es="Catar">
                                            Qatar
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        <p class="text-muted"
                                            data-en="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, architecto."
                                            data-ar="هذا نص تجريبي يُستخدم لعرض شكل المحتوى داخل التصميم، ويمكن استبداله بالنص الحقيقي لاحقًا."
                                            data-fr="Ceci est un texte factice utilisé pour montrer la mise en page du contenu, pouvant être remplacé ultérieurement."
                                            data-es="Este es un texto de ejemplo utilizado para mostrar el diseño del contenido y puede ser reemplazado más adelante.">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit
                                            iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                                            architecto.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-6">
                                <div class="branch-box shadow-sm">
                                    <div class="title">
                                        <h3 data-en="Oman" data-ar="عُمان" data-fr="Oman" data-es="Omán">
                                            Oman
                                        </h3>
                                    </div>
                                    <div class="desc">
                                        <p class="text-muted"
                                            data-en="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, architecto."
                                            data-ar="هذا نص تجريبي يُستخدم لعرض شكل المحتوى داخل التصميم، ويمكن استبداله بالنص الحقيقي لاحقًا."
                                            data-fr="Ceci est un texte factice utilisé pour montrer la mise en page du contenu, pouvant être remplacé ultérieurement."
                                            data-es="Este es un texto de ejemplo utilizado para mostrar el diseño del contenido y puede ser reemplazado más adelante.">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit
                                            iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                                            architecto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-6">
                                <div class="branch-box shadow-sm ">
                                    <div class="title">
                                        <h3 data-en="The UAE" data-ar="الإمارات العربية المتحدة"
                                            data-fr="Les Émirats arabes unis" data-es="Los Emiratos Árabes Unidos">
                                            The UAE
                                        </h3>

                                    </div>
                                    <div class="desc">
                                        <p class="text-muted"
                                            data-en="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, architecto."
                                            data-ar="هذا نص تجريبي يُستخدم لعرض شكل المحتوى داخل التصميم، ويمكن استبداله بالنص الحقيقي لاحقًا."
                                            data-fr="Ceci est un texte factice utilisé pour montrer la mise en page du contenu, pouvant être remplacé ultérieurement."
                                            data-es="Este es un texto de ejemplo utilizado para mostrar el diseño del contenido y puede ser reemplazado más adelante.">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit
                                            iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                                            architecto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-6">
                                <div class="branch-box shadow-sm">
                                    <div class="title">
                                        <h3 data-en="America" data-ar="الولايات المتحدة الأمريكية"
                                            data-fr="États-Unis d’Amérique" data-es="Estados Unidos de América">
                                            America
                                        </h3>

                                    </div>
                                    <div class="desc">
                                        <p class="text-muted"
                                            data-en="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, architecto."
                                            data-ar="هذا نص تجريبي يُستخدم لعرض شكل المحتوى داخل التصميم، ويمكن استبداله بالنص الحقيقي لاحقًا."
                                            data-fr="Ceci est un texte factice utilisé pour montrer la mise en page du contenu, pouvant être remplacé ultérieurement."
                                            data-es="Este es un texto de ejemplo utilizado para mostrar el diseño del contenido y puede ser reemplazado más adelante.">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ut sit
                                            iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                                            architecto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>


    <section class="certificates-section py-5">
        <div class="container pb-5">
            <h2 class="text-center mt-2" data-aos="zoom-in" data-en="Our Certificates" data-ar="شهاداتنا"
                data-es="Nuestros certificados" data-fr="Nos certificats">
                Our Certificates
            </h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 mt-5">
                <div class="col">
                    <div class="certificate-item" data-aos="zoom-in">
                        <div class="image mx-auto">
                            <img src="assets/certificate-icon-1.png" class="img-fluid certificate-img"
                                alt="Certificate" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-imgs="assets/certificate-1.jpg,assets/certificate-3.jpg">
                            <div class="view-icon" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-imgs="assets/certificate-1.jpg,assets/certificate-3.jpg">
                                <i class="fa-regular fa-hand-pointer"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="certificate-item" data-aos="zoom-in">
                        <div class="image mx-auto">
                            <img src="assets/certificate-icon-2.png" class="img-fluid certificate-img"
                                alt="Certificate" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-imgs="assets/certificate-2.jpg">
                            <div class="view-icon" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-img="assets/certificate-2.jpg">
                                <i class="fa-regular fa-hand-pointer"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="certificate-item" data-aos="zoom-in">
                        <div class="image mx-auto">
                            <img src="assets/certificate-icon-3.png" class="img-fluid certificate-img"
                                alt="Certificate" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-imgs="assets/certificate-4.jpg">
                            <div class="view-icon" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-img="assets/certificate-3.jpg">
                                <i class="fa-regular fa-hand-pointer"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="certificate-item" data-aos="zoom-in">
                        <div class="image mx-auto">
                            <img src="assets/certificate-icon-4.png" class="img-fluid certificate-img"
                                alt="Certificate" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-imgs="assets/certificate-5.jpg">
                            <div class="view-icon" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-img="assets/certificate-5.jpg">
                                <i class="fa-regular fa-hand-pointer"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="certificate-item" data-aos="zoom-in">
                        <div class="image mx-auto">
                            <img src="assets/certificate-icon-5.png" class="img-fluid certificate-img"
                                alt="Certificate" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-imgs="assets/certificate-5.png">
                            <div class="view-icon" data-bs-toggle="modal" data-bs-target="#certificateModal"
                                data-bs-img="assets/certificate-5.png">
                                <i class="fa-regular fa-hand-pointer"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="catalog-section py-5 mb-5">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="catalog-content">
                        <p class="catalog-text" data-en="To view the e-catalog" data-ar="لعرض الكتالوج الإلكتروني"
                            data-fr="Voir le catalogue électronique" data-es="Ver el catálogo electrónico">
                            To view the e-catalog
                        </p>

                        <a href="https://drive.google.com/file/d/12xIn_DojVCMRybqoXVzUXuBXNC4IvR5U/view?usp=sharing"
                            target="_blank" download class="catalog-btn">
                            <i class="fa-solid fa-file-arrow-down fa-bounce"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="catalog-image">
                        <img src="assets/catalog.png" alt="E-Catalog" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 counters" id="honeyCounters">
        <div class="container">
            <div class="row g-4 pt-3 mt-3 justify-content-center">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in">
                    <div class="counter-box text-center">
                        <div class="bg"></div>
                        <div class="icon"><i class="fas fa-cart-shopping"></i></div>
                        <div class="number" data-target="3000000">0</div>
                        <div class="title" data-en="Products sold " data-ar="منتجاتنا المباعة "
                            data-fr="Produits vendus" data-es="Productos vendidos ">
                            Products sold
                        </div>
                        <div class="bg-2"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in">
                    <div class="counter-box text-center">
                        <div class="bg"></div>
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <div class="number" data-target="2000000" data-display="2M+">
                            2M+
                        </div>

                        <div class="title" data-en="Consumers" data-ar="عدد المستهلكين"
                            data-fr="Nombre de consommateurs" data-es="Número de consumidores">
                            Consumers
                        </div>
                        <div class="bg-2"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in">
                    <div class="counter-box text-center">
                        <div class="bg"></div>
                        <div class="icon"><i class="fas fa-user-tie"></i></div>
                        <div class="number" data-target="350">0</div>
                        <div class="title" data-en="Employees" data-ar="الموظفين" data-fr="Employés"
                            data-es="Empleados">
                            Employees
                        </div>
                        <div class="bg-2"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in">
                    <div class="counter-box text-center">
                        <div class="bg"></div>
                        <div class="icon"><i class="fa-solid fa-store"></i></div>
                        <div class="number" data-target="7000">0</div>
                        <div class="title" data-ar="مواقع البيع" data-en="Sales Websites" data-es="Sitios de venta"
                            data-fr="Sites de vente">
                            Sales Websites
                        </div>
                        <div class="bg-2"></div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    @include('layouts.footer')

    <div class="modal fade" id="certificateModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" data-en="Certificate" data-ar="شهادة" data-es="Certificado"
                        data-fr="Certificat">
                        Certificate
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="cert-viewer">
                        <div class="cert-controls mb-2">
                            <button class="btn btn-sm btn-outline-primary" id="zoom-in">
                                <i class="fas fa-search-plus"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-primary" id="zoom-out">
                                <i class="fas fa-search-minus"></i>
                            </button>
                        </div>
                        <div class="cert-image-container d-flex flex-column align-items-center gap-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="whatsapp-wrapper">
        <span class="whatsapp-message" data-en="Need help?" data-ar="هل تحتاج مساعدة؟" data-es="Necesitas ayuda?"
            data-fr="Besoin d'aide ?">
            Need help?
        </span>


        <a href="#" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="js/main.js"></script>
    <script src="js/certificate.js"></script>
    <script src="js/map.js"></script>
</body>

</html>
