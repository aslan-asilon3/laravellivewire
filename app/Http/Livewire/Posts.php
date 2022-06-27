<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\http\livewire\Post ;

class Posts extends Component
{
    public $post;
    public $title, $description, $post_id;
    public $isOpen = 0;
  
    public function render()
    {
        $this->post = Post::select('title','description')->get();
        return view('livewire.posts');
    }
  

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
        $this->post_id = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
   
        Post::updateOrCreate(['id' => $this->post_id], [
            'title' => $this->title,
            'description' => $this->description
        ]);
  
        session()->flash('message', 
            $this->post_id ? 'Post Updated Successfully.' : 'Post Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }

    
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->description = $post->description;
    
        $this->openModal();
    }

    // public function delete($id)
    // {
    //     Post::find($id)->delete();
    //     session()->flash('message', 'Post Deleted Successfully.');
    // }
}
