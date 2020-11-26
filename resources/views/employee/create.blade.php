<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Empleados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
                
            <form action="{{ route('employee.store') }}" method="post" >
              @csrf
                
              <div class="rounded-md shadow-sm -space-y-px mb-5">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="code">
                  Codigo
                </label>
                <input class="w-full text-black border border-gray-200 rounded py-3 px-4 mb-3" id="code" name="code" type="text">
              </div>

              <div class="rounded-md shadow-sm -space-y-px mb-5">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="name">
                  Nombre
                </label>
                <input class="w-full text-black border border-gray-200 rounded py-3 px-4 mb-3" id="name" name="name" type="text">
              </div>

              <div class="rounded-md shadow-sm -space-y-px mb-5">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="lastName">
                  Apellido Paterno
                </label>
                <input class="w-full text-black border border-gray-200 rounded py-3 px-4 mb-3" id="lastName" name="lastName" type="text">
              </div>

              <div class="rounded-md shadow-sm -space-y-px mb-5">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="maidenName">
                  Apellido Materno
                </label>
                <input class="w-full text-black border border-gray-200 rounded py-3 px-4 mb-3" id="maidenName" name="maidenName" type="text">
              </div>

              <div class="rounded-md shadow-sm -space-y-px mb-5">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="mail">
                  Correo
                </label>
                <input class="w-full text-black border border-gray-200 rounded py-3 px-4 mb-3" id="mail" name="mail" type="email">
              </div>

              <div class="rounded-md shadow-sm -space-y-px mb-5">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="contract">
                  Contrato
                </label>
                <input class="w-full text-black border border-gray-200 rounded py-3 px-4 mb-3" id="contract" name="contract" type="text">
              </div>

              <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Agregar
              </button>
            </form>

            </div>
        </div>
    </div>
</x-app-layout>
