<?php include 'includesEN/headerv2.php'?>

<div class="breatcome_area d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcome_title">
						<div class="breatcome_title_inner pb-2">
							<h2>News | Shore Consulting</h2>
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
							<h1>News</h1>
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
  require "includesEN/BDi.php";
						$stmt = $DB->prepare("SELECT idNoticia,noticiaEn,descNoticiaEn,data,imagem FROM noticias WHERE 1 ORDER BY data DESC");
						$stmt->execute(); 
						$stmt->bind_result($idNoticia,$noticia, $descNoticia, $data, $imagem);
						while ($stmt->fetch())


						if ($imagem == NULL) {
							echo "
				<div class='col-lg-4 col-md-6 col-sm-12'>
					<div class='single_blog mb-4'>
						<div class='single_blog_thumb pb-4'>
              <form action='new' method='GET'>
							<a><input type='image' src='assets/img/shore_default.png' value='submit' style='padding: 0; border: none; background: none; width: 100%; height: 200px;'></a>
						</div>
						<div class='single_blog_content pl-4 pr-4'>
							<div class='techno_blog_meta'>
								<a href='#'>Shore </a>
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
							</div>
              </form>
						</div>
					</div>
				</div>
							";
						} else {
							echo "
				<div class='col-lg-4 col-md-6 col-sm-12'>
					<div class='single_blog mb-4'>
						<div class='single_blog_thumb pb-4'>
						<form action='new' method='GET'>
						<a><input type='image' src='$imagem' value='submit' style='padding: 0; border: none; background: none; width: 100%; height: 200px;'></a>
						</div>
						<div class='single_blog_content pl-4 pr-4'>
							<div class='techno_blog_meta'>
								<a href='#'>Shore </a>
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
							</div>
              </form>
						</div>
					</div>
				</div>
							";
						}
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
			</div> -->
		</div>
	</div>



<?php include 'includesEN/footer.php'?>
	
<?php include 'includesEN/scripts.php'?>