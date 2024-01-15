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
                <a href="{{ route('admin.reservations.index') }}"> Table Index</a>
            </div>

            <div class="">
                <form method="POST" action="{{ route('admin.reservations.update', $table->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="">
                        <label for="title" class="">
                            Create New Reservation
                        </label>

                        <div class="">
                            <label for="first_name" class="">
                                First Name
                            </label>

                            <input type="text" id="first_name" name="first_name" class=""
                                value="{{ $reservation->first_name }}" />
                        </div>
                        <div class="">
                            <label for="last_name" class="">
                                Last Name
                            </label>

                            <input type="text" id="last_name" name="last_name" class=""
                                value="{{ $reservation->last_name }}" />
                        </div>

                        <div class="">
                            <label for="email" class="">
                                Email
                            </label>

                            <input type="email" id="email" name="email" class=""
                                value="{{ $reservation->email }}" />
                        </div>

                        <div class="">
                            <label for="tel_number" class="">
                                Phone Number
                            </label>

                            <input type="text" id="tel_number" name="tel_number" class=""
                                value="{{ $reservation->tel_number }}" />
                        </div>

                        <div class="">
                            <label for="res_date" class="">
                                Reservation date
                            </label>

                            <input type="datetime-local" id="res_date" name="res_date" class=""
                                value="{{ $reservation->res_date }}" />
                        </div>

                        <div class="col-span-6">
                            <label for="guest_number" class="">
                                Guest Number
                            </label>
                            <input type="number" id="guest_number" name="guest_number"
                                value="{{ $reservation->last_name }}" />
                        </div>
                    </div>
                    <button type="submit">Store</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
