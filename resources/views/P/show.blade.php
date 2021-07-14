<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/App.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
    <div class="container-fluid content" id="indentificacion">
        <!-- Menu Extendido -->
        <div class="content-Menu">
            <div class="row">
                <div class="col container-navmenu">
                    <nav class="navbar navbar-light">
                            <button type="button" id="showModal">
                                <i class="icon_menu fas fa-bars" ></i>
                            </button>
                            <a href="{{ route('welcome') }}" class="logo_center"> <img src="../images/logo.png" alt="logo_tuttipelosi"/> </a>
                            <div class="social_media d-flex">
                                <div class="icon"><a href="https://www.instagram.com/tuttipelosi/" target="_blank"><i class="fab fa-instagram-square"></i></a></div>
                                {{-- <div class="icon"><a href="https://www.facebook.com/Tutti-Pelosi-100930825425191"><i class="fab fa-whatsapp-square" ></i></a></div> --}}
                                <div class="icon"><a href="https://www.facebook.com/Tutti-Pelosi-100930825425191" target="_blank"><i class="fab fa-facebook-square" ></i></a></div>
                            </div>
                    </nav>
                </div>
                <div class="curved"></div>
            </div>
            <!-- Modal de Menú -->
            <div class="row">
                <div class="col-12 container-modal display-none" id="showHideClassName">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="content_menu">
                                    <ul class="content_ul">
                                        <li class="p-menu"> <a href="#contact">Contacta a mi Dueño</a> </li>
                                        <li class="p-menu"> <a href="#segundo">Segundo Contacto</a> </li>
                                        <li class="p-menu"> <a href="#veterianrio">Mi Veterinario</a> </li>
                                        <li class="p-menu"> <a href="#spa">Mi SPA</a> </li>
                                        <li class="p-menu"> <a href="#vacunas">Vacunas</a> </li>
                                        <li class="p-menu"> <a href="#cuidados">Cuidados <br/> Especiales</a> </li>
                                        <li class="p-menu"> <a href="#caracter">Carácter</a> </li>
                                        <li class="p-menu"> <a href="{{ route('home') }}">Mi Cuenta</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal de Menú FIN-->
        </div>
        <!-- Menu Extendido Fin -->
        <!-- Menu Medio -->
        {{-- <div class="content-Menu second_page">
            <div class="row">
                <div class="col container-navmenu">
                    <nav class="navbar">
                        <a href="{{ route('welcome') }}" class="logo_center"> <img src="../images/logo.png" alt="logo_tuttipelosi"/> </a>
                        <button type="button" id="showModal">
                            <i class="icon_menu fas fa-bars" ></i>
                        </button>
                    </nav>
                </div>
                <div class="curved"></div>
            </div>
            <div class="row">
                <div class="col-12 container-modal display-none" id="showHideClassName">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="content_menu">
                                    <ul class="content_ul">
                                        <li class="p-menu"> <a href="#contact">Contacta a mi Dueño</a> </li>
                                        <li class="p-menu"> <a href="#segundo">Segundo Contacto</a> </li>
                                        <li class="p-menu"> <a href="#veterianrio">Mi Veterinario</a> </li>
                                        <li class="p-menu"> <a href="#spa">Mi SPA</a> </li>
                                        <li class="p-menu"> <a href="#vacunas">Vacunas</a> </li>
                                        <li class="p-menu"> <a href="#cuidados">Cuidados <br/> Especiales</a> </li>
                                        <li class="p-menu"> <a href="#caracter">Carácter</a> </li>
                                        <li class="p-menu"> <a href="{{ route('home') }}">Mi Cuenta</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Menu Medio Fin -->

        <!-- Seccion de presentación -->
        <div class="container" id="contact">
            <div class="row">
                <div class="col container_hola p-0">
                    <h2 class="title_hola">Hola...! soy <span>{{ $pet->name }}</span></h2>
                    <div class="card_foto" style="background-color: transparent;">
                        @if ( isset($cover->picture) )
                            <img src="{{ asset('storage') }}/{{ $cover->picture }}" class="" style="max-width: 100%; max-height: 100%; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%); border-radius: 5%;">
                        @else
                        <p class="placeholder_foto">
                            No hay nunguna foto <br/><br> Esperemos a que el humano <br> suba algunas...
                        </p>
                        @endif

                        @if ( isset($phone->number) )
                            <div class="fixed_wapp">
                                <a href="https://wa.me/{{ $phone->number }}" target="_blank"><img src="../images/whatsapp.png" alt="" /></a>
                            </div>
                        @endif
                    </div>
                    <div class="content_text">
                        <h4 class="title_text">Esta es mi página de identificación</h4>
                        <p class="p-text">
                            Aquí encontrarás información importante, <br />
                            medicamentos que son indispensables para mí y todo <br />
                            lo necesario para ayudarme a regresar a casa si me he perdido. <br />
                            Pero sobretodo, la mayor expresión del cariño que me tienen <br />
                            y el enorme agradecimiento que te tendremos al ayudarme <br />
                            a reencontrar a mi familia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Seccion de presentación FIN -->

        <!-- Seccion de Informacion -->
        <div class="row">
            <div class="col container_info p-0" id="SectionInfo">
                <div class="shapeI"></div>
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="content_infoPerrito">
                                    <h2 class="title_info">
                                        {{-- Perrita Cocker, de temperamento <br />
                                        tranquilo, jamás <br />
                                        mordería a alguien, soy amigable <br />
                                        y agradecida, no me gustan los gatos. --}}
                                        {{ $pet->description }}
                                    </h2>
                                    <p class="p-info">
                                        Raza: {{ $pet->dog_breed }} <br />
                                        Edad: {{ $pet->age }} años<br />
                                        Sexo: {{ $pet->sex }}<br />
                                        Color: {{ $pet->color }}<br />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ( isset($pictures) )
                    @foreach ($pictures as $picture)
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="circle_foto" id="foto2" style="background-color: transparent">
                                    {{-- <p class="placeholder_foto">
                                        Foto 2
                                    </p> --}}
                                    <img src="{{ asset('storage') }}/{{ $picture->picture }}" class="" style="width: 95%; border-radius: 5%; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%);">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif



                {{-- <div class="row">
                    <div class="col-12 p-0">
                        <div class="circle_foto" id="foto3">
                            <p class="placeholder_foto">
                                Foto 3
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Seccion de Informacion FIN -->

        <!-- Seccion de Tablas -->
        <div class="container" id="vacunas">
            <div class="row">
                <div class="col container_tables p-0">
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="table_vacunas" id="foto2">
                                <table class="content_table">
                                    <tr>
                                        <th style="width: 60%"><span><img src="../images/icon_vacuna.png" alt="vacuna"/></span> Vacuna</th>
                                        <th id="date" style="width: 40%">Fecha</th>
                                    </tr>
                                    @foreach ($pet->vaccines as $vaccine)
                                        <tr>
                                            <td>{{ $vaccine->vaccine }}</td>
                                            <td>{{ $vaccine->date }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="cuidados">
                        <div class="col-12 p-0">
                            <div class="content_box">
                                <div class="header">
                                    <span><img src="../images/icon_corazon.png" id="corazon" alt="heart"/></span>
                                    <h4 class="title_tabla">Cuidados Especiales</h4>
                                </div>
                                <p class="p-tableI">
                                    {{ $pet->special_cares }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="caracter">
                        <div class="col-12 p-0">
                            <div class="content_box">
                                <div class="header">
                                    <span><img src="../images/icon_dog.png" id="dog" alt="perro"/></span>
                                    <h4 class="title_tabla">Mi Caracter</h4>
                                </div>
                                <p class="p-tableI">
                                    {{ $pet->personality }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="segundo">
                        <div class="col-12 p-0">
                            <div class="content_box">
                                <div class="header">
                                    <span><img src="../images/icon_casa.png" id="casa" alt="casa"/></span>
                                    <h4 class="title_tabla">Mi Casa</h4>
                                </div>
                                <p class="p-tableD">
                                    {{-- <a href="tel:{{ isset($phone->number) ? $phone->number : '' }}">{{ isset($phone->number) ? $phone->number : '' }}</a> <br /> --}}
                                    <a href="mailto:">{{ $pet->owner->user->email }}</a> <br />
                                    @if ( $pet->owner->address )
                                        <span>{{ $pet->owner->address }}</span>,
                                    @endif
                                    @if ( $pet->owner->city || $pet->owner->state )
                                        <span>{{ $pet->owner->city }}, {{ $pet->owner->state }}</span>
                                    @endif
                                </p>
                                <div class="content_map">
                                    <!-- Componente que cusa la
                                    API de Google Maps: Solo faltaría agregar una apikey -->
                                    <!-- <Mapa /> -->

                                    {{-- <img src="../images/mapa.png" alt=""/> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Seccion de Tablas FIN -->

        <script src="../js/showModal.js"></script>
        <script src="../js/all.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </div>
</body>
</html>
