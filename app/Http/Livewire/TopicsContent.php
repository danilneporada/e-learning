<?php

namespace App\Http\Livewire;

use App\Models\Topic;
use Livewire\Component;

class TopicsContent extends Component
{
    public Topic $topic;

    public function render()
    {
        return view('livewire.topics-content');
    }
}
