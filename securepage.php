<!-- 
Copyright 2013 Daniel Blair

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
-->
<?php 
/* 
Template Name: Secure Page 
*/ 
?>
<?php get_header(); ?>
<div id="container">
	<div id="content">
		<?php if (is_user_logged_in()) { ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<h3 class="page-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h3>

		<div class="post">
			<?php the_content(); ?>

		<?php endwhile; ?>
	<?php endif; ?>
	<? } else { ?>

	<h3>You have to be logged in to view this page</h3>
	<br />

	<div class="post">

		<p>This section of the site is only for registered users.</p>

		<br />

		<form class="ddfm" name='loginform' id='loginform' action='/wp-login.php' method='post'>
			<p class="fieldwrap"><label for="log">Username</label><input class="fmtext" type="text" name="log" id="log" value="" tabindex='1' /></p>
			<p class="fieldwrap"><label for="pwd">Password</label><input class="fmtext" type='password' name='pwd' id='pwd' value='' tabindex='2' /></p>
			<input name='rememberme' type='hidden' id='rememberme' value='false' />
			<div class="submit">
				<input type='submit' name='submit' id='submit' value='Login &raquo;' tabindex='3' />
				<?php ?>
				<input type="hidden" name="redirect_to" value="<?php echo $_SERVER["REQUEST_URI"]; ?>" />
			</div>
		</form>

		<? } ?>
		
	</div>
</div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
