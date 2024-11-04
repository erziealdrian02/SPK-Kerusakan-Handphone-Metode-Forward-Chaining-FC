<!-- Modal KErusakan -->
<div id="open_kerusakan_add" class="modal-window">
    <div class="modal-content">
        <a href="#" title="Close" class="modal-close" onclick="closeModal()">×</a>
        <h1>Form Tambah Pertanyaan</h1>
        <form action="process/tambah_kerusakan.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="solusi">Isi Solusi:</label>
                <input type="text" id="solusi" name="solusi" required>
            </div>
            <div>
                <label for="fakta">Isi Fakta:</label>
                <input type="text" id="fakta" name="fakta" required>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</div>
<div id="open_kerusakan_edit<?php echo $data['kode_kerusakan']; ?>" class="modal-window">
    <div class="modal-content">
        <a href="#" title="Close" class="modal-close" onclick="closeModal()">×</a>
        <h1>Form Edit Pertanyaan</h1>
        <form action="process/edit_kerusakan.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="kode_kerusakan">Kode Pertanyaan:</label>
                <input type="text" id="kode_kerusakan" name="kode_kerusakan" value="<?php echo $data['kode_kerusakan']; ?>" readonly>
            </div>
            <div>
                <label for="solusi">Isi Solusi:</label>
                <input type="text" id="solusi" name="solusi" value="<?php echo $data['solusi']; ?>">
            </div>
            <div>
                <label for="fakta">Isi fakta:</label>
                <input type="text" id="fakta" name="fakta" value="<?php echo $data['fakta']; ?>">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<!-- END Modal Kerusakan -->