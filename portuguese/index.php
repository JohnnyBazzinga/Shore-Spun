<?php include 'includesPT/header.php'?>

<div class="aside-admin-panel">
			<ul>
				<li>
					<button class="panel-button facebook"></button>
					<div class="admin-panel-content">
						<h3 class="panel-title">Segue-nos no Facebook</h3>
						<div class="fb-page fb_iframe_widget" data-height="350" data-href="https://www.facebook.com/shorespun" data-hide-cover="false" data-show-facepile="true" data-show-posts="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=225&amp;height=350&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fshorespun&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true"><span style="vertical-align: bottom; width: 225px; height: 350px;"><iframe name="f2aea5a3bb8c9f4" width="1000px" height="350px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.3/plugins/page.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfda78359f24d%26domain%3Dvelikorodnov.com%26origin%3Dhttps%253A%252F%252Fvelikorodnov.com%252Ff326811e6c40534%26relation%3Dparent.parent&amp;container_width=225&amp;height=350&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fshorespun&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true" style="border: none; visibility: visible; width: 225px; height: 350px;" class=""></iframe></span></div>
					</div>
				</li>
				<button style='margin-bottom: 5px;' onclick="location.href='http://www.linkedin.com/company/1831104';" class="panel-button linkedin"></button>
				<li>
					<button class="panel-button googlemap"></button>
					<div class="admin-panel-content" style='overflow-y: scroll; height:350px;'>
						<h3 class="panel-title">Localização</h3>
							<ul class="info-list overflow-auto">
								<li>
									<div class="clearfix m_bottom_15">
										<i class="fa fa-map-marker"></i>
										<p class="contact_e">
										<?php
						   	require "includesPT/BDi.php";
							$stmt = $DB->prepare("SELECT morada FROM informacoesgerais WHERE 1");
							$stmt->execute();
							$stmt->bind_result($morada);
							while ($stmt->fetch())
								echo "$morada";
							$stmt->free_result();
							?>

										</p>
									</div>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12449.211582347274!2d-9.143284!3d38.733811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x828d07ffd09dd64b!2sShore!5e0!3m2!1spt-PT!2spt!4v1622718669451!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
															<li>
									<div class="clearfix">
										<i class="fa fa-phone"></i>
										<p class="contact_e">
										<?php
							$stmt = $DB->prepare("SELECT contacto FROM informacoesgerais WHERE 1");
							$stmt->execute();
							$stmt->bind_result($contacto);
							while ($stmt->fetch())
								echo "$contacto";
							$stmt->free_result();
							?>
										</p>
									</div>
								</li>
								<li>
									<div class="clearfix">
										<i class="fa fa-envelope"></i>
										<?php
							$stmt = $DB->prepare("SELECT email FROM informacoesgerais WHERE 1");
							$stmt->execute();
							$stmt->bind_result($email);
							while ($stmt->fetch())
								echo "<a class='contact_e' href='mailto:$email'>$email</a>";
							$stmt->free_result();
							?>
									</div>
								</li>

						</ul><!--/ .info-list-->

					</div><!--/ .admin-panel-content-->

				</li>

							</ul>
			</div>


   <!--==================================================-->
   <!----- Start Slider Area ----->
   <!--==================================================-->
   <div class="slider_list owl-carousel">
	   <div class="slider_area d-flex align-items-center slider1">
		   <div class="container" style='margin-bottom: 200px; text-align: center;'>
			   <div class="row">
				   <!--Start Single Portfolio -->
				   <div class="col-lg-12">
					   <div class="single_slider">
						   <div class="slider_content">
							   <div class="slider_text">
								   <div class="slider_text_inner">
									   <h5>Shore | Consulting</h5>
									   <h1>We are Shore!</h1>
								   </div>
								   <div class="slider_button pt-5 d-flex">
								   </div>
								   <div class="slider-video">
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>
	   <div class="slider_area d-flex align-items-center slider2">
		   <div class="container" style='margin-bottom: 200px; text-align: center;'>
			   <div class="row">
				   <!--Start Single Portfolio -->
				   <div class="col-lg-12">
					   <div class="single_slider">
						   <div class="slider_content">
							   <div class="slider_text">
								   <div class="slider_text_inner">
									   <h5>Shore | Consulting</h5>
									   <h1>We are Innovation!</h1>
								   </div>
								   <div class="slider_button pt-5 d-flex">
								   </div>
								   <div class="slider-video">
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>

   </div>
   <!--==================================================-->
   <!----- End Slider Area ----->
   <!--==================================================-->

   <!--==================================================-->
   <!----- Start Flipbox Top Feature Area ----->
   <!--==================================================-->
   <div class="flipbox_area top_feature">
	   <div class="container">
		   <div class="row nagative_margin">
                                    <?php
                   $stmt = $DB->prepare("SELECT tituloMenu,descricaoMenu,iconMenu FROM menusgiratorios WHERE 1 LIMIT 4");
                   $stmt->execute();
                   $stmt->bind_result($titulo,$descricao,$icon);
                   while ($stmt->fetch())
                      echo "
			   <div class='col-lg-3 col-md-6 col-sm-12 col-xs-6'>
				   <div class='techno_flipbox mb-30'>
					   <div class='techno_flipbox_font'>
							   <div class='techno_flipbox_inner'>
								   <div class='techno_flipbox_icon'>
									   <div class='icon'>
										   <i class='$icon'></i>
									   </div>
								   </div>
								   <div class='flipbox_title'>
									   <h3>$titulo</h3>
								   </div>
							   </div>
					   </div>
					   <div class='techno_flipbox_back'>
						   <div class='techno_flipbox_inner'>
							   <div class='flipbox_title'>
								   <h3>$titulo</h3>
							   </div>
							   <div class='flipbox_desc'>
								   <p>$descricao</p>
							   </div>
						   </div>
					   </div>
				   </div>
			   </div>
                      ";
                   $stmt->free_result();


           ?>
		   </div>
	   </div>
   </div>
   <!--==================================================-->
   <!----- End Techno Flipbox Top Feature Area ----->
   <!--==================================================-->
   <div id="quemsomos"></div>
   <!--==================================================-->
   <!----- Start Techno About Area ----->
   <!--==================================================-->
   <div class="about_area pt-70 pb-100" >

	   <div class="container">
		   <div class="row">
			   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
				   <div class="single_about_thumb mb-3">
					   <div class="single_about_thumb_inner">
						   <img src="assets/img/about-img.png" alt="" />
					   </div>
				   </div>
				   <div class="single_about_shape">
					   <div class="single_about_shape_thumb bounce-animate">
						   <img src="assets/img/about-circle.png" alt="" />
					   </div>
				   </div>
			   </div>
			   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
				   <div class="section_title text_left mb-40 mt-3">
					   <div class="section_sub_title uppercase mb-3">
						   <h6><?php $birthdate = new DateTime("2007-01-01");
$today     = new DateTime();
$interval  = $today->diff($birthdate);
echo $interval->format('%y ANOS DE EXPERIÊNCIA');?></h6>
					   </div>
					   <div class="section_main_title">
						   <h1>Quem Somos</h1>
					   </div>
					   <div class="em_bar">
						   <div class="em_bar_bg"></div>
					   </div>
					   <div class="section_content_text pt-4">
						   <p>A Shore é uma empresa de consultoria na área de TI, com uma abordagem focada nos nossos colaboradores e na satisfação dos seus parceiros.
						   Apresentamos sempre dois pontos que constituem o nosso eixo de actuação:</p>
					   </div>
				   </div>
				   <div class="singel_about_left mb-30">
					   <div class="singel_about_left_inner mb-3">
						   <div class="about_icon mr-4">
							   <div class="icon mt-3">
								   <i class="flaticon-padlock"></i>
							   </div>
						   </div>
						   <div class="singel-about-content">
							   <h5>Flexibilidade</h5>
							   <p>A flexibilidade é um dos principais pilares da nossa empresa e permite-nos adaptar rapidamente às necessidades dos nossos colaboradores e parceiros. Isso significa que estamos sempre prontos para mudar e evoluir de acordo com as necessidades de cada projeto.</p>
						   </div>
					   </div>
					   <div class="singel_about_left_inner">
						   <div class="about_icon mr-4">
							   <div class="icon mt-3">
								   <i class="flaticon-code"></i>
							   </div>
						   </div>
						   <div class="singel-about-content">
							   <h5>Rapidez</h5>
							   <p>A rapidez é outro ponto-chave da nossa abordagem. Temos a capacidade de apresentar soluções viáveis e sustentáveis de forma rápida e eficiente, para que os nossos colaboradores e parceiros possam continuar a crescer e desenvolver-se.</p>
						   </div>
					   </div>
				   </div>
			   </div>

		   </div>
	   </div>
   </div>
   <!--==================================================-->
   <!----- End About Area ----->
   <!--==================================================-->


   <div id="servicos"></div>
   <!--==================================================-->
   <!----- Start  Flipbox Area ----->
   <!--==================================================-->
   <div class="flipbox_area pt-85 pb-70" style="background-image:url(assets/img/slider/slider-4.jpg)";>
	   <div class="container">
		   <div class="row">
			   <div class="col-lg-12">
				   <div class="section_title text_center white mb-55">
					   <div class="section_sub_title uppercase mb-3">
						   <h6>Serviços</h6>
					   </div>
					   <div class="section_main_title">
						   <h1>Área de Desenvolvimento</h1>
					   </div>
             <p>

             </p>
					   <div class="em_bar">
						   <div class="em_bar_bg"></div>
					   </div>
				   </div>
			   </div>
		   </div>
		   <div class="row">
                           <?php
                   $stmt = $DB->prepare("SELECT nomeServico,detalhesServico,icon FROM servicos WHERE 1 LIMIT 6");
                   $stmt->execute();
                   $stmt->bind_result($nome,$desc,$icon);
                   while ($stmt->fetch())
                      echo "
          <div class='col-lg-4 col-md-6 col-sm-12 col-xs-6'>
            <div class='techno_flipbox mb-30 zoom'>
					   <div class='techno_flipbox_font' style='    min-height: 250px;
								height: auto;
								box-shadow: 0px 1px 51.3px 5.7px rgb(137 143 156 / 15%);
								-webkit-backface-visibility: initial;
								backface-visibility: inherit;
								transform: rotateX(0);
								-webkit-transform: rotateX(0);
								-webkit-transform-style: flat;
								transform-style: flat;
								transition: auto;
								position: relative;'>
							   <div class='techno_flipbox_inner'>
								   <div class='techno_flipbox_icon'>
									   <div class='icon'>
										   <i class='$icon'></i>
									   </div>
								   </div>
								   <div class='flipbox_title'>
									   <h3>$nome</h3>
								   </div>
								   <div class='flipbox_desc'>
									   <p>$desc</p>
								   </div>
							   </div>
					   </div>
				   </div>
           </div>
                      ";
                   $stmt->free_result();


           ?>
			   </div>
		   </div>
	   </div>
   </div>

<div id="oportunidades"></div>
   <!--==================================================-->
   <!----- End Flipbox Area ----->
   <!--==================================================-->
   <div class="service_area bg_color2 pt-85 pb-75">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text_center mb-55">
						<div class="section_sub_title uppercase mb-3">
							<h6>Shore Consulting</h6>
						</div>
						<div class="section_main_title">
							<h1>Oportunidades</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">

						<?php
							$stmt = $DB->prepare("SELECT id,emprego,descritivo,requisitos FROM oportunidades WHERE 1 ORDER BY data DESC LIMIT 6");
							$stmt->execute();
							$stmt->bind_result($id,$emprego,$descritivo,$requisitos);
							while ($stmt->fetch())
								echo "
								<div class='col-lg-4 col-md-6 col-sm-12'>
								<div class='service_style_one text_center pt-40 pb-40 pl-3 pr-3 mb-4'>
									<div class='service_style_one_icon mb-30'>
										<i class='fa fa-cog'></i>
									</div>
									<div class='service_style_one_title mb-30'>
										<h4>$emprego</h4>
									</div>
									<div class='service_style_one_text'>
										<p>".($descritivo == NULL ? "Requisitos: " .substr($requisitos,0,120) : substr($descritivo,0,120))."...</p>
									</div>
									<div class='service_style_one_button pt-3'>
									<form action='oportunidade' method='GET'>
									<input name='idEmprego' id='idEmprego' type='hidden' value='$id'>
									<div class='service_style_one_button pt-3'>
									<a><input type='submit' value='Saber Mais' style='padding: 0; border: none; background: none;'> <i class='fa fa-long-arrow-right'></i></a>
									</div>
									</form>
									</div>
								</div>
								</div>
								";
							$stmt->free_result();
						?>

				<div class="col-lg-12 col-md-12 col-sm-12">
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="button two" style='text-align:center;'>
							<a href="oportunidades">Ver Mais</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


   <!--==================================================-->
   <!----- Start Call Do Action Area ----->
   <!--==================================================-->
   <div class="call_do_action pt-85 pb-130 bg_color" style="background-image:url(assets/img/call-bg.png)">
	   <div class="container">
		   <div class="row">
			   <div class="col-lg-12" style='text-align: center;'>
				   <div class="section_title white text_left mb-60 mt-3">
					   <div class="phone_number mb-3">
						   <h5>
						   <?php
							$stmt = $DB->prepare("SELECT contacto FROM informacoesgerais WHERE 1");
							$stmt->execute();
							$stmt->bind_result($contacto);
							while ($stmt->fetch())
								echo "$contacto";
							$stmt->free_result();
							?>
			   				</h5>
					   </div>
					   <div class="section_main_title">
						   <h1>Procuramos talento, honestidade e entrega.</h1>
					   </div>
				   </div>
			   </div>
			   <div class="col-lg-3">
			   </div>
		   </div>
	   </div>
   </div>
   <!--==================================================-->
   <!----- End Call Do Action Area ----->
   <!--==================================================-->

	<!--==================================================-->
	<!----- Start Counter Area ----->
	<!--==================================================-->
	<div class="counter_area">
		<div class="container">
			<div class="row cntr_bg_up nagative_margin pt-50 pb-45" style='margin-top: -126px;'>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">1000</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Clientes </h5>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">500</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Projectos Completos</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">	<div id="contactar"></div>
							<h1><span class="counter">50</span><span>+</span> </h1>
						</div>
						<div class="counter_desc">
							<h5>Prémios</h5>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Counter Area ----->
	<!--==================================================-->


	<!--==================================================-->
	<!----- Start Contact Area ----->
	<!--==================================================-->
	<div class="main_contact_area style_three pt-80 pb-90">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="section_title text_left mb-50 mt-3">
						<div class="section_sub_title uppercase mb-3">
							<h6>Contactos</h6>
						</div>
						<div class="section_main_title">
							<h1>Entre em Contacto</h1>
						</div>
						<div class="section_title_text pt-2">
							<p>A Shore é uma empresa de consultoria na área de TI, com uma abordagem focada nos nossos colaboradores e na satisfação dos seus parceiros.</p>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
					<div class="contact_address">
						<div class="contact_address_company mb-3">
							<ul>
									<?php
										$stmt = $DB->prepare("SELECT morada,contacto,email FROM informacoesgerais WHERE 1");
										$stmt->execute();
										$stmt->bind_result($morada,$contacto,$email);
										while ($stmt->fetch())
											echo "
											<li><i class='fa fa-envelope-o'></i><span><a href='#'>$email</a></span></li>
											<li><i class='fa fa-mobile'></i><span>$contacto</span></li>
											<li><i class='fa fa-map-marker'></i><span>$morada</span></li>
											";
										$stmt->free_result();
									?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact_from">
						<div class="contact_from_box">
							<div class="contact_title pb-4">
								<h3>Deixe-nos a sua mensagem</h3>
							</div>
							<form action="phpcodes/contacto.php" method="POST" onsubmit="myButtonValue.disabled = true; return true;">
								<div class="row">
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<input type="text" name="name"  placeholder="Nome" required>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<input type="email" name="email" placeholder="Email" required>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-30">
											<textarea name="message" id="message" cols="30" rows="10" placeholder="Mensagem" style="resize: none;" required></textarea>
										</div>
										<div class="quote_btn">
											<button class="btn" type="submit" name='submitPT' id='submitPT'>Enviar</button>
										</div>
									</div>
								</div>
							</form>
							<p class="form-message"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Contact Area ----->
	<!--==================================================-->


	<div id="noticias"></div>
	<!--==================================================-->
	<!----- Start Blog Area ----->
	<!--==================================================-->
	<div class="blog_area bg_color2 pt-85 pb-75">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title text_left mb-60 mt-3">
						<div class="section_sub_title uppercase mb-3">
							<h6>Ultimas novidades</h6>
						</div>
						<div class="section_main_title">
							<h1>Notícias</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>

					</div>
				</div>
				<div class="col-lg-3">
					<div class="section_button mt-50">
						<div class="button two">
							<a href="noticias">Ver Tudo</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
										<?php
						$stmt = $DB->prepare("SELECT idNoticia,noticia,descNoticia,data,imagem FROM noticias WHERE 1 ORDER BY data DESC LIMIT 3");
						$stmt->execute();
						$stmt->bind_result($idNoticia,$noticia, $descNoticia, $data, $imagem);
						while ($stmt->fetch())
						if ($imagem == NULL) {
							echo "
							<div class='col-lg-4 col-md-6 col-sm-12'>
							<div class='single_blog mb-4'>
              <form action='noticia' method='GET'>
							<div class='single_blog_thumb'>
							<a><input type='image' src='assets/img/shore_default.png' value='submit' style='padding: 0; border: none; background: none; width: 100%; height: 200px;'></a>
							</div>

							<div class='single_blog_content pt-4 pl-4 pr-4'>
							<div class='techno_blog_meta'>
								<a href='#'>Shore</a>
								<span class='meta-date pl-3'>",date('F j, Y', strtotime($data)),"</span>
							</div>
							<div class='blog_page_title pb-1'>
								<h3><a><button type='submit' value='Submit' value='$noticia' style='padding: 0; border: none; background: none; text-align: left;'>$noticia</button></a></h3>
							</div>
							<div class='blog_description'>
								<p>",substr($descNoticia,0,75),"...</p>
							</div>
							<div class='blog_page_button pb-4'>
                <input name='idNoticia' id='idNoticia' type='hidden' value='$idNoticia'>
								<a><input type='submit' value='Ler Mais' style='padding: 0; border: none; background: none;'> <i class='fa fa-long-arrow-right'></i></a>
                </form>
							</div>
						</div>

							</div>
						</div>
							";
						} else {
						    $imagem = substr($imagem, 6);
							echo "
							<div class='col-lg-4 col-md-6 col-sm-12'>
							<div class='single_blog mb-4'>
              <form action='noticia' method='GET'>
							<div class='single_blog_thumb'>
							<a><input type='image' src='$imagem' value='submit' style='padding: 0; border: none; background: none; width: 100%; height: 200px;'></a>
							</div>

							<div class='single_blog_content pt-4 pl-4 pr-4'>
							<div class='techno_blog_meta'>
								<a href='#'>Shore</a>
								<span class='meta-date pl-3'>",date('F j, Y', strtotime($data)),"</span>
							</div>
							<div class='blog_page_title pb-1'>
								<h3><a><button type='submit' value='Submit' value='$noticia' style='padding: 0; border: none; background: none; text-align: left;'>$noticia</button></a></h3>
							</div>
							<div class='blog_description'>
								<p>",substr($descNoticia,0,75),"...</p>
							</div>
							<div class='blog_page_button pb-4'>
                <input name='idNoticia' id='idNoticia' type='hidden' value='$idNoticia'>
								<a><input type='submit' value='Ler Mais' style='padding: 0; border: none; background: none;'> <i class='fa fa-long-arrow-right'></i></a>
                </form>
							</div>
						</div>

							</div>
						</div>
							";
						}
						$stmt->free_result();
							?>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Blog Area ----->
	<!--==================================================-->

 <?php include 'includesPT/footer.php'?>

 <?php include 'includesPT/scripts.php'?>
<?php
    if(isset($_SESSION['candidaturaEnviada'])) {
  echo "<script>Swal.fire(
  'Candidatura enviada com sucesso!',
  '',
  'success'
) </script>";
  unset($_SESSION['candidaturaEnviada']);
}

    if(isset($_SESSION['contactoEnviado'])) {
  echo "<script>Swal.fire(
  'Mensagem enviada com sucesso!',
  '',
  'success'
) </script>";
  unset($_SESSION['contactoEnviado']);
}
?>
