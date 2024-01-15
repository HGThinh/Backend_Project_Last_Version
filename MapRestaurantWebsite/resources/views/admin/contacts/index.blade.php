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
                    {{ __('Contacts') }}
                </div>
            </div>
            <div>
                <a href="{{ route('admin.contacts.create') }}"> New Contact </a>
            </div>
            <div class="">
                <contact class="">
                    <thead class="">
                        <tr>
                            <th scope="col" class="">
                                Name
                            </th>
                            <th scope="col" class="">
                                Email
                            </th>
                            <th scope="col" class="">
                                Phone
                            </th>
                            <th scope="col" class="">
                                Reason
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr class="">
                                <th scope="row" class="">
                                    {{ $contact->name }}
                                </th>
                                <td class="">
                                    {{ $contact->email }}
                                </td>
                                <td class="">
                                    {{ $contact->phone }}
                                </td>
                                <td class="">
                                    {{ $contact->reason }}
                                </td>
                                <td class="">
                                    <a href="{{ route('admin.contacts.edit', $contact->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('admin.contacts.destroy', $contact->id) }}"
                                        onsubmit="return confirm ('Areyousure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </contact>
            </div>
        </div>
    </div>
</x-admin-layout>
