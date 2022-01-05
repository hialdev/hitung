<section class="py5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold">Edit Blog Belajar</h2>
                </div>
                <div class="bg-white mt-4 p-4 rounded-3">
                    <form action="<?= BASEURL ?>/learn/update/<?= $data['belajar']['id'] ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="" value="<?= $data['belajar']['title'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Thumbnail</label>
                            <img id="image-preview" src="<?= BASEURL ?>/<?= $data['belajar']['thumbnail'] ?>" alt="" class="d-block my-3" style="max-height:10em;">
                            <input class="form-control" type="file" id="file-input" name="thumbnail" accept="jpg,png,jpeg">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Excerpt</label>
                            <textarea name="excerpt" class="form-control" id="" cols="30" rows="5"><?= $data['belajar']['excerpt'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Body</label>
                            <textarea name="body" class="" id="body" cols="10" rows="30"><?= $data['belajar']['body'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
</script>
<script>
    CKEDITOR.replace( 'body', {
        height: 700,
        filebrowserUploadUrl: "/kuliah/webapp/hitung/public/upload.php"
    } );
</script>