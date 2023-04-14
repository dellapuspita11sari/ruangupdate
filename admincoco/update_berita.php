<?php
include "include/header.php";
?>

  <!-- Navbar -->
  <?php
include "include/navbar.php";
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
include "include/sidebar.php";
?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Berita</h1>
        </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">DataTables</li>
        </ol>
      </div>
    </div>
  </section>

<section class="content">
  <div class="container-fluid">
  <div class="card card-default">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">berita ruang update</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>no.</th>
                  <th>judul</th>
                  <th>kutipan</th>
                  <th>deskripsi(s)</th>
                  <th>gambar</th>
                </tr>
              </thead>
              <tbody>
        <tr>
          <td>1</td>
          <td>pelantikan ORMAWA</td>
          <td>aaaaaaaa</td>
          <td>jadi gini..</td>
          <td></td>
        </tr>
        <!-- <tr>
          <td>Gecko</td>
          <td>Firefox 3.0</td>
          <td>Win 2k+ / OSX.3+</td>
          <td>1.9</td>
          <td>A</td>
        </tr> -->
</tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
  </div>
</section>
</div>