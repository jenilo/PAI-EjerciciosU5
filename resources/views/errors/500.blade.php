<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-md-8 col-12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Categories') }}
                </h2>
            </div>
            <div class="col-md-4 col-12">
                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addCategoryModal">Add Category</button>
            </div>
        </div>
    </x-slot>

    <h1>Ocurrio un error</h1>

</x-app-layout>