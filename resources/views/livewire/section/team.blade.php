<!-- Team Start -->
<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">{{ __('Наши сотрудники') }}</h4>
            <h1 class="display-4 mb-4">{{ __('Профессиональные специалисты') }}</h1>
        </div>
        <div class="row g-4">
            @forelse($data as $item)
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ $item->image ? url('storage', $item->image) : asset('assets/img/default.png') }}"
                                class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">{{ $item->name }}</h4>
                            <p class="mb-0">{{ $item->position }}</p>
                        </div>
                    </div>
                </div>
            @empty
                {{ __('Данный раздел редактируется') }}
            @endforelse
        </div>
    </div>
</div>