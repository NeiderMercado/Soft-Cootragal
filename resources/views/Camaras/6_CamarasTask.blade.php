<php import Swal from 'sweetalert2' ?>
<x-app-layout>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- LINK BOSSTSTRAP ICONOS 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    
<div class="container p-4 mb-2 bg-white text-dark">


         @if ($mensaje = Session::get('exito'))

            <script>
                Swal.fire({
                position: "center",
                icon: "success",
                title: "Excelente trabajo",
                text: "Tranquilo, hemos guardo esta información por tí",
                showConfirmButton: false,
                timer: 3500
                });
            </script>
         
         @endif

         @if ($mensaje = Session::get('tarea_realizada'))

        <script>
            Swal.fire({
            position: "center",
            icon: "success",
            title: "Excelente trabajo",
            text: "La tarea fué realizada con éxito",
            showConfirmButton: false,
            timer: 3500
            });
        </script>

        @endif

         
         @if ($mensaje = Session::get('actualizado'))

         <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>¡Bien hecho!</strong>{{ $mensaje}}
        </div>
         
         @endif

         @if ($mensaje = Session::get('eliminado'))

                <script>
                    Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                        });
                    }
                    });
                </script>

        @endif

    
<table>
    <thead>
        <th></th>
        <th></th>

    </thead>
    <tbody>
        <tr>
            <td><a href="{{ route('1_camaras.index') }}"  class="btn btn-primary"><i class="bi bi-arrow-return-left"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td><h4>Centro de tareas</h4></td>
        </tr>
        
    </tbody>
</table>

<br>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Nuevos</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pendientes</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Vencidos</button>
    <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">Realizados</button>
  </div>
</nav>



<div class="tab-content" id="nav-tabContent">
     <!-- TAREAS NUEVAS -->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"><br>

             <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                <i class="bi bi-file-earmark-plus-fill"></i> Crear
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crear nueva tarea</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    <form method="POST" id="app" action="{{ route('createnewtask.create')}}" enctype="multipart/form">
                    @csrf
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Interno</label>
                                <input type="text" class="form-control" name="int-placa" placeholder="Selecciona interno" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Conductor</label>
                                <input type="text" class="form-control" name="conductor" placeholder="Selecciona conductor" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Detalle de actividad: </label>
                                <input type="text" class="form-control" name="observaciones" placeholder="Describe la actividad realizada." required>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Fecha: </label>
                                <input type="date" class="form-control" name="date_activi" required>
                                </div>
                                <div class="form-group col-md-4">
                                <label for="inputState">Tipo de actividad</label>
                                <select name="actividad" class="form-control" required>
                                    <option selected>Selecciona...</option>
                                    <option>Revision</option>
                                    <option>Aforo</option>

                                </select>
                                </div>
                                
                            </div>
                      


                    </div>
                    <div class="modal-footer">
                    <input type="hidden" name="creador_tarea" value="<?php $usuario=Auth::user()->name; echo($usuario); ?>">
                             <input type="hidden" name="tipo" value="A">
                             <input type="hidden" name="estado" value="Pendiente">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <input type="submit" value="Guardar" class="btn btn-primary">
                        
                    </div>
                    </div>
                </div>
            </div>  
            </form> 
            
            <!-- End Modal -->

            <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>

                    @if (empty($task_new))
                        <div class="alert alert-success text-center">
                            <strong>No hay datos que mostrar.</strong>
                        </div>
                    @else
                    @foreach ($task_new as $task)
                        <div class="alert alert-primary card" style="width: 100%;">
                            <div class="card-body">
                                <center><h6 class="card-title">Tarea N°: {{$task->id}} - {{$task->interno}}</h6></center>

                                <h6 class="card-title">Vehículo: {{$task->interno}}</h6><br>
                                <p class="card-text">Detalle: <br> {{$task->observaciones}}</p>
                                <h6>Tipo de actividad: {{$task->actividad}}</h6>

                                <h6 class="card-subtitle mb-2 text-body-secondary">Fecha de creación: {{$task->fecha_novedad}}</h6>
                                <br>

                                @if($task->actividad == "Revision")
                                    <input type="hidden" value="{{ $task->id }}">
                                    <a href="{{ route('CamarasTask.store', $task->id) }}" class="btn btn-primary">
                                        <i class="bi bi-arrow-right-circle"></i> Realizar
                                    </a>
                                @elseif ($task->actividad == "Aforo")
                                    <a href="{{ route('task.update', $task->id) }}" type="submit" class="btn btn-success">
                                        <i class="bi bi-check2-circle"></i> Tarea realizada
                                    </a>
                                @endif

                                <br>
                            </div>
                        </div>
                        <br>
                    @endforeach
                @endif
                
            </div>
        </div>
    </div>




<!-- TAREAS PENDIENTES -->


  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
     <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
            
            @if (empty($task_pending))
                <div class="alert alert-success text-center">
                    <strong>No hay datos que mostrar.</strong>
                </div>
            @else

            @foreach ($task_pending as $pending)
              
              
                <div class="alert alert-warning" class="card" style="width: 100%;">
                    <div class="card-body">
                      <form action="{{ route('task.update', $pending->id)}}" method="get">
                        <center><h6 class="card-title">Tarea N°: {{$pending->id}} - {{$pending->interno}} </h6></center>
                        
                        <h6 class="card-title">Vehículo: {{$pending->interno}} </h6><br>
                        
                        <p class="card-text">Detalle: <br> {{$pending->observaciones}}</p>
                        <h6>Tipo de actividad: {{$pending->actividad}}</h6>

                        <h6 class="card-subtitle mb-2 text-body-secondary">Fecha de creación: {{$pending->fecha_novedad}}</h6>
                        <br>
                                @if($pending->actividad == "Revision")
                                        <?php
                                            $id_task = $pending->id;
                                            
                                        ?>
 
                                <input type="hidden" value="<?php echo $id_task ?>">

                                    <a href="{{ route('CamarasTask.store',$pending->id) }}"  class="btn btn-primary"><i class="bi bi-arrow-right-circle"></i>  Realizar</a>


                                @elseif ($pending->actividad == "Aforo")



                                    <a href="{{ route('task.update', $pending->id)}}" type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i> Tarea realizada</a>

                                
                                @endif
                        
                    </div>
                </div>
                <br>
            @endforeach
            @endif
            </div>

        </div>

  </div>
  </form>

<!-- TAREAS VENCIDAS -->

  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
    <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>

            @if (empty($task_dead))
                <div class="alert alert-success text-center">
                    <strong>No hay datos que mostrar.</strong>
                </div>
            @else
                @foreach ($task_dead as $dead_task)
                    <div class="alert alert-danger" class="card" style="width: 100%;">
                        <div class="card-body">
                          <form action="{{ route('task.update', $dead_task->id)}}" method="get">
                            <center><h6 class="card-title">Tarea N°: {{$dead_task->id}} - {{$dead_task->interno}} </h6></center>
                            
                            <h6 class="card-title">Vehículo: {{$dead_task->interno}} </h6><br>
                            
                            <p class="card-text">Detalle: <br> {{$dead_task->observaciones}}</p>
                            <h6>Tipo de actividad: {{$dead_task->actividad}}</h6>

                            <h6 class="card-subtitle mb-2 text-body-secondary">Fecha de creación: {{$dead_task->fecha_novedad}}</h6>
                            <br>

                            @if($dead_task->actividad == "Revision")
                                        <?php
                                            $id_task = $dead_task->id;
                                            
                                        ?>
 
                                <input type="hidden" value="<?php echo $id_task ?>">

                                    <a href="{{ route('CamarasTask.store',$dead_task->id) }}"  class="btn btn-primary"><i class="bi bi-arrow-right-circle"></i>  Realizar</a>


                                @elseif ($dead_task->actividad == "Aforo")

                                    <a href="{{ route('task.update', $dead_task->id)}}" type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i> Tarea realizada</a>


                                @endif        
                            
                        </div>
                    </div>
                    <br>
                @endforeach
                @endif
                </div>
            </form>
        </div>
  </div>


<!-- TAREAS REALIZADAS -->

  <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
     <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>

                @if (empty($task_done))
                        <div class="alert alert-success text-center">
                            <strong>No hay datos que mostrar.</strong>
                        </div>
                @else
                        @foreach ($task_done as $done_task)
                            <div class="alert alert-success" class="card" style="width: 100%;">
                                <div class="card-body">
                                    
                                    <center><h6 class="card-title">Tarea N°: {{$done_task->id}} - {{$done_task->interno}} </h6></center>
                                    
                                    <h6 class="card-title">Vehículo: {{$done_task->interno}} </h6><br>
                                    
                                    <p class="card-text">Detalle: <br> {{$done_task->observaciones}}</p>
                                    <h6>Tipo de actividad: {{$done_task->actividad}}</h6>

                                    <h6 class="card-subtitle mb-2 text-body-secondary">Fecha de creación: {{$done_task->fecha_novedad}}</h6>
                                    <br>


                                        <!-- Button trigger modal -->
                                            <button type="button" name="{{$done_task->id}}" class="btn btn-success" data-toggle="modal" data-target="#modaldetalletask-{{ $done_task->id }}">
                                                <i class="bi bi-card-checklist"></i> Detalle
                                            
                                            </button>

                                        <!-- Modal -->
                                            <div class="modal fade" id="modaldetalletask-{{ $done_task->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detalle de actividad</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Interno</label>
                                                            <input type="text" class="form-control" name="int-placa" value="{{$done_task->interno}}" disabled>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Conductor</label>
                                                            <input type="text" class="form-control" name="conductor" value="{{$done_task->conductor}}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Detalle de actividad: </label>
                                                            <input type="text" class="form-control" name="observaciones" value="{{$done_task->detalle_actividad}}" disabled>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="inputCity">Fecha de la actividad: </label>
                                                            <input type="date" class="form-control" name="date_activi" value="{{$done_task->fecha_realizado}}" disabled>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                            <label for="inputState">Tipo de actividad</label>
                                                            <input type="text" class="form-control" name="tipo_acti" value="{{$done_task->actividad}}" disabled>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Asignador de la tarea: </label>
                                                            <input type="text" class="form-control" name="int-placa" value="{{$done_task->creador_tarea}}" disabled>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Responsable de la revisión: </label>
                                                            <input type="text" class="form-control" name="conductor" value="{{$done_task->responsable_tarea}}" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Soporte: </label>
                                                            <img src="{{ asset('storage/' . $done_task->soportes) }}" alt=" Soporte revisión.">
                                                            </div>

                                                        </div>
                                            
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                
                                                </div>
                                                </div>
                                            </div>
                                        </div>  
                            
                                                            
                                    
                                </div>
                            </div>
                            <br>
                                                        
                        @endforeach
                        {{ $task_done->links() }} 
                @endif
                </div>
                         
            </div>


  </div>
</div>

      

    

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                var modal = document.getElementById("myModal");
                var span = document.getElementsByClassName("close")[0];

                document.querySelectorAll('.btn-modal').forEach(button => {
                    button.addEventListener('click', function() {
                        var id = this.getAttribute('data-id');

                        fetch(`/datos/${id}`)
                            .then(response => response.json())
                            .then(data => {
                                document.getElementById("modal-body").innerHTML = `
                                    <p>ID: ${data.id}</p>
                                    <p>Nombre: ${data.nombre}</p>
                                `;
                                modal.style.display = "block";
                            });
                    });
                });

                span.onclick = function() {
                    modal.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            });

            </script>




</body>



        <!-- CSS -->
        <style> 
                #table{
                    text-align: center;
                }
    
                #myInput {
                background-image: url('/css/searchicon.png'); /* Add a search icon to input */
                background-position: 10px 12px; /* Position the search icon */
                background-repeat: no-repeat; /* Do not repeat the icon image */
                width: 100%; /* Full-width */
                font-size: 16px; /* Increase font-size */
                padding: 12px 20px 12px 40px; /* Add some padding */
                border: 1px solid #ddd; /* Add a grey border */
                margin-bottom: 12px; /* Add some space below the input */
                }

                #myTable {
                border-collapse: collapse; /* Collapse borders */
                width: 100%; /* Full-width */
                border: 1px solid #ddd; /* Add a grey border */
                font-size: 18px; /* Increase font-size */
                }

                #myTable th, #myTable td {
                text-align: left; /* Left-align text */
                padding: 12px; /* Add padding */
                }

                #myTable tr {
                /* Add a bottom border to all table rows */
                border-bottom: 1px solid #ddd;
                }

                #myTable tr.header, #myTable tr:hover {
                /* Add a grey background color to the table header and on hover */
                background-color: #f1f1f1;
                
                }

                #btn-view-task {
                    margin-left: 150px;
                
                }

                #btn-done-task {
                    margin-left: 300px;
                
                }

                #btn-detail-task {
                    margin-left: center;
                
                }
                    
        </style>

        <!-- SCRIPT -->

        <Script>
               
            function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
            }



        </Script>

            
    <script>
            $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal('show');
            });
            $("#btn-save-modal").click(function(){
                var fecha_form = $("#form-date").val();
                var interno_placa = $("#form-int-placa").val();
                var conductor = $("#form-conductor").val();    
                var descripcion = $("#form-conductor").val();    
                var soporte = $("#form-soporte").val();
                alert(interno_placa);
            });
    


            // add event for 'Edit' button
            $(document).on('click', '.btn-warning', function(){
                var tr = $(this).closest('tr');
                var internal = tr.find('td:nth-child(1)').text();
                var license_plate = tr.find('td:nth-child(2)').text();
                var driver = tr.find('td:nth-child(3)').text();
                var observations = tr.find('td:nth-child(4)').text();

                $("#internal").val(internal);
                $("#license_plate").val(license_plate);
                $("#driver").val(driver);
                $("#observations").val(observations);

                $("#myModal").modal('show');
            });
            });
        </script>

</html>
</x-app-layout>
