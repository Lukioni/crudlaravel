<x-app-layout>
  <x-slot name="header"><h2 class="font-semibold text-xl">Novo Funcionário</h2></x-slot>
  <div class="p-6">
    <form method="POST" action="{{ route('employees.store') }}">
      @include('employees._form')
    </form>
  </div>
</x-app-layout>
