<x-layout>
    <x-splade-form action="{{ action('users.store') }}">
        <input v-model="form.name" type="text"  class="form-control"/>
        <input v-model="form.email" type="email" class="form-control" />
        <button type="submit">Send</button>
    </x-splade-form>
</x-layout>


