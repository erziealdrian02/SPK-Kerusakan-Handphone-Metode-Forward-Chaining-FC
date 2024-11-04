<div id="open-modal-old" class="modal-window">
    <div>
        <a href="#" title="Close" class="modal-close">Close</a>
        <h1>Form Diagnosa Handphone</h1>
        <form id="diagnosa-form" action="process/simpan-sesion.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="merek">Merek Handphone:</label>
                <input type="text" id="merek" name="merek" required>
            </div>
            <div>
                <label for="tipe">Tipe Handphone:</label>
                <input type="text" id="tipe" name="tipe" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<div id="open-modal" class="modal-window">
    <div class="modal-content">
        <a href="#" title="Close" class="modal-close" onclick="closeModal()">×</a>
        <h1>Form Diagnosa Handphone</h1>
        <form id="diagnosa-form" action="process/simpan-sesion.php" method="post" enctype="multipart/form-data" role="form">
            <div>
                <label for="merek">Merek Handphone:</label>
                <input type="text" id="merek" name="merek" required>
            </div>
            <div>
                <label for="tipe">Tipe Handphone:</label>
                <input type="text" id="tipe" name="tipe" required>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</div>