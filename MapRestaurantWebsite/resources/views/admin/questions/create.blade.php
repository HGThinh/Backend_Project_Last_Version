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
                <a href="{{ route('admin.tables.index') }}"> Table Index</a>
            </div>

            <div class="">
                <form method="POST" action="{{ route('admin.tables.store') }}">
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
                            <label for="guest_number" class="">
                                Guest Number
                            </label>
                            <input type="number" id="guest_number" name="guest_number" />
                        </div>

                        <div class="">
                            <label for="location" class="">Location</label>
                            <select id="location" name="location" class="">
                                @foreach (App\Enums\TableLocation::cases() as $location)
                                    <option value="{{ $location->value }}">{{ $location->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="">
                            <label for="status" class="">Status</label>
                            <select id="status" name="status" class="">
                                @foreach (App\Enums\TableStatus::cases() as $status)
                                    <option value="{{ $status->value }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit">Store</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
