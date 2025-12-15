<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Note;

class Notes extends Component
{

    use WithPagination;

    public $noteId;
    public function render()
    {   
        $notes = Note::orderBy('created_at', 'desc')->paginate(5);
        // $notes = Note::orderByDesc('created_at',)->paginate(5);
        return view('livewire.notes',['notes' => $notes]);
 
    }

    public function edit($id)
    {
        $this->dispatch('edit-note', id: $id);
    }

    public function delete($id)
    {
        $this->noteId = $id;
        $this->modal('delete-note')->show();
    }

    public function deleteNote()
    {
        Note::find($this->noteId)->delete();
        $this->modal('delete-note')->close();
        session()->flash('success', 'Note deleted succesfully');
        $this->redirectRoute('notes', navigate: true);

    }
    
}
