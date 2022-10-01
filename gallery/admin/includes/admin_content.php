<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php

//            echo "find all users" . "<br>";
//            $result_set = Users::find_all_users();
//            while ($row = mysqli_fetch_array($result_set)) {
//
//                echo $row['id'] . " " . $row['first_name'] . "<br>";
//            }
//
//            echo "<br><br>" . "find user by id" . "<br>";
//
//            $user_found = Users::find_user_by_id(2);
//
//
//            echo $user_found['id'];

//            $users = Users::find_all_users();
//            foreach($users as $user) {
//                echo $user->username . "<br>";
//            }


            $user_found = Users::find_user_by_id(2);
            echo $user_found->username;







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