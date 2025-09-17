<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Funcionários</h2>
    </x-slot>

    <div class="p-6 space-y-4">
        @if (session('ok'))
            <div class="rounded bg-green-100 p-3 text-green-800">{{ session('ok') }}</div>
        @endif

        <div class="flex justify-between gap-2">
            <form method="GET" class="flex gap-2">
                <input name="q" value="{{ request('q') }}" placeholder="Buscar por nome/CPF..." class="border rounded px-3 py-2">
                <button class="px-3 py-2 border rounded">Filtrar</button>
            </form>
            <a href="{{ route('employees.create') }}" class="px-3 py-2 bg-blue-600 text-white rounded">Novo</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full border">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="p-2 border">Nome</th>
                        <th class="p-2 border">CPF</th>
                        <th class="p-2 border">Nascimento</th>
                        <th class="p-2 border">Telefone</th>
                        <th class="p-2 border">Gênero</th>
                        <th class="p-2 border">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $e)
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="p-2 border">{{ $e->name }}</td>
                            <td class="p-2 border">{{ $e->cpf }}</td>
                            <td class="p-2 border">{{ $e->birth_date->format('d/m/Y') }}</td>
                            <td class="p-2 border">{{ $e->phone }}</td>
                            <td class="p-2 border">{{ $e->gender }}</td>
                            <td class="p-2 border space-x-2">
                                <a class="text-blue-600" href="{{ route('employees.edit',$e) }}">Editar</a>
                                <form class="inline" method="POST" action="{{ route('employees.destroy',$e) }}">
                                    @csrf @method('DELETE')
                                    <button class="text-red-600" onclick="return confirm('Excluir?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $employees->links() }}
    </div>
</x-app-layout>
