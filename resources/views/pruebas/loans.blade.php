<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-md-8 col-12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Loans') }}
                </h2>
            </div>
        </div>
    </x-slot>


<div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="row no-gutters p-2">
                @for ($i = 0; $i <= 10; $i++)
                    <div class="col d-flex p-2">
                        <div class="shadow card mx-auto" style="width: 14rem;">
                            <img src="..." class="card-img-top p-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Titulo</h5>
                                <h6 class="">Autor</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-block btn-primary">Get</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>


</x-app-layout>