<x-layout>
    <div class="container">
        <div class="flex align-content-center">
            <Link class="btn btn-success btn-sm" href="{{ route('posts.create') }}">Add Post</Link>
        </div>
        <div class="col-md-12 text-xl">
            <x-splade-table :for="$posts">
                <x-splade-cell actions>
                    <Link modal href="{{ route('posts.edit',$item->id) }}" class="btn btn-success m-1"> Edit </Link>
                    <Link modal href="{{ route('posts.show',$item->id) }}" class="btn btn-primary m-1"> Show </Link>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-layout>


