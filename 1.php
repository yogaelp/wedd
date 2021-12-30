<header>

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script></head>

		<div id ="menu"></div>
	<div class="container">

		<div class="profile">

			<div class="profile-image">

				<img src="img/1.jpg" alt="">

			</div>
            <link href="1.css" rel="stylesheet" type="text/css">
			<div class="profile-user-settings">

				<h1 class="profile-user-name">Entol Lisan Prayoga</h1>

				
                

				<button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>

			</div>
			<div class="menu">
			<div class="profile-stats">

<ul>
	<li><span class="profile-stat-count" onclick="window.location.href='1.php'">3</span> Projects</li>
	<?php
			$filename = 'counter.txt';

	function counter(){		
	global $filename;	
	  if(file_exists($filename)){		
		  $value = file_get_contents($filename);	
	  }else{		
		$value = 0;		
	  }

file_put_contents($filename, ++$value);		
	}

counter();		
?>
	<li><span class="profile-stat-count"><?php echo file_get_contents($filename);?></span> View</li>
	<li><span class="profile-stat-count"  onclick="window.location.href='profile.php'">0</span> certificate</li>
</ul>
<button class="btn profile-edit-btn" onclick="window.location.href='profile.php'"> Profile</button>
<button  class="btn profile-edit-btn" onclick="window.location.href='https://wa.me/6289607190611'">Contact</button>
<button class="btn profile-edit-btn"onclick="window.location.href='mailto:yogelp@gmail.com'"> Email</button>

</div>

<div class="profile-bio">
<!-- <p><span class="profile-real-name">Selamat Datang di Portfolio saya</p> -->
<p><span class="profile-real-name">Saya sangat senang mempelajari dan bekerja di bidang IT</p>


</div>

</div>
<!-- End of profile section -->

</div>
			</div>
			
	<!-- End of container -->
	

</header>
<main>

	<div class="container">

		<div class="gallery">


			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> UI</li>
                        
					</ul>

				</div>

			</div>
            <div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> IOT</li>
					</ul>

				</div>

			</div>

            <div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> WEB</li>
					</ul>

				</div>

			</div>
            

            
		<!-- End of gallery -->

		

	</div>
	<!-- End of container -->

</main>
<!-- 
<div class="badan">



</div>	

<script type="text/javascript">
	$(document).ready(function(){
		$('.btn profile-edit-btn' ).click(function(){
			var menu = $(this).attr('id');
			if(menu == "home"){
				$('.badan').load('posting.php');						
			}else if(menu == "p"){
				$('.badan').load('no reload/index.php');						
			}
		});

 
 
		// halaman yang di load default pertama kali
		$('.badan').load('posting.php');						
 
	});
</script>
<!-- <script>
			$(document).ready(function(){
				// halaman default
				$('#konten').load('posting.php');

				// fungsi yang mengatur konten mana yang akan ditampilkan
				$('#menu a').click(function(){
					// mengambil data dari href
					var hal = $(this).attr('href');
					// konten akan diisi oleh menu yang dipilih sesuai dengan isi dari href yang dipilih
					$('#konten').load(hal+'.php');
					return false;
				});
			});
		</script> --> -->


