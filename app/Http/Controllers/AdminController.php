<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    public function profilepage()
    {
        return view('profile');
    }
    /**
     * Display a listing of the resource.
     */
    public function user()
    {
        $user = User::orderBy('created_at', 'DESC')->get();
 
        return view('useradmin.user', compact('user'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admincreate.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
 
        return redirect()->route('admin/profile')->with('success', 'Profile added successfully');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
 
        return view('products.show', compact('user'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
 
        return view('profile.edit', compact('user'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
 
        $user->update($request->all());
 
        return redirect()->route('admin/profile')->with('success', 'profile updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
 
        $user ->delete();
 
        return redirect()->route('admin/profile')->with('success', 'product deleted successfully');
    }
}





