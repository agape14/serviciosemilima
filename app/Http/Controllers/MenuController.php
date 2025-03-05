<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::whereNull('parent_id')->with('submenus')->orderBy('orden')->get();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $menusPadres = Menu::whereNull('parent_id')->orderBy('orden')->get();
        return view('admin.menus.create', compact('menusPadres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'tipo' => 'required|in:web,gestor',
            'orden' => 'required|integer',
            'parent_id' => 'nullable|exists:menus,id',
        ]);

        Menu::create($request->all());
        return redirect()->route('gestor.menus')->with('success', 'Menú creado correctamente.');
    }

    public function edit(Menu $menu)
    {
        $menusPadres = Menu::whereNull('parent_id')->where('id', '!=', $menu->id)->orderBy('orden')->get();
        return view('admin.menus.create', compact('menu', 'menusPadres'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'tipo' => 'required|in:web,gestor',
            'orden' => 'required|integer',
            'parent_id' => 'nullable|exists:menus,id',
        ]);

        $menu->update($request->all());
        return redirect()->route('gestor.menus')->with('success', 'Menú actualizado correctamente.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('gestor.menus')->with('success', 'Menú eliminado correctamente.');
    }
}
