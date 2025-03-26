<!-- FAQs Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <div class="mb-5">
                        <h4 class="text-primary">{{ __('Вопрос-ответ') }}</h4>
                        <h1 class="display-4 mb-0">{{ __('Часто задаваемые вопросы') }}</h1>
                    </div>
                    <div class="accordion" id="accordionExample">
                        @forelse($data as $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{ $item->id }}">
                                    <button class="accordion-button border-0" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $item->id }}"" aria-expanded=" true"
                                        aria-controls="collapse-{{ $item->id }}">
                                        {{ $item->question }}
                                    </button>
                                </h2>
                                <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse active"
                                    aria-labelledby="heading-{{ $item->id }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body rounded">
                                        {{ $item->answer }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            {{ __('Данный раздел редактируется') }}
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="img/carousel-2.png" class="img-fluid w-100" alt="">
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->