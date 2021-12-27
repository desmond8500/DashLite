<?php

namespace App\Http\Livewire\Tabler\Erp;

use App\Http\Controllers\DashHeaderController;
use App\Models\DashClient;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Clients extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch() {
        $this->resetPage();
    }

    public $search ='';
    public function render()
    {
        return view('livewire.tabler.erp.clients',[
            'clients' => DashClient::where('name', 'like', '%' . $this->search . '%')->paginate(16)
        ]);
    }

    public $test = 0, $page_header;

    public function mount()
    {
        $page_header = New DashHeaderController();
        $page_header->set_title('Clients');
        $this->page_header = $page_header->get();
    }

    // Client

    public $name, $description, $address, $logo;
    public $client_id = 0, $client_form = 0;

    public function store()
    {
        DashClient::create([
            'name' => $this->name,
            'description' => $this->description,
            'address' => $this->address,
            // 'logo' => $this->logo,
        ]);

        $this->reset('name', 'description', 'address', 'logo');
    }
    public function edit($id)
    {
        $this->client_id = $id;
        $client = DashClient::find($id);
        $this->name = $client->name;
        $this->description = $client->description;
        $this->address = $client->address;

        $dir = "tabler/erp/clients/" . $this->client_id . "/logo";

        if ($this->logo) {
            Storage::disk('public')->deleteDirectory($dir);
            $name = $this->logo->getClientOriginalName();
            $this->logo->storeAs("public/$dir", $name);
            $this->logo = "$dir/$name";
        }
    }
    public function update()
    {
        $client = DashClient::find($this->client_id);
        $client->name = $this->name;
        $client->description = $this->description;
        $client->address = $this->address;

        $dir = "tabler/erp/clients/" . $this->client_id . "/logo";

        if ($this->logo) {
            Storage::disk('public')->deleteDirectory($dir);
            $name = $this->logo->getClientOriginalName();
            $this->logo->storeAs("public/$dir", $name);
            $client->logo = "$dir/$name";
        }

        $client->save();

        $this->reset('client_id', 'name', 'description', 'address', 'logo');
    }
    public function delete()
    {
        $client = DashClient::find($this->client_id);
        $client->delete();
    }

}
