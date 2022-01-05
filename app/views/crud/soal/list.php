<section class="py5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold">List Soal Quiz</h2>
                    <a href="<?= BASEURL ?>/soal/create" class="btn btn-primary">Add New</a>
                </div>
                <div class="bg-white p-2 rounded-3 mt-3" style="overflow-x:auto;">
                    <table class="table table-responsive" style="min-width: 600px;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Topik</th>
                                <th scope="col">Soal</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            <?php if(count($data['soal']) > 0) : ?>
                                <?php foreach($data['soal'] as $soal) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $soal['jenis'] ?></td>
                                    <td><?= $soal['topik'] ?></td>
                                    <td><?= $soal['soal'] ?></td>
                                    <td><?= $soal['jawaban'] ?></td>
                                    <td>
                                        <a href="<?= BASEURL ?>/soal/edit/<?= $soal['id'] ?>" class="btn btn-sm rounded-3 text-white bg-success">Edit</a>
                                        <form action="<?= BASEURL ?>/soal/destroy/<?= $soal['id'] ?>" class="d-inline-block">
                                            <button type="submit" name="delete" class="btn btn-sm rounded-3 text-white bg-danger">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                <?php endforeach;?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="10"><span class="text-center">Data belum tersedia.</span></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>