<style>
    .client_card:hover {
        border: 1px solid #206BC4;
        /* color: white; */
    }
</style>
<div class="card {{ $class ?? '' }} client_card">
    <div class="card-body">
        <div class="row g-2 align-items-center">
            {{-- @if ($client->id == $client_edit && !$delete_message) --}}
            @if ($client->id == $client_id)
            <div class="col-6" wire:click="gotoProjets('{{ $client->id }}')">
                <div wire:loading class="my-2">
                    <div class="spinner-border" role="status"></div>
                </div>
                @php
                    if ($logo) {
                        $img = $logo->temporaryUrl();
                    }
                    else  {
                        if($client->logo){
                            $img = asset("storage/$client->logo");
                        }
                        else{
                            $img = asset('src/template/tabler/demo/static/avatars/002m.jpg');
                        }
                    }
                @endphp
                <span class="avatar avatar-lg" style="background-image: url({{ $img }})"></span>
            </div>
            <div class="col-6">
                <input type="file" wire:model="logo" class="form-control mb-1">
            </div>
            <div>
                <input type="text" wire:model.defer="name" value="{{ $client->name }}" class="form-control mb-1"
                    placeholder="Nom">
                <textarea wire:model.defer="description" data-bs-toggle="autosize" placeholder="description"
                    class="form-control mb-1">{{ $client->description }}</textarea>
                <div >
                    <button wire:click="$set('client_id',0)" class="btn btn-outline-primary mr-1">Fermer</button>
                    <button wire:click="update" class="btn btn-primary">Valider</button>
                </div>

            </div>
            {{-- @elseif($client->id == $client_edit && $delete_message)
            <div class="alert alert-danger alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="9" />
                            <line x1="12" y1="8" x2="12" y2="12" />
                            <line x1="12" y1="16" x2="12.01" y2="16" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="alert-title">Attention &hellip;</h4>
                        <div class="text-muted">
                            Il y a des projets qui sont liés à ce client <br>
                            Vous devez les supprimer avant de pouvoir supprimer ce client
                        </div>
                    </div>
                </div>
                <a class="btn-close" wire:click="deleteCancel"></a>
            </div> --}}
            @else
            <a class="col-auto cursor-pointer" wire:click="gotoProjets('{{ $client->id }}')">
                @php
                if($client->logo){
                $img = asset("storage/$client->logo");
                }
                else{
                $img = asset('src/template/tabler/demo/static/avatars/002m.jpg');
                }
                @endphp
                <span class="avatar avatar-lg" style="background-image: url({{ $img }})"></span>
            </a>
            <div class="col cursor-pointer" wire:click="gotoProjets('{{ $client->id }}')">
                <h4 class="card-title m-0">
                    <a href="#">{{ ucfirst($client->name) }}</a>
                </h4>
                <div class="text-muted">
                    {{ $client->description }}
                </div>
                <div class="small mt-1">
                    {{-- <span class="badge bg-green"></span> Online --}}
                </div>
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <a href="#" class="card-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="12" cy="19" r="1" />
                            <circle cx="12" cy="5" r="1" />
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" wire:click="edit('{{ $client->id }}')">Modifier</a>
                        <a class="dropdown-item" wire:click="delete('{{ $client->id }}')">Supprimer</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
