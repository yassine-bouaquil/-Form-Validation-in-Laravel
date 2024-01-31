
<script src="https://cdn.tailwindcss.com"></script>

<div class="flex justify-center">
    <form enctype="multipart/form-data" action="{{ route('register.store') }}" class="space-y-6 w-[30%] bg--900" method="post">
        @csrf
        <section class="flex gap-6">
            <div>
                <label for="" class="block text-sm font-medium">Name</label>
                <div class="mt-1">
                    <input name="name" type="text" class="text-black px-2 py-3 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                    <div class="text-red-500">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <label for="" class="block text-sm font-medium">Email</label>
                <div class="mt-1">
                    <input name="email" type="email" class="text-black  px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                    <div class="text-red-500">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </section>

        <div>
            <label for="bio" class="block text-sm font-medium">Bio</label>
            <div class="mt-1">
                <textarea name="bio" class="text-black  px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm"></textarea>
                <div class="text-red-500">
                    @error('bio')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div>
            <label for="" class="block text-sm font-medium">Profile image</label>
            <div class="mt-1">
                <input name="image" type="file" class="text-black  px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                <div class="text-red-500">
                    @error('image')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <section class="flex gap-6">
            <div>
                <label for="password" class="block text-sm font-medium">Password</label>
                <div class="mt-1">
                    <input name="password" type="password" class="text-black  px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                    <div class="text-red-500">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <label for="" class="block text-sm font-medium">Confirm Password</label>
                <div class="mt-1">
                    <input name="password_confirmation" type="password" class="text-black px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                    <div class="text-red-500">
                        @error('password_confirmation')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </section>

        <div>
            <button type="submit"
                    class="flex w-full justify-center rounded-md border border-transparent bg-sky-400 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">Register
                Account
            </button>
        </div>
    </form>

</div>

