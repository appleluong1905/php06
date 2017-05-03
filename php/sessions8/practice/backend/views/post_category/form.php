<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> News category</div>
    <div class="panel-body">
        <form id="category-form" class="form-horizontal" method="post" action="admin.php?controller=post_category&amp;action=edit" enctype="multipart/form-data" role="form">
            <input name="id" type="hidden" value="<?php echo $category ? $category['id'] : '0'; ?>"/>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tên danh mục</label>
                <div class="col-sm-9">
                    <input name="name" type="text" value="<?php echo $category ? $category['name'] : ''; ?>" class="form-control" id="name" placeholder="Tên danh mục" required=""/>
                </div>
            </div>                   
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary"><?php echo $category ? 'Cập nhật' : 'Thêm mới' ;?></button>
                    <a class="btn btn-warning" href="admin.php?controller=category">Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>