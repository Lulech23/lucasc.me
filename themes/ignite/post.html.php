<script type="text/javascript">
$('body').removeClass('blog');
$('body').addClass('post');
</script>
<div class="post entry full">
    <?php if (login()) { echo tab($p); } ?>
    <?php if (!empty($p->image)):?>
    <div class="featured-image">
        <img style="width:100%;" title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>" class="attachment-post-thumbnail wp-post-image" src="<?php echo $p->image; ?>">
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
    <div class="entry-meta-top">Published <?php echo date('F d, Y', $p->date) ?></div>
    <div class="entry-header">
        <h1 class="entry-title"><?php echo $p->title; ?></h1>
    </div>
    <div class="entry-share">
        <a target="_blank" class="first" href="https://www.facebook.com/sharer.php?u=<?php echo $p->url ?>&t=<?php echo $p->title ?>"><i class="fab fa-facebook-square"></i></a> 
        <a target="_blank" href="https://twitter.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title ?>"><i class="fab fa-twitter-square"></i></a> 
        <a target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php echo $p->url ?>"><i class="fab fa-linkedin"></i></a>
        <a target="_blank" href="https://lineit.line.me/share/ui?url=<?php echo $p->url ?>"><i class="fab fa-line"></i></a>
        <a target="_blank" href="http://www.reddit.com/submit?url=<?php echo $p->url ?>"><i class="fab fa-reddit-square"></i></a>
        <a target="_blank" class="last" href="https://www.google.com/bookmarks/mark?op=edit&bkmk=<?php echo $p->url ?>&title=<?php echo $p->title ?>"><i class="fab fa-google-plus-square"></i></a>
    </div>
    <div class="entry-content">
        <article>
            <?php echo $p->body; ?>     
        </article>
    </div>
    <div class="entry-meta-bottom">
        <div class="author-meta">
            <img width="72" height="72" class="avatar avatar-72 photo" src="<?php echo site_url();?>themes/ignite/images/avatar.png" alt="<?php echo $author->name;?>">                    
            <div class="name-container">
                <h4><a href="<?php echo $p->authorUrl;?>"><?php echo $author->name;?></a></h4>
            </div>
            <?php echo $author->about;?>
        </div>
        <div class="entry-categories">
            <p><i class="fa fa-folder-open"></i><?php echo $p->category; ?></p>
        </div>            
        <div class="entry-tags">
            <p><i class="fa fa-tag"></i><?php echo $p->tag; ?></p>
        </div>
        <nav class="further-reading">
            <?php if (empty($next)): ?>
                <p class="prev">
                    <span>No Newer Posts</span>
                    <a href="<?php echo site_url();?>">Return to Home</a>
                </p>
            <?php endif; ?>
            <?php if (!empty($next)): ?>
                <p class="prev">
                    <span>Newer Posts</span>
                    <a href="<?php echo($next['url']); ?>"><?php echo($next['title']); ?></a>
                </p>
            <?php endif; ?>
            <?php if (empty($prev)): ?>
                <p class="next">
                    <span>No Older Posts</span>
                    <a href="<?php echo site_url();?>">Return to Home</a>
                </p>
            <?php endif; ?>
            <?php if (!empty($prev)): ?>
                <p class="next">
                    <span>Older Posts</span>
                    <a href="<?php echo($prev['url']); ?>"><?php echo($prev['title']); ?></a>
                </p>
            <?php endif; ?>
        </nav>
        <div class="further-related">
            <?php $tags = get_related($p->related, true, config('related.count'));?>
            <?php $char = 30; $total = count($tags); $i = 1; if ($total >= 1) { ?>
                <div class="entry-meta-top">
                    <h2 class="heading">Related Posts</h2>
                </div>
                <div class="related related-posts" style="position:relative;">
                    <?php foreach ($tags as $t):?>
                        <div class="item col-md-4">
                            <div class="featured-image">
                                <a href="<?php echo $t->url;?>">
                                <?php if (!empty($t->image)):?>
                                    <img style="width:100%;" title="<?php echo $t->title; ?>" alt="<?php echo $t->title; ?>" class="attachment-post-thumbnail wp-post-image" src="<?php echo $t->image; ?>">
                                <?php else:?>
                                    <img style="width:100%;" title="<?php echo $t->title; ?>" alt="<?php echo $t->title; ?>" class="attachment-post-thumbnail wp-post-image" src="/themes/ignite/images/avatar.png">
                                <?php endif; ?>
                                </a>
                            </div>
                            <a href="<?php echo $t->url;?>"><?php echo $t->title;?></a>
                            <?php if (config('teaser.related.char') > 0):?>
                            <div class="content">
                                <p><?php echo shorten($t->body, config('teaser.related.char')); ?>...</p>
                                <p><a class="more-link" href="<?php echo $t->url;?>">More</a></p>
                            </div><!--//content-->
                            <?php endif; ?>
                        </div>
                        <?php if ($i++ >= config('related.count')) break; ?>
                    <?php endforeach;?>
                    <div style="clear:both;"></div>
                </div>
            <?php }?>
        </div>
        <div class="excerpt-comments">
            <?php if (disqus_count()) { ?> 
                <p><span><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#disqus_thread"> comments</a></span></p>
            <?php } elseif (facebook()) { ?> 
                <p><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> comments</span></a></p>
            <?php } ?>
        </div>
    </div>
</div>
<?php if (disqus()): ?>
    <?php echo disqus($p->title, $p->url) ?>
<?php endif; ?>
<?php if (disqus_count()): ?>
    <?php echo disqus_count() ?>
<?php endif; ?>
<?php if (facebook() || disqus()): ?>
<section class="comments" id="comments">
    <div class="comments-number">
        <h3>Comments</h3>
    </div>
    <?php if (facebook()): ?>
        <div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
    <?php endif; ?>
    <?php if (disqus()): ?>
        <div id="disqus_thread"></div>
    <?php endif; ?>
</section>
<?php endif; ?>
