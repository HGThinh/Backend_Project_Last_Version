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
                <a href="{{ route('admin.menus.create') }}">New Menu</a>
            </div>

            <div class="">
                <table class="">
                    <thead class="">
                        <tr>
                            <th scope="col" class="">
                                Name
                            </th>
                            <th scope="col" class="">
                                Description
                            </th>
                            <th scope="col" class="">
                                Price
                            </th>
                            <th scope="col" class="">
                                Image
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr class="">
                                <th scope="row" class="">
                                    {{ $menu->name }}
                                </th>
                                <td class="">
                                    {{ $menu->description }}
                                </td>
                                <td class="">
                                    {{ $menu->number }}
                                </td>
                                <td class="">
                                    {{ $menu->image }}
                                </td>
                                <td class="">
                                    <a href="{{ route('admin.tables.edit', $table->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('admin.tables.destroy', $table->id) }}"
                                        enctype="multipart/form-data" onsubmit="return confirm ('Areyousure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
