<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Student;

class StudentList extends Component
{

    public $name = '';
    public $marks= 0;


    public $records = [];

    public function __construct() {
        $this->records = Student::all();
    }


    public function delete_row($id){
        Student::where('id', $id)->delete();
        $this->records = Student::all();
        $records = $this->records->fresh();
    }

    public function add_form()
    {
        $inputs = ['name' => $this->name ,'marks' => $this->marks];
        Student::create($inputs);
        $this->records = Student::all();

    }

    // public function update_data($id, $marks){
    //     //Student::where('id', $record->id)->update($record);
    //     dd($id, $marks);
    //     $this->records = Student::all();
    // }



    public function render()
    {
        return view('livewire.student-list');
    }
}
