<div>
    <!-- Сообщение об успешной отправке -->
    @if (session()->has('message'))
        <div class="alert alert-success mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="row g-3">
            <!-- Поле "Имя" -->
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="text" class="form-control border-0 @error('name') is-invalid @enderror" id="name"
                        wire:model.defer="name" placeholder=" ">
                    <label for="name">{{ __('Ваше имя') }}</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Поле "Email" -->
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="email" class="form-control border-0 @error('email') is-invalid @enderror" id="email"
                        wire:model.defer="email" placeholder=" ">
                    <label for="email">{{ __('E-mail') }}</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Поле "Сообщение" -->
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control border-0 @error('message') is-invalid @enderror" id="message"
                        style="height: 120px" wire:model.defer="message" placeholder=" "></textarea>
                    <label for="message">{{ __('Сообщение') }}</label>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Кнопка отправки -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100 py-3" wire:loading.attr="disabled">
                    <span wire:loading.remove>{{ __('Оставить заявку') }}</span>
                    <span wire:loading>
                        <span class="spinner-border spinner-border-sm" role="status"></span>
                        {{ __('Отправка...') }}
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>