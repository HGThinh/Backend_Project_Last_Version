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
                    {{ __('News') }}
                </div>
            </div>

            <div>
                <a href="{{ route('admin.news.index') }}"> News Index</a>
            </div>

            <div class="">
                <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="sm:">
                        <label for="title" class="">
                            Create New News
                        </label>

                        <div class="">
                            <label for="name" class="">
                                Title
                            </label>

                            <input type="text" id="title" name="title" class="" />
                        </div>

                        <div class="">
                            <label for="image_cover" class="">
                                Image Cover
                            </label>
                            <input type="file" id="image_cover" name="image_cover" />
                        </div>

                        <div class="">
                            <label for="content" class="">
                                Content
                            </label>

                            <input type="text" id="content" name="content" class="" />
                        </div>

                        <div class="">
                            <label for="pub_date" class="">
                                Public date
                            </label>

                            <input type="datetime-local" id="pub_date" name="pub_date" class="" />
                        </div>



                    </div>
                    <button type="submit">Store</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
