<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">{{ __("Наши услуги") }}</h4>
            <h1 class="display-4 mb-4">{{ __('Мы предоставляем лучшие услуги') }}</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @forelse($data as $item)
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">{{ $item->name }}</a>
                                <p class="mb-4">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                {{ __('Данный раздел редактируется') }}
            @endforelse
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-primary rounded-pill py-3 px-5"
                    href="{{ route('service.index') }}">{{ __('Все услуги') }}</a>
            </div>
        </div>
    </div>
</div>