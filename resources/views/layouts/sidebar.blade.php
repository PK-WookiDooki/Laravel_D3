
<aside>
    <div class=" p-3 shadow ">
        <a href="{{route('page.index')}}" class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Home</a>

        <div class="mt-5">
            <h2 class="text-center font-medium">Manage Inventory</h2>

            <div class="flex flex-col mt-2 gap-2">
                <a href="{{route('inventory.index')}}" class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Item List</a>

                <a href="{{route('inventory.create')}}" class="block text-center py-[5px] border border-gray-400 rounded hover:bg-gray-800 hover:border-transparent hover:text-white duration-200">Create Item</a>
            </div>

        </div>
    </div>
</aside>
