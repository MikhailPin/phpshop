<?php include ROOT . '/views/layouts/header.php'; ?>

          <section>
            <div id="container">
                <div id="page-bgtop">
                    <div id="content">
                        
                        <?php foreach ($blogList as $blogItem):?>
                           
                            <div class="post">
                                <h2 class="title"><a href="/blog/<?php echo $blogItem['id'];?>"><?php echo $blogItem['title'];?></a></h2>
                                <p class="byline"><?php echo $blogItem['date'];?></p>
                                <div class="entry">
                                    <p><?php echo $blogItem['short_content'];?></p>
                                </div>
                                <div class="meta">
                                    <p class="links"><a href="/blog/<?php echo $blogItem['id'];?>" class="comments">Read more</a></p>
                                </div>
                            </div>
                        <?php endforeach;?>

                        
                    </div>
                    <!-- end div#content -->
</section>
                    <?php include ROOT . '/views/layouts/footer.php'; ?>
