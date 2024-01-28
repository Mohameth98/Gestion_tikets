<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu"> 
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>

                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Tableaux de bord</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('layout') }}" class="active">Acceuil</a></li>
                            </ul>
                        </li>
                        @if(auth()->check() && auth()->user()->role == 'etudiant')
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Utilisateur</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('voirCmd') }}">Voir Commande </a></li>
                                <li><a href="{{ route('profil') }}">Profil</a></li>
                                <li><a href="{{ route('commander') }} ">commander tickets</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(auth()->check() && auth()->user()->role == 'agent')
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Agent</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('testAgent')}}">vue Agent 1</a></li>
                                <li><a href="#">vue Agent 2</a></li>
                                <li><a href="#">vue Agent 3</a></li>
                            </ul>
                        </li>
                        @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>