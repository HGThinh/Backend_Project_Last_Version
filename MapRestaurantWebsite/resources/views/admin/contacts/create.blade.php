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
                <a href="{{ route('admin.contacts.index') }}"> Contact Index</a>
            </div>

            <div class="">
                <form method="POST" action="{{ route('admin.contacts.store') }}">
                    @csrf
                    <div class="sm:">
                        <label for="title" class="">
                            Create New Contact
                        </label>

                        <div class="">
                            <label for="name" class="">
                                Name
                            </label>

                            <input type="text" id="name" name="name" class="" />
                        </div>

                        <div class="">
                            <label for="email" class="">
                                Email
                            </label>

                            <input type="email" id="email" name="email" class="" />
                        </div>

                        <div class="">
                            <label for="phone" class="">
                                Phone
                            </label>

                            <input type="text" id="phone" name="phone" class="" />
                        </div>
                        <div class="">
                            <label for="reason" class="">
                                Reason
                            </label>

                            <input type="text" id="reason" name="Reason" class="" />
                        </div>
                    </div>
                    <button type="submit">Store</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
