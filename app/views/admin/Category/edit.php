<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование категории <?=$category->title;?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/category">Список категорий</a></li>
        <li class="active"><?=$category->title;?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/category/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование категории</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование категории" value="<?=h($category->title);?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Родительская категория</label>
                            <?php new \app\widgets\menu\Menu([
                                'tpl' => WWW . '/menu/select.php',
                                'container' => 'select',
                                'cache' => 0,
                                'cacheKey' => 'admin_select',
                                'class' => 'form-control',
                                'attrs' => [
                                    'name' => 'parent_id',
                                    'id' => 'parent_id',
                                ],
                                'prepend' => '<option value="0">Самостоятельная категория</option>',
                            ]) ?>
                        </div>
                        <div class="form-group">
                            <label for="keywords">Ключевые слова</label>
                            <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="<?=h($category->keywords);?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="<?=h($category->description);?>">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="content">Контент</label>
                            <textarea name="content" id="editor1" cols="80" rows="10"><?=$category->content;?></textarea>
                        </div>
				<!--------------------------------------------------------------------------->
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Базовое изображение</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="category/add-image" data-name="single">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 125х200</small></p>
                                        <div class="single">
                                            <img src="/images/<?=$category->img;?>" alt="" style="max-height: 150px;">
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                           <!-- <div class="col-md-8">
                                <div class="box box-primary box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Картинки галереи</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="multi" class="btn btn-success" data-url="category/add-image" data-name="multi">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 700х1000</small></p>
                                        <div class="multi">
                                            <?php// if(!empty($gallery)): ?>
                                                <?php// foreach($gallery as $item): ?>
                                                    <img src="/images/<?//=$item;?>" alt="" style="max-height: 150px; cursor: pointer;" data-id="<?//=$category->id;?>" data-src="<?//=$item;?>" class="del-item">
                                                <?php// endforeach; ?>
                                            <?php //endif; ?>
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>-->
                        </div>		
<?//debug($category);?>						
				<!--------------------------------------------------------------------------->		
						<?debug($_SESSION);?>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=$category->id;?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->