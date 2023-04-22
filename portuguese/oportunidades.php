<?php include 'includesPT/headerv2.php'?>

<div class="breatcome_area d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title">
						<div class="breatcome_title_inner pb-2">
							<h2>Oportunidades | Shore Consulting</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
        </div>    
		<div class="container">
			<div class="row">
							<?php
  								require "includesPT/BDi.php";
							$stmt = $DB->prepare("SELECT id,emprego,descritivo,requisitos FROM oportunidades WHERE 1 ORDER BY data DESC");
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
									<form action='oportunidade' method='GET' id='ff'>
									<input name='idEmprego' id='idEmprego' type='hidden' value='$id'>
									<div class='service_style_one_button pt-3'>
									<a><button class='btn' type='submit' name='submit' id='submit'>Saber Mais</button><i class='fa fa-long-arrow-right'></i></a>
									</div>
									</form>
									</div>
								</div>
							</div>
								";
							$stmt->free_result();
							?>
    </div>

			<!-- start pagination
			<div class="row">
				<div class="col-md-12">
					<div class="paginations">				
						<ul class="page-numbers">
							<li><span aria-current="page" class="page-numbers current">1</span></li>
							<li><a class="page-numbers" href="#">2</a></li>
							<li><a class="page-numbers" href="#">3</a></li>
							<li><a class="page-numbers" href="#">4</a></li>
							<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>-->
		</div>
	</div>



<?php include 'includesPT/footer.php'?>
	
<?php include 'includesPT/scripts.php'?>