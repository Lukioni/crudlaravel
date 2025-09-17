<x-app-layout>
  <x-slot name="header"><h2 class="font-semibold text-xl">Editar Funcionário</h2></x-slot>
  <div class="p-6">
    <form method="POST" action="{{ route('employees.update', $employee) }}">
      @method('PUT')
      @include('employees._form')
    </form>
  </div>
</x-app-layout>
