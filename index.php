
<?php include'header.php'; ?>

	<div id="demo" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	    <div class="carousel-item active">
		    <img src="images/bg_1.jpg" alt="Los Angeles">
		    <div class="carousel-caption">
		        <h3>Explore <br> your amazing city</h3>
		        <p>Find great places to stay, eat, shop, or visit from local experts</p>
		    </div>   
		</div>
		<div class="carousel-item">
		    <img src="images/bg_2.jpg" alt="Chicago">
		    <div class="carousel-caption">
		        <h3>Explore <br> your amazing city</h3>
		        <p>Find great places to stay, eat, shop, or visit from local experts</p>
		    </div>   
		</div>
		<div class="carousel-item">
		   	<img src="images/bg_3.jpg" alt="New York">
		    <div class="carousel-caption">
		        <h3>Explore <br> your amazing city</h3>
		        <p>Find great places to stay, eat, shop, or visit from local experts</p>
		    </div>   
		</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		</a>
	</div>



    
   
   
  
    <section class="ftco-section bg-light">
    	<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
		        <div class="col-md-7 heading-section ftco-animate">
		          	<span class="subheading">Special Offers</span>
		            <h2 class="mb-4"><strong>Top</strong> Buses</h2>
		        </div>
	        </div>    		
    	</div>


    	<div class="container">
    		<div class="row">


    			<?php
					include_once 'conn.php';
					$result = mysqli_query($conn,"SELECT * FROM bus");
					if (mysqli_num_rows($result) > 0) {
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>

    			<div class="col-sm-12 col-md-4 col-lg-4 ftco-animate">
    				<div class="destination">
    					<img src="<?php echo "Administrator/img/".$row["image"];?>">
    					<div class="text p-3">
    						<div class="d-flex">
	    						<div class="two">
	    							<span class="price">$<?php echo $row["price"]; ?></span>
    							</div>
    						</div>
    						<p>Displacement (cc) <span><?php echo $row["dis"]; ?></span></p>
    						<p>Max Power (bhp)<span> <?php echo $row["pow"]; ?> </span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span></i> <?php echo $row["bname"]; ?></span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>

    			<?php
					$i++;
					}
				}
					else{
					echo "No result found";
					}
				?>   


    		</div>
    	</div>




    </section>

  
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Popular</strong> Vans</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12 col-md-4 col-lg-4 ftco-animate">
    				<div class="destination">
    					<img src="images/destination-3.jpg">
    					<div class="text p-3">
    						<div class="d-flex">
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span></i> India</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

   

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Popular</strong> Mini Buses</h2>
          </div>
        </div>    		
    		<div class="row">
    			<div class="col-sm-12 col-md-4 col-lg-4 ftco-animate">
    				<div class="destination">
    					<img src="images/destination-3.jpg">
    					<div class="text p-3">
    						<div class="d-flex">
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span></i> India</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>



<?php include'footer.php'; ?>
   
   