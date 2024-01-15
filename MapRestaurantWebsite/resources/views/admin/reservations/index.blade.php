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
                    {{ __('Reservations') }}
                </div>
            </div>
            <div>
                <a href="{{ route('admin.reservations.create') }}"> New Reservation </a>
            </div>
            <div class="">
                <table class="">
                    <thead class="">
                        <tr>
                            <th scope="col" class="">
                                First Name
                            </th>
                            <th scope="col" class="">
                                Last Name
                            </th>
                            <th scope="col" class="">
                                Email
                            </th>
                            <th scope="col" class="">
                                Phone
                            </th>
                            <th scope="col" class="">
                                Reservation Date
                            </th>
                            <th scope="col" class="">
                                Table
                            </th>
                            <th scope="col" class="">
                                Guest Number
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr class="">
                                <th scope="row" class="">
                                    {{ $reservation->first_name }}
                                </th>
                                <td class="">
                                    {{ $reservation->location->last_name }}
                                </td>
                                <td class="">
                                    {{ $reservation->location->email }}
                                </td>
                                <td class="">
                                    {{ $reservation->status->tel_number }}
                                </td>
                                <td class="">
                                    {{ $reservation->status->res_date }}
                                </td>
                                <td class="">
                                    {{ $reservation->status->table_id }}
                                </td>
                                <td class="">
                                    {{ $reservation->guest_number }}
                                </td>


                                <td class="">
                                    <a href="{{ route('admin.reservations.edit', $reservation->id) }}">Edit</a>
                                    <form method="POST"
                                        action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                        onsubmit="return confirm ('Are you sure?');">
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
