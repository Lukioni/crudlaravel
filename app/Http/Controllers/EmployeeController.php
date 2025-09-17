<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $q = request('q');
    $query = \App\Models\Employee::query();
    if ($q) {
        $query->where('name','like',"%$q%")->orWhere('cpf','like',"%$q%");
    }
    $employees = $query->orderBy('name')->paginate(10)->withQueryString();
    return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
          Employee::create($request->validated());

    return redirect()
        ->route('employees.index')
        ->with('ok', 'Funcionário criado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
       return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)

    {
       $employee->update($request->validated());
    return redirect()->route('employees.index')->with('ok', 'Funcionário atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
    return redirect()->route('employees.index')->with('ok', 'Funcionário excluído!');
    }
}
