
<?php 
if(isset($_GET['reg_err']))
{
    $err = htmlspecialchars($_GET['reg_err']);

    switch($err)
    {
        case 'success':
        ?>
            <div class="alert alert-success">
                <strong>Succès</strong> inscription réussie !
            </div>
        <?php
        break;

        case 'password':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> mot de passe différent
            </div>
        <?php
        break;

        case 'email':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> email non valide
            </div>
        <?php
        break;

        case 'email_length':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> email trop long
            </div>
        <?php 
        break;

        case 'pseudo_length':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> pseudo trop long
            </div>
        <?php 
        case 'already':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> compte deja existant
            </div>
        <?php 

    }
}
?>
             