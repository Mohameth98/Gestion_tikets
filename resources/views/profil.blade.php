<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Profil</title>

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
<div class="page-wrapper">
@include('template.top_bar')
@include('template.left_side_bar')
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Informations Personnelles</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teachers.html">Utilisateur</a></li>
<li class="breadcrumb-item active">Profil</li>
</ul>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="about-info">
<h4>Profil<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h4>
</div>
<div class="student-profile-head">
<div class="profile-bg-img">
<img src="#" alt="Profile">
</div>
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="profile-user-box">
<div class="profile-user-img">
<img src="assets/img/profile-user.jpg" alt="Profile">
<div class="form-group students-up-files profile-edit-icon mb-0">
<div class="uplod d-flex">
<label class="file-upload profile-upbtn mb-0">
<i class="feather-edit-3"></i><input type="file">
</label>
</div>
</div>
</div>
<div class="names-profiles">
<h4>{{$user->prenom}}</h4>
<h5>{{$user->role}}</h5>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 d-flex align-items-center">
<div class="follow-btn-group">
<button type="submit" class="btn btn-info follow-btns">Modifier profil</button>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-lg-4">
<div class="student-personals-grp">
<div class="card">
<div class="card-body">
<div class="heading-detail">

<h4>informations personnelles :</h4>
</div>

<div class="personal-activity">
<div class="personal-icons">
<i class="feather-user"></i>
</div>
<div class="views-personal">
<h4>Nom et prenom</h4>
<h5>{{$user->nom}} {{$user->prenom}}</h5>
</div>
</div>
<div class="personal-activity">
<div class="personal-icons">
<i class="feather-phone-call"></i>
</div>
<div class="views-personal">
<h4>Telephoone</h4>
<h5>{{$user->num_tel}}</h5>
</div>
</div>
<div class="personal-activity">
<div class="personal-icons">
<i class="feather-mail"></i>
</div>
<div class="views-personal">
<h4>Email</h4>
<h5>{{$user->email}}</h5>
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

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>



</body>
</html>