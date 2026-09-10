<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <title>Se Connecter</title>
    </head>
    <body>
        <?php if (isset($error)): ?>
            <p class="error">
                <?= $error ?>
            </p>
        <?php endif; ?>
        <form method="post" action="/login">
            <label for="email">Email</label>
            <input id="email" type="email" name="email">

            <label for="password">Mot de Passe</label>
            <input id="password" type="password" name="password">

            <button type="submit">Se Connecter</button>
        </form>
    </body>
</html>