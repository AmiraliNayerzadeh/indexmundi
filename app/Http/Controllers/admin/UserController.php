<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\User;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    use SEOTools;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->seo()->setTitle('All Users');
        $users = User::latest()->paginate(24);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->seo()->setTitle('create new Universities');

        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'family' => ['required', 'string'],
            'gender' => ['required', 'in:male,female,other'],
            'email' => ['nullable', 'unique:users', 'email', 'lowercase', 'max:255'],
            'birthday' => ['nullable'],
            'nationalCode' => ['nullable', 'numeric', 'unique:users',],
            'avatar' => ['nullable'],
            'description' => ['nullable'],
            'skill_id' => ['nullable', 'exists:skills,id'],
            'education_id' => ['nullable', 'exists:education,id'],
            'university_id' => ['nullable', 'exists:universities,id'],
            'password' => ['required'],
            'is_admin' => ['required', 'in:1,0'],

        ]);

        if ($valid->fails()) {
            alert()->error('error', $valid->messages()->all()[0]);
            return back()->withInput();
        }


        $fullName = $request['name'] . ' ' . $request['family'];
        $slug = $request['slug'] = str_replace([' ', '‌'], '-', $fullName);

        $user = User::create($request->all());


        Alert::success("Done successfully");
        return back();
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
    public function edit(User $user)
    {
        $this->seo()->setTitle("edit $user->name $user->family");
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $valid = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'family' => ['required', 'string'],
            'gender' => ['required', 'in:male,female,other'],
            'email' => ['nullable', 'unique:users,email,'.$user->id, 'email', 'lowercase', 'max:255'],
            'birthday' => ['nullable'],
            'nationalCode' => ['nullable', 'numeric', 'unique:users,nationalCode,'.$user->id,],
            'avatar' => ['nullable'],
            'description' => ['nullable'],
            'skill_id' => ['nullable', 'exists:skills,id'],
            'education_id' => ['nullable', 'exists:education,id'],
            'university_id' => ['nullable', 'exists:universities,id'],
            'password' => ['nullable'],
            'is_admin' => ['required', 'in:1,0'],

        ]);

        if ($valid->fails()) {
            alert()->error('error', $valid->messages()->all()[0]);
            return back()->withInput();
        }

        $fullName = $request['name'] . ' ' . $request['family'];
        $slug = $request['slug'] = str_replace([' ', '‌'], '-', $fullName);

        $user->update($request->all());

        Alert::success("Update successfully");
        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        $university->deleteOrFail();
        Alert::success("Deleted successfully");
        return back();
    }
}
