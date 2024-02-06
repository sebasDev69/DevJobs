<div class="bg-gray-700 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postular a esta vacante</h3>

    @if (session()->has('mensaje'))
        <div class="uppercase border border-green-100 text-green-600 p-2 font-bold my-5 text-sm">
            {{ session('mensaje') }}
        </div>
    @else
        <form class="w-96 mt-5" action="" wire:submit.prevent='postularme'>
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum o Hoja de vida')" />
                <x-text-input id="cv" class="block mt-1 w-full" type="file" wire:model="cv" accept=".pdf" />
            </div>

            @error('cv')
                <livewire:mostrar-alerta :message="$message" />
            @enderror

            <x-primary-button class="my-5">
                {{ __('Postularme') }}
                </x-button>
        </form>
    @endif


</div>
