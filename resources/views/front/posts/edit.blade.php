use App\Models\Post;
<x-layout>
    <div class="container">
        <div class="col-md-12 text-xl">
            <x-splade-modal>
                <h1>Edit Post</h1>
                    <x-splade-form  :action="route('posts.update',$post)" :default="$post" method="put">
                    <div class="col-md-10 align-content-center text-center">
                        <x-splade-input name="title" label="Title" />
                        <x-splade-textarea name="content"  class="form-control m-2"  label="Content"/>
                        <x-splade-select name="category_id" :options="$categories" option-label="name" option-value="id"  label="Category" />
                        <x-splade-select name="user_id" :options="$users" option-label="name" option-value="id" label="User"  />
                        <x-splade-submit  class="btn btn-danger m-2">Update</x-splade-submit>
                    </div>
                </x-splade-form>
            </x-splade-modal>
        </div>
    </div>
</x-layout>


