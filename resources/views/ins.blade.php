
<?php

$conn = mysqli_connect("sql6.freemysqlhosting.net", "sql6413421", "f9UsGjwVWR", "sql6413421");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
//$sql = "INSERT INTO userdatas (Birthday,gender,phone,address,motto) VALUES (1212-12-22,'a','a','a','a')";
/*
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  */
// DB_CONNECTION=mysql
// DB_HOST=sql6.freemysqlhosting.net
// DB_PORT=3306
// DB_DATABASE=sql6413421
// DB_USERNAME=sql6413421
// DB_PASSWORD=f9UsGjwVWR
  if (isset($_GET['pesan']) && isset($_GET['penulis']) && isset($_GET['namadiskusi']) && isset($_GET['id'])) {
    $sql = "INSERT INTO discussion (pesan,penulis,namadiskusi,id) VALUES ('".$_GET['pesan']."','".$_GET['penulis']."','".$_GET['namadiskusi']."','".$_GET['id']."')";
    //$conn->query($sql);
    if (mysqli_query($conn, $sql)) {
      
        header('Location: /discusschat');
        exit();
        //return redirect('/');
      } else {
        header('Location: /discusschat');
        exit();
        //return redirect('/register2');
    }
} else {
    header('Location: /discusschat');
        exit();
    //return redirect('/register2');
}
//redirect(url('/'));

mysqli_close($conn);
