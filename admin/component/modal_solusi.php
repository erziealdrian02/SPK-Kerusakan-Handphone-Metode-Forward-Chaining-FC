<!-- Modal Solusi -->
<div id="open_solusi_add" class="modal-window">
    <div class="modal-content">
        <a href="#" title="Close" class="modal-close" onclick="closeModal()">×</a>
        <h1>Form Tambah Solusi</h1>
        <form action="process/tambah_solusi.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="isi_solusi">Isi Solusi:</label>
                <input type="text" id="isi_solusi" name="isi_solusi" required>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</div>
<div id="open_solusi_edit<?php echo $data['kode_solusi']; ?>" class="modal-window">
    <div class="modal-content">
        <a href="#" title="Close" class="modal-close" onclick="closeModal()">×</a>
        <h1>Form Edit Solusi</h1>
        <form action="process/edit_solusi.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="kode_solusi">Kode Solusi:</label>
                <input type="text" id="kode_solusi" name="kode_solusi" value="<?php echo $data['kode_solusi']; ?>" readonly>
            </div>
            <div>
                <label for="isi_solusi">Isi Solusi:</label>
                <input type="text" id="isi_solusi" name="isi_solusi" value="<?php echo $data['isi_solusi']; ?>">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<!-- END Modal Solusi -->