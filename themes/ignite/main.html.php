<?php foreach ($posts as $p): ?>
<div class="post hentry excerpt">
    <?php if (!empty($p->image)):?>
    <div class="featured-image">
        <a href="<?php echo $p->url; ?>"><img style="position:absolute;" width="100%" height="100%" alt="<?php echo $p->title; ?>" class="attachment-post-thumbnail wp-post-image" src="<?php echo $p->image; ?>"></a>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->audio)):?>
    <div class="featured-image">
        <iframe style="position:absolute;" width="100%" height="100%" class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->video)):?>
    <div class="featured-image">
        <iframe style="position:absolute;" width="100%" height="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $p->video; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->quote)):?>
    <div class="featured-quote">
        <blockquote class="quote"><i class="fa fa-quote-left"></i> <?php echo $p->quote ?> <i class="fa fa-quote-right"></i></blockquote>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->link)):?>
    <div class="featured-link">
        <i class="fa fa-external-link"></i> <a target="_blank" href="<?php echo $p->link ?>"><?php echo $p->link ?></a>
    </div>
    <?php endif; ?>
    <div class="entry-meta-top">Published <?php echo date('F d, Y', $p->date) ?> by <a href="<?php echo $p->authorUrl; ?>" title="Posts by <?php echo $p->author; ?>" rel="author"><?php echo $p->author; ?></a>            
    </div>
    <div class="excerpt-header">
        <h2 class="excerpt-title">
            <a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a>
        </h2>
    </div>
    <div class="excerpt-share">
        <a target="_blank" class="first" href="https://www.facebook.com/sharer.php?u=<?php echo $p->url ?>&t=<?php echo $p->title ?>"><i class="fab fa-facebook-square"></i></a> 
        <a target="_blank" href="https://twitter.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title ?>"><i class="fab fa-twitter-square"></i></a> 
        <a target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php echo $p->url ?>"><i class="fab fa-linkedin"></i></a>
        <a target="_blank" href="https://lineit.line.me/share/ui?url=<?php echo $p->url ?>"><i class="fab fa-line"></i></a>
        <a target="_blank" href="http://www.reddit.com/submit?url=<?php echo $p->url ?>"><i class="fab fa-reddit-square"></i></a>
        <a target="_blank" class="last" href="https://www.google.com/bookmarks/mark?op=edit&bkmk=<?php echo $p->url ?>&title=<?php echo $p->title ?>"><i class="fab fa-google-plus-square"></i></a>
    </div>
    <div class="excerpt-content">
        <article>
            <?php echo get_teaser($p->body, $p->url); ?>
            <?php if (config('teaser.type') === 'trimmed'):?>...<p><a class="more-link" href="<?php echo $p->url; ?>"><?php echo config('read.more'); ?><span class="screen-reader-text"><?php echo $p->title; ?></span></a></p><?php endif;?> 
        </article>
    </div>
    <div class="excerpt-categories">
        <p><i class="fa fa-folder-open"></i><?php echo $p->category; ?></p>
    </div>            
    <div class="excerpt-tags">
        <p><i class="fa fa-tag"></i><?php echo $p->tag; ?></p>
    </div>
    <div class="excerpt-comments">
        <?php if (disqus_count()) { ?> 
            <p><span><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#disqus_thread"> comments</a></span></p>
        <?php } elseif (facebook()) { ?> 
            <p><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> comments</span></a></p>
        <?php } ?>
    </div>
</div>
<?php endforeach; ?>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
<div class="loop-pagination-container">
    <nav class="pagination loop-pagination">
        <?php echo $pagination['html'];?>
    </nav>
</div>
<?php endif; ?>
<?php if (disqus_count()): ?>
    <?php echo disqus_count() ?>
<?php endif; ?>