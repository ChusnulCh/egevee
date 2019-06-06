<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
               Data Galang dana
           </div>
           <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Target</th>
                            <th>Deadline</th>
                            <th>Kategori</th>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Target</th>
                          <th>Deadline</th>
                          <th>Kategori</th>
                          <th>Foto</th>
                          <th>Deskripsi</th>
                      </tr>

                  </tfoot>
                  <tbody>

                  <?php foreach ($data->result_array as $glng ) :
                    $Id_Galang=$glng['Id_Galang'];
                    $Username=$glng['Username'];
                    $Judul=$glng['Judul'];
                    $Kategori=$glng['Kategori'];
                    $Deadline=$glng['Deadline'];
                    $Cover=$glng['Cover'];
                    $Deskripsi=$glng['Deskripsi'];?>
                <tr>
                  <td><?php echo $Id_Galang; ?></td>
                  <td><?php echo $Username; ?></td>
                  <td><?php echo $Judul; ?></td>
                  <td><?php echo $Kategori; ?></td>
                  <td><?php echo $Deadline; ?></td>
                  <td><?php echo $Cover; ?></td>
                  <td><?php echo $Deskripsi; ?></td>?>
                <?php endforeach;?>
                </tbody>

            </table>

        </div>

        <a href="laporan_galangdana_excel.php" class="btn btn-default" target="blank" style="margin-top: 8px;"><i class="fa fa-print"></i> ExportToExcel</a>

    </div>
</div>
</div>
</div>