<h3> <?= $data['title']; ?> </h3>
<h4><?= 'Naam instructeur: ' . $data['InstructorName']; ?></h4>

<table border="2">
  <thead>  
     <th>Datum</th>
     <th>Tijd</th>
     <th>Naam Leerling</th>
     <th>Lesinfo</th>
     <th>Onderwerp</th>
  </thead>
  <tbody>
    <?= $data['rows']; ?>
  <tbody>
</table>