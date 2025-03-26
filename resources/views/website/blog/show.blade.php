<x-app :title="$title">
    <div class="container-fluid bg-breadcrumb"
        style="background-image: url({{ $blog->image ? url('storage', $blog->image) : asset('assets/img/default.png') }});">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $blog->name }}</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item active text-primary">{{ $blog->category->name }}</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s"
                style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <p class="mb-0">{{ $blog->small_text }}</p>
                <br>
                <p class="mb-0">{{ $blog->long_text }}</p>
            </div>
        </div>
    </div>
</x-app>