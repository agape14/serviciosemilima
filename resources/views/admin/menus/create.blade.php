@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h2>{{ isset($menu) ? 'Editar Menú' : 'Crear Menú' }}</h2>

    <form action="{{ isset($menu) ? route('gestor.menus.update', $menu->id) : route('gestor.menus.store') }}" method="POST">
        @csrf
        @if(isset($menu))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $menu->nombre ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label>URL</label>
            <input type="text" name="url" class="form-control" value="{{ old('url', $menu->url ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label>Tipo</label>
            <select name="tipo" class="form-control" required>
                <option value="web" {{ (isset($menu) && $menu->tipo == 'web') ? 'selected' : '' }}>Web</option>
                <option value="gestor" {{ (isset($menu) && $menu->tipo == 'gestor') ? 'selected' : '' }}>Gestor</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Orden</label>
            <input type="number" name="orden" class="form-control" value="{{ old('orden', $menu->orden ?? 1) }}" required>
        </div>

        <div class="mb-3">
            <label>Menú Padre (opcional)</label>
            <select name="parent_id" class="form-control">
                <option value="">Sin Padre</option>
                @foreach ($menusPadres as $padre)
                    <option value="{{ $padre->id }}" {{ (isset($menu) && $menu->parent_id == $padre->id) ? 'selected' : '' }}>{{ $padre->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('gestor.menus') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
