<?php include '../views/admin/layout/header.php'; ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tạo danh mục</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <form action="index.php?act=category-create" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Danh mục</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên danh mục</label>
                <input type="text" name="name" id="inputName" class="form-control" placeholder="Nhập tên danh mục" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
              </div>
              <?php if (isset($_SESSION['errors']['name'])) : ?>
                <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
              <?php endif; ?>
              <div class="form-group">
                <label for="inputStatus">Trạng thái</label>
                <select id="inputStatus" name="status" class="form-control custom-select">
                  <option value="">Chọn trạng thái</option>
                  <option value="Active"
                    <?php
                    if (isset($_POST['status']) && $_POST['status'] == 'Active') {
                      echo 'selected';
                    }
                    ?>>Hiện</option>
                  <option value="Hidden"
                    <?php
                    if (isset($_POST['status']) && $_POST['status'] == 'Hidden') {
                      echo 'selected';
                    }
                    ?>>Ẩn</option>
                </select>
              </div>
              <?php if (isset($_SESSION['errors']['status'])) : ?>
                <p class="text-danger"><?= $_SESSION['errors']['status'] ?></p>
              <?php endif; ?>
              <div class="form-group">
                <label for="inputDescription">Mô tả</label>
                <textarea name="description" id="inputDescription" class="form-control" rows="4" placeholder="Nhập mô tả danh mục"><?php echo isset($_POST['description']) ? $_POST['description'] : '' ?></textarea>
              </div>
              <?php if (isset($_SESSION['errors']['description'])) : ?>
                <p class="text-danger"><?= $_SESSION['errors']['description'] ?></p>
              <?php endif; ?>
              <div class="form-group">
                <label for="inputName">Upload ảnh</label>
                <input type="file" name="image" class="form-control">
              </div>
              <?php if (isset($_SESSION['errors']['image'])) : ?>
                <p class="text-danger"><?= $_SESSION['errors']['image'] ?></p>
              <?php endif; ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="?act=category" class="btn btn-secondary">Trở về</a>
          <input type="submit" name="createCategory" value="Thêm mới" class="btn btn-success float-right">
        </div>
      </div>
    </form>

  </section>
  <!-- /.content -->
</div>
<?php include '../views/admin/layout/footer.php'; ?>