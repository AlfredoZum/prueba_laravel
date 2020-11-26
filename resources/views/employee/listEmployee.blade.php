<x-app-layout>

  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Empleados') }}
        </h2>
  </x-slot>

  <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">

            <a href="{{ route('employee.create') }}" class="mb-10 border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 hover:bg-indigo-600 " >Agregar Empleado</a>

            </br></br>

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
        </div>
  </div>

</x-app-layout>
