<div class="container">
    <h1 class="text-center">CRUD CI</h1>
    <a href="<?= base_url('home/create') ?>" class="btn btn-primary">create</a>
    <table class="table table-striped table-hover mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Berat</th>
                <th scope="col">Tanggal Tangkap</th>
                <th scope="col">Wilayah Tangkap</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach($ikan as $item) { ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $item->nama ?></td>
                <td><?= $item->berat ?></td>
                <td><?= date('d-m-Y',strtotime($item->tanggal_tangkap)) ?></td>
                <td><?= $item->wilayah_tangkap ?></td>
                <td>
                    <a href="<?= base_url('home/update/'.$item->id) ?>" class="btn btn-primary">edit</a>
                    <a href="<?= base_url('home/delete/'.$item->id) ?>" class="btn btn-danger">delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>