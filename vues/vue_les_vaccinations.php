
<h4> Liste des Vaccinations</h4>

<form method="post" action="">
  <input type="text" placeholder="Rechercher" name= "mot" value="">
  <input type="submit" name= "Rechercher" value="Rechercher">
</form>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class="container">

  <table class="table">
    <thead>
      <tr>
        <td><b>Id Vaccination</b></td>
        <td><b>Description</b></td>
        <td><b>Date vaccin</b></td>
        <td><b>Heure</b></td>
        <td><b>Nombre de dose</b></td>
        <td><b>Température corps</b></td>
        <td><b>Nom Médecin</b></td>
        <td><b>Id Centre</b></td>
        <td><b>Id Personne</b></td>
        <td><b>Id Vaccin</b></td>
        <td><b>Opérations</b></td>'
      </tr>
    </thead>

  <?php
    foreach($lesVaccinations as $uneVaccination){
      echo "<thead>";
      echo "<tr>";
      echo "<td>".$uneVaccination['idvaccination']."</td>";
      echo "<td>".$uneVaccination['description']."</td>";
      echo "<td>".$uneVaccination['datevac']."</td>";
      echo "<td>".$uneVaccination['heure']."</td>";
      echo "<td>".$uneVaccination['nbdose']."</td>";
      echo "<td>".$uneVaccination['temperature']."</td>";
      echo "<td>".$uneVaccination['nommedecin']."</td>";
      echo "<td>".$uneVaccination['idcentre']."</td>";
      echo "<td>".$uneVaccination['idpersonne']."</td>";
      echo "<td>".$uneVaccination['idvaccin']."</td>";
      // Icone supprimer et modifier
      echo "<td>";
      echo "<a href='index.php?page=4&action=sup&idvaccination=".$uneVaccination['idvaccination']."'>";
      echo "<img src='images/sup.jpg' height='30' width='30'>";
      echo "</a>";
      echo "<a href='index.php?page=4&action=edit&idvaccination=".$uneVaccination['idvaccination']."'>";
      echo "<img src='images/edit.png' height='30' width='30'>";
      echo "</a>";
      echo "</td>";
      echo "</tr>";
      echo "</thead>";
    }
  ?>


  </table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


<style>
.container {
  background-color: #b9dbf0; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
