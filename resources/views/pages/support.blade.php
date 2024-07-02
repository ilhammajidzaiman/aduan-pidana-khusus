@extends('layouts.landing')

@section('content')
    <div class="w-full border space-y-1 h-screen relative overflow-hidden">
        <div class="p-2 flex justify-between">
            <a href="" class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l14 0" />
                    <path d="M5 12l6 6" />
                    <path d="M5 12l6 -6" />
                </svg>
                <span class="text-base font-medium">Support</span>
            </a>
        </div>
        <hr class="mb-0">
        {{-- Form --}}
        <div class="px-2 w-full w-space-y-2 h-[80%] space-y-4 flex flex-col justify-end pb-4">
            {{-- Chat value --}}
            <div class="grid gap-2 ">
                <div class="bg-green-600 p-2 max-w-sm w-fit text-white rounded-l-xl rounded-br-xl ml-auto">
                    <p>Mimin, mau ngadu nih!</p>
                </div>

                <div class="bg-slate-800 p-2 max-w-sm w-fit text-white rounded-r-xl rounded-bl-xl mr-auto">
                    <p>Boleh, mau ngadu apa ya?</p>
                </div>
                <div class="bg-slate-800 p-2 max-w-sm w-fit text-white rounded-r-xl rounded-bl-xl mr-auto">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium libero, minima fugit, saepe atque at esse mollitia rerum aspernatur expedita error aliquam numquam officia natus? Corrupti quia vitae recusandae animi.</p>
              </div>
            </div>
            {{-- Chat Input --}}
            <div class="w-full rounded-lg border border-gray-200 bg-gray-50">
                <div class="rounded-t-lg bg-white p-2">
                    <label for="messages" class="sr-only">Tulis pesan</label>
                    <textarea id="messages" rows="2"
                        class="w-full border-0 focus:outline-none bg-white px-0 text-sm text-gray-900 focus:ring-0"
                        placeholder="Tulis pesan..." required></textarea>
                </div>
                <div class="flex items-center justify-between border-t px-2 py-2">
                    <div class="flex space-x-1 ps-0 rtl:space-x-reverse">
                        <button type="button"
                            class="inline-flex cursor-pointer items-center justify-center rounded p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 12 20">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                    d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                            </svg>
                            <span class="sr-only">Attach file</span>
                        </button>
                        <button type="button"
                            class="inline-flex cursor-pointer items-center justify-center rounded p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 18">
                                <path
                                    d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                            </svg>
                            <span class="sr-only">Upload image</span>
                        </button>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center rounded-lg bg-blue-700 px-4 py-2.5 text-center text-xs font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-200">Kirim</button>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
