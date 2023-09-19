<x-layout>
    <x-slot name="header">
        {{ __('toggle') }}
    </x-slot>

    <x-panel>
        <x-splade-toggle>
            <button v-show="!toggled"  @click.prevent="setToggle(true)">Show</button>
            <button v-show="toggled" @click.prevent="setToggle(false)">Hide</button>

            <div v-show="toggled">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab officia tenetur ea voluptates magni ipsam doloribus, quos sit eos libero doloremque totam vero unde reiciendis dolorem obcaecati hic cum ducimus.</p>

            </div>
        </x-splade-toggle>

    </x-panel>
</x-layout>
