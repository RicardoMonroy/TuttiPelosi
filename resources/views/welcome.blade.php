<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutti Pelosi</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/App.css">
    <link rel="stylesheet" href="./css/all.css">
</head>
<body>
    <div class="container-fluid content">
        <!-- Menu Extendido -->
        <div class="content-Menu">
            <div class="row">
                <div class="col container-navmenu">
                    <nav class="navbar navbar-light">
                            <button type="button" id="showModal">
                                <i class="icon_menu fas fa-bars" ></i>
                            </button>
                            <a href="{{ route('welcome') }}" class="logo_center"> <img src="./images/logo.png" alt="logo_tuttipelosi"/> </a>
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
                                        <li class="p-menu"> <a href="{{ route('P.index') }}">Contacta a mi Dueño</a> </li>
                                        <li class="p-menu"> <a href="{{ route('P.index') }}">Segundo Contacto</a> </li>
                                        <li class="p-menu"> <a href="{{ route('P.index') }}">Mi Veterinario</a> </li>
                                        <li class="p-menu"> <a href="{{ route('P.index') }}">Mi SPA</a> </li>
                                        <li class="p-menu"> <a href="{{ route('P.index') }}">Vacunas</a> </li>
                                        <li class="p-menu"> <a href="{{ route('P.index') }}">Cuidados <br/> Especiales</a> </li>
                                        <li class="p-menu"> <a href="{{ route('P.index') }}">Carácter</a> </li>
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

        <!-- Secciones de colores -->
        <div class="row">
            <div class="col section">
                <section class="vh-50" id="qr">
                    <div class="content_info">
                        <div class="img_left"><img src="./images/cel-qr.png" alt=""/></div>
                        <div class="content_text">
                        <h2 class="super-title">IDENTIFICACIÓN QR PARA TU PELUDO</h2>
                        <div id="mobile_visiblecel">
                            <img class="img_cel_mobile" src="./images/cel-qr.png" alt=""/>
                            <img class="img_center" src="./images/medalla-qr2.png" alt=""/>
                        </div>
                        <p class="p-principal">
                            Con toda la información necesaria para<br />
                        <span>AYUDARLO A REGRESAR A CASA!</span> <br />
                            Además: veterinario, estética, datos médicos y más
                        </p>
                        </div>
                        <div class="img_right"><img src="./images/dogs6.png" alt=""/></div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col section">
                <section class="vh-50" id="premios">
                    <div class="content_info">
                        <div class="img_left"><img  src="./images/producto-premios.png" alt=""/></div>
                        <div class="content_text">
                            <div>
                                <h2 class="super-title">PREMIOS NATURALES</h2>
                                <p class="p-principal">Para recompensar sus grandes logros</p>
                            </div>
                            <div class="btnOrange_sm show_lg">
                                <a href="http://www.tuttipelosi.facilqr.com/inf1/" target="_blank">
                                    <p class="text_btnO">conocer más</p>
                                </a>
                            </div>
                        </div>
                        <div class="img_right"><img src="images/dogs4.png" alt=""/></div>
                        <div class="btnOrange_sm hidden_lg">
                            <a href="http://www.tuttipelosi.facilqr.com/inf1/" target="_blank">
                                <p class="text_btnO">conocer más</p>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col section">
                <section class="vh-50" id="mayores">
                    <div class="content_info">
                        <div class="img_left"><img src="images/dogs5.png" alt=""/></div>
                        <div class="content_text">
                            <div>
                                <h2 class="super-title font-SemiBold">COLÁGENO HIDROLIZADO</h2>
                                <p class="p-principal">
                                Para ayudar a los adultos <br />
                                a recuperar <br />
                                la movilidad y fortaleza
                                </p>
                            </div>
                            <div class="btnOrange_sm show_lg">
                                <a href="http://www.tuttipelosi.facilqr.com/inf2/" target="_blank">
                                    <p class="text_btnO">conocer más</p>
                                </a>
                            </div>
                        </div>
                        <div class="img_right"><img src="images/producto6.png" alt=""/></div>
                        <div class="btnOrange_sm hidden_lg">
                            <a href="http://www.tuttipelosi.facilqr.com/inf2/" target="_blank">
                                <p class="text_btnO">conocer más</p>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col section">
                <section class="vh-50" id="socios">
                    <div class="content_info">
                        <div class="img_left"><img src="images/circle-socio.png" alt=""/></div>
                        <div class="content_text">
                            <h2 class="text-yellow title_socio">Conviértete en <span>Socio Comercial</span></h2>
                            <div class="btnOrange_lg">
                                <a href="http://www.tuttipelosi.facilqr.com/inf3/" target="_blank">
                                    <p class="text_btnO">Beneficios</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Secciones de colores Fin-->

        <!-- Sección Gris -->
        <div class="row">
            <div class="col-6 col-sm-6 gb-gray d-flex justify-content-md-end p-0">
                <div class="content_producto">
                    <div class="img_center"><img src="images/medalla-1.png" alt=""/></div>
                    <div class="content_text">
                        <p class="p-product">Escanea el <span>TAG QR</span> de tu peludo y obten toda su información</p>
                        <div class="btnOrange_sm">
                            <a href="http://www.tuttipelosi.facilqr.com/inf4/" target="_blank">
                                <p class="text_btnO">conocer más</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 gb-gray d-flex justify-content-md-start p-0">
                <div class="content_producto">
                    <div class="img_center"><img src="images/medalla-1.png" alt=""/></div>
                    <div class="content_text">
                        <p class="p-product">Escanea el <span>TAG QR</span> de tu peludo y obten toda su información</p>
                        <div class="btnOrange_sm ">
                            <a href="http://www.tuttipelosi.facilqr.com/inf4/" target="_blank">
                                <p class="text_btnO">conocer más</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 gb-gray d-flex justify-content-md-end reset_width p-0">
                <div class="content_producto">
                    <div class="img_center"><img src="images/producto3.png" alt="" id="bones"/></div>
                    <div class="content_text reset_p">
                        <p class="p-product span_block"><span>Huesos Naturales</span> para los peludos de mayor tamaño! <br/> Premia sus grandes logros mientras lo fortaleces <br/> con calcio, hierro, vitaminas y minerales</p>
                        <div class="btnOrange_sm ">
                            <a href="http://www.tuttipelosi.facilqr.com/inf1/" target="_blank">
                                <p class="text_btnO">conocer más</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 gb-gray d-flex justify-content-md-start p-0">
                <div class="content_producto">
                    <div class="img_center"><img src="images/producto4.png" alt="" id="carnaza"/></div>
                    <div class="content_text reset_p">
                        <p class="p-product span_block"> <span id="lg_hidden">Palitos de Carnaza con Pollo.</span> Irresistible <span id="sm_hidden">Palitos de Carnaza con Pollo</span> para limpiar los dientes y premiar el esfuerzo y éxito de tu mascota</p>
                        <div class="btnOrange_sm ">
                            <a href="http://www.tuttipelosi.facilqr.com/inf1/" target="_blank">
                                <p class="text_btnO">conocer más</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 gb-gray d-flex justify-content-md-end pt-lg-5 p-0">
                <div class="content_producto">
                    <div class="img_center"><img src="images/producto1.png" alt="" id="pollo"/></div>
                    <div class="content_text reset_p">
                        <p class="p-product span_block">Deliciosa <span>Carne de Pollo Seca</span> para consentir a perros y gatos con <br /> una botana que es 100% proteína natural</p>
                        <div class="btnOrange_sm ">
                            <a href="http://www.tuttipelosi.facilqr.com/inf1/" target="_blank">
                                <p class="text_btnO">conocer más</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 gb-gray d-flex justify-content-md-start pt-lg-5 p-0">
                <div class="content_producto">
                    <div class="img_center"><img src="images/producto6.png" alt="" id="colageno"/></div>
                    <div class="content_text reset_p">
                        <p class="p-product span_block py-lg-3 py-2"><span>Colágeno Hidrolizado</span> para recuperar la movilidad y energía reduciendo dolores en las articulaciones</p>
                        <div class="btnOrange_sm ">
                            <a href="http://www.tuttipelosi.facilqr.com/inf2/" target="_blank">
                                <p class="text_btnO">conocer más</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="gb-gray contentBtn">
                <div class="btnGreen_xl">
                    <a href="#contacto">
                        <p class="text_btnO">Contáctanos</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- Sección Gris FIN -->

        <!-- Sección Placa Amarillo -->
        <div class="row">
            <div class="p-0 container-placa gb-gray">
                <div class="shape"></div>
                <div>
                    <div class="p-0 col-12">
                        <div class="content_placa">
                            <div class="d-flex justify-content-end p-0">
                                <div class="img_left"><img src="images/cel-qr2.png" alt=""/></div>
                            </div>
                            <div class="d-flex justify-content-start p-0">
                                <div class="content_center">
                                    <div class="content_text">
                                        <div class="img_up"><img src="images/dogs6.png" alt=""/></div>
                                        <p class="title_socio"><span>PLACA QR</span> identidad para tu <span>Peludo</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="p-0 col-12">
                        <div class="content_placa" id="shape-green">
                            <div class="d-flex justify-content-end p-0">
                                <div class="shape-text">
                                    <div class="shape-rounded"></div>
                                    <ul class="content_ul p-dark">
                                        <li>Datos médicos</li>
                                        <li>Fecha de vacunación</li>
                                        <li>Alergias</li>
                                        <li>Enfermedades</li>
                                        <li> y lo <span>MÁS IMPORTANTE: DÓNDE LOCALIZARTE SI ESTÁ EXTRAVIADO</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start p-0">
                                <div class="content_center">
                                    <div class="content_text">
                                        <div class="img_up" id="medalla-qr"><img src="images/medalla-qr1.png" alt=""/></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-0">
                    <div class="col" style="z-index: 5" >
                        <div class="btnGreen_sm">
                            <a href="pages/identificacion.html">
                                <p class="text_btnO">conocer más</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="p-0 col">
                        <div class="content_circleDog">
                            <div class="d-flex justify-content-end p-0">
                                <div class="content_img">
                                    <a href="{{ route('home') }}">
                                        <div class="img_center" id="circle-dog">
                                            <img src="images/circle-perfil.png" alt=""/>
                                            <p class="p-circle">MI PERFIL</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start p-0">
                                <div class="content_img">
                                    <a href="{{ route('register') }}">
                                        <div class="img_center" id="circle-qr">
                                            <img src="images/circle-registrarse.png" alt=""/>
                                            <p class="p-circle">REGÍSTRATE <span>(TAG)</span> </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sección Placa Amarillo FIN-->

        <!-- Sección Verde -->
        <div class="row">
            <div class="col gb-gray bg_yellow-sm container-peludo p-0">
                <div class="shape-paralelo"></div>
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="content-title">
                            <div class="d-flex justify-content-center">
                                <div class="content_text">
                                    <p class="title_peludo">Para <span>consentir</span> a tu <span>Peludo</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="content-gridImg">
                            <div class="p-0">
                                <div class="img_grid"><img src="images/producto1.png" id="img_left" alt=""/></div>
                            </div>
                            <div class="p-0">
                                <div class="img_grid"><img src="images/producto2.png" id="img_center" alt=""/></div>
                            </div>
                            <div class="p-0">
                                <div class="img_grid" id="img-end"><img src="images/producto3.png" id="img_right" alt=""/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="content-subtitle">
                            <div class="d-flex justify-content-center">
                                <div class="content_text">
                                    <p class="subtitle_peludo">Productos Naturales y Saludables</p>
                                    <p class="p_peludo">
                                        Productos Naturales y Saludables <br />
                                        Irresistible Carnaza de Pollo, Pechugas Secas de <br />
                                        Pollo y Huesos Horneados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gb-gray p-0 row">
                    <div class="col-12">
                        <div class="btnGreen_xl">
                            <a href="http://www.tuttipelosi.facilqr.com/inf1/" target="_blank">
                                <p class="text_btnO">SABER MÁS</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sección Verde Fin-->

        <!-- Seccion Morada -->
        <div class="row">
            <div class="col container-fortaleza">
                <div class="shape-paraleloPurple"></div>
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="content-title">
                            <div class="d-flex justify-content-center">
                                <div class="content_text">
                                    <p class="title_peludo">Recupera la <span>Fortaleza</span> de tu <span>Peludo</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="content-img">
                            <div class="p-0">
                                <div class="img_grid"><img src="images/dogs2.png" id="img_dogs" alt=""/></div>
                            </div>
                            <div class="p-0">
                                <div class="img_grid"><img src="images/producto6.png" id="img_bag" alt=""/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="content-subtitle">
                            <div class="d-flex justify-content-center">
                                <div class="content_text">
                                    <p class="subtitle_peludo">COLÁGENO HIDROLIZADO</p>
                                    <p class="p_peludo">
                                        Mejora la calidad de vida y la movilidad. <br/>
                                        Retarda el envejecimiento natural y reduce dolores en las articulaciones. <br/>
                                        Regenera cartílagos y devuelve el brillo en el pelo. <br/>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row img_showMobile">
                    <div class="col-12 p-0">
                        <div class="content-img">
                            <div class="p-0">
                                <div class="img_grid"><img src="images/dogs2.png" id="img_dogs" alt=""/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gb-gray p-0 ">
                    <div class="col-12">
                        <div class="btnGreen_xl">
                            <a href="http://www.tuttipelosi.facilqr.com/inf2/" target="_blank">
                                <p class="text_btnO">SABER MÁS</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Seccion Morada FIN-->

        <!-- Seccion de Contacto -->
        <div class="row" id="contacto">
            <div class="col container-contact">
              <div class="container px-5">
                  <div class="row">
                      <div class="col-12 p-0">
                          <div class="content-title">
                              <p class="title_contact text-yellow2">Contactános <span>resolvemos tus Dudas</span></p>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12 p-0">
                          <div class="content-gridForm">
                              <div>
                                <form action="{{ url('send') }}" method="POST" class="content_form">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                      <input type="text" name="name" class="form-control" id="name" placeholder="NAME">
                                    </div>
                                    <div class="mb-3">
                                      <input type="email" name="email" class="form-control" id="email" placeholder="E-MAIL">
                                    </div>
                                    <div class="mb-3 ">
                                        <textarea class="form-control" name="message" placeholder="MENSAJE" id="textarea" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn">Enviar</button>
                                </form>
                              </div>
                              <div class="content_text">
                                  <p class="subtitle_contact">Tutti Pelosi <span>consiéntelo... cuidándolo</span></p>
                                  <div class="content_data">
                                      <p class="p_contacto">Queretaro, Qro.</p>
                                      <p class="p_contacto"><a href="mailto:Contacto@tuttipelosi.com">Contacto@tuttipelosi.com</a></p>
                                  </div>
                                  <div class="social_media">
                                      {{-- <div class="icon"><a href="https://www.facebook.com/Tutti-Pelosi-100930825425191"><i class="fab fa-whatsapp-square" ></i></a></div> --}}
                                      <div class="icon"><a href="https://www.instagram.com/tuttipelosi/" target="_blank"><i class="fab fa-instagram-square" ></i></a></div>
                                      <div class="icon"><a href="https://www.facebook.com/Tutti-Pelosi-100930825425191" target="_blank"><i class="fab fa-facebook-square" ></i></a></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12 p-0">
                          <div class="container_nota">
                              <p class="p-nota">
                                  <span>NOTA ACLARATORIA:</span> Las imágenes de las Identificaciones QR son sólo ilustrativas. <br/>
                                  El material y los colores pueden cambiar.</p>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- Seccion de Contacto FIN-->

        <!-- Footer -->
        <div class="row">
            <div class="col container-footer">
              <div class="container">
                  <div class="row">
                      <div class="col-12 d-flex justify-content-center p-0">
                          <div class="content-p">
                              <p class="title_footer">Tutti Pelosi / 2021 /Todos los derechos reservados</p>
                              <img src="images/logo-gris.png" alt="" id="logo_footer"/>
                              {{-- <div class="footer-nav">
                                  <ul>
                                      <li class="p-footer"><a href="index.html">PLACA QR</a></li>
                                      <li class="p-footer"><a href="index.html">HUESOS</a></li>
                                      <li class="p-footer"><a href="index.html">PECHUGAS DE POLLO</a></li>
                                      <li class="p-footer"><a href="index.html">PALITOS CARNASA DE POLLO</a></li>
                                  </ul>
                              </div> --}}
                          </div>
                      </div>
                  </div>
                </div>
              <div class="row" class="gb-grayDark pt-4"></div>
            </div>
        </div>
        <!-- Footer FIN -->

    </div>
    <script src="js/showModal.js"></script>
    <script src="js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
