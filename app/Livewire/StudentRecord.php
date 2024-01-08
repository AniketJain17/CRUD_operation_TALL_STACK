<?php

namespace App\Livewire;

use Livewire\Component;

class StudentRecord extends Component
{

    public $record;
    public $marks;

    public function mount($record){

        $this->record = $record;

    }
    public function update_data($id, $marks){
        //Student::where('id', $record->id)->update($record);
        dd($id, $marks);
        $this->records = Student::all();
    }

    public function render()
    {
        return view('livewire.student-record');
    }
}
