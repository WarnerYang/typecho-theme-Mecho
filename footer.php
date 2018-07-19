<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div><!-- end .row -->
</div>
</div><!-- end #body -->
<footer id="footer" role="contentinfo">
	&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> | Powered by <a href="https://github.com/typecho/typecho">Typecho</a>| Theme <a href="https://github.com/WarnerYang/typecho-theme-Mecho">Mecho</a>
</footer><!-- end #footer -->
<?php $this->footer(); ?>
<script src="<?php $this->options->adminStaticUrl('js', 'jquery.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/shuru.js'); ?>"></script>
<script type="text/javascript">
	POWERMODE.colorful = true; // make power mode colorful
	POWERMODE.shake = false; // turn off shake
	document.body.addEventListener('input', POWERMODE);
</script>
</body>
</html>