<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo head_contents();?>
    <title><?php echo $title;?></title>
    <meta name="theme-color" id="theme-color" content="#1450BD">
    <meta name="description" content="<?php echo $description; ?>"/>
    <meta property="og:site_name" content="lucasc.me"/>
    <meta property="og:description" content="<?php echo config('blog.description'); ?>"/>
    <meta property="og:title" content="<?php echo $p->title; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $p->url; ?>"/>
    <meta property="og:image" content="<?php echo site_url();?><?php echo $p->image; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <?php if (publisher()): ?>
    <link href="<?php echo publisher() ?>" rel="publisher" />
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo site_url();?>themes/ignite/css/fonts.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="<?php echo site_url();?>themes/ignite/css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="style-css" href="<?php echo site_url();?>themes/ignite/css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="<?php echo site_url();?>themes/ignite/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo site_url();?>themes/ignite/js/jquery-migrate.js"></script>
</head>
<?php     
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $url = site_url() . 'search/' . remove_accent($search);
        header("Location: $url");
    }
?>
<body id="ignite" class="blog">
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>
    <header class="site-header" id="site-header" role="banner">
        <?php if (empty(config('blog.logo'))) {?>
        <div id="title-info" class="title-info">
            <h1 class="site-title"><a href="<?php echo site_url();?>" title="<?php echo blog_title();?>"><?php echo blog_title();?></a></h1> <div class="site-tagline"><?php echo blog_tagline();?></div>
        </div>
        <?php } else { ?>
        <a class="site-logo" href="<?php echo site_url();?>" title="<?php echo blog_title();?> | <?php echo blog_tagline();?>"><img src="<?php echo config('blog.logo');?>" /></a>
        <?php } ?>
        <button id="toggle-navigation" class="toggle-navigation"><i class="fa fa-bars"></i></button>
        <div class="menu-container menu-primary" id="menu-primary" role="navigation">
            <?php echo menu('menu-primary-items') ?>
            <div class="menu-container menu-secondary" id="menu-secondary" role="navigation">
                <div id="slider-theme-container">
                    <input id="slider-theme" class="slider-input" type="checkbox">
                    <i class="slider-icon fa"></i>
                    <label aria-hidden="true" class="slider-track" for="slider-theme"><label aria-hidden="true" class="slider-nub" for="slider-theme"></label></label>
                    <script type="text/javascript" src="<?php echo site_url();?>themes/ignite/js/themeswitcher.js"></script>
                </div>
                <ul class="social-media-icons visible">   
                    <li><a class="github" target="_blank" href="<?php echo config('social.github');?>"><i class="fab fa-github" title="Check out on GitHub"></i></a></li>         
                    <li><a class="twitter" target="_blank" href="<?php echo config('social.twitter');?>"><i class="fab fa-twitter" title="Follow on Twitter"></i></a></li>
                    <li><a class="deviantart" target="_blank" href="<?php echo config('social.deviantart');?>"><i class="fab fa-deviantart" title="Watch on DeviantArt"></i></a></li>
                    <li><a class="youtube" target="_blank" href="<?php echo config('social.youtube');?>"><i class="fab fa-youtube" title="Play on YouTube"></i></a></li>
                    <li><a class="rss" target="_blank" href="<?php echo site_url();?>feed/rss"><i class="fa fa-rss" title="Subscribe on RSS"></i></a></li>
                </ul>
            </div><!-- #menu-secondary .menu-container -->
        </div><!-- #menu-primary .menu-container -->
    </header>
    <div id="overflow-container" class="overflow-container">
        <section id="search-3" class="widget widget_search">
            <div class="search-form-container">
                <form role="search">
                    <label class="screen-reader-text">Search for:</label>
                    <input class="form-control" type="search" placeholder="Type to search" name="search" required />
                    <i class="fa fa-search"></i>
                </form>
            </div>
        </section>
        <?php if (!empty($breadcrumb)): ?>
            <div class="breadcrumb-trail breadcrumbs" id="breadcrumbs"><?php echo $breadcrumb ?></div>
        <?php else: ?>
            <div class="breadcrumb-trail breadcrumbs" id="breadcrumbs">Welcome! Please enjoy your stay.</div>
        <?php endif; ?>
        <!-- .main -->
        <div id="main" class="main" role="main">
            <div id="loop-container" class="loop-container">
                <?php echo content();?>
            </div>
        </div> 
        <!-- .sidebar-primary -->
        <div id="sidebar-primary-container" class="sidebar-container sidebar-primary">
            <div class="sidebar sidebar-primary" id="sidebar-primary" role="complementary">
                <?php if (config('views.counter') === 'true') :?>
                <section class="widget widget_popular_entries">        
                    <h2 class="widget-title">Popular Posts</h2>
                    <?php echo popular_posts() ?>
                </section>
                <?php endif;?>
                <section class="widget widget_tags">
                    <h2 class="widget-title">Popular Tags</h2>
                    <?php $i = 1; $tags = tag_cloud(true); arsort($tags); ?>
                    <ul>
                    <?php foreach ($tags as $tag => $count):?>
                        <li><a href="<?php echo site_url();?>tag/<?php echo $tag;?>"><?php echo tag_i18n($tag);?></a> <span class="count">(<?php echo $count;?>)</span></li>
                        <?php if ($i++ >= 5) break;?>
                    <?php endforeach;?>
                    </ul>
                </section>
                <?php if (disqus()): ?>
                <section class="widget widget_comments">
                    <h2 class="widget-title">Recent Comments</h2>
                    <script src="//<?php echo config('disqus.shortname');?>.disqus.com/recent_comments_widget.js?num_items=5&amp;hide_avatars=0&amp;avatar_size=48&amp;excerpt_length=200&amp;hide_mods=0" type="text/javascript"></script><style>li.dsq-widget-item {padding-top:15px;} img.dsq-widget-avatar {margin-right:5px;}</style>
                </section>
                <?php endif;?>
            </div>
        </div>
        <!-- .sidebar-secondary -->
        <div id="sidebar-secondary-container" class="sidebar-container sidebar-secondary">
            <div class="sidebar sidebar-secondary" id="sidebar-secondary" role="complementary">
                <section class="widget widget_archive">        
                    <h2 class="widget-title">All Posts</h2>
                    <?php echo archive_list() ?>
                </section>
            </div>
        </div>
    </div> <!-- .overflow-container -->
    <footer id="site-footer" class="site-footer" role="contentinfo">
        <h3><a href="<?php echo site_url();?>"><?php echo blog_title();?></a></h3>
        <ul class="social-media-icons visible">   
            <li><a class="github" target="_blank" href="<?php echo config('social.github');?>"><i class="fab fa-github" title="Check out on GitHub"></i></a></li>         
            <li><a class="twitter" target="_blank" href="<?php echo config('social.twitter');?>"><i class="fab fa-twitter" title="Follow on Twitter"></i></a></li>
            <li><a class="deviantart" target="_blank" href="<?php echo config('social.deviantart');?>"><i class="fab fa-deviantart" title="Watch on DeviantArt"></i></a></li>
            <li><a class="youtube" target="_blank" href="<?php echo config('social.youtube');?>"><i class="fab fa-youtube" title="Play on YouTube"></i></a></li>
            <li><a class="rss" target="_blank" href="<?php echo site_url();?>feed/rss"><i class="fa fa-rss" title="Subscribe on RSS"></i></a></li>
        </ul>
        <span><?php echo blog_description();?></span>
        <div class="design-credit">
            <div class="credit">Copyright &copy; 2012-<?php echo date("Y");?>, <a href="https://lucasc.me">Lucas Chasteen</a></div>
            <p>Design based on <a href="https://www.competethemes.com/ignite/" target="_blank">Ignite</a> by Compete Themes | Powered by <a href="http://www.htmly.com" target="_blank">HTMLy</a></p>
        </div>
    </footer>
    <script type="text/javascript" src="<?php echo site_url();?>themes/ignite/js/production.js" async="async"></script>
    <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>