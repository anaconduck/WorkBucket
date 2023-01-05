@extends ('layouts.pricing')

@section ('content')
<div id="layoutSidenav_content">
    <main>
        <?php
        if (isset($_SESSION["dis"])) {
            header(url('/discussion'));
        } ?>
        <div class="container-fluid">
            <div class="row">
                <h1 class="h2 semi-bold-600 text-center pt-0"><br><?php session_start();
                                                                    echo $_SESSION["dis"]; ?></h1>
                <p class="text-center pb-5 light-300">
                Let's discuss further on <?php echo $_SESSION["dis"]; ?>!
                </p>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- Start Pricing List -->
                    <?php




                    ?>
                    <ul class="list-unstyled">
                        <?php
                        $conn = mysqli_connect("sql6.freemysqlhosting.net", "sql6413421", "f9UsGjwVWR", "sql6413421");
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT penulis,pesan,id,pkey FROM discussion where namadiskusi='" . $_SESSION["dis"] . "'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <li>
                                    <ul class="list-unstyled">

                                    </ul>
                                    <div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">

                                        <div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
                                            <div class="pricing-list-body col-md-5 align-items-center pl-3 pt-2">
                                                <ul class="list-unstyled text-left light-300">
                                                    <li class="h5 semi-bold-600 mb-1 mt-1"><?php echo $row["penulis"]; ?>

                                                    </li>
                                                    <li><?php echo $row["pesan"]; ?></li>
                                                    <?php 
                                                    if(Auth::user()->id == $row["id"]){
?>
<li>
<form class="clearfix m-2" action="{{url('/del')}}" method="get" id="comment_form">
                        

                        <input type="hidden" name="pkey" value="<?php echo $row["pkey"]; ?>">
                        <button class="btn btn-primary btn-sm pull-right" style="background-color: red;" id="dels">Delete</button>
                        
                    </form>
                                                    </li>
<?php
                                                    }
                                                    
                                                    ?>
                                                    <br>
                                                </ul>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </li>

                        <?php



                                // $date=date_create($row["birthday"]);
                                // echo date_format($date,"d/m/Y ");
                                // echo $row["birthday"];
                            }
                        } else {
                            echo "";
                        }

                        ?>
                    </ul>
                    <br><br>
                    <form class="clearfix m-2" action="{{url('/ins')}}" method="get" id="comment_form">
                        <h4>Post a comment:</h4>
                        <input type="text" name="pesan" id="pesan" class="form-control" cols="30" rows="3"></input>
                        <br>

                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="penulis" value="{{Auth::user()->name}}"></input>
                        <input type="hidden" name="namadiskusi" value="<?php echo $_SESSION['dis']; ?>"></input>

                        <button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
                        <br>
                        <br>
                    
                    </form>
                    <section>
                        <div>
                        </div>
                </div>
            </div>
    </main>
    @endsection