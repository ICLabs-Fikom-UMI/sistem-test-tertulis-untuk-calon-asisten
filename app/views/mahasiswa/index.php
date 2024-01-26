<div class="container mt-3">


<div class="row">
<div class="col-6">
    <button type="button" class="btn btn-primary" data-toggle="modal" 
    data-target="#formmodal">
        Tambah data Mahasiswa
    </button>
    <br><br>
 <h3>Daftar Mahasiswa</h3>



    <?php foreach( $data['mhs'] as $mhs ) :?>
        <ul>
            <li><?= $mhs['nama'] ?></li>
            <li><?= $mhs['nrp'] ?></li>
            <li><?= $mhs['email'] ?></li>
            <li><?= $mhs['jurusan'] ?></li>
        </ul>
        <?php endforeach ?>




</div>
</div>
</div>
 <!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="judulModal" arial-hidden="true">
    <div class="modal-content" role="document">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
      <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">

    
    <div class="modal-body">
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
      <div class="form-group">
    <label for="nrp">NRP</label>
    <input type="number" class="form-control" id="nrp" name="nrp">


  </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah data </button>
      </div>
    </div>
  </div>
</div>