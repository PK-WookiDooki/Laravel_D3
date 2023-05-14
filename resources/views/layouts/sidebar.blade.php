<aside>
    <div class=" p-3 shadow hover:shadow-lg duration:200 bg-white">
        <a href="{{ route('page.index') }}"
            class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Home</a>

        <div class="mt-6">
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

        <div class="mt-6">
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

        <div class="mt-6">
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
    </div>
</aside>
