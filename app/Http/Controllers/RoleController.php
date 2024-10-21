<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'desc')->get();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        // Enregistrer le slider
        $role = new Role();
        $role->name = $request->input('name');
        $role->save();
        return redirect()->route('index.role')->with('success', 'Rôle ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $role = Role::findOrFail($id);
        $permessions = Permission::all();
        return view('admin.roles.add-permission-to-role', compact('role', 'permessions'));
    }

    public function assignPermissionsToRole(Request $request, string $id)
    {
        // Trouver le rôle par son ID
        $role = Role::findOrFail($id);
        // Récupérer les permissions sélectionnées dans le formulaire
        $permissions = $request->input('permissions'); // 'permissions' est le nom du champ

        if ($permissions) {
            // Synchroniser les permissions sélectionnées avec le rôle
            $role->syncPermissions($permissions);

            return redirect()->route('index.role')->with('success', 'Les permissions ont été attribuées au rôle.');
        }

        return redirect()->back()->with('error', 'Aucune permission sélectionnée.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();
        return redirect()->route('index.role')->with('success', "Le rôle a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->back()->with('success', "Le role a été supprimé avec succès");
    }
}
