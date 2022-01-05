<section class="py5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold">List Widget</h2>
                    <a href="<?= BASEURL ?>/widget/create" class="btn btn-primary">Add New</a>
                </div>
                <div class="bg-white p-2 rounded-3 mt-3" style="overflow-x:auto;">
                    <table class="table table-responsive" style="min-width: 600px;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                                <th scope="col">Icon</th>
                                <th scope="col">URL</th>
                                <th scope="col">role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            <?php foreach($data['widget'] as $widget) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $widget['title'] ?></td>
                                    <td><?= $widget['action'] ?></td>
                                    <td><?= $widget['icon'] ?></td>
                                    <td><?= $widget['url'] ?></td>
                                    <td><?= $widget['role'] ?></td>
                                    <td>
                                        <a href="<?= BASEURL ?>/widget/edit/<?= $widget['id'] ?>" class="btn btn-sm rounded-3 text-white bg-success">Edit</a>
                                        <form action="<?= BASEURL ?>/widget/destroy/<?= $widget['id'] ?>" class="d-inline-block">
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