<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts;
    public $postId,$name,$rank,$nation,$ability;
    public $isOpen = 0;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }

    //menampilkan modal
    public function showModal(){
        $this->isOpen = true;
    }

    //menyembunyikan modal
    public function hideModal(){
        $this->isOpen = false;
    }

    //untuk menyimpan data di modal / function
    public function store(){
        $this->validate(
            [
                'name' => 'required',
                'rank' => 'required',
                'nation' => 'required',
                'ability' => 'required',
            ]
        );       

        Post::updateOrCreate(['id' => $this->postId],[
            'name' => $this->name,
            'rank' => $this->rank,
            'nation' => $this->nation,
            'ability' => $this->ability
        ]);

        session()->flash('info', $this->postId ? 'Update Successfuly' : 'Create Successfuly');
        
        //untuk menyembunyikan modal setelah berhasil menginput data
        $this->hideModal();



        $this->postId = '';
        $this->name = '';
        $this->rank = '';
        $this->nation = '';
        $this->ability = '';
    }

    //function edit
    public function edit($id){
        $post = Post::findOrFail($id);
        $this->postId = $id;
        $this->name = $post->name;
        $this->rank = $post->rank;
        $this->nation = $post->nation;
        $this->ability = $post->ability;

        $this->showModal();
    }

    //function delete
    public function delete($id){
        Post::find($id)->delete();
        session()->flash('delete','Delete Successfuly');
    }
}
