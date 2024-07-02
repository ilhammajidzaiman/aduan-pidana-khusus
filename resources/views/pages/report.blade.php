@extends('layouts.landing')

@section('content')
    <div class="w-full border pb-96 space-y-1">
        <div class="p-2 flex justify-between">
            <a href="" class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l14 0" />
                    <path d="M5 12l6 6" />
                    <path d="M5 12l6 -6" />
                </svg>
                <span class="text-base font-medium">Formulir Laporan</span>
            </a>

            <button class="flex gap-1 text-sm font-medium py-1 px-1.5 rounded text-white bg-green-600">
              <span class="uppercase">Kirim</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z" /><path d="M6.5 12h14.5" /></svg>
            </button>
        </div>
        <hr class="mb-0">
        {{-- Form --}}
        <div class="px-2 space-y-2">

            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Judul Laporan</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Judul laporan" required />
            </div>
            <div class="">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Kategori Pidana</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Pilih kategori</option>
                    <option value="KR">Korupsi</option>
                    <option value="NP">Narkotika dan Psikotropika</option>
                    <option value="TR">Terorisme</option>
                </select>
            </div>
            <div>
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Deskripsikan laporan anda dengan teliti..."></textarea>
            </div>

            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Dokumen Pendukung</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                id="file_input" type="file">
        </div>
    </div>
@endsection
