<!DOCTYPE html>
<html>
<title>Arsip Surat XYZ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  ----------- <br>
  <a href="<?php echo base_url('Arsip') ?>" class="w3-bar-item w3-button">Arsip</a> <br>
  <a href="<?php echo base_url('About') ?>" class="w3-bar-item w3-button">About</a>
  
</div>

<!-- Page Content -->
<div style="margin-left:20%">
    <div class="w3-container w3-teal">
        <h1>Arsip Surat</h1>
    </div>

        <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. Klik "Lihat" pada kolom aksi untuk menampilkan surat. </p>

<br>

    <p>
        <form action="" method="post" class="col-md-3">
            <div class="input-group no-border"> Cari surat:
                <input type="text" name="keyword" value="<?=set_value("keyword")?>" class="form-control" placeholder="Cari berdasarkan nama...">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="nc-icon nc-zoom-split"></i>
                        </div>
                    </div>
            </div>
        </form>
    </p>

    <div class="table-responsive" style="max-height: 442px; overflow-x:hidden;">
    <table class="table">
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
    </div>
<br>

    <div class="modal-footer">
        <button type="button" class="btn btn-primary">Arsipkan Surat</button>
    </div>

</div>

</body>
</html>