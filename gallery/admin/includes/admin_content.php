<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php

//            $user = new User;
//            $user->username   = "Gandalf";
//            $user->password   = "456";
//            $user->first_name = "James";
//            $user->last_name  = "Simson";

//            if(User::verify_user($user->username, $user->password)) {
//
//                echo "User already exists.";
//
//            } else {
//
//                $user->create();
//                echo "
//                The name of the user is " . $user->username;
//
//            }

//            $user = User::find_user_by_id(2);
//            $user->first_name = "Serena";
//            $user->update();

//            $user = new User();

            $user = User::find_user_by_id(8);
            $user->delete();


            ?>



            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->