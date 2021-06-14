<div class="container">
    <h1 class="text-center">Tambahkan data ikan</h1>
    <form method="post" action="<?= base_url('home/create') ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Berat</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Berat" name="berat">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Tangkap</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_tangkap">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Wilayah Tangkap</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Wilayah Tangkap" name="wilayah_tangkap">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form>
</div>