<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg shadow-sm" id="mainNavbar">
        <div class="container-lg ">
            <a class="navbar-brand" href="/">
                <div class="logo-icon">
                    <img src="{{ asset('assets/logo.png') }}" height="70" class="w-100 dark-logo">
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-3 text-center">
                    <li class="nav-item"><a class="nav-link" href="/" data-en="Home" data-ar="الرئيسية"
                            data-es="Inicio" data-fr="Accueil">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}" data-en="About Us"
                            data-ar="من نحن" data-es="Sobre Nosotros" data-fr="À propos">About Us</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories') }}" data-en="Products"
                            data-ar="المنتجات" data-es="Productos" data-fr="Produits">Products</a>
                    </li>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#" data-en="Partners" data-ar="شركاؤنا"
                            data-es="Socios" data-fr="Partenaires">Partners</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('news') }}" data-en="News" data-ar="الأخبار"
                            data-es="Noticias" data-fr="Actualités">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}" data-en="Contact Us"
                            data-ar="تواصل معنا" data-es="Contáctanos" data-fr="Contactez-nous">Contact
                            Us</a></li>
                </ul>
                <div class="dropdown p-4 p-lg-0 d-flex justify-content-center align-items-center">
                    <button class="btn btn-warning dropdown-toggle" type="button" id="languageDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Language
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#" data-lang="en">English</a></li>
                        <li><a class="dropdown-item" href="#" data-lang="ar">Arabic</a></li>
                        <li><a class="dropdown-item" href="#" data-lang="es">Spanish</a></li>
                        <li><a class="dropdown-item" href="#" data-lang="fr">French</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section class="blog-section py-5">
        <div class="container  py-5">
            <div class="row g-4  py-5">
                <div class="col-lg-8">
                    <div class="blog-detail-content p-2">
                        <div class="image-box" data-aos="fade-up">
                            <img src="{{ asset('images/' . $blog->image) }}" alt="Honey">
                        </div>
                        <div class="date d-flex gap-2 align-items-center p-4" data-aos="fade-up">
                            <i class="fas fa-calendar-alt"></i> <span
                                data-en="{{ $blog->created_at->translatedFormat('d M Y') }}"
                                data-ar="{{ $blog->created_at->locale('ar')->translatedFormat('d F Y') }}"
                                data-es="{{ $blog->created_at->locale('es')->translatedFormat('d F Y') }}"
                                data-fr="{{ $blog->created_at->locale('fr')->translatedFormat('d F Y') }}">

                                {{ $blog->created_at->translatedFormat('d M Y') }}

                            </span>


                        </div>
                        <div class="detail-desc p-4" data-aos="fade-up">
                            <p data-en="{{ $blog->description_en }}" data-ar="{{ $blog->description_ar }}"
                                data-es="{{ $blog->description_es }}" data-fr="{{ $blog->description_fr }}">

                                {{ $blog->description_en }}

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up"></div>
                <div class="latest-news-card p-4 rounded-4 mb-5">
                    <h2 class="mb-3" data-en="Latest News" data-ar="آخر الأخبار" data-es="Últimas Noticias"
                        data-fr="Dernières Nouvelles">
                        Latest News
                    </h2>

                    @foreach ($latestBlogs as $blog)
                        <a href="{{ route('blogs.show', $blog->id) }}" class="news-item d-flex gap-2 mb-4">

                            <img src="{{ asset('images/' . $blog->image) }}" class="news-img me-3"
                                alt="{{ $blog->name_en }}">

                            <div>
                                <h3 class="mb-1 h6" data-en="{{ $blog->name_en }}" data-ar="{{ $blog->name_ar }}"
                                    data-es="{{ $blog->name_es }}" data-fr="{{ $blog->name_fr }}">
                                    {{ $blog->name_en }}
                                </h3>

                                <p class="text-muted small mb-0"
                                    data-en="{{ $blog->created_at->translatedFormat('d M Y') }}"
                                    data-ar="{{ $blog->created_at->locale('ar')->translatedFormat('d F Y') }}"
                                    data-es="{{ $blog->created_at->locale('es')->translatedFormat('d F Y') }}"
                                    data-fr="{{ $blog->created_at->locale('fr')->translatedFormat('d F Y') }}">

                                    {{ $blog->created_at->format('F d, Y') }}
                                </p>
                            </div>

                        </a>
                    @endforeach


                </div>


            </div>

        </div>
        </div>
    </section>

    <section class="py-3 related-posts">
        <div class="container">
            <div class="heading" data-aos="fade-up">
                <h2 data-en="Related Posts" data-ar="مقالات ذات صلة" data-es="Publicaciones Relacionadas"
                    data-fr="Articles Connexes">
                    Related Posts
                </h2>

            </div>
            <div class="row g-4">
                <div class="row g-4" data-aos="fade-up">
                    @foreach ($blogs as $blog)
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100">

                                {{-- Image --}}
                                <div class="img">
                                    <img src="{{ asset('images/' . $blog->image) }}" class="card-img-top"
                                        alt="{{ $blog->name_en }}">
                                </div>

                                <div class="card-body">

                                    {{-- Date --}}
                                    <div class="date d-flex gap-2 align-items-center mb-3">
                                        <i class="fas fa-calendar-alt"></i>

                                        <span data-en="{{ $blog->created_at->translatedFormat('d M Y') }}"
                                            data-ar="{{ $blog->created_at->locale('ar')->translatedFormat('d F Y') }}"
                                            data-es="{{ $blog->created_at->locale('es')->translatedFormat('d F Y') }}"
                                            data-fr="{{ $blog->created_at->locale('fr')->translatedFormat('d F Y') }}">

                                            {{ $blog->created_at->format('F d, Y') }}
                                        </span>
                                    </div>

                                    {{-- Title --}}
                                    <h3 class="card-title mb-3">
                                        <a href="{{ route('news.show', $blog->id) }}" data-en="{{ $blog->name_en }}"
                                            data-ar="{{ $blog->name_ar }}" data-es="{{ $blog->name_es }}"
                                            data-fr="{{ $blog->name_fr }}">

                                            {{ $blog->name_en }}
                                        </a>
                                    </h3>

                                    {{-- Description --}}
                                    <p class="card-text" data-en="{{ $blog->description_en }}"
                                        data-ar="{{ $blog->description_ar }}" data-es="{{ $blog->description_es }}"
                                        data-fr="{{ $blog->description_fr }}">

                                        {{ Str::limit($blog->description_en, 150) }}
                                    </p>

                                    {{-- Read more --}}
                                    <div class="blog-footer">
                                        <a href="{{ route('news.show', $blog->id) }}"
                                            class="blog-link d-flex align-items-center gap-2"
                                            data-en="Read More <i class='fas fa-arrow-right mt-1'></i>"
                                            data-ar="اقرأ المزيد <i class='fas fa-arrow-left mt-1'></i>"
                                            data-es="Leer Más <i class='fas fa-arrow-right mt-1'></i>"
                                            data-fr="Lire la suite <i class='fas fa-arrow-right mt-1'></i>">

                                            <span data-en="Read More" data-ar="اقرأ المزيد" data-es="Leer Más"
                                                data-fr="Lire la suite">
                                                Read More
                                            </span>

                                            <i class="fas fa-arrow-right mt-1"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-section">
        <img src="{{ asset('assets/footer-bee.png') }}" class="footer-bee" alt="">
        <div class="container py-5">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-4 col-md-6 d-flex align-items-center">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/logo.png') }}" alt="Dropbe" height="100">
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title" data-en="Links" data-ar="روابط" data-es="Enlaces" data-fr="Liens">
                        Links
                    </h5>

                    <ul class="footer-links">
                        <li>
                            <a href="/" data-en="Home" data-ar="الرئيسية" data-es="Inicio" data-fr="Accueil">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#about" data-en="About Us" data-ar="من نحن" data-es="Sobre Nosotros"
                                data-fr="À propos">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories') }}" data-en="Products" data-ar="المنتجات"
                                data-es="Productos" data-fr="Produits">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#" data-en="Partner" data-ar="شركاؤنا" data-es="Socio"
                                data-fr="Partenaire">
                                Partner
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('news') }}" data-en="News" data-ar="الأخبار" data-es="Noticias"
                                data-fr="Actualités">
                                News
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" data-en="Contact Us" data-ar="تواصل معنا"
                                data-es="Contáctanos" data-fr="Contactez-nous">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title" data-en="Products" data-ar="المنتجات" data-es="Productos"
                        data-fr="Produits">
                        Products
                    </h5>

                    <ul class="footer-links">
                        <li>
                            <a href="{{ route('products') }}" data-en="Honey Products" data-ar="منتجات العسل"
                                data-es="Productos de miel" data-fr="Produits de miel">
                                Honey Products
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}" data-en="Creamed Honey" data-ar="العسل الكريمي"
                                data-es="Miel cremado" data-fr="Miel crémeux">
                                Creamed Honey
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}" data-en="Drinks" data-ar="المشروبات"
                                data-es="Bebidas" data-fr="Boissons">
                                Drinks
                            </a>
                        </li>
                    </ul>

                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title" data-en="Newsletter" data-ar="النشرة الإخبارية" data-es="Boletín"
                        data-fr="Newsletter">
                        Newsletter
                    </h5>

                    <p class="footer-text"
                        data-en="Sign Up For Our Email List To Receive Sweet Deals, Company News And More From Bee & Honey."
                        data-ar="اشترك في قائمتنا البريدية لتصلك عروض حلوة، وأخبار الشركة والمزيد من Bee & Honey."
                        data-es="Suscríbete a nuestra lista de correo para recibir ofertas dulces, noticias de la empresa y más de Bee & Honey."
                        data-fr="Inscrivez-vous à notre liste de diffusion pour recevoir des offres spéciales, des nouvelles de l'entreprise et plus de Bee & Honey.">
                        Sign Up For Our Email List To Receive Sweet Deals, Company News And More From Bee & Honey.
                    </p>

                    <form class="newsletter-form mt-4">
                        <input type="email" placeholder="Email Address" data-placeholder-en="Email Address"
                            data-placeholder-ar="البريد الإلكتروني" data-placeholder-es="Correo electrónico"
                            data-placeholder-fr="Adresse e-mail" required>
                        <button type="submit" data-en="Submit" data-ar="إرسال" data-es="Enviar" data-fr="Envoyer">
                            Submit
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </footer>
    <div class="modal fade rounded-3" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">

                <div class="modal-body p-0 position-relative">
                    <button type="button" class="btn-close custom-close" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fas fa-xmark"></i></button>

                    <div class="ratio ratio-16x9">
                        <iframe id="videoFrame" src="" allow="autoplay; fullscreen" allowfullscreen>
                        </iframe>
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
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/video-modal.js') }}"></script>
</body>

</html>
