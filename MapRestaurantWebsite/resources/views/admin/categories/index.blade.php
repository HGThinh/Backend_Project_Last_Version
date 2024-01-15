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
                <a href="{{ route('admin.categories.create') }}"> New Category </a>
            </div>
            <div class="">
                <table class="">
                    <thead class="">
                        <tr>
                            <th scope="col" class="">
                                Category name
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="">
                                <th scope="row" class="">
                                    {{ $category->name }}"
                                </th>
                                <td class="">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}"
                                        onsubmit="return confirm ('Areyousure?');">
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
