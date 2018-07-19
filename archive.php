<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="body">
  <div class="container">
    <div class="row">
      <div class="col-12" id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
          'category'  =>  _t('分类 %s 下的文章'),
          'search'    =>  _t('包含关键字 %s 的文章'),
          'tag'       =>  _t('标签 %s 下的文章'),
          'author'    =>  _t('%s 发布的文章')
          ), '', ''); ?></h3>
          <?php if ($this->have()): ?>
           <?php while($this->next()): ?>
            <article class="post index" itemscope itemtype="http://schema.org/BlogPosting">
             <h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
             <ul class="post-meta">
               <li>
                <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
                  <?php $this->date('Y-m-d'); ?>
                </time>
              </li>
              <li><?php $this->category(','); ?></li>
              <li itemprop="interactionCount">                
              <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
                  <?php $this->commentsNum('%d 条评论'); ?>
                </a>
            </ul>
            <div class="post-content home" itemprop="articleBody">
              <?php $this->excerpt(100, '...'); ?>
           </div>
         </article>
       <?php endwhile; ?>
     <?php else: ?>
      <article class="post">
        <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
      </article>
    <?php endif; ?>

    <?php $this->pageNav('上一页','下一页',10,'...');?>
  </div><!-- end #main -->
  <?php $this->need('footer.php'); ?>
