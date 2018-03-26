<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/blog">Управление товарами</a></li>
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>


            <h4>Редактировать news #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="title" placeholder="" value="<?php echo $blog['title']; ?>">

                        <p>Артикул</p>
                        <input type="text" name="date" placeholder="" value="<?php echo $blog['date']; ?>">

                        <p>Стоимость</p>
                        <input type="text" name="short_content" placeholder="" value="<?php echo $blog['short_content']; ?>">

                          <textarea name="content" ><?php echo $blog['content']; ?></textarea>
                          
                       <p>Стоимость</p>
                        <input type="text" name="author_name" placeholder="" value="<?php echo $blog['author_name']; ?>">
                        
                      
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

