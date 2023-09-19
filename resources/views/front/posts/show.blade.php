use App\Models\Post;
<x-layout>
    <div class="container">
        <div class="col-md-12 text-xl">
            <x-splade-modal>
                <x-splade-data :default="$post">
                    <h3 v-text="data.title"></h3>
                    <p  v-text="data.content" ></p>
                </x-splade-data>
            </x-splade-modal>

        </div>
    </div>
</x-layout>


