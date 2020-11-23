@extends('layouts.app')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('storage/prueba-carrousel-2.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('storage/prueba-carrousel-2.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('storage/prueba-carrousel-2.png') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section class="seccion mt-4">
    <details>
        <summary class="text-center h3 p-4">Especialidades y Dias</summary>
        <div class="row w-100 m-0">
            <div class="col-12 col-lg-7 col-xl-6 ml-auto">
                <div class="row w-100 m-0">
                    {{-- Row 1 --}}
                    <div class="col-12 col-md-6 ml-auto">
                        <details class="col-12">
                            <summary>Cardiologia/Electro</summary>
                            <p>Martes</p>
                        </details>
                        <details class="col-12">
                            <summary>Clinica Medica</summary>
                            <p>Lunes, Martes, Miercoles, Jueves</p>
                        </details>
                        <details class="col-12">
                            <summary>Dermatologia</summary>
                            <p>Viernes</p>
                        </details>
                         <details class="col-12">
                            <summary>Ecografias</summary>
                            <p>Jueves</p>
                        </details>
                        <details class="col-12">
                            <summary>Fonoaudiologia</summary>
                            <p>Miercoles</p>
                        </details>
                        <details class="col-12">
                            <summary>Gastroenterologia</summary>
                            <p>Martes, Jueves</p>
                        </details>
                        <details class="col-12">
                            <summary>Ginecologia/Obstetricia</summary>
                            <p>Miercoles, Jueves</p>
                        </details>
                    </div>
                    {{-- Row 2 --}}
                    <div class="col-12 col-md-6 ml-auto">
                        <details class="col-12">
                            <summary>Monitoreo Fetal</summary>
                            <p>Lunes a Viernes</p>
                        </details>
                        <details class="col-12">
                            <summary>Oftalmologia</summary>
                            <p>Lunes</p>
                        </details>
                         <details class="col-12">
                            <summary>Otorrino</summary>
                            <p>Martes</p>
                        </details>
                         <details class="col-12">
                            <summary>Pediatria</summary>
                            <p>Lunes, Miercoles, Jueves</p>
                        </details>
                        <details class="col-12">
                            <summary>Psicologia</summary>
                            <p>Lunes, Miercoles, Jueves</p>
                        </details>
                        <details class="col-12">
                            <summary>Psicopedagogia</summary>
                            <p>Martes, Miercoles</p>
                        </details>
                        <details class="col-12">
                            <summary>Traumatologia</summary>
                            <p>Viernes</p>
                        </details>
                    </div>
                </div>                
            </div>
        </div>
    </details>
</section>
<section class="seccion mt-4">
    <details>
        <summary class="text-center h3 p-4">Turnos</summary>
        <div class="row w-100 m-0">
            <div class="col-12 col-md-6">
                <div class="form col-12 mx-auto">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Ingrese su Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Ingrese su consulta"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </details>
</section>
<section class="seccion mt-4">
    <details>
        <summary class="text-center h3 p-4">Nosotros</summary>
        <div class="row w-100 m-0">
            <div class="col-12 col-md-12 col-lg-6 col-xl-4">
                <img src="{{ asset('storage/nosotros.png') }}" alt="" class="image-nosotros mx-auto">
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-8">
                <div class="col-12 mx-auto mb-4">
                    <p class="text-nosotros">
                        Centro Medico Mainini pone a su alcance los mejores
                        profesionales y la más alta tecnologÌa para su
                        tranquilidad y la de su familia, contando con una
                        infraestructura moderna que cumple con los 
                        requerimientos de confort y seguridad que usted se
                        merece.
                    </p>
                </div>
                <div class="col-12 mx-auto">
                    <p class="text-nosotros">
                        Centro Médico, dispone ademas de un equipo 
                        profesional propio de excelente trayectoria que le
                        brinda no solo atención médica primaria, sino que
                        cuenta con un enfoque humanístico centrado en el 
                        paciente y sus circunstancias, que nos diferencia
                        en la calidad y calidez de atención y contención 
                        de nuestros pacientes.
                    </p>
                </div>
            </div>
        </div>
    </details>
</section>
@endsection