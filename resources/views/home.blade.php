<!DOCTYPE html>
<html lang="es">


<head>
	<meta charset="UTF-8">
	<title>HEAL THE WORLD COVID-19</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- master stylesheet -->
	<link rel="stylesheet" href="{{ asset('/la-assets/css/style.css') }}">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="{{ asset('/la-assets/css/responsive.css') }}">



</head>
<body>


	<section class="top-bar">
		<div class="container">

			<div class="left-text pull-left">
				<p><span> Contáctenos:</span> contact@healtheworld.com.co</p>
			</div> <!-- /.left-text -->

			<div class="social-icons pull-right">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>

				</ul>
			</div> <!-- /.social-icons -->
		</div>
	</section> <!-- /.top-bar -->

	<header class="header">
		<div class="container">
			<div class="logo pull-left">
				<a href="index-2.html">
					<img src="{{ asset('/la-assets/img/resources/logo.png') }}" alt="Awesome Image"/>
				</a>
			</div>
			<div class="header-right-info pull-right clearfix">
				<div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="flaticon-interface-2"></i>
						</div>
					</div>
					<div class="content">
						<h3>EMAIL</h3>
						<p>contact@healtheworld.com.co</p>
					</div>
				</div>
				<!--<div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="flaticon-telephone"></i>
						</div>
					</div>
					<div class="content">
						<h3>Call Now</h3>
						<p><b>(732) 803-010-03</b></p>
					</div>
				</div>-->
				<div class="single-header-info">
	                <!-- Modal: donate now Starts -->
	                <a class="thm-btn" data-toggle="modal" href="#modal-donate-now">Realiza tu donación</a>
	                <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	                  <div class="modal-dialog style-one" role="document">
	                    <div class="modal-content">
	                      <div class="modal-header">
	                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                        <h4 class="modal-title" id="myModalLabel">Realiza tu donación</h4>
	                      </div>
	                      <div class="modal-body">
		                    <div class="donation-form-outer">
				            	<form action="http://hasan.themexlab.com/new/charity-home-html/contact.html" method="post">
				                	
				                    <!--Form Portlet-->
				                    <div class="form-portlet">
				                    	<h3>Cuánto quieres donar?</h3>
				                        
				                        <div class="row clearfix">
				                        	<div class="form-group col-xs-12 clearfix">
				                            	
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-1" name="sel-amount">
				                                    <label for="amount-1">$5</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" checked="" id="amount-2" name="sel-amount">
				                                    <label for="amount-2">$10</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-3" name="sel-amount">
				                                    <label for="amount-3">$20</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-4" name="sel-amount">
				                                    <label for="amount-4">$50</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-5" name="sel-amount">
				                                    <label for="amount-5">$100</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	<input type="radio" id="amount-6" name="sel-amount">
				                                    <label for="amount-6">$150</label>
				                                </div>
				                                
				                                <div class="radio-select">
				                                	Monto Personalizado
				                                </div>
				                                
				                            </div>
				                            
				                            <div class="form-group col-xs-12">
				                            	
				                                <input type="text" min="5" placeholder="Mínimo $5 USD" value="" name="other-amount">
				                                
				                            </div>
				                            <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Donar Ahora</button></div>
				                        </div>
				                    </div>
				                    
				                    <hr>
				                    
				                    <!--Form Portlet
				                    <div class="form-portlet">
				                    	<h3>Billing Information</h3>
				                        
				                        <div class="row clearfix">
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Card Number <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="Card Number" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Security Code (CVC) <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="Security Code" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Nombre <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="First Name" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Email <span class="required">*</span></div>
				                                <input type="email" required="" placeholder="Email" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">WhatsApp <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="Phone" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">País <span class="required">*</span></div>
				                                <input type="text" required="" placeholder="Address 1" value="" name="name">
				                            </div>
				                            
				                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
				                            	<div class="field-label">Tipo de Donación <span class="required">*</span></div>
				                                <select>
				                                	<option>Estándar</option>
				                                    <option>Anónima</option>
				                                    
				                                </select>
				                            </div>
				                            
				                            
				                    
						                    <hr>
						                    
						                    
				                            
				                        </div>
				                    </div>
				                    
				                    <hr>-->
				                    
				                    <!--Form Portlet-->
				                    <div class="form-portlet">
				                    	<h3>Otros métodos de pago</h3>
				                        
				                        <div class="payment-option-logo"><img alt="" src="{{ asset('/la-assets/img/resources/payment-logos.png') }}" class="img-responsive"></div>
				                        <br>
				                    </div>
				                    
				                </form>
				            </div>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	                <!-- Modal: donate now Ends -->
				</div>
			</div>
		</div>
	</header> <!-- /.header -->


	<nav class="mainmenu-area stricky">
		<div class="container">
			<div class="navigation pull-left">
				<div class="nav-header">
					<ul>
						<li class="dropdown">
							<a href="#">HealTheWorld</a>
							
						</li>
						<li><a href="about.html">Preguntas Frecuentes</a></li>						
											
						<li class="dropdown">
							<a href="#">Soy Empresa</a>
							<ul class="submenu">
								<li><a href="events-grid.html">Quiero Donar</a></li>
								<li><a href="events-list.html">Software Gratis</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#">Patrocinadores</a>
							<ul class="submenu">
								<li><a href="volunteer-style-one.html">Solicitar llamada de patrocinio</a></li>
								
							</ul>
                        </li>
                        
                        <li><a href="contact.html">Contacto</a></li>
                        
                        <li class="dropdown">
                            @if (Auth::guest())
                             <li><a href="{{ url('/login') }}">Login</a></li>
                             <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                            @else
                             <li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>
                            @endif
                        </li>
					</ul>
				</div>
				<div class="nav-footer">
					<button><i class="fa fa-bars"></i></button>
				</div>
			</div>
			
		</div>
	</nav> <!-- /.mainmenu-area -->


	<section class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<li data-transition="parallaxvertical">
					<img src="{{ asset('/la-assets/img/slides/1.jpg') }}"  alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
					<div class="tp-caption sfl tp-resizeme thm-banner-h1" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="225" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="500">
						Juntos 
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="290" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1000">
						combatiendo COVID-19
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-h3" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="368" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1500">
						Haz parte del cambio
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-p" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="430" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2000">
						Somos una compañía privada <br> no estamos atados a ningún gobierno.
				    </div>
					<div class="tp-caption sfl tp-resizeme" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="505" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2300">
						<a href="#" class="thm-btn">Donar Ahora</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme" 
				        data-x="left" data-hoffset="185" 
				        data-y="top" data-voffset="505" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2600">
				    </div>
				</li>
				<li data-transition="parallaxvertical">
					<img src="{{ asset('/la-assets/img/slides/2.jpg') }}"  alt=""  width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" >
					<div class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="249" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="500">
						Apoyamos Personal Médico!
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="318" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1000">
						Si eres médico y te faltan suministros
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-h3" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="386" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1500">
						Sube tu video!
				    </div>
					<div class="tp-caption sfl tp-resizeme" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="450" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2300">
						<a href="#" class="thm-btn">Subir Video</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme" 
				        data-x="left" data-hoffset="185" 
				        data-y="top" data-voffset="450" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="2600">
						
				    </div>
				</li>
			</ul>
		</div>
	</section>


	<section class="call-to-action">
		<div class="container-fluid">
			<div class="clearfix">
				<div class="call-to-action-corner col-md-4" style="background-image: url('asset/la-assets/img/call-to-action/left-box-bg.jpg');">
					<div class="single-call-to-action">
						<div class="icon-box">
							<div class="inner-box">
								<i class="flaticon-circle"></i>
							</div>						
						</div>
						<div class="content-box">
							<h3>Soy FAMILIA</h3>
							<p>Solicita ayuda accediendo desde aquí </p>
							<button type="button" class="thm-btn inverse" id="btn-abrir-popup" data-dismiss="modal" aria-label="Close">Solicitar</button>
						</div>
					</div>
				</div>
				<div class="call-to-action-center col-md-4" style="background-image: url('asset/la-assets/img/call-to-action/center-box-bg.jpg');">
					<div class="single-call-to-action">
						<div class="icon-box">
							<div class="inner-box">
								<i class="flaticon-social"></i>
							</div>						
						</div>
						<div class="content-box">
							<h3>Soy MÉDICO</h3>
							<p>Te faltan suministros? Solicita ayuda aquí</p>
							<button type="button" class="thm-btn inverse" id="btn-abrir-popup-second" data-dismiss="modal" aria-label="Close">Solicitar</button>
						</div>
					</div>
				</div>
				<div class="call-to-action-corner col-md-4" style="background-image: url('asset/la-assets/img/call-to-action/right-box-bg.jpg');">
					<div class="single-call-to-action">
						<div class="icon-box">
							<div class="inner-box">
								<i class="flaticon-medical"></i>
							</div>						
						</div>
						<div class="content-box">
							<h3>Soy EMPRESA</h3>
							<p>Conoce el estado de Salud de tus empleados desde aquí </p>
							<a href="#" class="thm-btn inverse">GRATIS</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="event-feature sec-padding bg-color-fa">
		<div class="container">
			<div class="row">
	          <div class="col-sm-12 col-md-12 col-lg-6 md-col6-center">
	            <h4 class="sec-color text-uppercase double-line line-left">Últimas Donaciones</h4>
	            <div class="bx-event-carousel">
	              <div class="event">
	                <div class="row">
	                  <div class="col-sm-4">
	                    <div class="event-thumb">
	                      <div class="thumb">
	                        <iframe class="full-width" src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                      </div>
	                      <ul class="event-date">
	                        <li class="date">28</li>
	                        <li class="month">Aug</li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-sm-8">
	                    <div class="event-content">
	                      <h5 class="event-title"><a href="#">Donador: Anónimo </a></h5>
	                      <ul class="event-held list-inline">
	                        <li class="text-555"><i class="fa fa-heart"></i> 5 USD</li>
	                        <li class="text-555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>
	                      </ul>
	                      <p>Familia Beneficiada: Rodríguez Castellanos</p>
	                    </div>
	                  </div>
	                </div>
	              </div>
                <div class="event">
	                <div class="row">
	                  <div class="col-sm-4">
	                    <div class="event-thumb">
	                      <div class="thumb">
	                        <iframe class="full-width" src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                      </div>
	                      <ul class="event-date">
	                        <li class="date">28</li>
	                        <li class="month">Aug</li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-sm-8">
	                    <div class="event-content">
	                      <h5 class="event-title"><a href="#">Donador: Anónimo </a></h5>
	                      <ul class="event-held list-inline">
	                        <li class="text-555"><i class="fa fa-heart"></i> 5 USD</li>
	                        <li class="text-555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>
	                      </ul>
	                      <p>Familia Beneficiada: Rodríguez Castellanos</p>
	                    </div>
	                  </div>
	                </div>
	              </div>
                <div class="event">
	                <div class="row">
	                  <div class="col-sm-4">
	                    <div class="event-thumb">
	                      <div class="thumb">
	                        <iframe class="full-width" src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                      </div>
	                      <ul class="event-date">
	                        <li class="date">28</li>
	                        <li class="month">Aug</li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-sm-8">
	                    <div class="event-content">
	                      <h5 class="event-title"><a href="#">Donador: Anónimo </a></h5>
	                      <ul class="event-held list-inline">
	                        <li class="text-555"><i class="fa fa-heart"></i> 5 USD</li>
	                        <li class="text-555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>
	                      </ul>
	                      <p>Familia Beneficiada: Rodríguez Castellanos</p>
	                    </div>
	                  </div>
	                </div>
	              </div>
                <div class="event">
	                <div class="row">
	                  <div class="col-sm-4">
	                    <div class="event-thumb">
	                      <div class="thumb">
	                        <iframe class="full-width" src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                      </div>
	                      <ul class="event-date">
	                        <li class="date">28</li>
	                        <li class="month">Aug</li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-sm-8">
	                    <div class="event-content">
	                      <h5 class="event-title"><a href="#">Donador: Anónimo </a></h5>
	                      <ul class="event-held list-inline">
	                        <li class="text-555"><i class="fa fa-heart"></i> 5 USD</li>
	                        <li class="text-555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>
	                      </ul>
	                      <p>Familia Beneficiada: Rodríguez Castellanos</p>
	                    </div>
	                  </div>
	                </div>
	              </div>
                <div class="event">
	                <div class="row">
	                  <div class="col-sm-4">
	                    <div class="event-thumb">
	                      <div class="thumb">
	                        <iframe class="full-width" src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                      </div>
	                      <ul class="event-date">
	                        <li class="date">28</li>
	                        <li class="month">Aug</li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-sm-8">
	                    <div class="event-content">
	                      <h5 class="event-title"><a href="#">Donador: Anónimo </a></h5>
	                      <ul class="event-held list-inline">
	                        <li class="text-555"><i class="fa fa-heart"></i> 5 USD</li>
	                        <li class="text-555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>
	                      </ul>
	                      <p>Familia Beneficiada: Rodríguez Castellanos</p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              
	            </div>
	          </div>
	          <div class="col-sm-12 col-md-12 col-lg-6 md-col6-center m-topm50">
	            <h4 class="sec-color text-uppercase double-line line-left">Última Solicitud</h4>
	            <div class="featured-causes">
	              <div class="row">
	                <div class="col-sm-6">
	                  <div class="thumb">
	                    <img class="full-width" src="{{ asset('/la-assets/img/causes/b1.jpg') }}" alt="">
	                    <div class="causes-progress">
	                      
	                      <ul class="list-inline">
	                        <li>Ha Recibido: $25 USD</li>
	                        
	                      </ul>
	                    </div>
	                  </div>
	                </div>
	                <div class="col-sm-6">
	                  <div class="causes-details">
	                    <h3>Familia Chacón Torres</h3>
	                    <p><span class="p-title">Integrantes:</span> 3</p>
                        <p><span class="p-title">Madre:</span> Ausente</p>
                        <p><span class="p-title">Padre:</span> Vendedor Ambulante</p>
                        <p><span class="p-title">Niños:</span> 1 - 3 años</p>
	                    <a class="thm-btn btn-xs" href="#">Donar</a>
	                    <a class="thm-btn inverse btn-xs" href="#">Caso Completo</a>
	                    <h6>No puedes donar? Comparte.</h6>
	                    <ul class="social">
							<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>

						</ul>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
		</div>
	</section>


	<section class="recent-causes sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<h2>Familias sin Donaciones</h2>
				<p>Estas familias aún no reciben ayuda, sé el primero.</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
			<div class="row">

	          <div class="col-sm-12 col-md-4 col-lg-4">
	            <div class="causes sm-col5-center">
	              <div class="thumb">
	                <!--<img class="full-width" alt="" src="img/causes/1.jpg">-->
                    <iframe class="full-width" src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
	                <div class="donate-piechart">
	                </div>
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Familia Spencer</a></h4>
	                <ul class="about-causes list-inline clearfix">
	                  <li class="causes-raised">Integrantes: 5</li>
	                  <li class="causes-goal">Niños: 3</li>
	                </ul>
	                <p>Vivimos en la zona marginada de la ciudad de bogota, solicitamos su ayuda para que mis hijos y yo podamos superar esta dificil situacion</p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"><i class="fa fa-angle-double-right text-white"></i> Conócelos</a>
	                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart text-theme-colored"></i> Sé el Primero</a>
	                </div>
	              </div>
	            </div>
			  </div>
			  
            <div class="col-sm-12 col-md-4 col-lg-4">
	            <div class="causes sm-col5-center">
	              <div class="thumb">
	                <!--<img class="full-width" alt="" src="img/causes/1.jpg">-->
                    <iframe class="full-width" src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
	                <div class="donate-piechart">

	                </div>
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Familia Spencer</a></h4>
	                <ul class="about-causes list-inline clearfix">
	                  <li class="causes-raised">Integrantes: 5</li>
	                  <li class="causes-goal">Niños: 3</li>
	                </ul>
	                <p>Vivimos en la zona marginada de la ciudad de bogota, solicitamos su ayuda para que mis hijos y yo podamos superar esta dificil situacion</p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"><i class="fa fa-angle-double-right text-white"></i> Conócelos</a>
	                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart text-theme-colored"></i> Sé el Primero</a>
	                </div>
	              </div>
	            </div>
	          </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
	            <div class="causes sm-col5-center">
	              <div class="thumb">
	                <!--<img class="full-width" alt="" src="img/causes/1.jpg">-->
                    <iframe class="full-width" src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
	                <div class="donate-piechart">

	                </div>
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Familia Spencer</a></h4>
	                <ul class="about-causes list-inline clearfix">
	                  <li class="causes-raised">Integrantes: 5</li>
	                  <li class="causes-goal">Niños: 3</li>
	                </ul>
	                <p>Vivimos en la zona marginada de la ciudad de bogota, solicitamos su ayuda para que mis hijos y yo podamos superar esta dificil situacion</p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"><i class="fa fa-angle-double-right text-white"></i> Conócelos</a>
	                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart text-theme-colored"></i> Sé el Primero</a>
	                </div>
	              </div>
	            </div>
	          </div>
	          
	        </div>
            
		</div>
	</section>


	<section class="overlay-white sec-padding parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 promote-project text-center">
					<h3>Podrías ser tú</h3>
					<div class="sec-title colored text-center">
						<span class="decor">
							<span class="inner"></span>
						</span>
					</div>
					<h2>Haz parte de la solución</h2>
					<p>$5 USD no te harán más rico, o más pobre, pero para muchas familias 5 USD pueden significar una verdadera esperanza de vida.</p>
					<a href="#" class="thm-btn">Donar</a>
                    <a href="#" class="thm-btn inverse">Mapa COVID-19</a>
				</div>
			</div>
		</div>
	</section>



	<section class="footer-call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-md-9 sm-text-center">
					<h3>LEE NUESTRA POLÍTICA ANTICORRUPCIÓN</h3>
					<p>Los gobiernos tienden a malversar los recursos, nosotros somos una empresa privada que busca hacer el cambio.</p>
				</div>
				<div class="col-md-3 text-right sm-text-center">
					<a href="#" class="thm-btn inverse m-tops15">LEE NUESTRA POLÍTICA</a>
				</div>
			</div>
		</div>
	</section>


	


	<section class="fact-counter-wrapper sec-padding parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 md-text-center">
					<h2>Nuestros datos en <b>tiempo real.</b>
					<a href="#" class="thm-btn inverse m-btmm40">Compartir vía WhatsApp</a>
				</div>
				<div class="col-lg-6 col-md-12 md-text-center">
					<div class="single-fact">
						<div class="icon-box">
							<i class="flaticon-shapes-2"></i>
						</div>
						<span class="timer" data-from="10" data-to="365" data-speed="5000" data-refresh-interval="50">365</span>
						<p>Donaciones</p>
					</div>
					<div class="single-fact">
						<div class="icon-box">
							<i class="flaticon-people-3"></i>
						</div>
						<span class="timer" data-from="10" data-to="2200" data-speed="5000" data-refresh-interval="50">155</span>
						<p>Entregado USD</p>
					</div>
					<div class="single-fact">
						<div class="icon-box">
							<i class="flaticon-hands"></i>
						</div>
						<span class="timer" data-from="10" data-to="155" data-speed="5000" data-refresh-interval="50">2200 USD</span>
						<p>Familias</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!--<section class="sec-padding meet-Volunteer">
		<div class="container">
			<div class="row">
				<div class="col-xs-10">
					<div class="sec-title text-left">
						<h2>Voluntarios</h2>
						<p>Gente y Empresas que le ponen el alma</p>
						<span class="decor"><span class="inner"></span></span>
					</div>
				</div>
			</div>
			<div class="clearfix">
				<div class="team-carousel owl-carousel owl-theme">
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Muhibbur Rashid</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/2.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Rashed Kabir</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/3.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Jannatul Ferdous</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/4.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Ashikur Rahman</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/1.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Muhibbur Rashid</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/2.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Rashed Kabir</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/3.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Jannatul Ferdous</h3>						
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
					<div class="item">
						<div class="single-team-member">
							<div class="img-box">
								<img src="img/team/4.jpg" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Ashikur Rahman</h3>
							<span>Businessman</span>
							<p>Lorem ipsum dolor sit amet, sea dolor essent nostrud no, pro no vidit aterum mediocritatem.</p>
							<a href="volunteer-profile.html" class="thm-btn">View Profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->


	<section class="sec-padding testimonials-wrapper parallax-section">
		<div class="container">
			<div class="sec-title colored text-center">
				<h2>Agradecimientos</h2>
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>
			<div class="testimonaials-carousel owl-carousel owl-theme">
				<div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
                        <iframe src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<h3>Familia Pérez</h3>
						<span>Colombia</span>
					</div>
				</div>
                <div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
                        <iframe src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<h3>Familia Pérez</h3>
						<span>Colombia</span>
					</div>
				</div>
                <div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
                        <iframe src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<h3>Familia Pérez</h3>
						<span>Colombia</span>
					</div>
				</div>
                <div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
                        <iframe src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<h3>Familia Pérez</h3>
						<span>Colombia</span>
					</div>
				</div>
                <div class="item">
					<div class="single-testimonaials">
						<div class="qoute-box">
							<i class="qoute">“</i>
						</div>
                        <iframe src="https://www.youtube.com/embed/01OlWfW24eQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<h3>Familia Pérez</h3>
						<span>Colombia</span>
					</div>
				</div>
				
			</div>
		</div>
	</section>


	


	<section class="bg-color-eee p_40">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients-carousel owl-carousel owl-theme">
						<div class="item">
							<div class="img-box">
								<img src="{{ asset('/la-assets/img/clients/logo-6.png') }}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{ asset('/la-assets/img/clients/logo-7.png') }}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{ asset('/la-assets/img/clients/logo-8.png') }}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{ asset('/la-assets/img/clients/logo-9.png') }}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{ asset('/la-assets/img/clients/logo-10.png') }}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{ asset('/la-assets/img/clients/logo-7.png') }}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{ asset('/la-assets/img/clients/logo-7.png') }}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{ asset('/la-assets/img/clients/logo-10.png') }}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="overlay" id="overlay">
			<div class="popup" id="popup">
			<button type="button" class="close" id="btn-cerrar-popup" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Registrate como Familia</h3>
				<form action="{{url('admin/familias')}}" method="POST">
				{{ csrf_field() }}
					<div class="contenedor-inputs">

						<label for="Nombre"> {{'Nombre'}} <span class="required"></span> </label>
						<input type="text" name="Nombre" id="Nombre" value="">

						<label for="Nombre"> {{'Integrantes'}} <span class="required"></span> </label>
						<input type="number" name="Integrantes" id="Integrantes" value="">

						<label for="Nombre"> {{'Niños'}} <span class="required"></span> </label>
						<input type="number" name="Niños" id="Niños" value="">
											
						<label for="Nombre"> {{'Descripcion'}} <span class="required"></span> </label>
						<input type="text" name="Descripcion" id="Descripcion" value="">

						<label for="Nombre"> {{'Email'}} <span class="required"></span> </label>
						<input type="email" name="Email" id="Email" value="">

					</div>
					<input type="submit" class="thm-btn inverse" value="Registrar">
				</form>
			</div>
		</div>
							
		<div class="overlay-second" id="overlay-second">
			<div class="popup-second" id="popup-second">
			<button type="button" class="close" id="btn-cerrar-popup-second" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Registrate como Medico</h3>
				<form action="{{url('admin/medicos')}}" method="POST">
				{{ csrf_field() }}
					<div class="contenedor-inputs-second">

						<label for="Nombre"> {{'Numero de Targeta Profesional'}} <span class="required">*</span> </label>
						<input type="text" name="numero_profesional" id="numero_profesional" value="">

						<label for="Nombre"> {{'Nombre'}} <span class="required"></span> </label>
						<input type="text" name="Nombre" id="Nombre" value="">

						<label for="Nombre"> {{'Cedula'}} <span class="required"></span> </label>
						<input type="text" name="Cedula" id="Cedula" value="">
											
						<label for="Nombre"> {{'Direccion'}} <span class="required"></span> </label>
						<input type="text" name="Direccion" id="Direccion" value="">

						<label for="Nombre"> {{'Telefono'}} <span class="required"></span> </label>
						<input type="text" name="Telefono" id="Telefono" value="">

						<label for="Nombre"> {{'Email'}} <span class="required"></span> </label>
						<input type="email" name="Email" id="Email" value="">

					</div>
					<input type="submit" class="thm-btn inverse" value="Registrar">
				</form>
			</div>
		</div>
	
	<footer class="footer sec-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget about-widget">
						<a href="#">
							<img src="{{ asset('/la-assets/img/resources/footer-logo.png') }}" alt="Awesome Image"/>
						</a>
						<p>No hacemos parte de ningún gobierno, somos una causa incorruptible. </p>
                        <p><strong>COMPARTE NUESTRA CAUSA</strong></p>
						<ul class="social">
							<li><a href="https://wa.me/573103254420?texto=Me%20interesa%20in%20el%20auto%20que%20vendes"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				</ul>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget contact-widget">
						<h3 class="title">Contactenos</h3>
						<form action="http://hasan.themexlab.com/new/charity-home-html/inc/sendemail.php" class="contact-form" id="footer-cf">
							<input type="text" name="name"  placeholder="Full Name">
							<input type="text" name="email" placeholder="Email Address" >
							<textarea name="message" placeholder="Your Message"></textarea>
							<button type="submit">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<section class="footer-bottom">
		<div class="container text-center">
			<p>Venceremos el <a href="#">COVID-19</a> juntos</p>
		</div>
	</section>



	<!-- popup -->
	<script src="{{ asset('/la-assets/js/popup.js') }}"></script>
	<!-- main jQuery -->
	<script src="{{ asset('/la-assets/js/jquery-1.11.1.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('/la-assets/js/bootstrap.min.js') }}"></script>
	<!-- bx slider -->
	<script src="{{ asset('/la-assets/js/jquery.bxslider.min.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ asset('/la-assets/js/owl.carousel.min.js') }}"></script>
	<!-- validate -->
	<script src="{{ asset('/la-assets/js/jquery-parallax.js') }}"></script>
	<!-- validate -->
	<script src="{{ asset('/la-assets/js/validate.js') }}"></script>
	<!-- mixit up -->
	<script src="{{ asset('/la-assets/js/jquery.mixitup.min.js') }}"></script>
	<!-- fancybox -->
	<script src="{{ asset('/la-assets/js/jquery.fancybox.pack.js') }}"></script>
	<!-- easing -->
	<script src="{{ asset('/la-assets/js/jquery.easing.min.js') }}"></script>
	<!-- circle progress -->
	<script src="{{ asset('/la-assets/js/circle-progress.js') }}"></script>
	<!-- appear js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.4.1/jquery.appear.min.js"></script>
	<!-- count to -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
	<!-- gmap helper -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!-- gmap main script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.25/gmaps.min.js"></script>

	<!-- isotope script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
        
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	
	<!-- revolution scripts -->

	<script src=" {{ asset('/la-assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src=" {{ asset('/la-assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('/la-assets/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('/la-assets/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('/la-assets/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('/la-assets/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('/la-assets/revolution/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('/la-assets/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('/la-assets/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('/la-assets/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('/la-assets/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>


	<!-- thm custom script -->
	<script src="{{ asset('/la-assets/js/custom.js') }}"></script>


</body>

<!-- Mirrored from hasan.themexlab.com/new/charity-home-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Mar 2020 22:23:02 GMT -->
</html>