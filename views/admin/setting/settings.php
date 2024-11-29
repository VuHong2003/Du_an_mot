<?php include '../views/admin/layout/header.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cài đặt</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <!-- <div class="col-md-12"> -->
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cài đặt chung</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="?act=setting">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <?php foreach ($settings as $setting): ?>

                                        <div class="form-group">
                                            <label for="" class="text-capitalize"><?= $setting['name'] ?></label>
                                            <input type="text" class="form-control" name="settings[<?= $setting['id'] ?>]"
                                                value="<?= $setting['content'] ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="card-footer col-md-12">
                                <button type="submit" class="btn btn-primary" name="btn_setting">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<?php include '../views/admin/layout/footer.php'; ?>