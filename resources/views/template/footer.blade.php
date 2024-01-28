<footer>
    <p>Copyright © 2024 Gestion des Tickets.</p>
    </footer>

    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- Inclure Bootstrap depuis le répertoire public de Laravel -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Inclure Feather depuis le répertoire public de Laravel -->
    <script src="assets/js/feather.min.js"></script>
    <!-- Inclure Slimscroll depuis le répertoire public de Laravel -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Inclure DataTables depuis le répertoire public de Laravel -->
    <script src="assets/plugins/datatables/datatables.min.js"></script>
    <!-- Inclure votre script personnalisé depuis le répertoire public de Laravel -->
    <script src="assets/js/script.js"></script>
    <script>
        function confirmerAction(message) {
            return confirm(message);
        }

        function confirmerSuppression(commandeId) {
            if (confirm('Voulez-vous vraiment supprimer cette commande?')) {
                // Si l'utilisateur clique sur "OK" dans la boîte de dialogue de confirmation
                document.getElementById('deleteForm' + commandeId).submit();
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
