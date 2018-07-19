<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="body">
	<div class="container">
		<div class="row">
			<div class="col-12" id="main" role="main">
				<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
					<h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
					<div class="post-content" itemprop="articleBody">
						<?php $this->content(); ?>
					</div>
				</article>
				<?php $this->need('comments.php'); ?>
			</div><!-- end #main-->

			<?php $this->need('footer.php'); ?>
