
<div>

  <a href="{{ route('employee.create') }}" >Agregar Empleado</a>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Contrato</th>
      </tr>
    </thead>
      @foreach ($empleados as $empleado)
        <tr>
          <td>{{ $empleado->id }}</td>
          <td>{{ $empleado->codigo }}</td>
          <td>{{ $empleado->nombre }}</td>
          <td>{{ $empleado->correo }}</td>
          <td>{{ $empleado->contrato }}</td>
          
        </tr>
      @endforeach
    <tbody>

    </tbody>

  </table>

</div> 