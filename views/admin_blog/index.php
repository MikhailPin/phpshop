<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление Новостями</li>
                </ol>
            </div>

            <a href="/admin/blog/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить новость</a>
            
            <h4>Список новостей</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID новости</th>
                    <th>Название новости</th>
                    <th>Дата</th>
                    <th>короткое описание</th>
                    <th>Полное описание</th>
                    <th>Автор новости</th>
                    <th>Изменить</th>
                    <th>Удалить</th>
                </tr>
                <?php foreach ($blogList as $blog): ?>
                    <tr>
                        <td><?php echo $blog['id']; ?></td>
                        <td><?php echo $blog['title']; ?></td>
                        <td><?php echo $blog['date']; ?></td>
                        <td><?php echo $blog['short_content']; ?></td>  
                        <td><?php echo $blog['content']; ?></td>  
                        <td><?php echo $blog['author_name']; ?></td>  
                        <td><a href="/admin/blog/update/<?php echo $blog['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/blog/delete/<?php echo $blog['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

