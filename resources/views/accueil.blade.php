

@extends("layout.app")
@section("content")

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($u as $ui)
    <tr>
      <th scope="row">{{$ui->id}}</th>
      <td>{{$ui->name}}</td>
      <td>{{$ui->email}}</td>
      <td>{{$ui->password}}</td>>
    </tr>
    @endforeach
   
  </tbody>
</table>

  
@endsection
@section('menu')

<li class="nav-item">
            <a href="espaceinscription.html" class="btn btn-primary js-scroll-trigger">Accueil</a>
</li> &nbsp &nbsp &nbsp
<li class="nav-item">
            <a href="espaceinscription.html" class="btn btn-primary js-scroll-trigger">espace membre</a>
</li>
@endsection