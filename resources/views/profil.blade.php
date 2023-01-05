@extends ('layouts.myprofil')

@section ('content')

<?php 

$id= Auth::user()->id;
$conn = mysqli_connect("sql6.freemysqlhosting.net", "sql6413421", "f9UsGjwVWR", "sql6413421");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT birthday, gender, phone, address, motto FROM userdatas WHERE id=".$id;
  $result = mysqli_query($conn, $sql);
  
  
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="row">
            <h1 class="h2 semi-bold-600 text-center pt-5"><br>My Profile<br><br></h1>
                <div class="col-md-8 mt-1">
                    <div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Name</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{Auth::user() -> name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Email</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{Auth::user() -> email}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Birthday</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?PHP
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $date=date_create($row["birthday"]);
                                            echo date_format($date,"d/m/Y ");
                                            //echo $row["birthday"];
                                        }
                                      } else {
                                        echo "0 results";
                                      }
                                ?>    
                                <!-- 1 Januari 2001 -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Phone</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?PHP
                                $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo $row["phone"];
                                        }
                                      } else {
                                        echo "0 results";
                                      }
                                ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Gender</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?PHP
                                $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo $row["gender"];
                                        }
                                      } else {
                                        echo "0 results";
                                      }
                                ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Address</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?PHP
                                $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo $row["address"];
                                        }
                                      } else {
                                        echo "0 results";
                                      }
                                ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Motto</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?PHP
                                $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo $row["motto"];
                                        }
                                      } else {
                                        echo "0 results";
                                      }
                                ?> <br><br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection