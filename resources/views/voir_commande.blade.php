@include('template.header')
@include('template.top_bar')
@include('template.left_side_bar')
    <div class="page-wrapper">
    <div class="content container-fluid">

    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title" style="font-family:san">Listes des commandes à valider</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index" style="font-family: sans-serif">Tableau de Bord</a></li>
    <li class="breadcrumb-item active" style="font-family:san">Les commandes</li>
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
    </div>
    </div>
    </div>

    <div class="table-responsive">
    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
    <thead class="student-thread" style="font-family:san">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Tickets repas</th>
        <th>Tickets petit déjeuner</th>
        <th>Montant</th>
        <th>Statut</th>
        <th>Date et heure</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($commandeTickets as $commandeTicket)
        <tr>
            <td>{{ $commandeTicket->id }}</td>
            <td>
                @php
                    $utilisateur = App\Models\M_utilisateur::find($commandeTicket->id);
                @endphp

                @if($utilisateur)
                    {{ $utilisateur->nom_ut }}
                @else
                     Mbaye
                @endif
            </td>
            <td>
                @php
                    $utilisateur = App\Models\M_utilisateur::find($commandeTicket->id);
                @endphp

                @if($utilisateur)
                    {{ $utilisateur->prenom_ut }}

                @else
                     Mohameth

                @endif
            </td>
            <td>{{ $commandeTicket->nbre_ticket_repas }}</td>
            <td>{{ $commandeTicket->nbre_ticket_petitdej }}</td>
           {{-- Calculer le montant total des tickets --}}
           @php
              $montantTotal = ($commandeTicket->nbre_ticket_repas * 100) + ($commandeTicket->nbre_ticket_petitdej * 50);
            @endphp
           <td>{{ $montantTotal }}</td>
           <td>
            <span class="{{ $commandeTicket->statut === 'validée' ? 'text-success' : 'text-danger' }}">
                {{ $commandeTicket->statut }}
            </span>
          </td>
            <td>{{ $commandeTicket->created_at}}</td>
            <td class="text-end">
                <div class="actions">
                  <!-- Bouton Valider avec popup de confirmation -->
                    <form action="{{ route('valider_commande', $commandeTicket->id) }}" method="POST" onsubmit="return confirmerAction('Voulez-vous vraiment valider cette commande?')">
                        @csrf
                        <button type="submit" class="btn btn-primary me-2"><i class="fas fa-check"></i> </button>
                    </form>


                    <!-- Bouton Supprimer avec popup de confirmation -->
                    <form action="{{ route('supprimer_commande', $commandeTicket->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette commande?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger "> <i class="fas fa-times"></i></button>
                    </form>

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

@include('template.footer')
