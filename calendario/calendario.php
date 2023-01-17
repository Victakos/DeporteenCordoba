<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario - Deporte en Córdoba</title>
    <!-- Scripts para CSS -->
<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link rel="stylesheet" href="../assets/css/datatables.min.css">
<link rel="stylesheet" href="../assets/css/bootstrap-clockpicker.css">
<link rel="stylesheet" href="../assets/fullcalendar/main.css">

    <!-- Scripts para JS -->
    <script src="../assets/js/jquery-3.6.3.js"> </script>
    <script src="../assets/js/popper.min.js"> </script>
    <script src="../assets/js/bootstrap.js"> </script>
    <script src="../assets/js/datatables.min.js"> </script>
    <script src="../assets/js/bootstrap-clockpicker.js"> </script>
    <script src="../assets/js/moment-with-locales.js"> </script>
    <script src="../assets/fullcalendar/main.js"> </script>
</head>
<body>

    <div class="container-fluid">
        <section class="content-header">
            <h1>Central de reservas
                <small>"CD DEPORTE EN CORDOBA - fase beta"</small>
                <a href="../index.php">Ir a inicio</a>
            </h1>
        </section>

        <div class="row"> <!--Filas-->
            <div class="col-10"> <!--Columnas-->
                <div id="Calendario1" style="border: 1px solid #000; padding: 2px"></div>        <!-- pruebas de estilos antes de pasarlo a un documento individual. -->
           </div>
           <div class="col-2"> <!-- Aqui van a ir los eventos predefinidos -->
                <div id="external-events" Style="margin-bottom:1em; height:350px; border: 1px solid black; overflow: auto; padding: 1em">
                    <h4 class="text-center">Eventos predefinidos</h4>
                    <div id="listaeventospredefinidos">

                    <?php
                    require("../assets/php/conexion1.php");
                    $conexion = regresarConexion();

                    $datos = mysqli_query($conexion, "SELECT id,titulo,horainicio,horafin,colortexto,colorfondo FROM eventospredefinidos");
                    $ep = mysqli_fetch_all($datos, MYSQLI_ASSOC);

                    foreach ($ep as $fila){
                        echo "<div class='fc-event' data-titulo='$fila[titulo]' data-horafin='$fila[horafin]' data-horainicio='$fila[horainicio]' data-colorfondo='$fila[colorfondo]' data-colortexto='$fila[colortexto]'
                        style='border-color: $fila[colorfondo];color:$fila[colortexto];background-color:$fila[colorfondo];margin: 10px'>
                        $fila[titulo] [" . substr($fila['horainicio'],0,5) . " a " .substr($fila['horafin'],0,5) . "]</div>";
                    }

                    ?> <!-- Con este php nos da todos los eventos predefinidos y los tengo en una variable que es $ep (eventos predefinidos) y van guardandose en el php-->
                    

                    </div>
                </div>
                <hr>
                <div class="" style="text-align: center">
                    <button type="button" id="BotonEventosPredefinidos" class="btn btn-success">
                    Administrar eventos predefinidos
                    </button>
                </div> 
           </div> 
        </div>

    </div>

    


<!-- FORMULARIO DE EVENTOS-->
    <div class="modal fade" id="FormularioEventos" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close""> <!-- Esto es el boton de cerrar al pinchar en un dia-->
                        <span aria-hidden="true">x</span>
                    </button>

                </div>
                <div class="modal-body"> <!-- Declaración de los campos de manera automática al añadir eventos, form-row es para añadir filas-->
                    <input type="hidden" id="Id"> 

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="">Título del evento:</label>
                            <input type="text" id="Titulo" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Fecha de inicio:</label>
                            <div class="input-group" data-autoclose="true">
                                <input type="date" id="FechaInicio" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="TituloHoraInicio">
                            <label for="">Hora de inicio:</label>
                            <div class="input-group clockpicker" data-autoclose="true">
                                <input placeholder="Usa los eventos predefinidos" type="text" id="HoraInicio" class="form-control" value="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Fecha de fin:</label>
                            <div class="input-group" data-autoclose="true">
                                <input type="date" id="FechaFin" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="TituloHoraFin">
                            <label for="">Hora de fin:</label>
                            <div class="input-group clockpicker" data-autoclose="true">
                                <input placeholder="Usa los eventos predefinidos" type="text" id="HoraFin" class="form-control" value="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <label for="">Descripción:</label>
                        <textarea id="Descripcion" class="form-control" rows="3">Este texto ahora es fijo, RECUERDA: ESTAMOS EN FASE Alpha... usa los eventos predefinidos y contacta con nosotros para confirmar la reserva</textarea>
                    </div>
                    <div class="form-row">
                        <label for="">Color de fondo:</label>
                        <input type="color" value="#3788D8" id="ColorFondo" class="form-control" style="height: 36px">
                    </div>
                    <div class="form-row">
                        <label for="">Color de texto:</label>
                        <input type="color" value="#FFFFFF" id="ColorTexto" class="form-control" style="height: 36px">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="BotonAgregar" class="btn btn-success">Agregar</button>
                    <button type="button" id="BotonModificar" class="btn btn-success">Modificar</button>
                    <button type="button" id="BotonBorrar" class="btn btn-success">Borrar</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <script>

document.addEventListener("DOMContentLoaded", function(){

    //Con esto se le puede soltar y agregar datos al calendario
    new FullCalendar.Draggable(document.getElementById('listaeventospredefinidos'), {
        itemSelector: '.fc-event',
        eventData: function(eventEl){
            return{
                title: eventEl.innerText.trim() //Con esto le indicamos al calendario que todo lo que tenemos en la lista de predifinidos, se puede arrastrar y enviar dentro
            }
        }
    });

// ACTIVAR CLOCKPICKER (De momento no lo activo, prueba con diferente forma de hora)
    //$('.clockpicker').clockpicker();

    let calendario1 = new FullCalendar.Calendar(document.getElementById('Calendario1'),{
        droppable: true, //Esto sirve para que a nuestro calendario le podamos arrastrar cosas dentro.
        height: 850,
        headerToolbar:{ //CON ESTO AÑADO BOTONES A LA CABECERA DEL CALENDARIO
            left: 'prev next today',
            center: 'title' , 
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true, //esto es para poder editar el calendario arrastrando eventos.
        events: '../assets/php/datoseventos.php?accion=listar',
        dateClick: function(info){
            limpiarFormulario(); //Esto es para limpiar el formulario al clickar, la funcion definida abajo
            $('#BotonAgregar').show();
            $('#BotonModificar').hide(); //Esto es para ocultar el boton de modificar (modificamos desde base de datos o en su defecto el admin)
            $('#BotonBorrar').hide();//Esto es para borrar el boton de borrar (borramos desde base de datos o en su defecto el admin)

            if (info.allDay){
                $('#FechaInicio').val(info.dateStr); //Esto es para poner al clicklar la fecha del dia que clickas
                $('#FechaFin').val(info.dateStr); //Esto es para poner al clicklar la fecha del dia que clickas

            }else{ // "ESTO ES PARA PONER LA HORA EXACTA DE DONDE PINCHAS EN EL CALENDARIO"
                let fechaHora = info.dateStr.split("T");
                alert('Acabas de dar click en el calendario');
                $('#FechaInicio').val(fechaHora[0]);
                $('#FechaFin').val(fechaHora[0]);
                $('#HoraInicio').val(fechaHora[1].substring(0,5));                
            }
            $("#FormularioEventos").modal('show');

        }, //ESTO ES PARA MODIFICAR CUALQUIER EVENTO

        eventClick: function(info){
            alert("Has pulsado un evento");
            $('#BotonAgregar').hide();
            $('#BotonModificar').show();
            $('#BotonBorrar').show();

            $('#Id').val(info.event.id);
            $('#Titulo').val(info.event.title);
            $('#Descripcion').val(info.event.extendedProps.descripcion);
            $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
            $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD")); 
            $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
            $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
            $('#ColorFondo').val(info.event.backgroundColor);
            $('#ColorTexto').val(info.event.textColor);

            $("#FormularioEventos").modal('show');   
        }, 
//Con eventResize es lo que ocurre cuando cambias tamaño de nuestro evento
        eventResize: function(info){
            $('#Id').val(info.event.id);
            $('#Titulo').val(info.event.title);
            $('#Descripcion').val(info.event.extendedProps.descripcion);
            $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
            $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD")); 
            $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
            $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
            $('#ColorFondo').val(info.event.backgroundColor);
            $('#ColorTexto').val(info.event.textColor);

            let registro = recuperarDatosFormulario();
            modificarRegistro(registro);
        },
        
        //CON EVENTDROP vamos a poder mover de un lado a otro los eventos del calendario.
        eventDrop: function(info){
            $('#Id').val(info.event.id);
            $('#Titulo').val(info.event.title);
            $('#Descripcion').val(info.event.extendedProps.descripcion);
            $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
            $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD")); 
            $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
            $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
            $('#ColorFondo').val(info.event.backgroundColor);
            $('#ColorTexto').val(info.event.textColor);

            let registro = recuperarDatosFormulario();
            modificarRegistro(registro);
        },
        drop: function(info){ //Con esto obtengo los datos del calendario al arrastrar dentro del calendario
            alert("Has añadido un evento al calendario");
            limpiarFormulario();
            $('#ColorFondo').val(info.draggedEl.dataset.colorfondo);
            $('#ColorTexto').val(info.draggedEl.dataset.colortexto);
            $('#Titulo').val(info.draggedEl.dataset.titulo);
            let fechaHora = info.dateStr.split("T");
            $('#FechaInicio').val(fechaHora[0]);
            $('#FechaFin').val(fechaHora[0]);
            if(info.allDay){
                $('#HoraInicio').val(info.draggedEl.dataset.horainicio);
                $('#HoraFin').val(info.draggedEl.dataset.horafin);

            }else{
                $('#HoraInicio').val(fechaHora[1].substring(0,5));
                $('#HoraFin').val(moment(fechaHora[1].substring(0,5)).add(1,'hours'));
            }
            let registro = recuperarDatosFormulario();
            agregarEventoPredefinido(registro);

        }

        });
        
// Más funciones que se podrían añadir:
    //1º-->  "esta funcion sirve para poner un mensaje al clickar en el calendario. Predefinida por el script de fullcalendar."  
    //2º --> alert(info.dateStr); "Esto enseña la fecha del cuadro que clickas"    
    //}
    
// con esto ya podemos ver el calendario.
    calendario1.render();
    alert('Las reservas están de momento limitadas, contactanos para confirmar tu reserva, de confirmar, aparecerá en este calendario');


//Eventos de botones de la aplicación
    $('#BotonAgregar').click(function(){
        alert("Has pulsado agregar");
        let registro = recuperarDatosFormulario();
        agregarRegistro(registro);
        $('#FormularioEventos').modal('hide'); //esto oculta el formulario al darle a agregar.
    });

    $('#BotonModificar').click(function(){
        alert("Diste click en el botón modificar")
        let registro = recuperarDatosFormulario();
        modificarRegistro(registro);
        $('#FormularioEventos').modal('hide');
    });

    $('#BotonBorrar').click(function(){
        alert("Has eliminado correctamente la reserva")
        let registro = recuperarDatosFormulario();
        borrarRegistro(registro);
        $('#FormularioEventos').modal('hide');
    });

    $('#BotonEventosPredefinidos').click(function(){
        //alert("Vas a redirigirte a otra página")
        window.location = "eventospredefinidos.html"
    });

//Funciones para comunicarse con el servidor AJAX (AGREGAR)
    function agregarRegistro(registro){
        $.ajax({
            type: 'POST',
            url: '../assets/php/datoseventos.php?accion=agregar',
            data: registro,
            success: function(msg){
                calendario1.refetchEvents();
            },
            error: function(error){
                alert("Hubo un error en la reserva: " + error);
            }
        });
    }
//FUNCION PARA MODIFICAR eventos
    function modificarRegistro(registro){
        $.ajax({
            type: 'POST',
            url: '../assets/php/datoseventos.php?accion=modificar',
            data: registro,
            success: function(msg){
                calendario1.refetchEvents();
            },
            error: function(error){
                alert("Hubo un error al modificar la reserva: " + error);
            }
        });
    }

// FUNCION PARA BORRAR EVENTOS

    function borrarRegistro(registro){
        $.ajax({
            type: 'POST',
            url: '../assets/php/datoseventos.php?accion=borrar',
            data: registro,
            success: function(msg){
                calendario1.refetchEvents();
            },
            error: function(error){
                alert("Hubo un error al borrar la reserva: " + error);
            }
        });
    }
// FUNCION PARA AÑADIR EVENTOS PREDEFINIDOS AL CALENDARIO Y QUE SE GUARDEN
    function agregarEventoPredefinido(registro){
        $.ajax({
            type: 'POST',
            url: '../assets/php/datoseventos.php?accion=agregar',
            data: registro,
            success: function(msg){
                calendario1.removeAllEvents();
                calendario1.refetchEvents();
            },
            error: function(error) {
                alert("Hubo un error al añadir la reserva predefinida: " + error);
            }
        });
    }

//funciones que interactuan con el formularioEventos
    function limpiarFormulario(){
        $('#Id').val('');
        $('#Titulo').val('');
        //$('#Descripcion').val('');
        $('#FechaFin').val('');
        $('#FechaInicio').val('');
        $('#HoraInicio').val('');
        $('#HoraFin').val('');
        $('#ColorFondo').val('#3788D8');
        $('#ColorTexto').val('#FFFFFF');
    }


//Funcion para recuperar datos del formulario
    function recuperarDatosFormulario(){
        let registro = {
            id: $('#Id').val(),
            titulo: $('#Titulo').val(),
            descripcion: $('#Descripcion').val(),
            inicio: $('#FechaInicio').val() + ' ' + $('#HoraInicio').val(),
            fin: $('#FechaFin').val() + ' ' + $('#HoraFin').val(),
            colorfondo: $('#ColorFondo').val(),
            colortexto: $('#ColorTexto').val()
        }
        return registro;
    }
});
    </script>
</body>
</html>