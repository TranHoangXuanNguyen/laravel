<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleInserStudent;
use Illuminate\Http\Requests;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students');
    }
    public function storeData(RuleInserStudent $studentsRequest)
    {
        $students = session()->get('students', []); // Lấy session, nếu chưa có thì trả về mảng rỗng
        $students[] = ['name' => $name = $studentsRequest->input("name"),
            'age' => $age = $studentsRequest->input('age'),
            'date' => $date = $studentsRequest->input('date'),
            'phone' => $phone = $studentsRequest->input('phone'),
            'web' => $web = $studentsRequest->input('web'),
            'address' => $address = $studentsRequest->input('address')]; // Thêm sản phẩm mới
        session()->put('studentsS', $students);

        return view('students');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
