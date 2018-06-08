<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список категорий
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/category">Список категорий</a></li>
        <li class="active">Новая категория</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                    <form action="<?=ADMIN;?>/category/add" method="post" data-toggle="validator">
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование категории</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование категории" required>
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
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова">
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Описание">
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="content">Контент</label>
                            <textarea name="content" id="editor1" cols="80" rows="10"><?=$category->content;?></textarea>
                        </div>						
<!--https://dcrazed.com/html5-jquery-file-upload-scripts/-->
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Базовое изображение</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="category/add-image" data-name="single">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 125х200</small></p>
                                        <div class="single"></div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                          <!--  <div class="col-md-8">
                                <div class="box box-primary box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Картинки галереи</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="multi" class="btn btn-success" data-url="category/add-image" data-name="multi">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 700х1000</small></p>
                                        <div class="multi"></div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>-->
                        </div>					
						
						
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Добавить</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->