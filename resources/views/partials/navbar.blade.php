<!-- Topbar Start -->
<div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
    <div class="container">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <div class="border-end border-primary pe-3">
                        <a href="#" class="text-muted small"><i
                                class="fas fa-map-marker-alt text-primary me-2"></i>FindA Location</a>
                    </div>
                    <div class="ps-3">
                        <a href="mailto:example@gmail.com" class="text-muted small">
                            <i class="fas fa-envelope text-primary me-2">
                            </i>example@gmail.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ route('main.index') }}" class="navbar-brand p-0">
                <h1 class="text-primary mb-0">{{ config('app.name') }}</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="{{ route('main.index') }}"
                        class="nav-item nav-link {{  Route::is('main.index') ? 'active' : ''}}">{{ __('Главная') }}</a>
                    <a href="{{ route('main.index') }}" class="nav-item nav-link">{{ __('О компании') }}</a>
                    <a href="{{ route('service.index') }}"
                        class="nav-item nav-link {{  Route::is('service.index') ? 'active' : ''}}">{{ __('Услуги') }}</a>
                    <a href="{{ route('blog.index') }}"
                        class="nav-item nav-link {{  Route::is('blog.index') ? 'active' : ''}}">{{ __('Новости и статьи') }}</a>
                    <a href="contact.html" class="nav-item nav-link">{{ __('Контакты') }}</a>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada"
                    data-wow-delay=".9s">
                    <i class="fa fa-phone-alt fa-2x"></i>
                    <div class="position-absolute" style="top: 7px; right: 12px;">
                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                    </div>
                </a>
                <div class="d-flex flex-column ms-3">
                    <span>Call to Our Experts</span>
                    <a href="tel:+ 0123 456 7890"><span class="text-dark">Free: + 0123 456 7890</span></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->