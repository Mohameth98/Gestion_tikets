<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Liste de vos  commandes</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">
@include('template.top_bar')
@include('template.left_side_bar')
 <?php // c'est le right content toujours qui change ?>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Liste de vos commandes</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashbord</a></li>
<li class="breadcrumb-item active">voir Commande</li>
</ul>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Tickets petit dejeuner</th>
<th>Tickets Repas</th>
<th>Montant</th>
<th>statut</th>
<th>Date et heure</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
@foreach($commandes as $cmd )
<tr>
<td>{{$cmd->id}}</td>
<td>{{$cmd->nbre_ticket_repas}}</td>
<td>{{$cmd->nbre_ticket_petitdej}}</td>
@php
$montantTotal = ($cmd->nbre_ticket_repas * 100) + ($cmd->nbre_ticket_petitdej * 50);
@endphp
<td>{{ $montantTotal }}</td>
<td>{{ $cmd->statut }}</td>
<td>{{$cmd->created_at}}</td>
<td class="text-end">
<div class="actions"> <?php //les actions ici c'est voir et modifier le ticket ?>
<a href="javascript:;" class="btn btn-sm bg-success-light me-2">
<i class="feather-eye"></i>
</a>
<a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
@endforeach 
</tbody>
</table>
</div>

</div>
</div>
</div>
</div>



<footer>
<p>Copyright © 2022 Dreamguys.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Vos commandes</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

@include('template.top_bar')
@include('template.left_side_bar')



<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Liste de vos commandes</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Utilisateur</a></li>
<li class="breadcrumb-item active">Voir Commande</li>
</ul>
</div>
</div>
</div>

@if(session('status'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Alerte</strong> {{session('status')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Vos Commandes</h3>
</div>


<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
<th>ID</th>
<th>Tickets petit dejeuner</th>
<th>Tickets Repas</th>
<th>Montant</th>
<th>statut</th>
<th>Date et heure</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
@foreach($commandes as $cmd )
<tr>
<td>{{$cmd->id}}</td>
<td>{{$cmd->nbre_ticket_repas}}</td>
<td>{{$cmd->nbre_ticket_petitdej}}</td>
@php
$montantTotal = ($cmd->nbre_ticket_repas * 100) + ($cmd->nbre_ticket_petitdej * 50);
@endphp
<td>{{ $montantTotal }}</td>
<td>{{ $cmd->statut }}</td>
<td>{{$cmd->created_at}}</td>
<td class="text-end">
<div class="actions"> <?php //les actions ici c'est voir et modifier le ticket ?>
<a href="{{ route('delete/cmd', ['id' => $cmd->id]) }}" class="btn btn-sm bg-success-light me-2">
<i class="feather-delete"></i>
</a>
<a href="{{ route('edit/cmd', ['id' => $cmd->id]) }}" class="btn btn-sm bg-danger-light">
<i class="feather-edit"></i>
</a>
</div>
</td>
</tr>
@endforeach 
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

<footer>
<p>Copyright © 2022 Dreamguys.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>