<?php
/**
 * Template Name: Home
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<section class="hero-slider-banner">
	<div class="slider">
		<?php while (have_rows('home_hero_banner')) { the_row(); ?>
			<?php if (get_row_layout() == 'homebanner') { ?>
				<div class="hero_slide" style="background-image: url(<?php the_sub_field('hero_image')?>);background-position: center center; background-repeat: no-repeat; background-size: cover;  ">
					<div class="quote">
						<span class="speachmarks-top">“</span>
						<h1><?php the_sub_field('hero_banner_title')?></h1>
						<span class="speachmarks-bottom">“</span>
					</div>
				</div>
			<?php }?>
		<?php } ?>
	</div>
</section>

<section class="home-section-two imageright">
	<div class="container">
		<div class="row flexparent">
			<div class="col m5 s12 coloumarea">
				<h1>Welcome to Cortech Developments</h1>
				<h2>We aggregate systems into a central hub. This greatly improves efficiency and helps to reduce cost.</h2>
				<hr>

				<p>Cortech is based in Knutsford, Cheshire, and we have provided a range of expert integration services since 1992. Our engineers share a wealth of experience working with a diverse repertoire of different systems. From CCTV to climate control and secure door management, we understand that managing building can be both costly and labour-intensive. When you choose us to perform an integration, we will consolidate all your third-party systems into one central, manageable location. As well as offering our services throughout the UK, Cortech also has a secondary base in the Middle East.</p>

				<a href="#" class="btn btn-blue animated-button-blue"><span>Download </span>Cortech Developments Brochure </a>
				<a href="#" class="btn btn-gray"><span>Download </span> Middle East Brochure</a>

			</div>
			<div class="col m7 s12 coloumarea">
				<div class="bgarea coloumarea" style="background-image: url(http://cortechdev.piranha.digital/wp-content/themes/cortech/images/Home-image-one.jpg);"></div>
			</div>
		</div>

	</div>
</section>

<section class="home-section-three">
	<div class="container">
		<div class="row">
			<hr style="width: 100%;">
			<div class="col s12">
				<img src="<?php echo get_template_directory_uri(); ?>/images/data-ql.png">
				<h3>Introducing the new Datalog QL</h3>
				<h4>A quantum leap in aggregate software</h4>
				<p>Our new flagship product offering, Datalog QL is one of the most advanced and powerful systems available on the market today. With full scalability and interoperability built in, Cortech’s engineers can use this framework to integrate all your third-party software with ease. With each system networked into a centralised location, your team can monitor and react to any emergent scenario swiftly and with professionalism. A Datalog QL setup can even help to reduce your building management costs and streamline your employees’ collective workload.</p>
			</div>
		</div>
	</div>
</section>


<section class="home-section-four">
	<div class="container">
		<div class="row">
			<div class="col m4 s12">
				<div class="box">
					<h3><span>WHAT?</span></h3>
					<p>The latest generation of Cortech’s outstanding Datalog product range, QL offers a powerful and limitless base for your building management operations. Its easy-to-use structure, paired with scalability and inbuilt cyber security, makes Datalog QL a fantastic option for your business.</p>

					<a href="#" class="btn btn-blue">Find out more</a>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="box">
					<h3><span>WHERE?</span></h3>
					<p>Datalog QL is designed to be as inclusive as possible. Its innovative and all-new architecture makes this system a fantastic choice for virtually any industry. Any building with assets or any company with a risk assessment policy would benefit enormously from a QL integration.</p>

					<a href="#" class="btn btn-blue">Find out more</a>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="box">
					<h3><span>HOW?</span></h3>
					<p>Contact our friendly and helpful team on 01925 750 600 to switch. We understand it’s vital that your business operations continue even during major upgrades. That’s why we’ve created a backwards-compatible upgrade path which aims to minimise any disruption.</p>

					<a href="#" class="btn btn-blue">Find out more</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-section-five">
	<div class="container">
		<div class="row">
			<div class="col m7 s12">
				<div class="box">
					<h3>WHAT IF I ALREADY HAVE DATALOG 5?</h3>
					<hr>
					<p>The Cortech team appreciates that financial and administrative pressures can make upgrades a concern. We pomise to continue supporting our Datalog 5 customers for a full 4 years following the launch of Datalog QL. During that time, we hope you will consider the numerous benefits of this more advanced system.</p>
					<a href="#" class="btn btn-blue">Find out more</a>
				</div>
			</div>
			<div class="col m5 s12" style="position: relative;">
				<span class="speachmarks-top">“</span>
				<h4>Powerful and reliable security and risk management, both now and tomorrow.</h4>
				<span class="speachmarks-bottom">“</span>
			</div>
		</div>
	</div>
</section>

<section class="parra-banner">
	<img src="<?php echo get_template_directory_uri(); ?>/images/Generic-Banner.jpg">
</section>

<section class="text-image-split imageright">
	<div class="container">
		<div class="row flexparent">

			<div class="col m6 s12 coloumarea">
				<h1>Intergrations</h1>
				<h2>Combine leading brands of CCTV, intercom, access control, energy systems and much more.</h2>
				<hr>
				<p>Today’s complex world of asset management has led to the majority of companies utilising a wide range of different systems. Whereas other companies may advertise “integrations”, they in actuality provide something quite different. Cortech Developments has been independently integrating third-party software since way back in 1993.</p>

				<a href="#" class="btn btn-blue single">Find out more</a>

			</div>
			<div class="col m6 s12 coloumarea">
				<div class="bgarea coloumarea" style="background-image: url(http://cortechdev.piranha.digital/wp-content/themes/cortech/images/home-image-three.jpg);"></div>
			</div>
		</div>
	</div>
</section>

<section class="home-section-eight">
	<div class="container">
		<div class="row flexparent">
			<div class="col m6 s12 p60">
				<h3>IOT</h3>
				<h4>Smart buildings and the Internet of Things represents the future of risk and asset management.</h4>

				<p>The use of both legacy and current technologies like Datalog QL, along with future innovations, can combine to create a new generation of smart buildings. Superior levels of communication will enable buildings of the future to reach new-found levels of efficiency. Real-time data will be compared to historical patterns, allowing for corrective intervention and improved levels of performance.</p>
				<a href="#" class="btn btn-blue">Find out more</a>
			</div>
			<div class="col m6 s12 p60 right">
				<h3>DRIVERS</h3>
				<h4>Lorem ipsum dolor sit amet, consectetur </h4>
				<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/Access_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/BMS_Energy_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/CCTV_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/cell_call_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/DVR_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/Fire_new.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/in_dev_new.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/integration_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/Intercom_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/Intruder_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/IP-Analogue_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/perimeter_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/Radio_New.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/Safety_New.png"></li>
				</ul>

				<a href="#" class="btn btn-gray">Find out more</a>
				<a href="#" class="btn btn-blue">Download datalog QL Driver List</a>
			</div>
		</div>
	</div>
</section>

<section class="text-image-split imageright">
	<div class="container">
		<div class="row flexparent">

			<div class="col m6 s12 coloumarea">
				<h1>International Markets</h1>
				<h2>Cortech not only provides building management solutions in the UK; we also serve international markets! </h2>
				<hr>
				<p>Whilst our headquarters is based in Cheshire, we also have an office in Dubai which provides sales, technical and support services for our clients throughout the Middle East. This illustrates the inclusiveness and far-reaching capabilities of Cortech’s expertise.</p>
				<a href="#" class="btn btn-blue single">Find out more</a>
			</div>
			<div class="col m6 s12 coloumarea">
				<div class="bgarea coloumarea" style="background-image: url(http://cortechdev.piranha.digital/wp-content/themes/cortech/images/home-image-four.jpg);"></div>
			</div>
		</div>
	</div>
</section>

<section class="home-section-ten">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h3>Trust Cortech Developments to find your ideal integration solution</h3>
				<h4>It’s what we’ve been doing for over 25 years, for people like:</h4>
			</div>
		</div>

		<div class="row">
			<div class="col m4 s12">
				<div class="box">
					<h3>End Users</h3>
					<p>Our products simplify the working day of each end user.</p>

					<a href="#" class="btn btn-blue single">Find out more</a>
				</div>
			</div>

			<div class="col m4 s12">
				<div class="box odd">
					<h3>Integrators</h3>
					<p>Cortech can work with you to create a single, seamless system.</p>

					<a href="#" class="btn btn-blue single">Find out more</a>
				</div>
			</div>

			<div class="col m4 s12">
				<div class="box">
					<h3>Consultants</h3>
					<p>We can help you find the very best solution for each client.</p>

					<a href="#" class="btn btn-blue single">Find out more</a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>