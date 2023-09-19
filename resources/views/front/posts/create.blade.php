<x-layout>
    <div class="container">
        <div class="col-md-12 text-xl">
            <x-splade-form action="{{ route('posts.store') }}">
                <div class="col-md-10 align-content-center text-center">
                    <x-splade-input name="title" label="Title" />
                    <x-splade-textarea name="content"  class="form-control m-2" />
                    <x-splade-select name="category_id" :options="$categories" option-label="name" option-value="id" choices />
                    <x-splade-select name="user_id" :options="$users" option-label="name" option-value="id" choices />
                    <button type="submit" class="btn btn-info m-2">Add</button>
                </div>
            </x-splade-form>
        </div>
    </div>
</x-layout>


