
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
          <td>{{ $empleado->code }}</td>
          <td>{{ $empleado->name }}</td>
          <td>{{ $empleado->mail }}</td>
          <td>{{ $empleado->contract }}</td>
          
        </tr>
      @endforeach
    <tbody>

    </tbody>

  </table>

</div> 