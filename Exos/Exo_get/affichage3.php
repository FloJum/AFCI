<?php
session_start();
$Name = $_SESSION['user_name'];
$Forename = $_SESSION['user_forename'];
$Gender = $_SESSION['user_gender'];
$FamilyStatus = $_SESSION['user_family_status'];
$Password = $_SESSION['user_password'];
$Passion = $_SESSION['user_passion'];
$Hobbys = $_SESSION['user_hobbys'];
?>

<div>
<h3>Bonjour <?php echo $Forename ?> !</h3>
<p>Ton nom est bien <?php echo$Name ?> n'est-ce  pas ?</p>
<p>Apparemment tu es <?php echo$Gender ?> et tu es <?php echo$FamilyStatus?>.</p>
<p>Ton mot de passe n'est pas secret car il s'affiche en clair ici : <?php echo$Password?> </p>
<p>Je vois que tu es passionée par <?php echo$Passion ?>.</p>
<p>Tes hobbys sont : <?php echo$Hobbys?>.</p>
</div>