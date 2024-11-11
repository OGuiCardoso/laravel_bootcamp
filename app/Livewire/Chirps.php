<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Chirp;

class Chirps extends Component
{
    public $chirps;
    public $message = '';
    public $username = ''; 
    public $chirpId = null;

    protected $rules = [
        'message' => 'required|min:3|max:255',
        'username' => 'required|min:3|max:50', 
    ];

    public function mount()
    {
        $this->chirps = Chirp::all();
    }

    public function addChirp()
    {
        $this->validate();

        Chirp::create([
            'message' => $this->message,
            'username' => $this->username, 
        ]);

        $this->message = '';
        $this->username = ''; 
        $this->chirps = Chirp::all();
    }

    public function edit($id)
    {
        $chirp = Chirp::findOrFail($id);
        $this->chirpId = $chirp->id;
        $this->message = $chirp->message;
        $this->username = $chirp->username; 
    }

    public function update()
    {
        $this->validate();

        if ($this->chirpId) {
            $chirp = Chirp::findOrFail($this->chirpId);
            $chirp->update([
                'message' => $this->message,
                'username' => $this->username,
            ]);

            $this->resetForm();
            $this->chirps = Chirp::all();
        }
    }

    public function delete($id)
    {
        Chirp::findOrFail($id)->delete();
        $this->chirps = Chirp::all();
    }

    public function resetForm()
    {
        $this->message = '';
        $this->username = '';
        $this->chirpId = null;
    }

    public function render()
    {
        return view('livewire.chirps');
    }
}

