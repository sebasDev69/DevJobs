<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-white my-3">
            {{ $vacante->titulo }}
        </h3>
        <div class="md:grid md:grid-cols-2">
            <p class="font-bold text-sm uppercase text-gray-300 my-3">Empresa: <span
                    class="normal-case font-normal">{{ $vacante->empresa }}</span></p>
            <p class="font-bold text-sm uppercase text-gray-300 my-3">Último dia para postularse: <span
                    class="normal-case font-normal">{{ Carbon\Carbon::parse($vacante->ultimo_dia->toFormattedDateString()) }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-300 my-3">Categoria: <span
                    class="normal-case font-normal">{{ $vacante->categoria->categoria }}</span></p>
            <p class="font-bold text-sm uppercase text-gray-300 my-3">Salario: <span
                    class="normal-case font-normal">{{ $vacante->salario->salario }}</span></p>
        </div>
    </div>
    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}"
                alt="{{ 'Imagen vacante' . $vacante->titulo }}">
        </div>
        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5 text-white">Descripcion del puesto</h2>
            <p class="text-gray-300">{{ $vacante->descripcion }}</p>
        </div>
    </div>

    @guest
        <div class="mt-5 bg-gray-50 border border-dash p-5 text-center">
            <p>
                Deseas aplicar o postular a esta vacante? <a href="{{ route('register') }}"
                    class="font-bold text-indigo-600">Obten una cuenta y aplica a estas y otras vacantes</a>
            </p>
        </div>
    @endguest

    @cannot('create', App\Models\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante" />
    @endcannot


</div>
