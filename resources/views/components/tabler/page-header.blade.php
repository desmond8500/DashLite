<div>
   <div class="page-header">
        <div class="row align-items-center mw-100">
            <div class="col">
                <div class="mb-1">
                    <ol class="breadcrumb breadcrumb-alternate" aria-label="breadcrumbs">
                        <li class="breadcrumb-item"><a href="{{ route('tabler.index') }}">Accueil</a></li>
                        @if ($breadcrumbs)
                            @foreach ($breadcrumbs as $breadcrumb)
                            <li class="breadcrumb-item">
                                <a href="{{ route($breadcrumb->route) }}">{{ $breadcrumb->name}}</a>
                            </li>

                            @endforeach
                        @endif
                    </ol>
                </div>
                <h2 class="page-title">
                    <span class="text-truncate">{{ $title ?? 'Title'}}</span>
                </h2>
            </div>
            <div class="col-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
