<div>
    @foreach ($posts as $row)
        <livewire:posts.block :post="$row" wire:key="{{ $row->id }}" />
    @endforeach
</div>
