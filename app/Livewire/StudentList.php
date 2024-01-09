<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Student;

class StudentList extends Component
{

    public $name = '';
    public $marks= 0;


    public $records = [];

    public $new_marks = [];

    public function __construct() {
    
        $this->records = Student::all();
    }


    public function delete_row($id){
        Student::where('id', $id)->delete();
        $this->records = Student::all();
    }

    public function add_form()
    {
        $inputs = ['name' => $this->name ,'marks' => $this->marks];
        Student::create($inputs);
        $this->records = Student::all();
    }

    public function update_data($id){
        $new_marks = $this->new_marks;
        dd($new_marks);
        if (isset($new_marks[$id])){
            $record = Student::find($id);
            $record->marks = $this->new_marks[$id];
            $record->save();

        }
        $this->records = Student::all();

    }



    public function render()
    {
        return view('livewire.student-list');
    }
}
