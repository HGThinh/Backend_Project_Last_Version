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
                    {{ __('Questions') }}
                </div>
            </div>

            <div>
                <a href="{{ route('admin.questions.index') }}"> Question Index</a>
            </div>

            <div class="">
                <form method="POST" action="{{ route('admin.questions.store') }}">
                    @csrf
                    <div class="sm:">
                        <label for="title" class="">
                            Create New Question
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
                            <label for="question" class="">
                                Question
                            </label>

                            <input type="text" id="question" name="question" class="" />
                        </div>

                    </div>
                    <button type="submit">Store</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
