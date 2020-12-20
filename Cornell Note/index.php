<head>
    <title>Conell Notes Online</title>
    <?php include '../partial/head.php';
        include 'koneksi.php';
        include '../partial/js.php';
    ?>
</head>
 <script src="checkbox/js/checkbox2button.min.js"></script>
<link rel="stylesheet" href="checkbox/css/checkbox2button.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="unsyiah_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Arsip</span></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Tambah Matakuliah</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>User</span>
                                                    <p class="text-muted small">
                                                        User@gmail.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Hai, User</h1>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                            <div class="sales">
                                <h2>Daftar Matakuliah</h2>

                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Waktu:</span> Tahun
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#">2012</a>
                                        <a href="#">2014</a>
                                        <a href="#">2015</a>
                                        <a href="#">2016</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php 
                                                        // print_r($_GET);
                    $sql = "SELECT * FROM course ";
                    $query = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                     ?>

                    <div class="row">
                        <div class="col-xs-12 ">
                        <div class="sales">
                            <h3><?php echo $data['course'] ?></h3>
                            <button id="mahasiswa" dataid="<?php echo $data['course'] ?>" class="float-right" data-toggle="modal" >Tambah Mahasiswa</button>
                            <button id="list" dataids="<?php echo $data['course'] ?>" class="float-right" data-toggle="modal" >Daftar Mahasiswa</button>
                        </div>
                    </div>
                     </div>
                    
                 <?php }?>
                </div>
            </div>
        </div>

    </div>

<script>
function submitContactForm(){
    var course = $('#course').val();
    var des = $('#des').val();
    if(course.trim() == '' ){
        alert('Isi bagian course.');
        $('#course').focus();
        return false;
    }else if(des.trim() == '' ){
        alert('Isi bagian deskripsi.');
        $('#des').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'course.php',
            data:'course='+course+'&des='+des,
            
            success:function(msg){
                $('.statusMsg').html("<span style='color:green;'>Sukses.</span>");
            }
        });
    }
}
$("#mahasiswa").click(function () {
    var course = $(this).attr('dataid');
     $("#data").val( course);
    document.getElementById("dataid").innerHTML =course;
    $('#add_siswa').modal('show');
});
$("#list").click(function () {
    var course = $(this).attr('dataids');
     $("#listdata").val( course);
    document.getElementById("dataidlist").innerHTML =course;
    $('#list_siswa').modal('show');
});
function hapusList(){
    var course = $('#data').val();
    var id = [];
    $.each($("input[name^='id']"), function(){
                   id.push($(this).val());
                  });
        $.ajax({
            type:'POST',
            url:'deletelist.php',
            data:{"id":id, "course" : course}
        });
}
function submitClass(){
    var course = $('#data').val();
    var id = [];
    $.each($("input[name^='id']"), function(){
                   id.push($(this).val());
                  });
        $.ajax({
            type:'POST',
            url:'addcourse.php',
            data:{"id":id, "course" : course}
        });
}
</script>

    <!-- Modal -->
    <div id="add_siswa" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <form type="post">

                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Tambah Mahasiswa</h4>
                <input type="hidden" name="data" id="data" value=""/>
                <h2><div style="color: white;" name="dataid" id="dataid"></div></h2>

                </div>
                <div class="modal-body">
                    <?php 
                                                        // print_r($_GET);
                    $sql = "SELECT * FROM user ";
                    $query = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                     ?>
                     <br>

                            <div style="cursor: pointer; text-align: left; width: 50vh;text-decoration: none; color: gray; border: none;" class="checkbox checkbox2button " disable>
                            <label >
                                <?php echo $data['nama_user']; ?><br/>
                              <input type="checkbox" name="id" value="<?php echo $data['nama_user']; ?>">
                            </label>
                             </div>
                             <br>
                 <?php }?>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="submit"  onclick="submitClass()" class="add-project" >Save</button>
                </div>
            </form>
            </div>

        </div>
    </div>
    <div id="list_siswa" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <form type="post" >

                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Daftar Mahasiswa</h4>
                <input type="hidden" name="listdata" id="listdata" value=""/>
                <h2><div style="color: white;" name="dataidlist" id="dataidlist"></div></h2>
                </div>
                <div class="modal-body">
                <h4 style="color: black">Pilih Untuk Menghapus Mahasiswa</h4>

                    <?php 
                                                        // print_r($_GET);
                    $sql = "SELECT * FROM user ";
                    $query = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                     ?>
                     <br>

                            <div style="cursor: pointer; text-align: left; width: 50vh;text-decoration: none; color: gray; border: none;" class="checkbox checkbox2button " disable>
                            <label >
                                <?php echo $data['nama_user']; ?><br/>
                              <input type="checkbox" name="id" value="<?php echo $data['email']; ?>">
                            </label>
                             </div>
                             <br>
                 <?php }?>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="submit"  onclick="hapusList()" class="add-project" >Hapus</button>
                </div>
            </form>
            </div>

        </div>
    </div>
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <form type="post">

                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Tambah Matakuliah</h4>
                </div>
                <div class="modal-body">
                            <input id='course'  type="text" placeholder="Courses name" >
                            <textarea id='des' placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="submit" onclick="submitContactForm()" class="add-project" >Save</button>
                </div>
            </form>
            </div>

        </div>
    </div>

</body>
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
