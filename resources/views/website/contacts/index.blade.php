<x-app :title="$title">
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb"
        style="background-image: linear-gradient(rgba(22, 36, 61, 0.9), rgba(0, 0, 0, 0.2)), url({{ asset('assets/img/bg-page.jpg') }});">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $title }}</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('main.index') }}">{{ __('Главная') }}</a></li>
                <li class="breadcrumb-item active text-primary">{{ $title }}</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">{{ __('Контакты') }}</h4>
                <h1 class="display-4 mb-4">
                    {{ __('Если у вас есть какие-либо комментарии, пожалуйста, подайте заявку прямо сейчас') }}
                </h1>
            </div>
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="contact-img d-flex justify-content-center">
                        <div class="contact-img-inner">
                            <img src="{{ asset('assets/img/contact-img.png') }}" class="img-fluid w-100" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div>
                        <h4 class="text-primary">{{ __('Оставьте заявку') }}</h4>
                        <br>
                        <livewire:contact-form />
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="contact-add-item">
                                    <div class="contact-icon text-primary mb-4">
                                        <i class="fas fa-map-marker-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4>Адрес</h4>
                                        <p class="mb-0">443048, Самарская область, г.о. Самара, вн. р-н Красноглинский,
                                            п. Красная Глинка, кв-л 2, зд.37, офис 221.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="contact-add-item">
                                    <div class="contact-icon text-primary mb-4">
                                        <i class="fas fa-envelope fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4>E-mail</h4>
                                        <p class="mb-0">info@example.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="contact-add-item">
                                    <div class="contact-icon text-primary mb-4">
                                        <i class="fa fa-phone-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4>Телефон для связи</h4>
                                        <p class="mb-0">+7 (846) 278-55-55</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>