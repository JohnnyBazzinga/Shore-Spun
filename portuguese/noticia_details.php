<?php include 'includesPT/headerv2.php'?>



<div class="breatcome_area d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title">
						<div class="breatcome_title_inner pb-2">
														<h2><?php     
							require "includesPT/BDi.php";                
							$stmt = $DB->prepare("SELECT  `noticia` FROM `noticias` WHERE idNoticia=?");
        					$stmt->bind_param("s", $_POST['idNoticia']);
							$stmt->execute(); 
							$stmt->bind_result($noticia);
							while ($stmt->fetch())
							echo "$noticia";
							$stmt->free_result();?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="blog_area blog-details-area pt-100 pb-100" id="blog">
      		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text_center mb-55">
						<div class="section_sub_title uppercase mb-3">
							<h6>Shore Consulting</h6>
						</div>
						<div class="section_main_title">
							<h1>Noticia</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
				</div>
			</div>
        </div>  
		<div class="container">		
			<div class="row">	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-12">
							<div class="blog_details">
                <?php                    
							$stmt = $DB->prepare("SELECT  `noticia`,descNoticia,data,imagem FROM `noticias` WHERE idNoticia=?");
        					$stmt->bind_param("s", $_GET['idNoticia']);
							$stmt->execute(); 
							$stmt->bind_result($noticia,$descNoticia,$data,$imagem);
							while ($stmt->fetch())
                if ($imagem == NULL){
							echo "
								<div class='blog_dtl_thumb'>
									<img src='assets/img/shore_default.png' alt=''>
								</div>
								
								<div class='blog_dtl_content'>
									<div class='blog_dtl_top_bs pt-2'>
										<span>Shore</span>
									</div>
									<h2>$noticia</h2>
									<!-- BLOG META -->
									<div class='techno-blog-meta'>
										<div class='techno-blog-meta-left'>
											<span><i class='fa fa-calendar'></i>",date('F j, Y', strtotime($data)),"</span>
										</div>	
									</div>
									<p>$descNoticia</p>
              "; } else {
               echo "
								<div class='blog_dtl_thumb'>
									<img src='$imagem' alt=''>
								</div>
								
								<div class='blog_dtl_content'>
									<div class='blog_dtl_top_bs pt-2'>
										<span>Shore</span>
									</div>
									<h2>$noticia</h2>
									<!-- BLOG META -->
									<div class='techno-blog-meta'>
										<div class='techno-blog-meta-left'>
											<span><i class='fa fa-calendar'></i>",date('F j, Y', strtotime($data)),"</span>
										</div>	
									</div>
									<p>$descNoticia</p>
              ";  
                }
							$stmt->free_result();?>
								  <div class="blog_details_dtn_icon">
										<a href="https://www.facebook.com/shorespun/"><i class="fa fa-facebook"></i></a>
										<a href="http://www.linkedin.com/company/1831104"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
                            
								
								
							</div>
						</div>
          
						<div class="col-md-12">
							<div class="recent_post_dtls mt-5">
								<div class="blog_dt_title mb-4">
									<h4>Noticias Recentes</h4>
								</div>
								<div class="row">
                  <?php
						$stmt = $DB->prepare("SELECT idNoticia,noticia,descNoticia,data,imagem FROM noticias WHERE 1 ORDER BY data DESC LIMIT 2");
						$stmt->execute(); 
						$stmt->bind_result($idNoticia,$noticia, $descNoticia, $data, $imagem);
						while ($stmt->fetch())


						if ($imagem == NULL) {
							echo "
              		<div class='col-lg-6 col-md-6 col-sm-12'>
										<div class='single_blog mb-4'>
											<div class='single_blog_thumb pb-4'>
                      <form action='blog_details.php' method='POST'>
							          <a><input type='image' src='assets/img/shore_default.png' value='submit' style='padding: 0; border: none; background: none; width: 100%; height: 200px;'></a>
											</div>
											<div class='single_blog_content pl-4 pr-4'>
												<div class='techno_blog_meta'>
													<a>Shore </a>
													<span class='meta-date pl-3'>",date('F j, Y', strtotime($data)),"</span>
												</div>
												<div class='blog_page_title pb-1'>
													<h3><a><input type='submit' value='$noticia' style='padding: 0; border: none; background: none;'></a></h3>
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
							echo "
              		<div class='col-lg-6 col-md-6 col-sm-12'>
										<div class='single_blog mb-4'>
											<div class='single_blog_thumb pb-4'>
                      <form action='blog_details.php' method='POST'>
							          <a><input type='image' src='$imagem' value='submit' style='padding: 0; border: none; background: none; width: 100%; height: 200px;'></a>
											</div>
											<div class='single_blog_content pl-4 pr-4'>
												<div class='techno_blog_meta'>
													<a>Shore </a>
													<span class='meta-date pl-3'>",date('F j, Y', strtotime($data)),"</span>
												</div>
												<div class='blog_page_title pb-1'>
													<h3><a><input type='submit' value='$noticia' style='padding: 0; border: none; background: none;'></a></h3>
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
					</div>	
						
				</div>
				</div>

			</div>
		</div>
	</div>


    <?php include 'includesPT/footer.php'?>
	
    <?php include 'includesPT/scripts.php'?>