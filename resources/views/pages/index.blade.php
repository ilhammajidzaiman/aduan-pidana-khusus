@extends('layouts.landing')

@section('content')
    <div class="w-full border pb-96">
        <div>
            <img src="{{ asset('image/detective.jpg') }}" class="w-full h-44 object-cover" alt="">
        </div>
        <form class="max-w-md mx-auto px-2 -mt-4">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 focus:outline-none"
                    placeholder="Input token pelaporan" required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2">CARI</button>
            </div>
        </form>

        <hr class="mt-4">

        <div class="grid grid-cols-2 gap-2 p-2">

            <div class="border rounded-lg p-2 flex justify-between items-center">
                <p class="text-xs font-light">Jumlah Laporan</p>
                <p class="text-xl font-bold">420</p>
            </div>
            <div class="border rounded-lg p-2 flex justify-between items-center">
                <p class="text-xs font-light">Laporan Diproses</p>
                <p class="text-xl font-bold">300</p>
            </div>
            <div class="border rounded-lg p-2 flex justify-between items-center">
                <p class="text-xs font-light">Laporan Selesai</p>
                <p class="text-xl font-bold">100</p>
            </div>
            <div class="border rounded-lg p-2 flex justify-between items-center">
                <p class="text-xs font-light">Laporan SPAM</p>
                <p class="text-xl font-bold">20</p>
            </div>

        </div>

        <div class="p-2">

            <div class="rounded-xl flex justify-between bg-gradient-to-tr from-green-600 to-green-500 p-3 item-start">
                <div>
                    <p class="text-2xl font-bold text-slate-200">Sawit</p>
                    <p class="text-xs font-light text-white">Kamis, 12 Januari 2024</p>

                </div>
                <div class="text-right space-y-1">
                    <p class="text-4xl font-black text-slate-100 tracking-wide">Rp. 6000</p>
                    <p class="text-white font-medium"><span class="text-cyan-400">+10%</span> dari kemarin</p>
                </div>
            </div>

        </div>

        <div class="p-2 space-y-2">
            <p class="text-sm font-medium uppercase">Update Laporan</p>
            <hr>

            <div class="space-y-4">
                @for ($i = 0; $i < 5; $i++)
                    <div class="p-2 space-y-2 bg-white hover:shadow-lg border rounded-lg">
                        <div class="flex gap-2 items-center">
                            <img src="{{ asset('image/default-user.svg') }}" class="h-12 w-12 rounded-full" alt="">
                            <div>
                                <p class="text-base font-medium uppercase">Name/Anonim</p>
                                <p class="text-sm font-light">12 Januari 2024</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex gap-2">
                                <p class="bg-orange-100 ring-1 ring-orange-400 w-fit rounded px-1 uppercase text-xs font-medium">Kriminal Narkoba
                                </p>
                                <p class="bg-teal-100 ring-1 ring-teal-400 w-fit rounded px-1 uppercase text-xs font-medium">Proses</p>
                            </div>
                            <p>Laporan dugaan transaksi narkoba oleh pemuda jalan soebrantas</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

    </div>
@endsection
