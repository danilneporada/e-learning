<?php

namespace App\Http\Livewire;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ShowTopics extends Component
{
    public Topic $topic;

    public function render()
    {
        return view('livewire.show-topics');
    }
}
