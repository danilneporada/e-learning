<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ShowCourses extends Component
{
    public Course $theme;

    public ?Collection $collection;

    public function render()
    {
        return view('livewire.show-courses');
    }
}
