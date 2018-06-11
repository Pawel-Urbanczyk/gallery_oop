
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>

            <?php


//            $users = User::find_all();
//
//            foreach ($users as $user){
//                echo $user->username . "<br>";
//                echo $user->password . "<br>";
//            }

//                $user = new User();
//
//                $user->username = "NEW_USER";
//                $user->password = "";
//                $user->first_name = "";
//                $user->last_name = "";
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

            $user = Photo::find_by_id(7);

                echo $user->filename;

//            $photo = new Photo();
//
//            $photo->title = "TEST";
//            $photo->size = 20;
//            $photo->create();

            echo DS."<br>";
            echo SITE_ROOT."<br>";
            echo INCLUDES_PATH."<br>";


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