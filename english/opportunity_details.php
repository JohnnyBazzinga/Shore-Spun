<?php include 'includesEN/headerv2.php'?>



<div class="breatcome_area d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title">
						<div class="breatcome_title_inner pb-2">
							<h2><?php
							require "includesEN/BDi.php";
							$stmt = $DB->prepare("SELECT  `empregoEn` FROM `oportunidades` WHERE id=?");
        					$stmt->bind_param("s", $_GET['idEmprego']);
							$stmt->execute();
							$stmt->bind_result($emprego);
							while ($stmt->fetch())
							echo "$emprego";
							$stmt->free_result();?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="blog_area blog-details-area pt-100 pb-1" id="blog">
	<div class="container">
			<div class="row">
        <div class="col-lg-3">
        </div>
				<div class="col-lg-3">
					<div class="section_title text_center mb-55">
						<div class="section_sub_title uppercase mb-3">
              <a href="#informacoes"><h6>Informations</h6></a>
						</div>
						<div class="section_main_title">
							<h1></h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="section_title text_center mb-55">
						<div class="section_sub_title uppercase mb-3">
              <a href="#candidatura"><h6>Application</h6></a>
						</div>
						<div class="section_main_title">
							<h1></h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>
					</div>
				</div>
         <div class="col-lg-3">
        </div>
			</div>
        </div>

      <div id='informacoes'></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-12">
							<div class="blog_details">
								<div class="blog_dtl_content">
									<div class="blog_dtl_top_bs pt-2">
										<span>Shore</span>
									</div>
                <?php
							$stmt = $DB->prepare("SELECT empregoEn,descritivoEn,requisitosEn,responsabilidadesEn, InformacaoAdicionalEn,data FROM `oportunidades` WHERE id=?");
        					$stmt->bind_param("s", $_GET['idEmprego']);
							$stmt->execute();
							$stmt->bind_result($emprego,$descritivo,$requisitos,$responsabilidades,$infoAdicional,$data);
							while ($stmt->fetch())
							echo "<h2>$emprego</h2>
									<!-- BLOG META -->
									<div class='techno-blog-meta'>
										<div class='techno-blog-meta-left'>
											<span><i class='fa fa-calendar'></i>",date('F j, Y', strtotime($data)),"</span>
										</div>
									</div>";
							if($descritivo == NULL) { } else { echo "<h6>Information:</h6> <p>$descritivo<p>";}
							echo "<h6>Requirements:</h6> <pre style='white-space: pre-wrap;'><p>$requisitos</p></pre>";
							if($responsabilidades == NULL) { } else { echo "<h6>Responsibilities:</h6> <pre style='white-space: pre-wrap;'><p>$responsabilidades</p></pre>";}
							if($infoAdicional == NULL) { } else { echo "<h6>Additional information</h6> <pre style='white-space: pre-wrap;'><p>$infoAdicional</p></pre>";}
							$stmt->free_result();?>

									<div class="blog_details_dtn_icon">
										<a target='_blank' href="https://www.facebook.com/shorespun/"><i class="fa fa-facebook"></i></a>
										<a target='_blank' href="http://www.linkedin.com/company/1831104"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>



							</div>
						</div>
					</div>
				</div>
				</div>
			</div>

      <div id='candidatura'></div>
    <div class="main_contact_area app pt-80 bg_fixed " style="background-image:url(assets/img/slider/slider14.jpg)">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="single_contact_abs_thumb">
						<img src="assets/img/shape1.png" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title white mb-4">
						<div class="section_sub_title uppercase mb-3">
							<h6>Shore | Consulting</h6>
						</div>
						<div class="section_main_title">
							<h1>Application</h1>
						</div>
					</div>
					<div class="contact_from">
						<form action="phpcodes/addCandidatura.php" method="POST"  enctype="multipart/form-data">
              <input type="hidden" name="empregoCandidatar" placeholder="Nome" value='<?php
							$stmt = $DB->prepare("SELECT emprego FROM `oportunidades` WHERE id=?");
        					$stmt->bind_param("s", $_GET['idEmprego']);
							$stmt->execute();
							$stmt->bind_result($emprego);
							while ($stmt->fetch())
							echo "$emprego";
							$stmt->free_result();?>'>
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="name" placeholder="Name" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="email" name="email" placeholder="Email" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="contacto" placeholder="Contact" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="residencia" placeholder="Residence Area" required>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form_box mb-30">
										<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Description" style='resize:none'></textarea>
                  </div>
                  <div class="form_box mb-30">
                    <div class="section_sub_title uppercase mb-3">
                      <h6 style='color: white;'>Attach your CV</h6>
                    </div>
                   <input style="height: 35px" type="file" name="uploadfile" id="uploadfile" value="" required/>
                    </div>
									<div class="quote_btn">
										<button class="btn" type="submit" name="submitEn" id="submitEn">Send Message</button>
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
	</div>


    <?php include 'includesEN/footer.php'?>

    <?php include 'includesEN/scripts.php'?>
