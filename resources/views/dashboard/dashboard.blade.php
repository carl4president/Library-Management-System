<x-app-layout title="Dashboard">
    <main class="bg-gray-400 min-h-screen pl-60 pt-20 pr-10">
        @include('components.admin-header')
        @include('sidebar.sidebar')
        <div class="w-full h-12 bg-white rounded-md shadow-2xl flex items-center px-4 mb-4">
        <p class="text-sm font-medium">Hi, welcome to LMS dashboard {{$user['name']}}!</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 justify-evenly gap-6">
            <div class="flex flex-row items-center justify-center gap-4 bg-[#874cff] w-full h-28 text-white rounded-sm">
                <i data-lucide="newspaper" class="size-7"></i>
                <div class="flex flex-col">
                    <h5 class="text-gray-300 text-sm">Documents</h5>
                    <h3 class="font-medium">1231215</h3>
                </div>
            </div>

            <div class="flex flex-row items-center justify-center gap-4 bg-[#874cff] w-full h-28 text-white rounded-sm">
                <i data-lucide="newspaper" class="size-7"></i>
                <div class="flex flex-col">
                    <h5 class="text-gray-300 text-sm">Documents</h5>
                    <h3 class="font-medium">1231215</h3>
                </div>
            </div>

            <div class="flex flex-row items-center justify-center gap-4 bg-red-500 w-full h-28 text-white rounded-sm">
                <i data-lucide="newspaper" class="size-7"></i>
                <div class="flex flex-col">
                    <h5 class="text-gray-300 text-sm">Documents</h5>
                    <h3 class="font-medium">1231215</h3>
                </div>
            </div>


            <div class="flex flex-row items-center justify-center gap-4 bg-[#874cff] w-full h-28 text-white rounded-sm">
                <i data-lucide="newspaper" class="size-7"></i>
                <div class="flex flex-col">
                    <h5 class="text-gray-300 text-sm">Documents</h5>
                    <h3 class="font-medium">1231215</h3>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>
