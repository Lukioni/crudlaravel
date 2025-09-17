<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex gap-3">
                 <a class="border border-black p-2 hover:bg-black hover:text-white" href="{{ route('employees.create') }}">Cadastrar Novo Funcionario</a>
                 <a class="border border-black p-2 hover:bg-black hover:text-white" href="{{ route('employees.index') }}">Ver lista de Funcionarios</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
