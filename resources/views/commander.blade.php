<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Commander - Tickets</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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
<h3 class="page-title">Commander Tickets</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teachers.html">Tickets </a></li>
<li class="breadcrumb-item active">Ajouter Tickets</li>
</ul>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
<strong>BRAVO!!!</strong> {{session('status')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">

<form action="{{ route('ajouter/cmd') }}" method="post">
    @csrf
<!-- <div class="row">
<div class="col-12">
<h5 class="form-title"><span>Veuillez entrez vos choix !!</span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Type de Tickets <span class="login-danger">*</span></label>
<select class="form-control select" type="text" name="type_tickets">
<option value="Petit Dejeuner">Petit Dejeuner</option>
<option value="Repas">Repas</option>
<option value="Les deux">Les deux </option>
</select>
@error('type_tickets')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div> -->
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nombre de Tickets petit dejeuner<span class="login-danger">*</span></label>
<input type="text" class="form-control" name="nbre_ticket_petitdej">
@error('nbre_ticket_petitdej')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
<div class="col-12 col-sm-4 local-forms">
<div class="form-group">
<label>Nombre de Tickets Repas <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="nbre_ticket_repas">
@error('nbre_ticket_repas')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label> <span class="login-danger"> </span></label>
<input class="form-control" type="hidden" value="{{ $user->id }}" name="idUsers"> 
<!-- <select class="form-control select" name="idUsers" type="hidden"required>
 <option value="{{ $user->id }}">{{ $user->nom }} {{$user->prenom}}</option>
</select> -->
</div>
</div>
<div class="col-12">
<div class="student-submit">
<button type="submit" name="submit"class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>

</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>