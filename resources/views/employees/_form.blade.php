@csrf
<div class="grid sm:grid-cols-2 gap-4">
  <div>
    <label class="block mb-1">Nome*</label>
    <input name="name" value="{{ old('name', $employee->name ?? '') }}" class="w-full border rounded px-3 py-2">
    @error('name')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
  </div>
  <div>
    <label class="block mb-1">CPF*</label>
    <input maxlength="11" name="cpf" value="{{ old('cpf', $employee->cpf ?? '') }}" class="w-full border rounded px-3 py-2">
    @error('cpf')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
  </div>
  <div>
    <label class="block mb-1">Data de Nascimento*</label>
    <input type="date" name="birth_date" value="{{ old('birth_date', isset($employee)?$employee->birth_date->format('Y-m-d'):'') }}" class="w-full border rounded px-3 py-2">
    @error('birth_date')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
  </div>
  <div>
    <label class="block mb-1">Telefone*</label>
    <input maxlength="11" name="phone" value="{{ old('phone', $employee->phone ?? '') }}" class="w-full border rounded px-3 py-2">
    @error('phone')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
  </div>
  <div>
    <label class="block mb-1">Gênero*</label>
    <select name="gender" class="w-full border rounded px-3 py-2">
      @foreach (['Masculino','Feminino','Outro'] as $g)
        <option value="{{ $g }}" @selected(old('gender', $employee->gender ?? '') === $g)>{{ $g }}</option>
      @endforeach
    </select>
    @error('gender')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
  </div>
</div>
<div class="mt-4 flex gap-2">
  <a href="{{ route('employees.index') }}" class="px-3 py-2 border rounded">Cancelar</a>
  <button class="px-3 py-2 bg-blue-600 text-white rounded">Salvar</button>
</div>
