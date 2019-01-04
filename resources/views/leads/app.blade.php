@extends('layouts.app')

@section('content')

@section('title','Listado de Leads')


<section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Opciones</h2>

                        <ul class="actions">

                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">

                                    <li>
                                        <a href="">Refrescar</a>
                                    </li>


                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Leads
                                <small>Listado de leads.
                                </small>
                            </h2>
                        </div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>

                                          <th  data-column-id="id" scope="col">#</th>
                                          <th  data-column-id="name" scope="col">Nombre</th>
                                          <th  data-column-id="email" scope="col">Email</th>
                                          <th  data-column-id="venue" scope="col">Sede</th>
                                          <th  data-column-id="phone" scope="col">Telefono</th>
                                          <th  data-column-id="date" scope="col">Fecha</th>
                                          <th  data-column-id="type" scope="col">Carrera/Programa</th>


                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($leads as $lead)

                                    <tr>

								      <td scope="row">{{$lead->id}}</td>
								      <td >{{$lead->name}}</td>
								      <td>{{$lead->email}}</td>
								      <td>{{App\Venue::find($lead->venue)->name}}</td>
                                      <td>{{$lead->phone}}</td>
                                      <td>{{$lead->created_at}}</td>
                                      <td>{{$lead->type}}</td>


								    </tr>

                                @endforeach


                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
</section>

@endsection
