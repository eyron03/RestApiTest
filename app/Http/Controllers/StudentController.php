<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponsClass;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Interfaces\StudentInterface;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private StudentInterface $StudentInterface;

    public function __construct(StudentInterface $StudentInterface)
    {
        $this->StudentInterface = $StudentInterface;
    }
    public function index()
    {
        //
        $data = $this->StudentInterface->getAllStudents();

        return ApiResponsClass::sendResponse(StudentResource::collection($data), 'Students Retrieved', 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        try {
            // Validate the request automatically via StoreStudentRequest
            $validated = $request->validated();

            // Proceed with storing the student data
            $student = Student::create($validated);

            // Return a standardized success response using the ApiResponse class
            return ApiResponsClass::sendResponse(new StudentResource($student), 'Student created successfully!', 201);
        } catch (\Exception $e) {
            // Handle unexpected errors
            return ApiResponsClass::sendError('Something went wrong!', [$e->getMessage()]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        try {
            $student = $this->StudentInterface->getStudentById($id);

            if (!$student) {
                return ApiResponsClass::sendError('Student not found', [], 404);
            }

            return ApiResponsClass::sendResponse(new StudentResource($student), 'Student retrieved successfully!', 200);
        } catch (\Exception $e) {
            // Handle unexpected errors
            return ApiResponsClass::sendError('Something went wrong!', [$e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,$student)

    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request,$student)
    {
        //
        try {
            // Validate the request automatically via UpdateStudentRequest
            $validated = $request->validated();

            // Update the student data
            $student->update($validated);

            // Return a standardized success response using the ApiResponse class
            return ApiResponsClass::sendResponse(new StudentResource($student), 'Student updated successfully!', 200);
        } catch (\Exception $e) {
            // Handle unexpected errors
            return ApiResponsClass::sendError('Something went wrong!', [$e->getMessage()]);
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
