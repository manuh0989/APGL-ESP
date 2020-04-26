<div class="card card-header-actions mx-auto">
    <div class="card-header">
        {{ $header }}
        <div>
            @foreach($icons as $key => $icon)
                <a href="{{ route($icon['route']) }}" class="btn {{ $icon['btn-color'] }} btn-icon mr-2">
                    <i data-feather="{{ $icon['data-feather']  }}"></i>
                </a>
            @endforeach
        </div>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>