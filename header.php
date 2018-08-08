<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Paws To Care</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Lodash -->
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>    
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>    

    <script src="../main.js"></script>
    <style>
        .pull-left{float:left!important;}
        .pull-right{float:right!important;}    
    </style>

    <!-- Javascript -->
    <script>
        $(document).ready(function(){
            if($(".dog-table").length){
                setTimeout(function(){ 
                    $('.table').DataTable({
                        "info": false,
                        "bLengthChange": false,
                        "bAutoWidth": false,
                        "language": {
                            "search": "",
                            "searchPlaceholder": "filter"
                        },
                        "dom": '<"pull-left"f><"pull-right"l>tip',
                        "columnDefs": [
                            { "orderable": false, "targets": [3,4,5,8,9] }
                        ]
                    });
                }, 500);
            }
            // if($(".table").length){
            //     setTimeout(function(){ 
            //         $('.table').DataTable({
            //             "info": false,
            //             "bLengthChange": false,
            //             "bAutoWidth": false,
            //             "language": {
            //                 "search": "",
            //                 "searchPlaceholder": "filter"
            //             },
            //             "dom": '<"pull-left"f><"pull-right"l>tip'
            //         });
            //     }, 500);
            // }
            // if($(".table").length){
            //     setTimeout(function(){ 
            //         $('.table').DataTable({
            //             "info": false,
            //             "bLengthChange": false,
            //             "bAutoWidth": false,
            //             "language": {
            //                 "search": "",
            //                 "searchPlaceholder": "filter"
            //             },
            //             "dom": '<"pull-left"f><"pull-right"l>tip'
            //         });
            //     }, 500);
            // }
        });
    </script>
</head>
