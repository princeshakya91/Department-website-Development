<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <title>Admin Deshboard</title>
    <link rel="stylesheet" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">


    <link href="../bootstrap-4.0.0/dist/css/bootstrap.css" rel="stylesheet"/>
    <link href="./../css/profile.css" rel="stylesheet"/>
    <link href="./../Font-Awesome-master/css/fontawesome.min.css" rel="stylesheet"/>
    <link href="./../Font-Awesome-master/css/fontawesome.css" rel="stylesheet" />
    <link href="./../Font-Awesome-master/css/all.css" rel="stylesheet" />
    <script src=
            "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


    <!--Header-->
        <header >
        <nav class="navbar navbar-expand-lg fixed_top" id="navbar">
            <div class="container-fluid">
                <!--        Place to Main Icon for ui design only in NavBar-->

                <center><div class="container ms-5 my_pro">
                    <h3 class="ms-5">MY PROFILE</h3>
                </div></center>

                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i style="color: white;" class="fa fa-bars"></i> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent2">

                    <!-- This is From Control For Search Bar and Search Button -->
                    <!--                    <form class="d-flex ms-5">-->
                    <!--                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                    <!--                        <button class="btn btn-outline-light" type="submit">Search</button>-->
                    <!--                    </form>-->
                    <!-- This is From Control For Search Bar and Search Button -->

                    <!--                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">-->

                    <!--                    </ul>-->
                    <!--This form is for LogOut and cofficient of logout-->
                    <div class=" ms-auto">
                        <button onclick="u_logout()" class="btn btn-outline-light" id="u_logout"> Logout</button>
                        <script>
                           function u_logout(){
    window.location.href = "../index.php";
}
                            </script>
                    
                    </div>
                    <!--This form is for LogOut and cofficient of logout-->
                </div>
            </div>
        </nav>
    </header>
    <!--Header-->

    <!--Main Body [Aside][Friends List]-->
        <div class="container">
    <!--User Picture this is default addetional User name -->
    <!-- <div class="container User_Img">
        <img class="d-flex" src="<?php echo trim($fetched_dp,"./../");?>" height="120" width="120"/>
    </div> -->
    <!--  This is user name  -->
    <div class="container user_name d-flex">
        <!-- <h2><?php echo $fetched_name?></h2> -->
       
    </div>
    <h2>Admin Name </h2>
    <!--User Picture-->
    <!--User Picture this is default addetional User name -->


    <div class="row">
        <!--Aside Panel-->
<!-- 
        <div class="container aside col-1 ms-1 justify-content-end">
            <aside class="bd-aside sticky-xl-top text-muted align-self-start  px-2">
                <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">About Me</h2>
                <nav id="toc">
                    <ul class="list-unstyled">
                        <li class="my_1">
                            <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">My Profile</button>
                            <ul class="list-unstyled  collapse" id="contents-collapse">
                                <li><a class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#add_photo_modal" >Add Photo</a></li>
                                <li><a class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#edit_description">Edit Description</a></li>
                            </ul>
                        </li>
                        <li class="my-2">
                            <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#froms-collapse" aria-controls="forms-collapse">Account Properties</button>
                            <ul class="list-unstyled ps-3 collapse" id="froms-collapse">
                                <li><a class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#check_properties">Check Account Properties</a></li>
                                <li><a class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#delete_account">Delete Account</a></li>
                            </ul>
                        </li>
                        <li class="my-3">
                            <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse" aria-controls="components-collapse">My Friends</button>
                            <ul class="list-unstyled ps-3 collapse" id="components-collapse">
                                <li><a class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#add_friend">Add Friend</a></li>
                                <li><a class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#friend_req">Friend Request</a></li>
                                <li><a class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#block_friend">Block ID</a></li>
                                <li><a class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#del_friend">Delete Contect</a></li>
                            </ul>
                        </li>
                        <li class="my-4">
                            <button id ="grp_list" class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse1" aria-controls="contents-collapse">Groups</button>
                            <ul class="list-unstyled ps-3 collapse" id="contents-collapse1">
                                <li><a class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#create_group">Create new group</a></li>
                                <li><a class="d-inline-flex align-items-center rounded" href="#">Join</a></li>
                                <hr>

                                <li><a id="m_grp" class="d-inline-flex align-items-center rounded" data-bs-toggle="modal" href="#my_groups">My Groups</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div> -->

        <!--Aside Panel-->

        <!--Main Board-->

        <div class=" scroll col-2 d-flex">


            <div class="container main_fri me-auto ms-auto sticky-top">
                <div>
                    <h2 class="h6 pt-4 pb-1 mb-2 border-bottom d-flex">Student's List</h2>
                </div>
                <nav class="small me-auto ms-auto">
                    <ul class="container card_link me-auto ms-auto">
                       <div class="profile_cards">

                       </div>

                    </ul>
                </nav>
            </div>
        </div>

        <!--Main Board-->

    </div>

</div>

    <!--Main Body [Aside][Friends List]-->


    <!--Models-->
        <!--Add Image Modal-->
            <div class="modal fade" id="add_photo_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel1">Edit User Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--               This form is only for add image function-->
                <form action="./upload_img/upload.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="add_photo_modal">Upload Your Account Photo</label>
                            <br>
                            <label class="form-label" for="add_photo_modal">Please Select an Image.</label>
                            <input type="file" class="form-control" name="file" id="file">
                        </div>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- This is Add Photo Save Button Use as An Submit Button-->
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <!-- This is Add Photo Save Button -->
                    </div>
                </form>

                <!--               This form is only for add image function-->
            </div>
        </div>

</div>
         <!--Add Image Modal-->

        <!--Edit Description-->
             <div class="modal fade" id="edit_description" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel1">Edit Description</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="mb-3">

                        <label class="form-label" for="add_photo_modal">This description will be visible to your friends.</label>
                        <input type="text" class="form-control" id="desc">

                    </div>
                    <div id="show_desc">  </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <button type="submit" id="desc_save" class="btn btn-primary">Save Changes</button>


                </div>

            </form>

        </div>
    </div>

</div>
        <!--  Edit Description-->

        <!--Check User Details-->
            <div class="modal fade" id="check_properties" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Your Account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!--               This form is only for User Properties function-->
                    <form>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="check_properties">Name :</label>
                                <label class="form-label" for="check_properties"><?php echo $fetched_name ?></label>

                                <br>

                                <label class="form-label" for="check_properties">User ID :</label>
                                <input disabled type="text" class="form-label" value="<?php echo $fetched_uid ?>" for="check_properties" id="user_id"> &nbsp; <button  style="border: none; margin-left: 20px;" onclick="copy_toclip();"><i class="fa fa-copy"></i></button>

                                <br>

                                <label class="form-label" for="check_properties">Email ID :</label>
                                <label class="form-label" for="check_properties"  ><?php echo $email ?></label>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                    <!--               This form is only for add image function-->
                </div>
            </div>
        </div>
        <!--Check user Details-->


        <!-- Account Delete -->
            <div class="modal fade" id="delete_account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel3">Delete Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--               This form is only for User Properties function-->
                <form action="delete_profile/delete.php" method="get">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="delete_account">Your Account is going to Delete for Ever.</label>

                            <br>
                            <input hidden name ="del" value="<?php echo $fetched_uid; ?>">
                            <br>
                            <center>
                                <label class="form-label" for="delete_account">Delete Account. Are you Sure?.</label>
                            </center>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button id="del_my_account" type="submit" class="btn btn-secondary bg-danger" >Yes, Delete my account</button>
                    </div>
                </form>
                <!--               This form is only for add image function-->
            </div>
        </div>
    </div>
        <!-- Account Delete -->

        <!--Add Friend-->
            <div class="modal fade" id="add_friend" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel4">Add Friend</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--               This form is only for User Properties function-->
                <form action="./../friend_request/send_request.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="add_friend">You Can Add Friend by Their User ID</label>
                            <input type="number" name="req_uid" class="form-control" id="customFile3">


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-secondary bg-success" >Request</button>
                    </div>
                </form>
                <!--               This form is only for add image function-->
            </div>
        </div>
    </div>
        <!--Add Friend-->

        <!--Block Friend-->
            <div class="modal fade" id="block_friend" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel5">Block Friend</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!--               This form is only for User Properties function-->
                    <form>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="add_friend">You Can Block any Contact by Their User ID</label>
                                <input type="number" class="form-control" id="customFile6">
                                <br>
                                <label class="form-label" for="delete_account">Block Contact by their email id</label>
                                <input type="email" class="form-control" id="customFile5">
                                <br>
                                <br>
                                <center>
                                    <label class="form-label" for="delete_account">Block ID. Are you Sure?.</label>
                                </center>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-secondary bg-danger" data-bs-dismiss="modal">Block ID</button>
                        </div>
                    </form>
                    <!--               This form is only for add image function-->
                </div>
            </div>
        </div>
        <!--Block Friend-->

        <!--DEL Friend-->
            <div class="modal fade" id="del_friend" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel6">Delete Friend contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!--               This form is only for User Properties function-->
                    <form>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="add_friend">You Can Delete Contact by Their User ID</label>
                                <input type="number" class="form-control" id="customFile7">
                                <br>
                                <label class="form-label" for="delete_account">Delete Contact by their email id</label>
                                <input type="email" class="form-control" id="customFile8">
                                <br>
                                <br>
                                <center>
                                    <label class="form-label" for="delete_account">Delete Friend ID. Are you Sure?.</label>
                                </center>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-secondary bg-danger" data-bs-dismiss="modal"><Delete></Delete>Delete ID</button>
                        </div>
                    </form>
                    <!--               This form is only for add image function-->
                </div>
            </div>
        </div>
        <!--DEL Friend-->

        <!--Incoming Friends Friend-->
            <div class="modal fade" id="friend_req" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel7">Incoming Friends Request</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!--               This form is only for User Properties function-->
                    <div class="container scrol">


                                <?php

                               $k=count($request_uid);
                                $j=0;

                               for ($j=0;$j<$k;$j++){
                                   if ($fetched_uid==$request_uid[$j] && $status="not accepted"){
                                   $query3="SELECT `Username`, `Profile_Pic` FROM `userdata` WHERE `Unique_Id` = '$sender_uid[$j]'";
                                   $res3=mysqli_query($con,$query3);
                                   $fetch2 = mysqli_fetch_assoc($res3);


                                ?>
                                              <form action="./../friend_request/accept_request.php" method="post">
                                                  <nav class="small me-auto ms-auto">
                                                      <li class="mb-3">
                                                          <div class="card shadow" style="height: auto; width: 400px;">
                                                              <div class="row g-0">
                                                                  <div class="col-md-4">
                                                                      <img src="<?php echo trim($fetch2['Profile_Pic'],"./../"); ?>" style="height: 70px; width: 70px; background-color: #abdde5; border-radius: 100%; transform: translateX(40px) translateY(24px);"/>
                                                                  </div>
                                                                  <div class="col-md-8">
                                                                      <div class="card-body">
                                                                          <h5 class="card-title"><?php echo $fetch2['Username']; ?><div class="ms-auto" style="background-color: green; width: 10px; height: 10px; border-radius: 100%;"> </div> </h5>
                                                                          <nav class="small">
                                                                              <p class="card-text"><small class="text-muted">Online</small></p>
                                                                              <div class="container">

                                                                                  <input type="hidden" id="importe" name="data_name" value="<?php echo $sender_uid[$j];?>"/>
                                                                                  <button  class="btn btn-primary bg-success" type="submit"><i class="fa fa-check-circle"></i> Accept  </button>
                                                                                  <button  id="decline_btn" class="btn btn-primary bg-danger"> <i class="fa fa-times-circle"></i> Decline </button>
                                                                              </div>
                                                                          </nav>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                      </li>
                                                  </nav>
                                              </form>
                                               <?php } } ?>

                            </ul>
                    </div>
                    <!--               This form is only for add image function-->
                </div>
            </div>
        </div>
        <!--Incoming Friends Friend-->

          <!--create new group-->
          <div class="modal fade" id="create_group" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel1">Create New Group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="mb-3">

                        <label class="form-label" for="add_photo_modal">Enter Group Name.</label>
                        <input type="text" class="form-control" id="group_name">

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <button type="submit" id="c_group" class="btn btn-primary">Create</button>


                </div>

            </form>

        </div>
    </div>
         </div>
          <!--  create new group-->

<!--my groups-->
<div class="modal fade" id="my_groups" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel1">My Groups</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class=" container scrol">

                <div class="modal-body">
                        <div id="group_li"></div>
                </div>


            </div>

        </div>
    </div>
</div>
<!--  my groups-->

    <!--Models-->


<!--This Section is only for javaScripts-----------------------------------------Don't Go Down Further------------------------>
    <!--Scripts-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../bootstrap-4.0.0/dist/js/bootstrap.min.js"> </script>
        <script src="../bootstrap-4.0.0/assets/js/vendor/popper.min.js"> </script>
        <script src="../bootstrap-4.0.0/assets/js/vendor/holder.min.js"> </script>
        <script src="./../js/profile.js"> </script>
    <!--Scripts-->
</body>
</html>