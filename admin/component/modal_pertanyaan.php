<!-- Modal Pertanyaan -->
<div id="open_pertanyaan_add" class="modal-window">
    <div class="modal-content">
        <a href="#" title="Close" class="modal-close" onclick="closeModal()">×</a>
        <h1>Form Tambah Pertanyaan</h1>
        <form action="process/tambah_pertanyaan.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="isi_pertanyaan">Isi Pertanyaan:</label>
                <input type="text" id="isi_pertanyaan" name="isi_pertanyaan" required>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</div>
<div id="open_pertanyaan_edit<?php echo $data['kode_pertanyaan']; ?>" class="modal-window">
    <div class="modal-content">
        <a href="#" title="Close" class="modal-close" onclick="closeModal()">×</a>
        <h1>Form Edit Pertanyaan</h1>
        <form action="process/edit_pertanyaan.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="kode_pertanyaan">Kode Pertanyaan:</label>
                <input type="text" id="kode_pertanyaan" name="kode_pertanyaan" value="<?php echo $data['kode_pertanyaan']; ?>" readonly>
            </div>
            <div>
                <label for="isi_pertanyaan">Isi Pertanyaan:</label>
                <input type="text" id="isi_pertanyaan" name="isi_pertanyaan" value="<?php echo $data['isi_pertanyaan']; ?>">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<!-- END Modal Pertanyaan -->

<!-- Modal Solusi -->
<div id="open_pertanyaan_add" class="modal-window">
    <div class="modal-content">
        <a href="#" title="Close" class="modal-close" onclick="closeModal()">×</a>
        <h1>Form Tambah Pertanyaan</h1>
        <form action="process/tambah_pertanyaan.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="isi_pertanyaan">Isi Pertanyaan:</label>
                <input type="text" id="isi_pertanyaan" name="isi_pertanyaan" required>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</div>
<div id="open_pertanyaan_edit<?php echo $data['kode_pertanyaan']; ?>" class="modal-window">
    <div class="modal-content">
        <a href="#" title="Close" class="modal-close" onclick="closeModal()">×</a>
        <h1>Form Edit Pertanyaan</h1>
        <form action="process/edit_pertanyaan.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="kode_pertanyaan">Kode Pertanyaan:</label>
                <input type="text" id="kode_pertanyaan" name="kode_pertanyaan" value="<?php echo $data['kode_pertanyaan']; ?>" readonly>
            </div>
            <div>
                <label for="isi_pertanyaan">Isi Pertanyaan:</label>
                <input type="text" id="isi_pertanyaan" name="isi_pertanyaan" value="<?php echo $data['isi_pertanyaan']; ?>">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<!-- END Modal Solusi -->