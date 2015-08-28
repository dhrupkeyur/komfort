





<!DOCTYPE html>

<html>

	<head>

		<title>Conhe&ccedil;a Nossas Lojas em S&atilde;o Paulo | Komfort House Sof&aacute;s e Poltronas</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

			<meta name="viewport" content="width=device-width, initial-scale=1.0">



		<!-- ==========ATTACH ALL LINKS=========== -->



			<!-- =========ATTACH FAVICON LINK-========= -->

			<link rel="icon" href="image/favicon.ico" type="image/x-icon">

			<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
            
              <!-- ==========ATTACH DESCRIPTION=========== -->
            <meta name="description" content="A Maior rede de lojas de sof&aacute;s e poltronas do pa&iacute;s preparou ambientes muito especiais para receb&ecirc;-lo. Venha para a Komfort House e conhe&ccedil;a todos os nossos produtos.">




			 <!--=========ATTACH BOOTSTRAP============ -->

			 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">



			 <!--========= ATTACH STYLE==============  -->

			 <link rel="stylesheet" type="text/css" href="css/style.css"> 



			  <!--========= ATTACH YAMM CSS ============-->

		 	 <link rel="stylesheet" type="text/css" href="css/yamm.css">
<!--========== ATTACH SLIDER CSS============= -->	


			  <!-- ATTACH FONTAWESOME CSS -->

			  <link href="font-awesome-4.2.0/css/font-awesome.css" rel="stylesheet" type="text/css">

		  <!--======== ATTACH GOOGLE FONT LINK======= -->

			   <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>



			   <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->

		    <!--[if lt IE 9]>

		      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

		      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

		    <![endif]-->



		    <!-- ====================================== -->

	</head>



	<body>

		

                <div class="clearfix"></div>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.js"></script>
<section id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-4 col-xs-12">
						<div class="logo left-side">
							<a href="index.php">
								<img src="admin/upload_image/general_images/31842571logo_header.png" class="img-responsive" alt=""\>
							</a>
						</div>	
					</div>	
					<div class="col-md-6 col-sm-8 col-xs-12">
						<div class="right-side pull-right text-right">
							<div class="telephone">
								<h2 class="mbtm0 mtop0"><span class="greyclr">Televendas:</span><br /><span class="coffeeclr">11 3854-7001</span></h2>
							  <p class="greyclr space10">De domingo à domingo, das 9h às 21h.</p>
							</div>
							<div class="search-box">
								<div class="input-group">
									<!-- <a href="" class="pro whiteclr backblue">Provider<i class="fa fa-angle-down"></i></a> -->
									<input type="text" id="searchmeinput" onKeyUp="searchpro(this.value);" class="form-control" placeholder="Qual tipo de sof&aacute; voc&ecirc; procura? Clique aqui e fa&ccedil;a sua pesquisa" style="height:27px;" value="">
									<span class="input-group-btn">
										<img src="image/box_search.png" onclick="javscript:searchme();" style="cursor:pointer"> 
                                        <script type="text/javascript">
											function searchme()
											{
												var sval = document.getElementById("searchmeinput").value;
												if(sval != "")
												{
													window.location.href = "busca-sofas-poltronas-komfort-house.php?s="+sval;
												}
												else
												{
													document.getElementById("searchmeinput").focus();
												}
											}
											
											
											
											
											function searchpro(keyword)
											{
												//alert(keyword);
												//alert(keyword.length);
												
												if(keyword.length >= 2 )
												{
													jQuery(".no_product_li").addClass("show").removeClass("hide");
													jQuery(".product_li").each(function() {
														jQuery(this).addClass("show").removeClass("hide");
														var thislitext = jQuery(this).html();
														var n = thislitext.search(keyword);
														if(n == -1 )
														{
															// hide
															//alert(keyword+" <==> "+thislitext+" <==> hide")
															jQuery(this).addClass("hide").removeClass("show");
														}
														else
														{
															// show
															//alert(keyword+" <==> "+thislitext+" <==> show")
															jQuery(this).addClass("show").removeClass("hide");
															jQuery(".no_product_li").addClass("hide").removeClass("show");
														}
														//alert(keyword+" <==> "+thislitext)
														
													});	
													
													
														
														
													jQuery("#search_procude_list").addClass("show").removeClass("hide");
												}
												else
												{
													jQuery("#search_procude_list").addClass("hide").removeClass("show");
													jQuery(".product_li").each(function() {
														jQuery(this).addClass("hide").removeClass("show");
													});	
												}
											}
										</script>
                                        
                                        
                                        <script type="text/javascript">
											jQuery(document).ready(function() {
												//alert("called...");
												
												
													jQuery(".product_li").click(function() {
														
														var thisproid = jQuery(this).attr('value');
														//alert(thisproid);
														window.location.href = "detalhes-sofas-poltronas-komfort-house.php?id="+thisproid;
													});	
												
												
												
												
											});
										</script>
									</span>
                                    
                                   
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
								</div>
                                 <ul id="search_procude_list" class="hide">
                                    <li class="product_li hide" value="89">Promoção Sofá de Canto<br />Miami</li><li class="product_li hide" value="88">Sofá Cama Snap<br /><br /></li><li class="product_li hide" value="87">Sofá Cama San Diego<br /><br /></li><li class="product_li hide" value="86">Promoção Sofá Cama<br />Barcelona</li><li class="product_li hide" value="85">Poltrona Yoko<br /><br /></li><li class="product_li hide" value="84">Poltrona Vianna<br /><br /></li><li class="product_li hide" value="83">Poltrona Savana<br /><br /></li><li class="product_li hide" value="82">Poltrona Plana<br /><br /></li><li class="product_li hide" value="81">Poltrona Napoli<br /><br /></li><li class="product_li hide" value="80">Poltrona Indiana<br /><br /></li><li class="product_li hide" value="79">Poltrona Helius<br /><br /></li><li class="product_li hide" value="78">Poltrona Califórnia<br /><br /></li><li class="product_li hide" value="65">Sofá Viena<br /><br /></li><li class="product_li hide" value="64">Sofá São Francisco<br /><br /></li><li class="product_li hide" value="63">Promoção Sofá Roma<br /><br /></li><li class="product_li hide" value="61">Poltrona Sophi<br /><br /></li><li class="product_li hide" value="59">Poltrona Luna<br /><br /></li><li class="product_li hide" value="58">Sofá Phoenix<br /><br /></li><li class="product_li hide" value="57">Promoção Sofá Paris<br /><br /></li><li class="product_li hide" value="56">Sofá New York<br /><br /></li><li class="product_li hide" value="55">Promoção Sofá Retrátil<br />Mark</li><li class="product_li hide" value="54">Promoção Sofá Madri<br /><br /></li><li class="product_li hide" value="53">Sofá London<br /><br /></li><li class="product_li hide" value="52">Sofá Lisboa<br /><br /></li><li class="product_li hide" value="51">Sofá Houston<br /><br /></li><li class="product_li hide" value="49">Sofá Dublin<br /><br /></li><li class="product_li hide" value="48">Sofá Dublin 2 lugares<br /><br /></li><li class="product_li hide" value="47">Sofá Los Angeles<br /><br /></li><li class="product_li hide" value="40">Sofá Detroit<br /><br /></li><li class="product_li hide" value="39">Sofá Denver<br /><br /></li><li class="product_li hide" value="38">Sofá Cortez<br /><br /></li><li class="product_li hide" value="37">Sofá Colorado<br /><br /></li><li class="product_li hide" value="36">Sofá Atenas<br /><br /></li><li class="product_li hide" value="35">Sofá Chicago<br /><br /></li><li class="product_li hide" value="34">Sofá Caribe<br /><br /></li><li class="product_li hide" value="33">Promoção Sofá Cairo<br /><br /></li><li class="product_li hide" value="32">Promoção Sofá Retrátil<br />Berlin</li>	                                    <li class="no_product_li hide">Digite a palavra-chave e clique na lupa para pesquisar!</li>
                              </ul>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</section>

	<div class="menu">
				<nav class="navbar yamm navbar-default mbtm0" role="navigation">
				 	 <div class="container">
				  		  <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav ">
				       <!-- <li><a href="index.html">Inicio</a></li>
				        <li><a href="plan.html">Empresa</a></li>-->
                        <li ><a href="index.php">Inicio</a></li><li ><a href="komforthousesofas.php">Empresa</a></li><li class="dropdown  yamm-fw1"><a href="sofas-poltronas-komfort-house.php" class=" dropdown-toggle"  data-toggle="dropdown">Produtos</a><ul class="dropdown-menu">
											<li>
												<div class="yamm-content" align="left">
													<div>
														<ul class="list-unstyled"><li class="Produtos///32"><a href="http://www.komforthouse.com.br/sofas-poltronas-komfort-house.php?cat_id=20">Sofá Convencional</a></li><li class="Produtos///32"><a href="http://www.komforthouse.com.br/sofas-poltronas-komfort-house.php?cat_id=21">Sofá Reto</a></li><li class="Produtos///32"><a href="http://www.komforthouse.com.br/sofas-poltronas-komfort-house.php?cat_id=22">Sofá Retrátil</a></li><li class="Produtos///32"><a href="http://www.komforthouse.com.br/sofas-poltronas-komfort-house.php?cat_id=23">Sofá Retrátil Articulado</a></li><li class="Produtos///32"><a href="http://www.komforthouse.com.br/sofas-poltronas-komfort-house.php?cat_id=24">Sofá de Canto</a></li><li class="Produtos///32"><a href="http://www.komforthouse.com.br/sofas-poltronas-komfort-house.php?cat_id=25">Sofá Cama</a></li></ul><ul class="list-unstyled"><li class="Produtos///32"><a href="http://www.komforthouse.com.br/sofas-poltronas-komfort-house.php?cat_id=26">Poltronas</a></li></ul>
													</div>
												</div>
											</li>
										</ul></li><li ><a href="lojas-komfort-house-sofas.php">Nossas Lojas</a></li><li ><a href="http://www.komforthouse.com.br/komforthouse-sofas-duvidas-frequentes.php">Dúvidas Frequentes</a></li><li ><a href="contato-komforthouse-sofas.php">Contato</a></li>                      </ul>
				    </div><!-- /.navbar-collapse -->
			 	  </div><!-- /.container-fluid -->
				</nav>	
			</div><!-- end menu -->
			
            




		<section class="main-slider">	
					<div class="col-md-12 col-sm-12 col-xs-12 pad0">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

						  <!-- Indicators -->

						  <ol class="carousel-indicators">

                           
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

						     
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>

						     
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>

						     
                            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>

						     
                            <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>

						     
                            <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>

						     
						 <!--   <li data-target="#carousel-example-generic" data-slide-to="1"></li>

						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->

						  </ol>

						  <!-- Wrapper for slides -->

						  <div class="carousel-inner carousel_inner">

                           
						    <div class="item active">

						    <a href="http://www.komforthouse.com.br/komforthousesofas.php"> <img src="admin/upload_image/general_images/26260074komfort-house-a-maior-do-brasil.jpg" alt="..." class="img-responsive" width="100%"></a>

						      <div class="carousel-caption">

						   			

						   	   </div>

						    </div>

                              
						    <div class="item ">

						    <a href="http://www.komforthouse.com.br/detalhes-sofas-poltronas-komfort-house.php?id=57"> <img src="admin/upload_image/general_images/53369185komfort-house-banner-paris.jpg" alt="..." class="img-responsive" width="100%"></a>

						      <div class="carousel-caption">

						   			

						   	   </div>

						    </div>

                              
						    <div class="item ">

						    <a href="http://www.komforthouse.com.br/detalhes-sofas-poltronas-komfort-house.php?id=86"> <img src="admin/upload_image/general_images/12304351komfort-house-banner-sofa-cama-barcelona.jpg" alt="..." class="img-responsive" width="100%"></a>

						      <div class="carousel-caption">

						   			

						   	   </div>

						    </div>

                              
						    <div class="item ">

						    <a href="http://www.komforthouse.com.br/detalhes-sofas-poltronas-komfort-house.php?id=89"> <img src="admin/upload_image/general_images/42872992komfort-house-banner-sofa-de-canto-miami.jpg" alt="..." class="img-responsive" width="100%"></a>

						      <div class="carousel-caption">

						   			

						   	   </div>

						    </div>

                              
						    <div class="item ">

						    <a href="http://www.komforthouse.com.br/detalhes-sofas-poltronas-komfort-house.php?id=63"> <img src="admin/upload_image/general_images/76067383komfort-house-banner-sofa-roma.jpg" alt="..." class="img-responsive" width="100%"></a>

						      <div class="carousel-caption">

						   			

						   	   </div>

						    </div>

                              
						    <div class="item ">

						    <a href="http://www.komforthouse.com.br/lojas-komfort-house-sofas.php"> <img src="admin/upload_image/general_images/81944banner-10-lojas.jpg" alt="..." class="img-responsive" width="100%"></a>

						      <div class="carousel-caption">

						   			

						   	   </div>

						    </div>

                              
                            

						    

						   	  

						  </div>



						  <!-- Controls -->

						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">

						    <span class="ion-ios7-arrow-left"></span>

						  </a>

						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">

						    <span class="ion-ios7-arrow-right"></span>

						  </a>

						</div>

					</div>	

		        </section><!--end top section  -->

		<div class="clearfix"></div>

		<!-- end  strip -->

<!--<div class="bread">

			<div class="container">

				<div class="row">

					<div class="col-md-12">					

						<a href="index.php">home <span class="ion-android-arrow-forward fsize8"></span>	<i class="fa fa-angle-right"></i></a>	

						<span class="fweight"> empresa </span>			

					</div>

				</div>

			</div>	

		</div>-->

		





<div class="bread">
	<div class="container">

				<div class="row">

					<div class="col-md-12">					

						<a href="index.php">home <span class="ion-android-arrow-forward fsize8"></span>	<i class="fa fa-angle-right"></i></a>	

						<span class="fweight"> Lojas </span>			

					</div>

				</div>

			</div>	

	</div>



		<div class="product-content">	

			<div class="container">	

				<h3 class="mbtm0">Nossas Lojas</h3>
                
                  <div class="space20"></div><div class="tenx space20"><img src="image/komfort-house-sofas-nossas-lojas.jpg" class="mautomargin img-responsive" alt=""></div>

               <div class="row">

                
		  	<div class="col-md-6 col-sm-6 col-xs-12 space30">
						<div class="row">
						<div class="col-md-6">
						<div class="item1">

	

								<div class="image" >
<a class="fancybox fancybox.iframe" href="sliderbox.php?id=6">
									<img src="admin/upload_image/general_images/40629091komfort-loja-cidade-dutra.jpg" class="mautomargin img-responsive" alt="Owl Image">
</a>
								</div>
								


								<!-- Modal -->
		

									
							

							

						</div>

						</div>

						<div class="col-md-6">

							<div class="number">

								<h3 class="mtop0">Loja Cidade Dutra</h3>				

								<p>Av. Senador Teotonio Vilela, 1583 <br> Cidade Dutra – São Paulo <br><br>(Próximo ao Supermercado Sonda)<br><br></p>

                                <p>11 2640-8761</p>

                                		

							</div>

								<div class="fspace"></div>




								 <a class="fancybox fancybox.iframe btn btn-default green_btn" href="map.php?mapid=6"><i class="fa fa-map-marker"></i><span>Ver Mapa</span></a>

                             <br>

							
						</div>

						</div>

					</div>

		  		  
		  	<div class="col-md-6 col-sm-6 col-xs-12 space30">
						<div class="row">
						<div class="col-md-6">
						<div class="item1">

	

								<div class="image" >
<a class="fancybox fancybox.iframe" href="sliderbox.php?id=7">
									<img src="admin/upload_image/general_images/23878059komfort-loja-americo.jpg" class="mautomargin img-responsive" alt="Owl Image">
</a>
								</div>
								


								<!-- Modal -->
		

									
							

							

						</div>

						</div>

						<div class="col-md-6">

							<div class="number">

								<h3 class="mtop0">Loja Américo</h3>				

								<p>Rua Américo Brasiliense, 983 <br> Chácara Sto. Antonio – São Paulo<br><br>(Próximo à estatua do Borba Gato)<br><br></p>

                                <p>11 3854-7001</p>

                                		

							</div>

								<div class="fspace"></div>




								 <a class="fancybox fancybox.iframe btn btn-default green_btn" href="map.php?mapid=7"><i class="fa fa-map-marker"></i><span>Ver Mapa</span></a>

                             <br>

							
						</div>

						</div>

					</div>

		  		  
		  	<div class="col-md-6 col-sm-6 col-xs-12 space30">
						<div class="row">
						<div class="col-md-6">
						<div class="item1">

	

								<div class="image" >
<a class="fancybox fancybox.iframe" href="sliderbox.php?id=8">
									<img src="admin/upload_image/general_images/62924985komfort-loja-ipiranga.jpg" class="mautomargin img-responsive" alt="Owl Image">
</a>
								</div>
								


								<!-- Modal -->
		

									
							

							

						</div>

						</div>

						<div class="col-md-6">

							<div class="number">

								<h3 class="mtop0">Loja Ipiranga</h3>				

								<p>Av. Professor Abraão de Morais, 988 <br> Saúde – São Paulo<br><br>(Sentindo Imigrantes, ao lado da Concessionária Volkswagen)</p>

                                <p>11 2275-7394</p>

                                		

							</div>

								<div class="fspace"></div>




								 <a class="fancybox fancybox.iframe btn btn-default green_btn" href="map.php?mapid=8"><i class="fa fa-map-marker"></i><span>Ver Mapa</span></a>

                             <br>

							
						</div>

						</div>

					</div>

		  		  
		  	<div class="col-md-6 col-sm-6 col-xs-12 space30">
						<div class="row">
						<div class="col-md-6">
						<div class="item1">

	

								<div class="image" >
<a class="fancybox fancybox.iframe" href="sliderbox.php?id=9">
									<img src="admin/upload_image/general_images/43469211komfort-loja-santana.jpg" class="mautomargin img-responsive" alt="Owl Image">
</a>
								</div>
								


								<!-- Modal -->
		

									
							

							

						</div>

						</div>

						<div class="col-md-6">

							<div class="number">

								<h3 class="mtop0">Loja Santana</h3>				

								<p>Av. Braz Leme, 1449 <br> Santana – São Paulo<br><br>(Em frente ao Campo de Marte, próximo à Totvs)</p>

                                <p>11 2208-2579</p>

                                		

							</div>

								<div class="fspace"></div>




								 <a class="fancybox fancybox.iframe btn btn-default green_btn" href="map.php?mapid=9"><i class="fa fa-map-marker"></i><span>Ver Mapa</span></a>

                             <br>

							
						</div>

						</div>

					</div>

		  		  
		  	<div class="col-md-6 col-sm-6 col-xs-12 space30">
						<div class="row">
						<div class="col-md-6">
						<div class="item1">

	

								<div class="image" >
<a class="fancybox fancybox.iframe" href="sliderbox.php?id=10">
									<img src="admin/upload_image/general_images/84825913komfort-loja-sao-miguel.jpg" class="mautomargin img-responsive" alt="Owl Image">
</a>
								</div>
								


								<!-- Modal -->
		

									
							

							

						</div>

						</div>

						<div class="col-md-6">

							<div class="number">

								<h3 class="mtop0">Loja São Miguel</h3>				

								<p>Av. Marechal Tito, 1514 <br> São Miguel Paulista – São Paulo<br><br>(Próximo ao Assai Atacadista, da Avenida Marechal Tito)</p>

                                <p>11 2031-0073</p>

                                		

							</div>

								<div class="fspace"></div>




								 <a class="fancybox fancybox.iframe btn btn-default green_btn" href="map.php?mapid=10"><i class="fa fa-map-marker"></i><span>Ver Mapa</span></a>

                             <br>

							
						</div>

						</div>

					</div>

		  		  
		  	<div class="col-md-6 col-sm-6 col-xs-12 space30">
						<div class="row">
						<div class="col-md-6">
						<div class="item1">

	

								<div class="image" >
<a class="fancybox fancybox.iframe" href="sliderbox.php?id=11">
									<img src="admin/upload_image/general_images/74942737komfort-loja-interlagos.jpg" class="mautomargin img-responsive" alt="Owl Image">
</a>
								</div>
								


								<!-- Modal -->
		

									
							

							

						</div>

						</div>

						<div class="col-md-6">

							<div class="number">

								<h3 class="mtop0">Loja Interlagos</h3>				

								<p>Av. Washington Luis, 2737 <br> Jardim Marajoara – São Paulo<br><br>(Ao lado do Pet Center e Drogaria São Paulo)</p>

                                <p>11 5523-3873</p>

                                		

							</div>

								<div class="fspace"></div>




								 <a class="fancybox fancybox.iframe btn btn-default green_btn" href="map.php?mapid=11"><i class="fa fa-map-marker"></i><span>Ver Mapa</span></a>

                             <br>

							
						</div>

						</div>

					</div>

		  		  
		  	<div class="col-md-6 col-sm-6 col-xs-12 space30">
						<div class="row">
						<div class="col-md-6">
						<div class="item1">

	

								<div class="image" >
<a class="fancybox fancybox.iframe" href="sliderbox.php?id=12">
									<img src="admin/upload_image/general_images/8598507komfort-loja-tatuape.jpg" class="mautomargin img-responsive" alt="Owl Image">
</a>
								</div>
								


								<!-- Modal -->
		

									
							

							

						</div>

						</div>

						<div class="col-md-6">

							<div class="number">

								<h3 class="mtop0">Loja Tatuapé</h3>				

								<p>Rua Emília Marengo, 58 <br> Tatuapé – São Paulo<br><br>(Próximo ao Ceret)<br><br></p>

                                <p>11 2268-0984</p>

                                		

							</div>

								<div class="fspace"></div>




								 <a class="fancybox fancybox.iframe btn btn-default green_btn" href="map.php?mapid=12"><i class="fa fa-map-marker"></i><span>Ver Mapa</span></a>

                             <br>

							
						</div>

						</div>

					</div>

		  		  
		  	<div class="col-md-6 col-sm-6 col-xs-12 space30">
						<div class="row">
						<div class="col-md-6">
						<div class="item1">

	

								<div class="image" >
<a class="fancybox fancybox.iframe" href="sliderbox.php?id=16">
									<img src="admin/upload_image/general_images/3159417komfort-loja-osasco.jpg" class="mautomargin img-responsive" alt="Owl Image">
</a>
								</div>
								


								<!-- Modal -->
		

									
							

							

						</div>

						</div>

						<div class="col-md-6">

							<div class="number">

								<h3 class="mtop0">Loja Osasco</h3>				

								<p>Av. dos Autonomistas, 3270<br /> Osasco - São Paulo<br><br>(Depois do Habib’s e antes do McDonald's)</p>

                                <p>11 2576-3236</p>

                                		

							</div>

								<div class="fspace"></div>




								 <a class="fancybox fancybox.iframe btn btn-default green_btn" href="map.php?mapid=16"><i class="fa fa-map-marker"></i><span>Ver Mapa</span></a>

                             <br>

							
						</div>

						</div>

					</div>

		  		  
		  	<div class="col-md-6 col-sm-6 col-xs-12 space30">
						<div class="row">
						<div class="col-md-6">
						<div class="item1">

	

								<div class="image" >
<a class="fancybox fancybox.iframe" href="sliderbox.php?id=17">
									<img src="admin/upload_image/general_images/45244103komfort-loja-perdizes.jpg" class="mautomargin img-responsive" alt="Owl Image">
</a>
								</div>
								


								<!-- Modal -->
		

									
							

							

						</div>

						</div>

						<div class="col-md-6">

							<div class="number">

								<h3 class="mtop0">Loja Perdizes</h3>				

								<p>Av. Sumaré, 1151 <br /> Perdizes – São Paulo<br><br>(Sentindo Estádio do Palmeiras, ao lado da Droga Raia)</p>

                                <p>11 2365-0166</p>

                                		

							</div>

								<div class="fspace"></div>




								 <a class="fancybox fancybox.iframe btn btn-default green_btn" href="map.php?mapid=17"><i class="fa fa-map-marker"></i><span>Ver Mapa</span></a>

                             <br>

							
						</div>

						</div>

					</div>

		  		   </div>




				<div class="clearfix"></div>

				<div class="space20"></div>

						

			</div>

		</div>

		<div class="space40"></div>


		
    

    

    <section id="footer">

			<div class="prefooter">

				<div class="container">	

					<div class="row">

						<h3 class="mtop0">Nossos Endere&ccedil;os</h3>

                        

			            

                        <div class="col-md-3 col-sm-3 col-xs-12 space20">

							<div class="number">				

								<span>  

								 

							Loja Cidade Dutra<br>
11 2640-8761<br />
Av. Senador Teotonio Vilela -1583<br />
Cidade Dutra – São Paulo <br />	

                            <br />

													 

								 </span>		

							</div>	

						</div>



					   

			            

                        <div class="col-md-3 col-sm-3 col-xs-12 space20">

							<div class="number">				

								<span>  

								 

							Loja Chácara Santo Antonio<br />
11 3854-7001<br />
Rua Américo Brasiliense - 983<br />
Chácara Sto. Antonio – São Paulo <br />	

                            <br />

													 

								 </span>		

							</div>	

						</div>



					   

			            

                        <div class="col-md-3 col-sm-3 col-xs-12 space20">

							<div class="number">				

								<span>  

								 

							Loja Ipiranga<br />
11 2275-7394<br />
Av. Professor Abraão de Morais - 988<br />
Saúde – São Paulo <br />	

                            <br />

													 

								 </span>		

							</div>	

						</div>



					   

			            

                        <div class="col-md-3 col-sm-3 col-xs-12 space20">

							<div class="number">				

								<span>  

								 

							Loja Santana<br />
11 2208-2579<br />
Av. Braz Leme - 1449<br />
Santana – São Paulo <br />	

                            <br />

													 

								 </span>		

							</div>	

						</div>



					   

			            

                        <div class="col-md-3 col-sm-3 col-xs-12 space20">

							<div class="number">				

								<span>  

								 

							Loja São Miguel<br />
11 2031-0073<br />
Av. Marechal Tito - 1514<br />
São Miguel Paulista – São Paulo <br />	

                            <br />

													 

								 </span>		

							</div>	

						</div>



					   

			            

                        <div class="col-md-3 col-sm-3 col-xs-12 space20">

							<div class="number">				

								<span>  

								 

							Loja Interlagos<br />
11 5523-3873<br />
Av. Washington Luis - 2737<br />
Jardim Marajoara – São Paulo <br />	

                            <br />

													 

								 </span>		

							</div>	

						</div>



					   

			            

                        <div class="col-md-3 col-sm-3 col-xs-12 space20">

							<div class="number">				

								<span>  

								 

							Loja Tatuapé<br />
11 2268-0984<br />
Rua Emília Marengo - 58<br />
Tatuapé – São Paulo <br />	

                            <br />

													 

								 </span>		

							</div>	

						</div>



					   

			            

                        <div class="col-md-3 col-sm-3 col-xs-12 space20">

							<div class="number">				

								<span>  

								 

							Loja Osasco<br />
11 2576-3236<br />
Av. dos Autonomistas - 3270<br  />
Osasco - São Paulo<br />	

                            <br />

													 

								 </span>		

							</div>	

						</div>



					   

			            

                        <div class="col-md-3 col-sm-3 col-xs-12 space20">

							<div class="number">				

								<span>  

								 

							Loja Perdizes<br />
11 2365-0166<br />
Av. Sumaré - 1151<br  />
Perdizes - São Paulo<br />	

                            <br />

													 

								 </span>		

							</div>	

						</div>



					
         			</div>	

				</div>

			</div>	


			<div class="footerbottom">

				<div class="container">

					<div class="row">

						

                        

                        <div class="col-md-9 col-sm-8 col-xs-12">

							<h3 class="whiteclr">Site Map</h3>

							<div class="row">

								

                                

                                 
                                      

                                

                                <!--<div class="col-md-3 col-sm-3 col-xs-6 space20">

									<ul class="list-unstyle whiteclr">

										

                                        

                                        

                                        <li>Site Map</li>

										

									</ul>

								</div>-->



                                   <div class="col-md-3 col-sm-3 col-xs-6 space20">

									<ul class="list-unstyle whiteclr footer_ul">
										<li><a href="index.php">Home</a></li>

										
										<li><a href="komforthousesofas.php">Empresa</a></li>

										
										<li><a href="sofas-poltronas-komfort-house.php">Produtos</a></li>

										</ul></div> <div class="col-md-3 col-sm-3 col-xs-6 space20">

									<ul class="list-unstyle whiteclr footer_ul">
										<li><a href="lojas-komfort-house-sofas.php">Nossas Lojas</a></li>

										
										<li><a href="contato-komforthouse-sofas.php">Contato</a></li>

										
										

								





								





								</div>

							</div>		
                            
                           
                            
						</div>



                              

						

                        

                        <div class="col-md-3 col-sm-4  col-xs-12" align="right">
                        
                      

                        	<div class="social-link">

                          		<ul class="list-inline list-unstyled">

                                <li class="whiteclr fsize16" style="margin-top:5px;">Siga-nos</li>

                              

                                
                               	<li sstyle="display:block">

                                	<a href="https://www.facebook.com/komforthousesofas" target="_blank"><img src="image/social/Camada-3.png"/ alt=""></a>

                                </li>

                                
                                

                               
                                

                                <li style="display:block">

                                	<a href="https://www.youtube.com/channel/UC0EVboSYG0QXsZ0jrW05Uzw" target="_blank"><img src="image/social/Camada-2.png"/ alt=""></a>

                                </li>

                                
                              

                               
                                <li style="display:none">

                                	<a href=""><img src="image/social/Camada-4.png"/ alt=""></a>

                                </li>

                                
                                     	

                                <li style="display:none">

                                	<a href=""><img src="image/social/Camada-5.png"/ alt=""></a>

                                </li>

                                
                               

                                </ul>

                            </div>
                           
                           <br />                            
                         

							<img src="admin/upload_image/general_images/72390953logo_footer.png" class="img-responsive" alt="">
                            
                               

						</div>
                        
                            <!--News-->
                                 
              		


                            

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" >

function validation1()

	{

		var email_id = jQuery("input#email_id").val();

			if (email_id == "Email" || email_id == "")

			{

				jQuery("input#email_id").focus();

				return false;

			}



		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

			if(!emailReg.test(email_id)) 

			{

				jQuery("input#email_id").val("");

				jQuery("input#email_id").focus();

				return false;

			}



	jQuery("#email_mail_ch").val(email_id);

	

	

	return true;

};

</script>           
					
					<div class="col-md-6 col-sm-6 col-xs-12">        
                   <form action="" method="post" >           

 				
					
					   <div class="searchmail" style="padding:15px 0 15px;">

							<span class="fsize20  whiteclr" style="float:left; margin-right:4px;">Novidades: </span>

							<div class="input-group">

                            

								<!-- <a href="" class="pro whiteclr backblue">Provider<i class="fa fa-angle-down"></i></a> -->
								<input name="email_id" type="text" class="form-control" id="email_id" style="height:26px;" placeholder="Cadastre seu e-mail" />
								<span class="input-group-btn">

                   		<button class="btn backgrey greyclr"type="submit" name="send_msg_new" value="Send" onClick="return validation1()">OK</button> 

                                		<!-- 	<img src="image/box_search.png">  -->

										</span>

								</div>		

					 </div>				   	

					 

                      </form> 
                       </div>
                        <!-- Final News-->


					</div>	
                    

				</div>
            
			</div>
			</div>

	







			<div class="copyright text-center">

				<p class="mbtm0">Copyright - komfort house</p>

			</div>

		</section>

		<!-- ATTACH BOOTSTRAP JS========= -->



	<script type="text/javascript" src="js/jquery.js"></script>

	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>

	<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>

	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>

	<script type="text/javascript">

		$(document).ready(function() {



			$('.fancybox').fancybox();



			$('.fancybox-media')

				.attr('rel', 'media-gallery')

				.fancybox({

					openEffect : 'none',

					closeEffect : 'none',

					prevEffect : 'none',

					nextEffect : 'none',



					arrows : false,

					helpers : {

						media : {},

						buttons : {}

					}

				});



		});

	</script>

    
    <!-- Analytics-->
    <script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 	 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 	 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-61408420-1', 'auto');
  	ga('send', 'pageview');

	</script>
	
	<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>

		

		<script type="text/javascript" src="js/jquery.elastislide.js"></script>

		

	



	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	

			<div class="rg-image-wrapper">

				{{if itemsCount > 1}}

					<div class="rg-image-nav">

						<a href="#" class="rg-image-nav-prev">Previous Image</a>

						<a href="#" class="rg-image-nav-next">Next Image</a>

					</div>

				{{/if}}

				<div class="rg-image"></div>

				<div class="rg-loading"></div>

				<div class="rg-caption-wrapper">

					<div class="rg-caption" style="display:none;">

						<p></p>

					</div>

				</div>

			</div>

		</script>	
	

	</body>

</html>	


<div id="test_div" style="  position: fixed;  right: 0;bottom: 0;"></div>

	 <!-- FlexSlider -->
  <script src="js/jquery.flexslider.js"></script>

 <script type="text/javascript">
	    function callresizefun()
		{
		
		        $(".fancybox-iframe").attr("scrolling","no");
			

			//var datahtml= "";
			var fancyboxiframe = $(".fancybox-iframe").height();

//alert(fancyboxiframe);

			if(fancyboxiframe == null){
				//var istatus = "close";
			}
			else
			{
				
			

				var tabsliderh = $(".fancybox-iframe").contents().find(".tab-slider").height();

				
				//var datahtml = datahtml+"<br>tabslider h : "+tabsliderh;
				//var datahtml = datahtml+"<br>iframe h : "+fancyboxiframe;
				//var istatus = "open";

				var newtabsliderh = parseInt(tabsliderh) + 15; 	
				$(".fancybox-inner").css('height',newtabsliderh+"px");

			}



			//var datahtml = datahtml+"<br>is freram : "+istatus;


			//var tabsliderh = $(".tab-slider").height();
			//var tabsliderh = $(".tab-slider").height();
			//var htmldata = "tab-slider "+tabsliderh;
			//$(".fancybox-inner").height(tabsliderh);

			//var datahtml = datahtml+"<br>rand:"+Math.random();

		   // $("#test_div").html(datahtml);

		}
		





$(document).ready(function(){

//alert("ok");
			//.fancybox-inner
			//.tab-slider

			$(window).resize(function(){
				callresizefun();
			});

});

		callresizefun();
setInterval(function(){ callresizefun(); }, 1000);

		
	




	    $(function(){
	      SyntaxHighlighter.all();
	    });
  /// call your function here








		


		

  </script>
