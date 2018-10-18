<?php session_start(); if(!isset($_SESSION['is_login'])) {$_SESSION['is_login'] = false;} include_once('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mirae Japanesee Restaurant</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <!-- <link href="css/jquery.dataTables.min.css" rel="stylesheet"> -->
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Mirae Japanesee Restaurant </div>
    <div class="address-bar">Jl. Komplek Colombo No. 40, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <?php if ($_SESSION['is_login']) { ?>
                            <a class="page-scroll" href="#menu">Data Karyawan</a>
                        <?php } else { ?>
                       <a class="page-scroll" href="#menu">Menu</a>
                       <?php } ?>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>

                        <?php if ($_SESSION['is_login']) { ?>
                            <li>
                                <a class="page-scroll" href="#"><?php echo $_SESSION['fullname']; ?></a>
                            </li>
                            <li>
                                <li><a href="logout.php">Logout</a></li>
                            </li>
                        <?php } else { ?>
                            <li><a href="#" onclick="showmodal(event)">Login</a></li>
                        <?php } ?>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <form action="login.php" method="post">
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Mirae Japanesee Restaurant</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>THE FIRST JAPANESEE RESTAURANT AT INDONESIA SINCE 1980</small>
                    </h2>
                </div>
            </div>
        </div>
<section id="menu" class="menu-section">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>
                        <?php if ($_SESSION['is_login']) {
                            echo "Employees";
                        } else {
                            echo "Menu";
                        } ?>
                         in Mirae Japanesee Restaurant
                        </strong>
                    </h2>
                    <body class="dt-example">
            <div class="demo-html"></div>
            <br>
            <?php if ($_SESSION['is_login']) { ?>
                <a href="#" class="btn btn-success" style="margin-bottom: 10px;" onclick="addkaryawan(event)">Tambah Karyawan</a>
            <?php } ?>
            <table id="example" class="display table table-striped table-bordered"" cellspacing="0" width="100%">
                <?php if ($_SESSION['is_login']) { ?>
                <thead>
                    <tr>
                        <th>Nama Karyawan</th>
                        <th>Tanggal lahir </th>
                        <th>Jenis kelamin </th>
                        <th>Jabatan</th>
                        <th>Mulai Kerja</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM `karyawan`";
                        $result = $conn->query($sql);
                        $i = 1;

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<tr class="rowdata" data-id="'.$row['no_id'].'" data-nama="'.$row['nama_id'].'" data-tgl_lhr="'.$row['tgl_lahir'].'" data-sex="'.$row['sex'].'" data-jabatan="'.$row['jabatan'].'" data-kerja="'.$row['mulai_kerja'].'">';
                                echo '  <td>'.$row['nama_id'].'</td>';
                                echo '  <td>'.$row['tgl_lahir'].'</td>';
                                echo '  <td>'.$row['sex'].'</td>';
                                echo '  <td>'.$row['jabatan'].'</td>';
                                echo '  <td>'.$row['mulai_kerja'].'</td>';
                                echo '<td><a href="#" class="btn btn-success" onclick="editdetail(this, event)">Edit</a> &nbsp;<a href="#" class="btn btn-danger" onclick="deletekaryawan(this, event)">Delete</a></td>';
                                echo '</tr>';
                                 $i++;
                            }
                        }
                    ?>
                </tbody>
                <?php } else { ?>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "select
                            a.type_name,
                            b.category_name,
                            c.menu_name,
                            c.menu_price
                        from type a
                        left join category b
                            on a.type_id = b.category_type_id
                        left join menu c
                            on b.category_id = c.menu_category_id;";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row['type_name']."</td>";
                                echo "<td>".$row['category_name']."</td>";
                                echo "<td>".$row['menu_name']."</td>";
                                echo "<td>".$row['menu_price']."</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
                <?php } ?>
            </table>
                </div>
            </div>
        </div>
</section>

<section id="about" class="about-section">
   <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>About Mirae Japanesee Restaurant</strong>
                    </h2>
                    <hr>
                    <p>'Mirae  Japanesee Restaurant' adalah restaurant Jepang pertama di Indonesia. Restaurant ini pertama kali dibangun oleh Soetarto Hanif pada tahun 1980. Berawal dari menempuh pendidikan peguruan tinggi di Jepang, Soetarto Hanif kemudian mempelajari resep-resep makanan di Jepang yang terkenal dan sangat disukai oleh masyarakat Jepang. Setelah kembali ke Indonesia Soetarto Hanif kemudian mulai membangun kedai yang menjual semua masakan Jepang dibantu oleh sang istri Suminah. Mereka berdua berjualan masakan jepang ini di warung kedai pinggir jalan</p>
                    <p>Setelah beberapa tahun berkembang, Soetarto Hanif mulai membangun restaurant kecil. Semakin berkembangnya waktu, restaurant ini semakin berkembang lebih maju lagi. </p>
                    <p>Saat ini restaurant ini dipimpin oleh anak tunggal dari Soetarto Hanif, yaitu Abdurrazak Hanif</p>
                </div>
            </div>
        </div>
</section>


    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Mirae Japanesee Restaurant 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="modaledit" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Karyawan</h4>
                </div>
                <form action="edit_karyawan.php" method="post">
                <div class="modal-body">
                    <input type="hidden" name="emp_id" id="emp_id" value="">
                        <div class="form-group">
                            <label for="emp_nama">Nama</label>
                            <input type="text" name="emp_nama" class="form-control" id="emp_nama" placeholder="Nama Karyawan">
                        </div>
                        <div class="form-group">
                            <label for="emp_tgl_lhr">Tanggal Lahir *(YYYY-MM-DD)</label>
                            <input type="text" name="emp_tgl_lhr" class="form-control" id="emp_tgl_lhr" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="emp_gender">Jenis Kelamin *(L/P)</label>
                            <input type="text" name="emp_gender" class="form-control" id="emp_gender" placeholder="Jenis Kelamin">
                        </div>
                        <div class="form-group">
                            <label for="emp_jabatan">Jabatan</label>
                            <input type="text" name="emp_jabatan" class="form-control" id="emp_jabatan" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <label for="emp_mulai_kerja">Mulai Kerja *(YYYY-MM-DD)</label>
                            <input type="text" name="emp_mulai_kerja" class="form-control" id="emp_mulai_kerja" placeholder="Mulai Kerja">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-default" onclick="clearedit(this)" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addkaryawan" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Karyawan</h4>
                </div>
                <form action="aksi_tambah.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="emp_nama">Nama</label>
                        <input type="text" name="nama_id" class="form-control" id="emp_nama" placeholder="Nama Karyawan">
                    </div>
                    <div class="form-group">
                        <label for="emp_tgl_lhr">Tanggal Lahir *(YYYY-MM-DD)</label>
                        <input type="text" name="tgl_lahir" class="form-control" id="emp_tgl_lhr" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label for="emp_gender">Jenis Kelamin *(L/P)</label>
                        <input type="text" name="sex" class="form-control" id="emp_gender" placeholder="Jenis Kelamin">
                    </div>
                    <div class="form-group">
                        <label for="emp_jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" id="emp_jabatan" placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="emp_mulai_kerja">Mulai Kerja *(YYYY-MM-DD)</label>
                        <input type="text" name="mulai_kerja" class="form-control" id="emp_mulai_kerja" placeholder="Mulai Kerja">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-default" onclick="clearedit(this)" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modaldelete" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Hapus Karyawan</h4>
                </div>
                <form action="delete_karyawan.php" method="post">
                <div class="modal-body">
                    <input type="hidden" name="emp_id" id="emp_id_del" value="">
                    <p>Apakah anda yakin akan menghapus data karyawan : <strong id="emp_nama_del"></strong></p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-default" onclick="clearedit(thiss)" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" languange="javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" languange="javascript" src="js/javascript.js"></script>
    <script type="text/javascript" languange="javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" languange="javascript" src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" languange="javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" languange="javascript" src="js/dataTables.bootstrap.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    function showmodal(ev) {
        ev.preventDefault();
        $("#myModal").modal('show');
    }
    function addkaryawan(ev) {
        ev.preventDefault();
        $("#addkaryawan").modal('show');
    }
    function editdetail(elem, ev) {
        ev.preventDefault();
        $("#modaledit").modal('show');
        row = elem.closest('.rowdata');
        data = $(row).data();
        $("#emp_id").val(data.id);
        $("#emp_nama").val(data.nama);
        $("#emp_tgl_lhr").val(data.tgl_lhr);
        $("#emp_gender").val(data.sex);
        $("#emp_jabatan").val(data.jabatan);
        $("#emp_mulai_kerja").val(data.kerja);
    }
    function clearedit(elem) {
        $(elem).closest('form').find("input[type=text]").val("");
        $("#emp_id").val("");
    }
    function deletekaryawan(elem, ev) {
        ev.preventDefault();
        $("#modaldelete").modal('show');
        row = elem.closest('.rowdata');
        data = $(row).data();
        $("#emp_id_del").val(data.id);
        $("#emp_nama_del").html(data.nama);
    }
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    $(document).ready(function(){
        $('#example').DataTable();
    });

    bootstrap_alert = function () {}
    bootstrap_alert.warning = function (message, alert, timeout) {
        $('<div id="floating_alert" class="alert alert-' + alert + ' fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' + message + '&nbsp;&nbsp;</div>').appendTo('body');


        setTimeout(function () {
            $(".alert").alert('close');
        }, timeout);

    }
    <?php if(isset($_SESSION['alert']) && $_SESSION['alert'] == true) { ?>
        bootstrap_alert.warning('<?php echo $_SESSION['alert_text']; ?>', '<?php echo $_SESSION['alert_class']; ?>', 20000);
    <?php unset($_SESSION['alert'], $_SESSION['alert_text'], $_SESSION['alert_class']); } ?>
    </script>
</body>

</html>
