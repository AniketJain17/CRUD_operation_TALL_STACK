<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Student;

class StudentEditingForm extends Component
{

    public $studentId;
    public $name;
    public $marks;

    public function mount($studentId)
    {
        //dd($studentId);
        // Fetch the student details using the ID passed in the URL
        $this->studentId = $studentId;
        $student = Student::find($studentId);
        $this->name = $student->name;
        $this->marks = $student->marks;
    }

    public function updateStudent()
    {
        // Validate and update student details
        $this->validate([
            'name' => 'required|string',
            'marks' => 'required|numeric',
        ]);

        $student = Student::find($this->studentId);
        $student->name = $this->name;
        $student->marks = $this->marks;
        $student->save();

        session()->flash('message', 'Student details updated successfully!');
    }

    public function render()
    {
        return view('livewire.student-editing-form');
    }
}
