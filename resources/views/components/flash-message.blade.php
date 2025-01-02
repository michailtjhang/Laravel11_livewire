{{-- flash message session --}}
{{-- @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif --}}
@if (flash()->message)
    <div>
        <div class="alert d-flex align-items-center alert-{{ flash()->class ?? 'success' }}" role="alert">

            @if (flash()->class === 'warning' || flash()->class === 'danger')
                <i class="bi me-2 bi-exclamation-triangle-fill" aria-hidden="true"></i>
            @endif

            @if (flash()->class === 'success')
                <i class="bi me-2 bi-check-circle-fill" aria-hidden="true"></i>
            @endif

            @if (flash()->class === 'info')
                <i class="bi me-2 bi-info-circle-fill" aria-hidden="true"></i>
            @endif

            {{ flash()->message }}
        </div>
    </div>
@endif
