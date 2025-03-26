<!-- About Start -->
<div class="container-fluid bg-light about pb-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-5 h-100">
                    <h4 class="text-primary">{{ __('О компании') }}</h4>
                    <h1 class="display-4 mb-4">{{ __('Наша основная цель') }}</h1>
                    <p>Создавать отечественное
                        конкурентоспособное оборудование, строить новые подстанции и вводить
                        новые мощности, повышать надежность энергосистемы, укрепляя
                        энергобезопасность государства.</p>
                    <p>Электрощит Самара - единственное в России
                        предприятие, обладающее полувековым опытом конструирования. Доля
                        новых изделий в производстве достигает 75%.
                    </p>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">
                        @forelse($data as $item)
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold"
                                            data-toggle="counter-up">{{ $item->count }}</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">{{ $item->title }}</h4>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->