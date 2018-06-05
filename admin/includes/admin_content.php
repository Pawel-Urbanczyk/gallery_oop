
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>

            <?php


            $users = User::find_all();

            foreach ($users as $user){
                echo $user->username;
            }

//                $user = new User();
//
//                $user->username = "student2";
//                $user->password = "weird2";
//                $user->first_name = "david2";
//                $user->last_name = "backham2";
//
//                $user->create();

//                $user = User::find_by_id(20);
//                $user->username = "RAISONOV";
//                $user->password = "1234567";
//                $user->last_name = "krowka";
//                $user->update();

//           $user = User::find_user_by_id(15);
//           $user->delete();

//            $user = User::find_user_by_id(14);
//            $user->password= "RG";
//            $user->save();

//            $user = new User();
//            $user->username = "NIKO123";
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