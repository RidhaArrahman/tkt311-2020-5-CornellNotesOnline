<head>
    <title>Conell Notes Online</title>
    <?php 
        include 'koneksi.php';
        
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
                    <a hef="home.html" class="hidden-xs hidden-sm">
                        <h2>Cornell Notes Online</h2>
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="arsip.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Arsip</span></a></li>
                        
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
                                <a href="#" class="add-project" >Simpan</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" >Kirim</a></li>
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
<script type="text/javascript">
    var count = 0;
    function textAreaAdjust(element1,element2) {
        if (element2 == null) {
            element1.style.height = "1px";
          element1.style.height = (25+element1.scrollHeight)+"px";
        }else{
            var block1 = document.getElementById(element1);
            var block2 = document.getElementById(element2);
          block1.style.height = "1px";
          block1.style.height = (25+block1.scrollHeight)+"px";
          block2.style.height = block1.style.height;
      }
    }
    function createClone() {
    count += 1;
    var contain = document.getElementById('contain');
    var div = document.getElementById('form'),
    clone = div.cloneNode(true); // true means clone all childNodes and all event handlers
    clone.id = "form"+count;
    contain.append(clone);
    }
</script>
<style type="text/css">
    textarea {
     min-height:50px;
}
</style>

    <div style="padding-top: 6%;" >
        <div id="bio">
        <input class="form-control " style="width: 30%; height: 30px !important; float: left; " type="text" id="nama" value="User" readonly="true">
        <strong>
        <textarea class="form-control " style="font-size: 30px;width: 70%; height: 60px !important; float:right;resize: vertical; overflow:hidden" type="text"  id="title" readonly="true">UML chapter 1</textarea></strong>
        <input class="form-control " style="width: 30%; height: 30px !important; float: left; " type="text" id="npm" value="1804111010023" readonly="true">
        <br style="clear:both">
    </div>
        <div id="contain" style="padding-top: 3%;">
                <div id="form">
                <textarea class="form-control " onkeyup="textAreaAdjust('pertanyaan1','catatan1')" style="width: 30%; height: 10% !important; float: left;resize: vertical; overflow:hidden" type="text" placeholder="Pertanyaan" id="pertanyaan1"></textarea>
                <textarea class="form-control " onkeyup="textAreaAdjust('catatan1','pertanyaan1')" style="width: 70%; height: 10% !important;float: right;resize: vertical; overflow:hidden" type="text" placeholder="Catatan" id="catatan1"></textarea>
                </div>
            </div>
        <div id="bottom">
            <textarea class="form-control " onkeyup="textAreaAdjust(this)" style=" height: 10% !important; float: left;resize: vertical; overflow:hidden" type="text" placeholder="Rangkuman" id="rangkuman"></textarea>
        </div>
        </div>
            <div style="padding-top: 13rem">
        <button class="btn" onclick="createClone()" style="background-color: #8080ff; border: none; float:left; color: white; ">Tambah</button>
    </div>
</body>
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
