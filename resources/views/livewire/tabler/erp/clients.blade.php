<div>
    @component('components.tabler.page-header', ['breadcrumbs'=>[], 'title'=> 'Clients'])
    <button class="btn btn-primary" wire:click="$toggle('test')">hello</button>
    @endcomponent
    <button class="btn btn-primary" wire:click="$toggle('test')">test</button>
    {{ $test }}
</div>
