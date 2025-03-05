@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h2>Gestión de Menús</h2>
    <a href="{{ route('gestor.menus.create') }}" class="btn btn-primary mb-3">Agregar Menú</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>URL</th>
                <th>Orden</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->nombre }}</td>
                    <td>{{ ucfirst($menu->tipo) }}</td>
                    <td>{{ $menu->url }}</td>
                    <td>{{ $menu->orden }}</td>
                    <td>
                        <a href="{{ route('gestor.menus.edit', $menu->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('gestor.menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este menú?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @foreach ($menu->submenus as $submenu)
                    <tr>
                        <td>— {{ $submenu->nombre }}</td>
                        <td>{{ ucfirst($submenu->tipo) }}</td>
                        <td>{{ $submenu->url }}</td>
                        <td>{{ $submenu->orden }}</td>
                        <td>
                            <a href="{{ route('gestor.menus.edit', $submenu->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('gestor.menus.destroy', $submenu->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este submenú?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</div>
@endsection
