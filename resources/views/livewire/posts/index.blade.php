<div class="row">
    <div class="col-md-6">
        <livewire:posts.create />
    </div>

    <div class="col-md-6">
        @foreach ($posts as $row)
            <livewire:posts.block :post="$row" wire:key="{{ $row->id }}" />
        @endforeach
    </div>
</div>
