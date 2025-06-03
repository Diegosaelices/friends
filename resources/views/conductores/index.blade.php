<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Conductores</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <h1>Conductores de Castilla-La Mancha</h1>

    @if(session('success'))
        <p class="mensaje éxito">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p class="mensaje error">{{ session('error') }}</p>
    @endif

    <div class="contenedor">
        <div class="formulario">
            <h3>Regalar puntos a una ciudad</h3>
            <form action="{{ route('regalar') }}" method="POST">
                @csrf
                <label for="ciudad">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" required placeholder="Toledo, Cuenca...">
                <button type="submit" class="btn-verde">Igualar con el mejor de la ciudad</button>
            </form>
        </div>

        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Ciudad</th>
                        <th>Puntos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($conductores as $conductor)
                        <tr>
                            <td>{{ $conductor->id }}</td>
                            <td>{{ $conductor->nombre }}</td>
                            <td>{{ $conductor->ciudad }}</td>
                            <td>{{ $conductor->puntos }}</td>
                            <td class="acciones">
                                <form action="{{ route('maximizar', $conductor->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn-amarillo">Maximizar</button>
                                </form>

                                <form action="{{ route('eliminar', $conductor->id) }}" method="POST" onsubmit="return confirm('¿Eliminar conductor?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="eliminar">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
