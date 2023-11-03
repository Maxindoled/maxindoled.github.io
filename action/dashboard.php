<?php
include ('header.php');
include ('sidebar.php');
?>

<section class="content-wrapper">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-9">
                <h3 class="text-dark">Dashboard</h3>
                <p style="font-size: 10px; margin-top: -10px;">Dashboard Company Profile Maxindoled</p>
            </div>

            <div class="col">
                <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                        aria-label="Search">
                </form>
            </div>
        </div>

            
        <!-- card top -->
        <div class="row">

            <div class="col">
                <div style="background-image: url(dist/img/card.png); background-size: cover;" class="card">
                    <a href="team.php" style="text-decoration: none;" class="text-dark">
                        <div class="card-body">
                            <h6 style="color: #0288d1;"><i style="color: #404040;" class="nav-icon fa-solid fa-users"></i> Team</h6>
                            <p style="font-size: x-small;">Mendeklarasikan Team</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col">
                <div style="background-image: url(dist/img/card1.png); background-size: cover;" class="card">
                    <a href="about.php" style="text-decoration: none;" class="text-dark">
                        <div class="card-body">
                            <h6 style="color: #D32F2F;"><i style="color: #404040;" class="nav-icon fa-solid fa-building"></i> About Us</h6>
                            <p style="font-size: x-small;">Mendeklarasikan Tentang Maxindo</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col">
                <div style="background-image: url(dist/img/card2.png); background-size: cover;" class="card">
                    <a href="content.php" style="text-decoration: none;" class="text-dark">
                        <div class="card-body">
                            <h6 style="color: #388E3C;"><i style="color: #404040;" class="nav-icon fa-solid fa-layer-group"></i> Content V1</h6>
                            <p style="font-size: x-small;">Mendeklarasikan Content V1</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col">
                <div style="background-image: url(dist/img/card6.png); background-size: cover;" class="card">
                    <a href="konten.php" style="text-decoration: none;" class="text-dark">
                        <div class="card-body">
                            <h6 style="color: #82F5A8;"><i style="color: #404040;" class="nav-icon fa-solid fa-layer-group"></i> Content V2</h6>
                            <p style="font-size: x-small;">Mendeklarasikan Content V2</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- card top -->

        <!-- chart -->
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h6><i class="fa-solid fa-chart-line"></i> Chart-chart an</h6>
                        <!-- <h6><i class="fa-solid fa-location-dot"></i> Location</h6> -->
                        <hr>
                        <canvas id="myChart" style="width:100%; max-width:100%; height: 300px;"></canvas>
                        <script>
                            const xValues = [100,200,300,400,500,600,700,800,900,1000];

                            new Chart("myChart", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                    data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                                    borderColor: "red",
                                    fill: false
                                    },{
                                    data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                                    borderColor: "green",
                                    fill: false
                                    },{
                                    data: [1900,1100,1800,1300,5000,5700,4400,5500,3450,1120],
                                    borderColor: "yellow",
                                    fill: false
                                    },{
                                    data: [1200,100,7800,5300,5400,4700,1400,9500,4450,9120],
                                    borderColor: "#82F5A8",
                                    fill: false
                                    },{
                                    data: [1100,1200,3800,6300,5900,2700,1400,9500,8450,9120],
                                    borderColor: "grey",
                                    fill: false
                                    },{
                                    data: [2100,3200,5800,6900,7500,6700,8400,9900,14050,1120],
                                    borderColor: "purple",
                                    fill: false
                                    },{
                                    data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                                    borderColor: "blue",
                                    fill: false
                                    }]
                                },
                                options: {
                                    legend: {display: false}
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="col">
                <div style="background-image: url(dist/img/card4.png); background-size: cover;" class="card">
                    <a href="nowa.php" style="text-decoration: none;" class="text-dark">
                        <div class="card-body">
                            <h6 style="color: #BFBFBF;"><i style="color: #404040;" class="nav-icon fa-brands fa-square-whatsapp"></i> No Marketing</h6>
                            <p style="font-size: x-small;">Mendeklarasikan No Marketing</p>
                        </div>
                    </a>
                </div>

                <div style="background-image: url(dist/img/card5.png); background-size: cover;" class="card">
                    <a href="komentar.php" style="text-decoration: none;" class="text-dark">
                        <div class="card-body">
                            <h6 style="color: #8C20BA;"><i style="color: #404040;" class="nav-icon fa-solid fa-comment"></i> Komentar</h6>
                            <p style="font-size: x-small;">Mendeklarasikan Komentar</p>
                        </div>
                    </a>
                </div>

                <div style="background-image: url(dist/img/card3.png); background-size: cover;" class="card">
                    <a href="perkataan.php" style="text-decoration: none;" class="text-dark">
                        <div class="card-body">
                            <h6 style="color: #F2D13E;"><i style="color: #404040;" class="nav-icon fa-solid fa-list"></i> Type LED</h6>
                            <p style="font-size: x-small;">Mendeklarasikan Type LED</p>
                        </div>
                    </a>
                </div>

            </div>
            

        </div>
        <!-- chart -->


        <!-- Google Maps -->
        <div class="card">
            <div class="card-body">
                <h6><i class="fa-solid fa-location-dot"></i> Location</h6>
                <hr>
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=maxindo led&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <a href="https://embed-googlemap.com">embed-googlemap.com</a>
                </div>
                <style>
                    .mapouter{
                        position:relative;
                        text-align:right;
                        width:100%;
                        height:400px;
                    }
                            
                    .gmap_canvas{
                        overflow:hidden;
                        background:none!important;
                        width:100%;
                        height:400px;
                    }
                    .gmap_iframe {
                        height:400px!important;
                    }
                </style>
            </div>
        </div>
        <!-- Google Maps -->


        <!-- bottom -->
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="content.php" style="font-size: x-small;" class="btn btn-dark text-white mb-2"><i class="fa-solid fa-eye"></i> Lihat Content</a>
                        <table style="font-size: small;" id="example" class="display table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="30" class="text-center">No</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Waktu</th>
                                    <!-- <th width="120" class="text-center">Aksi</th> -->
                                </tr>
                            </thead>
                            <?php 
                            include 'koneksi.php';
                            $data = mysqli_query($koneksi,"SELECT * FROM content ORDER BY content_id DESC");
                            $no = 1;
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td class="text-center"><img src="gambar/<?php echo $d['foto'] ?>" width="40" height="40"></td>
                                        <td><?php echo $d['keterangan']; ?></td>
                                        <td><?php echo $d['waktu']; ?></td>
                                        <!-- <td class="text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <button style="font-size: 8px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <a style="font-size: 8px;" onclick="return konfirmasi()" href="content_delete.php?content_id=<?php echo $d['content_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </td> -->
                                    </tr>
                                </tbody>
                                <?php
                            }
                
                            ?>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="perkataan.php" style="font-size: x-small;" class="btn btn-dark text-white mb-2"><i class="fa-solid fa-eye"></i> Lihat Type LED</a>
                        <table style="font-size: small;" id="example" class="display table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="30" class="text-center">No</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Subjek</th>
                                    <th class="text-center">Isi</th>
                                    <th class="text-center">Waktu</th>
                                </tr>
                            </thead>
                            <?php 
                            include 'koneksi.php';
                            $data = mysqli_query($koneksi,"SELECT * FROM perkataan ORDER BY kata_id DESC");
                            $no = 1;
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td class="text-center"><img src="perkataan/<?php echo $d['foto'] ?>" width="40" height="40"></td>
                                        <td><?php echo $d['subjek']; ?></td>
                                        <td><?php echo $d['isi']; ?></td>
                                        <td><?php echo $d['waktu']; ?></td>
                                        <!-- <td class="text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <button style="font-size: 8px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <a style="font-size: 8px;" onclick="return konfirmasi()" href="content_delete.php?content_id=<?php echo $d['content_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </td> -->
                                    </tr>
                                </tbody>
                                <?php
                            }
                
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        <!-- bottom -->

    </div>
</section>

<?php
include ('footer.php');
?>