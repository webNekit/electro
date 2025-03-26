<x-app :title="$title">
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
    <br>
    <livewire:section.about :data="$stats" />
</x-app>