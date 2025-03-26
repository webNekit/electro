<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">{{ __('Статьи и новости') }}</h4>
            <h1 class="display-4 mb-4">{{ __('Ознакомьтесь со свежими статьями и новостями') }}</h1>
        </div>
        <livewire:blog.collection :blogs="$blogs" />
    </div>
</div>
<!-- Blog End -->