<?php
    $author = $article['author'];
    $comments = $article['comments'];
?>
<main id="content" class="container" role="main">
    <article class="article">
        <header class="article__header">
            <h2 class="article__title"><?php echo $article['title'];?></h2>
            <p class="byline">Posted on <time pubdate="pubdate"><?php echo $article['pubdate'];?></time></p>
            <div class="article__extra-header-info">
                <div class="author">
                    <?php if(!empty($author['image']['src'])) { ?>
                    <img class="author__image" src="<?php echo $author['image']['src'];?>" alt="<?php echo $author['image']['alt'];?>" />
                    <?php } ?>
                    <p class="author__name">By <?php echo $author['name'];?></p>
                    <p class="author__job"><?php echo SITE_NAME;?> Staff Reporter</p>
                    <?php if(!empty($author['bio'])) {include('author-bio.php');}?>
                </div>

            </div>
        </header>

        <figure class="featured-image">
            <img class="article-img article-img--featured" src="<?php echo $article['featuredImage']['src'];?>" />
            <figcaption><?php echo $article['featuredImage']['caption'];?></figcaption>
        </figure>

        <?php 
        
        echo $article['content'];

        include('comments.php');

        ?>

    </article>
</main>
