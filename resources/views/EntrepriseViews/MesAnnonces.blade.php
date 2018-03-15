@extends('..\layouts.entreprise')

@section('content')
@forelse ($annonces as $annonce)
	<?php $images = explode(";",$annonce->aw_img);?>
	
    <p>{{$annonce->aw_title}}</p>
    @forelse($images as $img)
    <p><img src="{{$img}}" alt=""></p>
    @empty
    <p>no image</p>
    @endforelse
    <p>{{$annonce->aw_core}}</p>
@empty
    <p>No annonces</p>
@endforelse
@endsection
