<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-9">
                <div class="mb-5">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-5">
                            <div class="footer-item">
                                <a href="{{ route('main.index') }}" class="p-0">
                                    <h3 class="text-white">{{ config('app.name') }}</h3>
                                    <!-- <img src="img/logo.png" alt="Logo"> -->
                                </a>
                                <p class="text-white mb-4">Dolor amet sit justo amet elitr clita ipsum elitr
                                    est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">{{ __('Навигация') }}</h4>
                                <a href="{{ route('main.index') }}">{{ __('Главная') }}</a>
                                <a href="{{ route('main.index') }}">{{ __('О компании') }}</a>
                                <a href="{{ route('main.index') }}">{{ __('Услуги') }}</a>
                                <a href="{{ route('main.index') }}">{{ __('Новости и статьи') }}</a>
                                <a href="{{ route('main.index') }}">{{ __('Контакты') }}</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="footer-item">
                                <h4 class="mb-4 text-white">{{ __('Галерея') }}</h4>
                                <div class="row g-3">
                                    <div class="col-4">
                                        <div class="footer-instagram rounded">
                                            <img src="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                class="img-fluid w-100" alt="">
                                            <div class="footer-search-icon">
                                                <a href="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                    data-lightbox="footerInstagram-1" class="my-auto"><i
                                                        class="fas fa-link text-white"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="footer-instagram rounded">
                                            <img src="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                class="img-fluid w-100" alt="">
                                            <div class="footer-search-icon">
                                                <a href="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                    data-lightbox="footerInstagram-1" class="my-auto"><i
                                                        class="fas fa-link text-white"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="footer-instagram rounded">
                                            <img src="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                class="img-fluid w-100" alt="">
                                            <div class="footer-search-icon">
                                                <a href="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                    data-lightbox="footerInstagram-1" class="my-auto"><i
                                                        class="fas fa-link text-white"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="footer-instagram rounded">
                                            <img src="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                class="img-fluid w-100" alt="">
                                            <div class="footer-search-icon">
                                                <a href="{{ asset('assets/img/instagram-footer-1.jpg') }}"
                                                    data-lightbox="footerInstagram-1" class="my-auto"><i
                                                        class="fas fa-link text-white"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="row g-4">
                                <div class="col-lg-6 col-xl-4">
                                    <div class="d-flex">
                                        <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                            <i class="fas fa-map-marker-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-white">Address</h4>
                                            <p class="mb-0">123 Street New York.USA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="d-flex">
                                        <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-white">Mail Us</h4>
                                            <p class="mb-0">info@example.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="d-flex">
                                        <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-white">Telephone</h4>
                                            <p class="mb-0">(+012) 3456 7890</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4">{{ __('Горячая линия') }}</h4>
                    <p class="text-white mb-3">
                        {{ __('Если у Вас остались какие-либо вопросы и Вы не нашли на них ответы позвоните по бесплатному номеру телефона и задайте свой вопрос оператору.') }}
                    </p>
                    <div class="d-flex flex-shrink-0">
                        <div class="footer-btn">
                            <a href="#" class="btn btn-lg-square rounded-circle position-relative wow tada"
                                data-wow-delay=".9s">
                                <i class="fa fa-phone-alt fa-2x"></i>
                                <div class="position-absolute" style="top: 2px; right: 12px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column ms-3 flex-shrink-0">
                            <span>Call to Our Experts</span>
                            <a href="tel:+ 0123 456 7890"><span class="text-white">Free: + 0123 456 7890</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->