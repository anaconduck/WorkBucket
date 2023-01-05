<?php

session_start();
$_SESSION["dis"] = null;
$_SESSION["dis"] = "UI/UX design";
// header('Location: /disscuschat');
// header("Location: " . URL::to('/'), true, 302);
?>
<script>window.location = "{{ url('/discusschat') }}";</script>
      