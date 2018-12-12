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

                                    <li>
                                        <a href="" onclick="exportTableToExcel(); return false">Descargar</a>
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
								      <th  data-column-id="portion" scope="col">Email</th>
                      <th  data-column-id="type" scope="col">Sede</th>
                      <th  data-column-id="date" scope="col">Fecha</th>
								      <th  data-column-id="calories" scope="col">Carrera/Programa</th>


                                </tr>
                                </thead>
                                <tbody>

                                @foreach($leads as $lead)
								    <tr>
								      <td scope="row">{{$lead->id}}</td>
								      <td >{{$lead->name}}</td>
								      <td>{{$lead->email}}</td>
								      <td>{{App\Venue::find($lead->venue)->name}}</td>
                      <td>{{$lead->created_at}}</td>
                      <td>{{$lead->type}}</td>


								    </tr>
								@endforeach


                                </tbody>
                            </table>

							<div id="data-table-command-footer" class="bootgrid-footer container-fluid">
								<div class="row">
									<div class="col-sm-6">


			                             @if(count($leads))

									         {{$leads->links()}}

										@endif

									</div>

									<div class="col-sm-6 infoBar">
										<div class="infos">Showing 1 to 10 of 20 entries</div>
									</div>
								</div>
							</div>


                        </div>
                    </div>
                </div>
</section>

@endsection
