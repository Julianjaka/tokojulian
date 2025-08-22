<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  < method="POST" action="{{ route('product.store') }}">
                    @csrf
                    <!-- Name -->
                    <div class="mb-2 w-80">
                        <x-input-label for="name" :value="__('Name')"/>
                        <x-text-input id="name" class="block mt-1 w-full" type="text"
                         name="name" :value="old('name')"required/>
                         <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>
                    <!-- Name -->
                    <div class="mb-2 w-80">
                        <x-input-label for="Description" :value="__('Description')"/>
                        <x-text-input id="Description" class="block mt-1 w-full" type="text"
                         name="Description" :value="old('Description')"required/>
                         <x-input-error :messages="$errors->get('Description')" class="mt-2"/>
                    </div>
                    <!-- Name -->
                    <div class="mb-2 w-80">
                        <x-input-label for="Price" :value="__('Price')"/>
                        <x-text-input id="Price" class="block mt-1 w-full" type="text"
                         name="Price" :value="old('Price')"required/>
                         <x-input-error :messages="$errors->get('Price')" class="mt-2"/>
                    </div>
                     <!-- Name -->
                    <div class="mb-2 w-80">
                        <x-input-label for="Stock" :value="__('Stock')"/>
                        <x-text-input id="Stock" class="block mt-1 w-full" type="text"
                         name="Stock" :value="old('Stock')"required/>
                         <x-input-error :messages="$errors->get('Stock')" class="mt-2"/>
                    </div>              
                    <x-primary-button class="mt-4">
                        {{ __('simpan') }}
                    </x-primary-button>
                  <form method="POST" action="{{ route('product.update', $product->id) }}">
                    @csrf
                    @method('PUT')
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
