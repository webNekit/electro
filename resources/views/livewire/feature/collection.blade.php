<div class="row g-4">
    @forelse($features as $feature)
        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="feature-item p-4">
                <h4 class="mb-4">{{ $feature->title }}</h4>
                <p class="mb-4">{{ $feature->description }}</p>
            </div>
        </div>
    @empty
        {{ __('Данный раздел редактируется') }}
    @endforelse
</div>