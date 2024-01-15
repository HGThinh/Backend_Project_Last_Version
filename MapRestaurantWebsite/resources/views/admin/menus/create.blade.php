<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="">
            <div class="">
                <div class="">
                    {{ __('Menus') }}
                </div>
            </div>

            <div>
                <a href="{{ route('admin.menus.index') }}"> Table Index</a>
            </div>

            <div class="">
                <form method="POST" action="{{ route('admin.menus.store') }}">
                    @csrf
                    <div class="sm:">
                        <label for="title" class="">
                            Create New Table
                        </label>

                        <div class="">
                            <label for="name" class="">
                                Name
                            </label>

                            <input type="text" id="name" name="name" class="" />
                        </div>

                        <div class="">
                            <label for="description" class="">
                                Description
                            </label>

                            <input type="text" id="description" name="description" class="" />
                        </div>

                        <div class="">
                            <label for="price" class="">
                                Price
                            </label>
                            <input type="number" id="price" name="price" />
                        </div>

                        <div class="">
                            <label for="image" class="">
                                Image
                            </label>
                            <input type="file" id="image" name="image" />
                        </div>



                    </div>
                    <button type="submit">Store</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
