<x-admin-layout>
    <x-slot name="header">
        <h2 class="">
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
                <a href="{{ route('admin.menus.index') }}"> Menu Index</a>
            </div>

            <div class="">
                <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="sm:">
                        <label for="title" class="">
                            Edit Menu
                        </label>

                        <div class="">
                            <label for="name" class="">
                                Name
                            </label>

                            <input type="text" id="name" name="name" class=""
                                value="{{ $menu->name }}" />
                        </div>

                        <div class="">
                            <label for="description" class="">
                                Description
                            </label>

                            <input type="text" id="description" name="description" class=""
                                value="{{ $menu->description }}" />
                        </div>

                        <div class="">
                            <label for="price" class="">
                                Price
                            </label>
                            <input type="number" id="price" name="price" value="{{ $menu->price }}" />
                        </div>

                        <div class="">
                            <label for="image" class="">
                                Image
                            </label>
                            <input type="file" id="image" name="image" value="{{ $menu->image }}" />
                        </div>



                    </div>
                    <button type="submit">Store</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
