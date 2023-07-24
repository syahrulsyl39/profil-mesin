@extends('backend.layouts.master')

@section('main')
    <h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Form Input Pengajuan Proposal
    </h3>


    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <form action="{{ route('store-proposal') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Valid input -->
            <label class="block mt-4 text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">
                    Npm
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-600 dark:text-gray-300 dark:bg-gray-700 focus:border-gray-400 focus:outline-none form-input"
                    placeholder="Jane Doe" name="npm" type="text" />
                @error('npm')
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        Your password is strong.
                    </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">
                    Judul
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-600 dark:text-gray-300 dark:bg-gray-700 focus:border-gray-400 focus:outline-none form-input"
                    placeholder="Jane Doe" name="judul" type="text" />
                @error('npm')
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        Your password is strong.
                    </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">
                    Latar Belakang
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-600 dark:text-gray-300 dark:bg-gray-700 focus:border-gray-400 focus:outline-none form-input"
                    placeholder="Jane Doe" name="latar_belakang" type="text" />
                @error('npm')
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        Your password is strong.
                    </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">
                    Tujuan Penelitian
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-600 dark:text-gray-300 dark:bg-gray-700 focus:border-gray-400 focus:outline-none form-input"
                    placeholder="Jane Doe" name="tujuan_penelitian" type="text" />
                @error('npm')
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        Your password is strong.
                    </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">
                    Manfaat Penelitian
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-600 dark:text-gray-300 dark:bg-gray-700 focus:border-gray-400 focus:outline-none form-input"
                    placeholder="Jane Doe" name="manfaat_penelitian" type="text" />
                @error('npm')
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        Your password is strong.
                    </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">
                    Penelitian Terkait
                </span>
                <input
                    class="block w-full mt-1 text-sm border-gray-600 dark:text-gray-300 dark:bg-gray-700 focus:border-gray-400 focus:outline-none form-input"
                    placeholder="Jane Doe" type="file" name="penelitian_terkait" />
                @error('penelitian_terkait')
                    <span class="text-xs text-gray-600 dark:text-gray-400">
                        Your password is strong.
                    </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    Pembimbing 1
                </span>
                <select
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="pembimbing1">
                    <option>M Adnan Nur S.kom, M.T</option>
                </select>
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    Pembimbing 2
                </span>
                <select
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="pembimbing2">
                    <option>Dra Najira Umar S.kom, M.T</option>
                </select>
            </label>


            <div>
                <button
                    class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    type="submit">
                    <span>Kirim Pengajuan</span>
                    <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
                        <path
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
@endsection
