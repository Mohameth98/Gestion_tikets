<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
     <form action="{{ route('action/login') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="email"placeholder="email" required>
        </div>
        <div>
            <input type="password" name="mdp" placeholder="mdp" requires>
        </div>
        <div>
            <input type="submit" value="submit" name="connexion">
        </div>
        @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
        @endif
     </form>
     </form>
     </form>
</body>
</html>