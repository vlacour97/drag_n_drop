<?php
/**
 * Created by PhpStorm.
 * User: valentinlacour
 * Date: 16/02/16
 * Time: 16:11
 */


if(isset($_GET['id']))
{
    echo form($_GET['id']);
}


function form($id)
{
    switch ($id) {
        case 1:
            return '
<form action="#" method="post"> <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="salut" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="heyhey" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div></form>';

        case 2:
            return '<form><div class="row owner">
                    <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 text-center">
                        <div class="avatar">
                            <img src="chet_faker_2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                        <div class="name">
                            <h4><input type="text" class="noBackground" name="h4" style="width: 100%;" placeholder="Chet Faker"/><br><small><input type="text" name="small" class="noBackground" placeholder="Music Producer"/></small></h4>
                        </div>
                    </div>
                </div></form>';

        case 3:
            return '<div class="profile-tabs">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#follows" data-toggle="tab">Follows</a></li>
                                <li><a href="#following" data-toggle="tab">Following</a></li>
<!--                                 <li><a href="#following" data-toggle="tab">Following</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="follows">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <ul class="list-unstyled follows">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-0 col-xs-3 col-xs-offset-2">
                                                    <img src="/paper-kit/assets/paper_img/flume.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                                <div class="col-md-7 col-xs-4">
                                                    <h6>Flume<br><small>Musical Producer</small></h6>
                                                </div>
                                                <div class="col-md-3 col-xs-2">
                                                    <div class="unfollow" rel="tooltip" title="" data-original-title="Unfollow">
                                                        <label class="checkbox checked" for="checkbox1">
                                                            <span class="icons"><span class="first-icon fa fa-circle-o fa-base"></span><span class="second-icon fa fa-check-circle-o fa-base"></span></span><input type="checkbox" value="" id="checkbox1" data-toggle="checkbox" checked="">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <hr>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-0 col-xs-3 col-xs-offset-2">
                                                    <img src="/paper-kit/assets/paper_img/banks.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                                <div class="col-md-7 col-xs-4">
                                                    <h6>Banks<br><small>Singer</small></h6>
                                                </div>
                                                <div class="col-md-3 col-xs-2">
                                                    <div class="unfollow" rel="tooltip" title="" data-original-title="Unfollow">
                                                        <label class="checkbox checked" for="checkbox1">
                                                            <span class="icons"><span class="first-icon fa fa-circle-o fa-base"></span><span class="second-icon fa fa-check-circle-o fa-base"></span></span><input type="checkbox" value="" id="checkbox1" data-toggle="checkbox" checked="">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane text-center" id="following">
                            <h3 class="text-muted">Not following anyone yet :(</h3>
                            <btn class="btn btn-warning btn-fill">Find artists</btn>
                        </div>
                    </div>

                </div>';
        case 4:
            return '<div class="section text-center landing-section col-sm-12">
                <div class="container col-sm-12">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h2><input type="text" class="noBackground text-center" name="h4" style="width: 100%;" placeholder="Chet Faker"/></h2>
                            <h5><textarea class="noBackground col-sm-12">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more.</textarea></h5>
                            <br>
                            <a href="#" class="btn btn-danger btn-fill"><input type="text" class="noBackground text-center" name="h4" style="width: 100%;" placeholder="Chet Faker"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <script>

            </script>';

    }
}

//New commit