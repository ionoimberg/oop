<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php

            $user = new User;
            $user->username   = "celentano";
            $user->password   = "777";
            $user->first_name = "Adriano";
            $user->last_name  = "celen's";

            if(User::verify_user($user->username, $user->password)) {

                echo "User already exists.";

            } else {

                $user->create();
                echo "
                The name of the user is " . $user->username;

            }

//            $user = User::find_user_by_id(11);
//            $user->username = "Serena";
//            $user->password = "555";
//            $user->first_name = "Serena";
//            $user->last_name = "sim";
//
//            $user->update();

//            $user = new User();

//            $user = User::find_user_by_id(6);
//            $user->delete();

//            $user = User::find_user_by_id(10);
//            $user->password = "333";
//            $user->save();

//            $user = new User();
//            $user->username = "Pinokio";
//            $user->password = "111";
//            $user->first_name = "Pino";
//            $user->last_name = "kio";
//            $user->save();


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