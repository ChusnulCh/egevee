<!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
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
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>        <a href="laporan_galangdana_excel.php" class="btn btn-default" target="blank" style="margin-top: 8px;"><i class="fa fa-print"></i> ExportToExcel</a>

    </div>
</div>
</div>
</div>