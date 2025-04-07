@csrf
<div>
    <label>Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $medicamento->nombre ?? '') }}">
</div>
<div>
    <label>Descripción</label>
    <input type="text" name="descripcion" value="{{ old('descripcion', $medicamento->descripcion ?? '') }}">
</div>
<div>
    <label>Cantidad</label>
    <input type="number" name="cantidad" value="{{ old('cantidad', $medicamento->cantidad ?? '') }}">
</div>
<div>
    <label>Precio</label>
    <input type="number" step="0.01" name="precio" value="{{ old('precio', $medicamento->precio ?? '') }}">
</div>
<button type="submit">Guardar</button>
