<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with(['user', 'user.role'])->get();
        return response()->json($students, 200);
    }

    public function store(Request $request)
    {
        // Example user_id || aslinya dari id user yang sedang login
        // $id = Auth::user->id;

        $user = User::find(8);
        $user->student()->create([
            'nis' => $request->nis,
        ]);

        return response()->json($user, 200);
    }


    public function show($id)
    {
        $student = Student::where('user_id', $id)->with(['user', 'user.role'])->first();
        return response()->json($student, 200);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->student()->update([
             'nis' => $request->nis,
        ]);

        return response()->json($user, 200);
    }


    public function destroy($id)
    {
        // kosong karena profile hanya bisa dibuat dan diupdate
        // untuk penghapusan menurut pada parent relationya.
    }
}
