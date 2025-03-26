<x-app :title="__('Главная')">
    <livewire:section.banner :data="$posts" />
    <!-- Feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">{{ __('Преимущества компании') }}</h4>
                <h1 class="display-4 mb-4">{{ __('Надежность, качество и безопасность в каждой цепи!') }}</h1>
            </div>
            <livewire:feature.collection :features="$features" />
        </div>
    </div>
    <livewire:section.about :data="$statistics" />
    <livewire:section.service :data="$services" />
    <livewire:section.question :data="$questions" />
    <livewire:section.blog :blogs="$blogs" />
    <livewire:section.team :data="$teams" />
</x-app>