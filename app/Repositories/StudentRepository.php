<?php

namespace App\Repositories;

use App\Interfaces\StudentInterface;
use App\Models\Student;

class StudentRepository implements StudentInterface
{
    /**
     * Create a new class instance.
     */

     public function getAllStudents()
     {
        return Student::all();
     }
     public function getStudentById($id)
     {
         return Student::find($id);
     }
     public function createStudent(array $data)
     {
         return Student::create($data);
     }
     public function updateStudent( $id, array $data)
     {
         return Student::where('id', $id)->update($data);
     }
     public function deleteStudent($id)
     {
         return Student::where('id', $id)->delete();
     }

}
