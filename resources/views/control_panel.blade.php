@extends('layouts.main')
@section('content')
<main class="py-5">
    <div class="container">
     
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                       Polizas Tramitadas
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-around">
                            <h3 class="h1">1900</h3>
                            <ul class="list-unstyled pl-5">
                                <li>1300 Compañias</li>
                                <li>1900 contactos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                       Estados
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-around">
                            <h3 class="h1">50</h3>
                            <ul class="list-unstyled pl-5">
                                <li>40 No Asignadas</li>
                                <li>10 Asignadas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                        Pendientes
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-around">
                            <h3 class="h1">10</h3>
                            <ul class="list-unstyled pl-5">
                                <li>7 En tramite</li>
                                <li>3 Revisadas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-white">
                     Polizas que Requieren su Atención Urgente:
                    </div>
                    <div class="card-body p-0">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Acción</th>
                                    <th scope="col">Numero de Poliza</th>
                                    <th scope="col">Fecha de Actualización</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>   <a href="#" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a></td>
                                    <td>0041050773</td>
                                    <td>2022-10-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>   <a href="#" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a></td>
                                    <td>0041050774</td>
                                    <td>2022-10-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>   <a href="#" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a></td>
                                    <td>0041050775</td>
                                    <td>2022-10-10</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                        To-dos
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="todo-item-1">
                                <label class="form-check-label" for="todo-item-1">
                                    To do 1
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="todo-item-2">
                                <label class="form-check-label" for="todo-item-2">
                                    To do 2
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="todo-item-3" checked>
                                <label class="form-check-label text-muted" for="todo-item-3">
                                    <strike>To do 3</strike>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection