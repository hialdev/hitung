<section class="py5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold">List Blog Belajar</h2>
                    <a href="<?= BASEURL ?>/learn/create" class="btn btn-primary">Add New</a>
                </div>
                <div class="bg-white p-2 rounded-3 mt-3" style="overflow-x:auto;">
                    <table class="table table-responsive" style="min-width: 600px;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Excerpt</th>
                                <th scope="col">Body</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            <?php foreach($data['belajar'] as $learn) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $learn['title'] ?></td>
                                    <td><img src="<?= BASEURL ?>/<?= $learn['thumbnail'] ?>" alt="" class="w-100" style="max-height: 5em;"></td>
                                    <td><?= substr($learn['excerpt'],0,60) ?></td>
                                    <td><code class="text-dark"><?= substr(htmlspecialchars($learn['body']),0,100) ?></code></td>
                                    <td><?= $learn['slug'] ?></td>
                                    <td><?= $learn['updated_at'] ?></td>
                                    <td>
                                        <a href="<?= BASEURL ?>/learn/edit/<?= $learn['id'] ?>" class="btn btn-sm rounded-3 text-white bg-success">Edit</a>
                                        <form action="<?= BASEURL ?>/learn/destroy/<?= $learn['id'] ?>" class="d-inline-block">
                                            <button type="submit" name="delete" class="btn btn-sm rounded-3 text-white bg-danger">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>