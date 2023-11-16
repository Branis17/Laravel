<h1>All The Cars </h1>




  <table>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Lieu de Fabrication</th>
        <th>Marque</th>
        <th>Carburant</th>
        <th>Couleur</th>
        <th>date de fabrication</th>

    </tr>




 @foreach($cars as $Voitures)
     <tr>

         <td>{{$Voitures['nom']}}</td>
         <td>{{$Voitures['prix']}}</td>
         <td>{{$Voitures['fabrication']}}</td>
         <td>{{$Voitures['marque']}}</td>
         <td>{{$Voitures['carburant']}}</td>
         <td>{{$Voitures['couleur']}}</td>
         <td>{{$Voitures['fabric']}}</td>

     </tr>
    @endforeach
</table>
