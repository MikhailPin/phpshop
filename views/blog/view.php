<?php include ROOT . '/views/layouts/header.php'; ?>
            <div id="page">
                <div id="page-bgtop">
                    <div id="content">                       
                       <img src="<?php echo Blog::getImage($blogItem['id']); ?>" alt="" />
                       
                            <div class="post">
                                <h2 class="title"><a href="/blog/<?php echo $blogItem['id'];?>"><?php echo $blogItem['title'];?></a></h2>
                                <br/>
                                <p><b><?php echo $blogItem['author_name'];?></b> at <?php echo $blogItem['date'];?></p>
                                <div class="entry">
                                    <p><?php echo $blogItem['content'];?></p>
                                </div>
                                <div class="meta">
                                    <p class="links"><a href="/blog/" class="comments">Back to all blog</a></p>
                                </div>
                            </div>


                        
                    </div>
  <?php include ROOT . '/views/layouts/footer.php'; ?>
