	<div class="footer-middle pt-100" style="background-image:url(assets/img/call-bg.png)"> 
	<div class="container" style='max-width: 1450px;'>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="widget widgets-company-info">
						<div class="footer-bottom-logo pb-40">
							<img src="assets/img/logofooter.png" alt="" />
						</div>
						<div class="company-info-desc">
							<p>Shore is a consulting company in the IT area, with a differentiating approach, with a greater focus on the people who comprise it and on the satisfaction of its customers. Inserted in an increasingly competitive market, Shore bets on hiring and retaining the best human resources. Shore strives daily to achieve and exceed its goals, more and better is our goal.
							</p>
						</div>
						<div class="follow-company-info pt-3">
							<div class="follow-company-text mr-3">
								<a href="#"><p>Follow Us</p></a>
							</div>
							<div class="follow-company-icon">
								<a href="https://www.facebook.com/shorespun/"><i class="fa fa-facebook"></i></a>
								<a href="http://www.linkedin.com/company/1831104"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="widget widget-nav-menu">
						<h4 class="widget-title pb-4">Services</h4>
						<div class="menu-quick-link-container ml-4">
							<ul id="menu-quick-link" class="menu">
								<li><a href="#">Application Development</a></li>
								<li><a href="#">Database Systems Administration</a></li>
								<li><a href="#">Business Intelligence and RPA</a></li>
								<li><a href="#">Functional and Technical Analysis</a></li>
								<li><a href="#">Project Management</a></li>
							</ul>
						</div>
					</div>
				</div>	
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="widget widgets-company-info">
						<h3 class="widget-title pb-4">Location</h3>
						<div class="footer-social-info">
                <?php
                   $stmt = $DB->prepare("SELECT morada,contacto,email FROM informacoesgerais WHERE 1");
                   $stmt->execute(); 
                   $stmt->bind_result($morada,$contacto,$email);
                   while ($stmt->fetch())
                      echo "<p><span>Address: </span>$morada</p>";
                   $stmt->free_result();
               ?>
              </p>
						</div>
						<div class="footer-social-info">              
                <?php
           $stmt = $DB->prepare("SELECT contacto FROM informacoesgerais WHERE 1");
           $stmt->execute(); 
           $stmt->bind_result($contacto);
           while ($stmt->fetch())
              echo "<p><span>Contacto: </span>$contacto</p>";
           $stmt->free_result();
               ?>
              </p>
						</div>
						<div class="footer-social-info">                
              <?php
           $stmt = $DB->prepare('SELECT email FROM informacoesgerais WHERE 1');
           $stmt->execute(); 
           $stmt->bind_result($email);
           while ($stmt->fetch())
              echo "<p><span>Email: </span>$email</p>";
           $stmt->free_result();
               ?>
						</div>
					</div>					
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div id="em-recent-post-widget">
						<div class="single-widget-item">
							<h4 class="widget-title pb-3">Recent Posts</h4>	
							<?php
						$stmt = $DB->prepare("SELECT idNoticia, noticiaEN,data,imagem FROM noticias WHERE 1 ORDER BY data DESC LIMIT 2");
						$stmt->execute(); 
						$stmt->bind_result($idNoticia,$noticia, $data, $imagem);
						while ($stmt->fetch())

						if ($imagem == NULL) {
									echo "
									<div class='recent-post-item pb-3'>
									<div class='recent-post-image mr-3'>
									<a><input type='image' src='assets/img/shore_default.png' value='submit' style=' width='80' height='80' padding: 0; border: none; background: none; width: 100%; height: 200px;'></a>
									</div>
									<div class='recent-post-text'>
									<h6><a><input type='submit' value='",substr($noticia,0,19),"...' style='color: white; padding: 0; border: none; background: none;'></a></h6>				
										<span class='rcomment'>",date('F j, Y', strtotime($data)),"</span>
									</div>
								</div>
									";
						} else {
							echo "
							<div class='recent-post-item pb-3'>
							<div class='recent-post-image mr-3'>
							<a><input type='image' src='$imagem' value='submit' style=' width='80' height='80' padding: 0; border: none; background: none; width: 100%; height: 200px;'></a>
							</div>
							<div class='recent-post-text'>
							<h6><a><input type='submit' value='",substr($noticia,0,19),"...' style='color: white; padding: 0; border: none; background: none;'></a></h6>					
								<span class='rcomment'>",date('F j, Y', strtotime($data)),"</span>
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
			<div class="row footer-bottom mt-70 pt-3 pb-1">
			
				<div class="col-lg-6 col-md-6">
					<div class="footer-bottom-content">
						<div class="footer-bottom-content-copy">
							<p>© <?php echo date("Y"); ?> Shore. Todos os direitos reservados. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="footer-bottom-right">
						<div class="footer-bottom-right-text">
							<a href="dashboard/login">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>