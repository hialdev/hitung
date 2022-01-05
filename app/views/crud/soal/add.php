<section class="py5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold">Add Soal Quiz</h2>
                </div>
                <div class="bg-white mt-4 p-4 rounded-3">
                    <form action="<?= BASEURL ?>/soal/created" method="post">
                        <div class="mb-3">
                            <label class="form-label">Jenis</label>
                            <select class="form-select" aria-label="Jenis Soal" name="jenis">
                                <option value="pg">Pilihan Ganda</option>
                                <option value="essay">Essay</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Topik - <a href="https://iconify.design/" target="_blank">cari icon</a></label>
                            <input type="text" name="topik" class="form-control" placeholder="Topik Soal" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Soal</label>
                            <input type="text" name="soal" class="form-control" placeholder="Soal" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jawaban</label>
                            <input type="text" name="jawaban" class="form-control" placeholder="Jawaban" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>