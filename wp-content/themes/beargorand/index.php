<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beargorand
 */



get_header();
?>

	<main id="primary" class="site-main dark-bg">
		<div class="container">
			<div class="row">
				<div class="col-12 gallery-title">
                    <h2>Gallery</h2>
                </div>		
			</div>
            <div class="row index-margin-bottom">
				<?php 
					
					if($_GET['background'])
					{
						$background = $_GET['background'];
						$bg_types = implode( ',', $background );	
					}

					if($_GET['eyes'])
					{
						$eyes = $_GET['eyes'];
						$eye_types = implode( ',', $eyes );	

					}

					if($_GET['glasses'])
					{
						$glasses = $_GET['glasses'];
						$glasses_types = implode( ',', $glasses );	

					}

					if($_GET['earings'])
					{
						$earings = $_GET['earings'];
						$earings_types = implode( ',', $earings );	

					}

					if($_GET['paws'])
					{
						$paws = $_GET['paws'];
						$paws_types = implode( ',', $paws );	

					}

					if($_GET['hats'])
					{
						$hats = $_GET['hats'];
						$hats_types = implode( ',', $hats );	

					}

					if($_GET['rings'])
					{
						$rings = $_GET['rings'];
						$rings_types = implode( ',', $rings );	

					}

					if($_GET['necklaces'])
					{
						$necklaces = $_GET['necklaces'];
						$necklaces_types = implode( ',', $necklaces );	

					}

					if($_GET['expressions'])
					{
						$expressions = $_GET['expressions'];
						$expressions_types = implode( ',', $expressions );	

					}

					if($_GET['tops'])
					{
						$tops = $_GET['tops'];
						$tops_types = implode( ',', $tops );	

					}

					if($_GET['bottoms'])
					{
						$bottoms = $_GET['bottoms'];
						$bottoms_types = implode( ',', $bottoms );	

					}
				?>
				<div class="col-3 filters">
					<form method="GET">
						<div class="accordion">Backgrounds</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 2 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="background[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['background']) && in_array($c->cat_ID, $_GET['background']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Eyes</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 3 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="eyes[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['eyes']) && in_array($c->cat_ID, $_GET['eyes']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Glasses</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 4 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="glasses[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['glasses']) && in_array($c->cat_ID, $_GET['glasses']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Earings</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 5 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="earings[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['earings']) && in_array($c->cat_ID, $_GET['earings']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Paws</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 6 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="paws[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['paws']) && in_array($c->cat_ID, $_GET['paws']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Hats</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 7 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="hats[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['hats']) && in_array($c->cat_ID, $_GET['hats']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Rings</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 8 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="rings[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['rings']) && in_array($c->cat_ID, $_GET['rings']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Necklaces</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 9 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="necklaces[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['necklaces']) && in_array($c->cat_ID, $_GET['necklaces']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Expressions</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 10 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="expressions[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['expressions']) && in_array($c->cat_ID, $_GET['expressions']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Top Clothes</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 11 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="tops[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['tops']) && in_array($c->cat_ID, $_GET['tops']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<div class="accordion">Bottom Clothes</div>
						<div class="panel">
							<ul>
								<?php
								$categories=get_categories(
									array( 'parent' => 12 )
								);
								
								foreach ($categories as $c) {
									?>
									<li>
									<input id="<?php echo $c->cat_name; ?>" type="checkbox" name="bottoms[]" value="<?php echo $c->cat_ID; ?>"
									<?php checked(
										(isset($_GET['bottoms']) && in_array($c->cat_ID, $_GET['bottoms']))
									);
									?>
									/>
									<label for="<?php echo $c->cat_name; ?>"><?php echo $c->cat_name; ?></label>
									</li>
									<?php
								}
								?>
							</ul>		
						</div>

						<button class="filter-btn" type="submit">Filter</button>
					</form>
				</div>
                <div class="col-9">
					<div class="row">
						<?php 
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => -1,
								'order' => 'ASC',
								'cat' => array( $bg_types, $eye_types, $glasses_types, $rings_types, $expressions_types, $necklaces_types, $tops_types, $bottoms_types, $hats_types, $earings_types, $paws_types )
							);

							$query = new WP_Query($args);

							while($query->have_posts()) : $query->the_post();
						?>
							<div class="col-4">
								<div class="bear-wrapper">
									<div class="bear-img"><?php beargorand_post_thumbnail(); ?></div>
									<div class="bear-id"><?php the_title(); ?></div>
								</div>
							</div>
						<?php endwhile; wp_reset_query();?>
					</div>
                </div>
            </div>
		</div>
	</main><!-- #main -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
} 
</script>
<?php
get_footer();