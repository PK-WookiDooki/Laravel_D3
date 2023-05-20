<aside>
    <div class=" p-3 shadow hover:shadow-lg duration:200 bg-white">
        <a href="{{ route('page.index') }}"
            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Home</a>

        @user
            <div class=" flex flex-wrap gap-6 lg:gap-[12px] mt-7 lg:mt-3">
                <div class="md:mt-[10px] w-[45%] md:w-full">
                    <h2 class="text-center font-medium">Manage Inventories</h2>

                    <div class="flex flex-col mt-2 gap-2">
                        <a href="{{ route('inventory.index') }}"
                            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Inventories
                            List</a>

                        <a href="{{ route('inventory.create') }}"
                            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Create
                            Inventory</a>
                    </div>

                </div>

                <div class="md:mt-[10px] w-[45%] md:w-full">
                    <h2 class="text-center font-medium">Manage Categories</h2>

                    <div class="flex flex-col mt-2 gap-2">
                        <a href="{{ route('category.index') }}"
                            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Categories
                            List</a>

                        <a href="{{ route('category.create') }}"
                            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Create
                            Category</a>
                    </div>

                </div>

                <div class="md:mt-[10px] w-[45%] md:w-full">
                    <h2 class="text-center font-medium">Manage Books</h2>

                    <div class="flex flex-col mt-2 gap-2">
                        <a href="{{ route('book.index') }}"
                            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Books
                            List</a>

                        <a href="{{ route('book.create') }}"
                            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Add
                            Book</a>
                    </div>

                </div>

                <div class="md:mt-[10px] w-[45%] md:w-full">
                    <h2 class="text-center font-medium">Account</h2>

                    <div class="flex flex-col mt-2 gap-2">
                        <a href="{{ route('dashboard.home') }}"
                            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">User
                            Profile</a>

                        <a href="{{ route('auth.changePassword') }}"
                            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Change
                            Password</a>
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button class="bg-red-500 hover:bg-red-700 text-white font-medium py-2 px-4 rounded w-full">
                                Logout
                            </button>
                        </form>
                    </div>


                </div>
            </div>
        @enduser

        @notUser
            <div class="mt-6">
                {{-- <h2 class="text-center font-medium">Manage Categories</h2> --}}

                <div class="flex flex-col mt-2 gap-2">
                    <a href="{{ route('auth.register') }}"
                        class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Register
                        Account</a>

                    <a href="{{ route('auth.login') }}"
                        class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Login
                        Account</a>
                </div>



            </div>
        @endnotUser
    </div>
</aside>
