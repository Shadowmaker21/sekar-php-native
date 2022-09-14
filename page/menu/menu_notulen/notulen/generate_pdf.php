<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid" width="100%">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Notulen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SIAK</li>
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
                <h3 class="card-title">Hasil Notulen</h3>
                <br>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                $content = "
                <page>
                    <h1>Example</h1>
                    <br>
                    Try <b>GO</b>
                </page>";

                require_once('../assets/html2pdf/html2pdf.class.php');
                $html2pdf = new HTML2PDF('P','A4','en');
                $html2pdf->writeHTML($content);
                // Clean any content of the output buffer
                ob_end_clean();
                $html2pdf->Output('example.pdf');
                ?>
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


