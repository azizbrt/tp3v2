<h1>Liste des contacts</h1>
 <ul>
 @foreach($contacts as $Contact)
 <li>
    <h3>{{$Contact->nom}}</h3>
    <p>{{$Contact->message}} </p>
<p>{{$Contact->email}} </p>
</li>
<hr>
@endforeach
</ul>