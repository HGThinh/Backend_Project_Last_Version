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
                <a href="{{ route('admin.reservations.index') }}"> Reservation Index</a>
            </div>

            <div class="">
                <form method="POST" action="{{ route('admin.reservations.store') }}">
                    @csrf
                    <div class="">
                        <label for="title" class="">
                            Create New Reservation
                        </label>

                        <div class="">
                            <label for="first_name" class="">
                                First Name
                            </label>

                            <input type="text" id="first_name" name="first_name" class="" />
                        </div>
                        <div class="">
                            <label for="last_name" class="">
                                Last Name
                            </label>

                            <input type="text" id="last_name" name="last_name" class="" />
                        </div>

                        <div class="">
                            <label for="email" class="">
                                Email
                            </label>

                            <input type="email" id="email" name="email" class="" />
                        </div>

                        <div class="">
                            <label for="tel_number" class="">
                                Phone Number
                            </label>

                            <input type="text" id="tel_number" name="tel_number" class="" />
                        </div>

                        <div class="">
                            <label for="res_date" class="">
                                Reservation date
                            </label>

                            <input type="datetime-local" id="res_date" name="res_date" class="" />
                        </div>

                        <div class="col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700">
                                Guest Number
                            </label>
                            <input type="number" id="guest_number" name="guest_number" />
                        </div>
                    </div>
                    <button type="submit">Store</button>
                </form>
            </div>


        </div>
    </div>
</x-admin-layout>
