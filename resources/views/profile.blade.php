@include('template.header')
@include('template.top_bar')
@include('template.left_side_bar')
<div class="page-wrapper">
    <div class="content container-fluid">

    <div class="page-header">
    <div class="row">
    <div class="col">
    <h3 class="page-title">Profile</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index">Tableau de bord</a></li>
    <li class="breadcrumb-item active">Profile</li>
    </ul>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-12">
    <div class="profile-header">
    <div class="row align-items-center">
    <div class="col-auto profile-image" >
    <a href="#">
    <img class="rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
    </a>
    </div>
    <div class="col ms-md-n2 profile-user-info" >
    <h4 class="user-name mb-0">Mohameth Mbaye</h4>
    <h6 class="text-muted">Agent CROUST</h6>
    <div class="user-Location"><i class="fas fa-map-marker-alt"></i> Senegal , Thies , Medina Fall</div>
    <div class="about-text">Agent CROUST</div>
    </div>
    <div class="col-auto profile-btn">
    <a href="" class="btn btn-primary">
    Modifier
    </a>
    </div>
    </div>
    </div>
    <div class="profile-menu">
    <ul class="nav nav-tabs nav-tabs-solid">
    <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">A Propos</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Mot de Passe</a>
    </li>
    </ul>
    </div>
    <div class="tab-content profile-tab-cont">

    <div class="tab-pane fade show active" id="per_details_tab">

    <div class="row">
    <div class="col-lg-9">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title d-flex justify-content-between">
    <span>Detailles</span>
    <a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="far fa-edit me-1"></i>Edit</a>
    </h5>
    <div class="row">
    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Nom et Prenom</p>
    <p class="col-sm-9">Mohameth Mbaye</p>
    </div>
    <div class="row">
    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date de naissance</p>
    <p class="col-sm-9">14 / 12 /1998</p>
    </div>
    <div class="row">
    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
    <p class="col-sm-9"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1cbcec9cfc5cec4e1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</a></p>
    </div>
    <div class="row">
    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telephone</p>
    <p class="col-sm-9">77 445 97 25</p>
    </div>
    <div class="row">
    <p class="col-sm-3 text-muted text-sm-end mb-0">Adresse</p>
     <p class="col-sm-9 mb-0">4663 Agriculture Lane,<br>
    THIES,<br>
    Medina Fall - 33165,<br>
    Senegal.</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">

    <div class="card">
    <div class="card-body">
    <h5 class="card-title d-flex justify-content-between">
    <span>Statut du compte</span>
    <a class="edit-link" href="#"><i class="far fa-edit me-1"></i> Modifier</a>
    </h5>
    <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
    </div>
    </div>

    </div>
    </div>

    </div>


    <div id="password_tab" class="tab-pane fade">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Change Password</h5>
    <div class="row">
    <div class="col-md-10 col-lg-6">
    <form>
    <div class="form-group">
    <label>Old Password</label>
    <input type="password" class="form-control">
    </div>
    <div class="form-group">
    <label>New Password</label>
    <input type="password" class="form-control">
    </div>
    <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">Save Changes</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>

@include('template.footer')
