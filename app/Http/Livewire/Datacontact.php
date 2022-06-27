<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Datacontact as Datacontacts;
// use App\Models\Datacontact;

class Datacontact extends Component
{
    public $datacontacts;
    // public $data;
    public function render()
    {
        $this->datacontacts = Datacontacts::select('name','phone')->get();
        return view('livewire.datacontact');
        // $this->data = Datacontacts::all();
        // return view('livewire.datacontact');
    }

    // public function destroy($id)
    // {
    //     if ($id) {
    //         $record = Datacontacts::where('id', $id);
    //         $record->delete();
    //     }
    // }

    public function delete($id)
    {
        Datacontacts::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }
}
