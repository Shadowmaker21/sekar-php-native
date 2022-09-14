<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Absen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Absen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Absen</h3>
                <br>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">  
                    <thead>
                        <th>No</th>
                        <th>NIP</th>
			                  <th>Jabatan</th>
                        <th>Nama User</th>
                        <th>Hari</th>
                        <th>Join Meeting</th>
                        <th>Agenda</th>
                    </thead>
                    <tbody>
                    <?php
                        $no = 0;
                        $query = mysqli_query($koneksi1, "SELECT * FROM `absen` LEFT JOIN `not_dir`ON absen.agenda=not_dir.agenda WHERE absen.tgl_join AND not_dir.tanggal");
                        while($row = mysqli_fetch_assoc($query)){
                          $no++;
                          ?>
                      <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $row['nip']; ?></td>
                        <td><?php echo $row['jabatan']; ?></td>
                        <td><?php echo $row['nama_user']; ?></td>
                        <td><?php echo $row['hari']; ?></td>
                        <td><?php echo $row['tgl_join']; ?></td>
                        <td><?php echo $row['agenda']; ?></td>


                        

                      </tr>
                          <?php } ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->