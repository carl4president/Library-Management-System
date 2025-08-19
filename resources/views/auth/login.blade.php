<x-app-layout title="Login">
    <section class="min-h-screen bg-purple-300 flex items-center justify-center">
        <div class="bg-white h-96 w-96 shadow-lg border border-solid border-gray-400 p-8">
            <h2 class="text-2xl font-medium mb-8 text-center">Login</h2>
            <form action="{{ route('authenticate') }}" method="POST">
            @csrf  
                <div class="form-control relative">
                    <input type="text" class="border border-solid border-gray-400 outline-none py-3 pr-6 pl-12 w-full rounded-3xl" placeholder="Enter Your Email" name="email">
                    <i data-lucide="mail" class="size-6 relative bottom-9 left-4 stroke-purple-400"></i>
                </div>
                <div class="form-control relative">
                    <input type="password" class="border border-solid border-gray-400 outline-none py-3 pr-6 pl-12 w-full rounded-3xl" placeholder="Enter Your Password" name="password">
                    <i data-lucide="lock" class="size-6 relative bottom-9 left-4 stroke-purple-400"></i>
                </div>
                <button type="submit" class="w-full py-3 bg-purple-600 text-white font-medium rounded-3xl cursor-pointer">Login</button>
                <div class="flex justify-around mt-4">
                <p>Don't have an account?</p> <a href=" {{ route('signup') }}">Signup Now</a>
                </div>
            </form>
        </div>
    </section>

</x-app-layout>
