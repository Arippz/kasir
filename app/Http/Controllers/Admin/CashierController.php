<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CashierController extends Controller
{
    public function index(){
        $users = User::orderBy('id', 'desc')->get();
        return view('pages.admin.cashier.index', compact('users'));

    }

    public function create(){
        return view('pages.admin.cashier.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:5',
            'username'=> 'required|min:5',
            'password' => 'required|min:9'
        ]);
        User::create($request->all());
        return redirect()->route('cashier.index')   
            ->with('success', 'Data berhasil diubah!');
    }

    public function edit(string $id){
        $users = User::findOrFail($id);

        return view('pages.admin.cashier.edit', compact('users'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:5',
            'username'=> 'required|min:5',
            'password' => 'required|min:9'
        ]);

        $users = User::findOrFail($id);

        $users->update($request->all());

        return redirect()->route('cashier.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id){
        $post = User::findOrFail($id);
        $post->delete();
        return redirect()->route('cashier.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
