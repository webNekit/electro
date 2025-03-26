<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    @forelse($data as $item)
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">{{ $item->category->name }}</h4>
                                <h1 class="display-1 text-white mb-4">{{ $item->name }}</h1>
                                <p class="mb-5 fs-5">{{ $item->small_text }}
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2"
                                        href="{{ route('blog.show', $item->id) }}">{{ __('Читать подробнее') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover;">
                                <img src="img/carousel-2.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
    @endforelse
</div>
<!-- Carousel End -->