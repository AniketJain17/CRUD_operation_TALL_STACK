<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Student;

class StudentList extends Component
{

    public $name = "rahul";

    public function __construct() {
        $records = Student::find(1);
        //dd($records);
        $this->name = $records->name;
        //dd($name);
    }

    public function render()
    {
        return view('livewire.student-list');
    }
}
