<?php 
    include 'partial/head.php';
?>
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
                    $count = 0;
                    while ($data = mysqli_fetch_array($query)) {
                     ?>
                     
                    <div id="box<?php echo $count ?>" class="row" style="cursor: pointer;">
                        <div class="col-xs-12 ">
                        <div class="sales" style=" transition: 0.3s;" onmouseover="this.style.background='#a0abbe'; this.style.color='white'; this.style.opacity='1';" onmouseout="this.style.background='white';this.style.color='black'; this.style.opacity='0.6';">
                            <a style="display: none;" href="room.php?course=<?php echo $data['course'] ?>"></a>
                            <h3><?php echo $data['course'] ?></h3>
                            <button id="mahasiswa" dataid="<?php echo $data['course'] ?>" class="float-right" data-toggle="modal" >Tambah Mahasiswa</button>
                            <button id="list" dataids="<?php echo $data['course'] ?>" class="float-right" data-toggle="modal" >Daftar Mahasiswa</button>
                        </div>
                    </div>
                     </div>
                    <script type="text/javascript">
                         $("#box<?php echo $count ?>").click(function() {
                          window.location = $(this).find("a").attr("href"); 
                          return false;
                        });
                     </script>
                 <?php 
                 $count +=1;
             }?>
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
