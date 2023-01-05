@extends ('layouts.discussing')

@section ('content')
<?php 

?>
<head>
    <title></title>
</head>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="row">
                <h1 class="h2 semi-bold-600 text-center pt-0"><br>Discussion</h1>
                <?php if(isset($_SESSION["dis"])){
                    ?>
                        
<script>window.location = "{{ url('/discussion') }}";</script>
                        <?php
                    } ?>
                @include ('discusstemplate')
                    <div>
                    </div>
            </div>
        </div>
    </main>
    @endsection