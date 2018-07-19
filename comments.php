<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
  <?php $this->comments()->to($comments); ?>
  <?php if ($comments->have()): ?>
   <h3><?php $this->commentsNum('%d 条评论'); ?></h3>
   <?php $comments->listComments(); ?>
   <?php $comments->pageNav('上一页','下一页',10,'...');?>
 <?php endif; ?>
 <?php if($this->allow('comment')): ?>
  <div id="<?php $this->respondId(); ?>" class="respond">
    <div class="cancel-comment-reply">
      <?php $comments->cancelReply(); ?>
    </div>

    <h3 id="response"><?php _e('留言'); ?></h3>
    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
      <?php if($this->user->hasLogin()): ?>
        <p><?php _e('已登录: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
      <?php else: ?>
        <p>
          <label for="author" class="required"><?php _e('名称（必填）'); ?></label>
          <input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
        </p>
        <p>
          <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('邮箱（必填，不会被公开）'); ?></label>
          <input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
        </p>
        <p>
          <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
          <input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
        </p>
      <?php endif; ?>
      <p>
        <label for="textarea" class="required"><?php _e('内容（必填，支持 Markdown 语法）'); ?></label>
        <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
      </p>
      <?php
      if(isset($this->options->plugins['activated']['Smilies']))
        Smilies_Plugin::output();
      ?>
      <p>
        <button type="submit" class="submit"><?php _e('留言'); ?></button>
      </p>
    </form>
  </div>
<?php else: ?>
  <h3><?php _e('评论已关闭'); ?></h3>
<?php endif; ?>
</div>
