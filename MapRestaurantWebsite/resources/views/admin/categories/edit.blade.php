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
                    {{ __('Categories') }}
                </div>
            </div>

            <div>
                <a href="{{ route('admin.categories.index') }}"> Category Index</a>
            </div>

            <div class="">
                <form method="POST" action="{{ route('admin.categories.store') }}">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="title" class="">
                            Edit Category
                        </label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" class=""
                                value="{{ $category->name }}" />
                        </div>
                    </div>
                    <button type="submit">Store</button>
                </form>
            </div>


        </div>
    </div>
</x-admin-layout>
