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
                    {{ __('Tables') }}
                </div>
            </div>
            <div>
                <a href="{{ route('admin.tables.create') }}"> New Table </a>
            </div>
            <div class="">
                <table class="">
                    <thead class="">
                        <tr>
                            <th scope="col" class="">
                                Name
                            </th>
                            <th scope="col" class="">
                                Guest
                            </th>
                            <th scope="col" class="">
                                Location
                            </th>
                            <th scope="col" class="">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                            <tr class="">
                                <th scope="row" class="">
                                    {{ $table->name }}
                                </th>
                                <td class="">
                                    {{ $table->guest_number }}
                                </td>
                                <td class="">
                                    {{ $table->location->name }}
                                </td>
                                <td class="">
                                    {{ $table->status->name }}
                                </td>
                                <td class="">
                                    <a href="{{ route('admin.tables.edit', $table->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('admin.tables.destroy', $table->id) }}"
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
