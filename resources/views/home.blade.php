@extends("layouts.app")
@section("content")
    
    <div class="container">
    <div class="row">
    <br>
    @foreach($image as $image)
    
    <div class="col-md-4">
    <br>
    <div class="card">
    <a href=""> <img class="card-img-top"src="{{$image->images ? asset($image->images) : asset('uploads/images/default.png')}}" alt="{{$image->nom_image}}" height="300" width="500"></a>
       <div><strong>{{$image->nom_image}}</strong> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <p>Description:{{$image->description}}</p></div>
       <div><a href="{{route('download_image',$image->id)}}" class="btn btn-primary" style="background: #333ab7,color:#fff,paadding: 120px, display: block, text-decoration: none">telecharger</a></div>
       
        </div></div><br><br><br><br>
        @endforeach
        </div>
    
   <br>
  </div>

@endsection
       

         
