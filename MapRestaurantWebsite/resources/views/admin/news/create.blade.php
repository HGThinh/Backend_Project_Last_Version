<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Tables') }}
                </div>
            </div>

            <div>
                <a href="{{ route('admin.tables.index') }}"> Table Index</a>
            </div>

            <div class="space-y-8 divide-y <x-admin-layout>
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
divide-gray-200 w-1/2 mt-10">
<form method="POST" action="{{ route('admin.tables.store') }}">
    @csrf
    <div class="sm:col-span-6">
        <label for="title" class="block text-sm font-medium text-gray-700">
            Create New Table
        </label>

        <div class="mt-1">
            <label for="name" class="block text-sm font-medium text-gray-700">
                Name
            </label>

            <input type="text" id="name" name="name"
                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
        </div>

        <div class="col-span-6">
            <label for="guest_number" class="block text-sm font-medium text-gray-700">
                GuestNumber
            </label>
            <input type="number" id="guest_number" name="guest_number" />
        </div>

        <div class="col-span-6">
            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
            <select id="location" name="location"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @foreach (App\Enums\TableLocation::cases() as $location)
                    <option value="{{ $location->value }}">{{ $location->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="col-span-6">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="status" name="status"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
