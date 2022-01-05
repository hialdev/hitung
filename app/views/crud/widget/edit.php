<section class="py5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold">Edit Widget</h2>
                </div>
                <div class="bg-white mt-4 p-4 rounded-3">
                    <form action="<?= BASEURL ?>/widget/update/<?= $data['widget']['id'] ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Nama Anda" value="<?= (isset($data['widget']['title'])?$data['widget']['title']:'') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Icon - <a href="https://iconify.design/" target="_blank">cari icon</a></label>
                            <input type="text" name="icon" class="form-control" placeholder="Nama Anda" value="<?= (isset($data['widget']['icon'])?$data['widget']['icon']:'') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Action</label>
                            <input type="text" name="action" class="form-control" placeholder="Nama Anda" value="<?= (isset($data['widget']['action'])?$data['widget']['action']:'') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">URL</label>
                            <input type="text" name="url" class="form-control" placeholder="Nama Anda" value="<?= (isset($data['widget']['url'])?$data['widget']['url']:'') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <input type="text" name="role" class="form-control" placeholder="Nama Anda" value="<?= (isset($data['widget']['role'])?$data['widget']['role']:'') ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>