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
        <summary id="especialidades" class="text-center h3 p-4">Especialidades y Dias</summary>
        <div class="row w-100 m-0">
            <div class="col-12 col-md-12 col-lg-5 col-xl-6 pb-3">
                <img src="{{ asset('storage/especialidades.png') }}" alt="" class="image-especialidades mx-auto">
            </div>
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
        <summary id="turno" class="text-center h3 p-4">Turnos</summary>
        <div class="row w-100 m-0">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 pb-3">
                <img src="{{ asset('storage/turnos.png') }}" alt="" class="image-turnos mx-auto">
            </div>
            <div class="col-12 col-md-6">
                <div class="form col-12 mx-auto">
                    <div class="form-group">
                        <input id="name" class="form-control" type="text" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <input id="speciality" class="form-control" type="text" placeholder="Ingrese una especialidad">
                    </div>
                    <div class="form-group">
                        <textarea id="consult" class="form-control" name="" id="" cols="30" rows="5" placeholder="Ingrese su consulta"></textarea>
                    </div>
                    <div class="form-group">
                        <button onclick="whatsapp()" type="button" class="btn btn-info">Enviar</button>
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
<footer class="row w-100 seccion mt-4 m-0">
    <div class="col-12 col-lg-4 text-center">
        <h3>Solicitar Turno</h3>
        <div class="col-12">
            <div class="row w-100 justify-content-center my-3">
                <ion-icon name="call-outline" style="font-size: 1.5rem"></ion-icon>
                <p class="ml-3" style="font-size: 1.1rem">2149-4867</p>
            </div>
            <div class="row w-100 justify-content-center">
                <ion-icon name="phone-portrait-outline" style="font-size: 1.5rem"></ion-icon>
                <p class="ml-3" style="font-size: 1.1rem">11-2339-0903</p>
            </div>
            <div class="row w-100 justify-content-center my-3">
                <ion-icon name="mail-outline" style="font-size: 1.5rem"></ion-icon>
                <p class="ml-3" style="font-size: 1.1rem">centromedicomainini@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 text-center">
        <h3>¿Como Llegar?</h3>
        <iframe id="ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d668.9809869751132!2d-58.272098980524625!3d-34.819168872294505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3297bd2e952fd%3A0xdc74622754ccd3b3!2sDr.%20Carlos%20Galli%20Mainini%20192%2C%20B1853%20Villa%20Vatteone%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1sen!2sar!4v1606182215067!5m2!1sen!2sar" width="419" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col-12 col-lg-4 text-center">
        <h3>Seguinos</h3>
        <div class="row justify-content-envenly" style="padding-top: 12%; justify-content: space-evenly">
            <a href=""><ion-icon name="logo-facebook" style="color: #30498D; font-size: 2rem"></ion-icon></a>
            <a href=""><ion-icon name="logo-instagram" style="color: #EB3C4D; font-size: 2rem"></ion-icon></a>
            <a href=""><ion-icon name="logo-whatsapp" style="color: #2DAF1D; font-size: 2rem"></ion-icon></a>
        </div>
    </div>
</footer>
@endsection