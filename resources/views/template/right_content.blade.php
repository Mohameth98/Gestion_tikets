<div class="page-wrapper">
    <div class="content container-fluid">

    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Listes des commandes à valider</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index">Tableau de Bord</a></li>
    <li class="breadcrumb-item active">Les commandes</li>
    </ul>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-sm-12">
    <div class="card card-table">
    <div class="card-body">

    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Commandes</h3>
    </div>
    <div class="col-auto text-end float-end ms-auto download-grp">
    <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>Télécharger</a>
    <a href="add-salary.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
    </div>
    </div>

    <div class="table-responsive">
    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
    <thead class="student-thread">
    <tr>
        <th>ID</th>
        <th>Type de tickets</th>
        <th>Nombre de tickets repas</th>
        <th>Nombre de tickets petit déjeuner</th>
        <th>ID Utilisateur</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        {{-- @foreach ($commandeTickets as $commandeTicket)
        <tr>
            <td>{{ $commandeTicket->id }}</td>
            <td>{{ $commandeTicket->type_tickets }}</td>
            <td>{{ $commandeTicket->nbre_ticket_repas }}</td>
            <td>{{ $commandeTicket->nbre_ticket_petitdej }}</td>
            <td>{{ $commandeTicket->idUtilisateur }}</td>
            <td class="text-end">
                <div class="actions ">
                    <a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
                    <i class="feather-eye"></i>
                    </a>
                    <a href="edit-student.html" class="btn btn-sm bg-danger-light">
                    <i class="feather-edit"></i>
                    </a>
                </div>
            </td>
        </tr>
    @endforeach --}}
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

   
