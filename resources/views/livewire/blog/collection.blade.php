<div class="row g-4 justify-content-center">
    @forelse($blogs as $blog)
        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="blog-item">
                <div class="blog-img">
                    <img width="450" height="240"
                        src="{{ $blog->image ? url('storage', $blog->image) : asset('assets/img/default.png') }}"
                        class="img-fluid rounded-top w-100" alt="">
                    <div class="blog-categiry py-2 px-4">
                        <span>{{ $blog->category->name }}</span>
                    </div>
                </div>
                <div class="blog-content p-4">
                    <div class="blog-comment d-flex justify-content-between mb-3">
                        <div class="small"><span
                                class="fa fa-calendar text-primary"></span>{{ $blog->created_at->format('d.m.Y') }}</div>
                    </div>
                    <a href="{{ route('blog.show', $blog->id) }}" class="h4 d-inline-block mb-3">{{ $blog->name }}</a>
                    <p class="mb-3">{{ $blog->small_text }}</p>
                    <a href="{{ route('blog.show', $blog->id) }}" class="btn p-0">{{ __('Читать подробнее') }} <i
                            class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    @empty
    @endforelse
</div>