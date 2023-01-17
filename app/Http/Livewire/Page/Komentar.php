<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Komentar as Comment;
use App\Models\Aksi;
use App\Models\Like;
use SebastianBergmann\Type\NullType;

class Komentar extends Component
{
    public $body;
    public $body2;
    public $aksi;
    public $idnya;
    public $edit_comment_id;
    public $comment_id;


    protected $listeners = ['postAdded'];

    public function postAdded()
    {
       
    }

    public function mount($idnya)
    {
        $this->aksi = Aksi::find($idnya);
    }

    public function render()
    {        
        return view('livewire.page.komentar',[
            'comments' => Comment::with(['user', 'childrens'])
            ->where('aksi_id', $this->aksi->id)
            ->whereNull('comment_id')->get(),
            'total_comments' => Comment::where('aksi_id', $this->aksi->id)->count(),
        ]);
    }

    public function store()
    {
        $this->validate([
            'body' => 'required'
        ]);
        Comment::create([
            'user_id' => Auth::user()->id,
            'aksi_id' => $this->aksi->id,
            'body' => $this->body
        ]);
        $this->emitSelf('postAdded');
    }

    public function selectReply($id)
    {
        $this->comment_id = $id;
        $this->edit_comment_id = NULL;
        $this->body2 = NULL;
    }

    public function reply()
    {
        $this->validate([
            'body2' => 'required'
        ]);
        $comment = Comment::find($this->comment_id);
        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'aksi_id' => $this->aksi->id,
            'body' => $this->body2,
            'comment_id' => $comment->comment_id ? $comment->comment_id : $comment->id
        ]);

        if($comment){
            $this->emit('komentar_store', $comment->id);
            $this->body2 = NULL;
            $this->comment_id = NULL;
        }
    }

    public function selectEdit($id)
    {
        $comment = Comment::find($id);
        $this->edit_comment_id = $comment->id;
        $this->body2 = $comment->body;
        $this->comment_id = NULL;
    }

    public function change()
    {
        $this->validate([
            'body2' => 'required'
        ]);
        $comment = Comment::where('id', $this->edit_comment_id)->update([
            'body' => $this->body2
        ]);

        if($comment){
            $this->emit('komentar_store', $this->edit_comment_id);
            $this->body = NULL;
            $this->edit_comment_id = NULL;
        }
    }

    public function delete($id)
    {
        $comment = Comment::where('id', $id)->delete();

        if($comment){
            return NULL;
        }
    }

    public function like($id)
    {
        $data = [
            'komentar_id' => $id,
            'user_id' => Auth::user()->id
        ];

        $like = Like::where($data);
        if($like->count() > 0){
            $like->delete();
        } else {
            Like::create($data);
        }

        return NULL;
    }
}
