<div class="container">
    <div class="row">
        <div class="col-6 mt-4">
            <h3>Daftar Portofolioku</h3>
            <?php $i = 1 ?>
            <?php foreach ($data['portofolio'] as $portofolio) : ?>
                <ul>
                    <li><?= $i++; ?>. <?= $portofolio['nama_porto']; ?></li>
                    <li><?= $portofolio['image']; ?>.png</li>
                    <li><?= $portofolio['deskripsi']; ?></li>
                    <li><?= $portofolio['tanggal']; ?></li>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>