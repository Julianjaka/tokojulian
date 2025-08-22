<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <a href="/product/create" class="block mb-2">
                                    <x-primary-button>Tambah Produk</x-primary-button>
                            </a>
                                <td class="p-3">NO</td>
                                <td class="p-3">NAMA PRODUK</td>
                                <td class="p-3">DESKRIPSI</td>
                                <td class="p-3">HARGA</td>
                                <td class="p-3">STOK</td>
                                <td class="p-3">AKSI</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $p)
                            <tr class="border-b">
                                <td class="p-3">{{$loop->iteration}}</td>
                                <td class="p-3">{{$loop->name}}</td>
                                <td class="p-3">{{$loop->description}}</td>
                                <td class="p-3">{{$loop->price}}</td>
                                <td class="p-3">{{$loop->stock}}</td>
                                <td class="p-3">
                                <a href="{{ route('product.edit', $p->id) }}">
                                    <x-secondary-button>Edit</x-secondary-button></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
