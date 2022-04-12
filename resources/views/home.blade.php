@extends('welcome')
@section('content')
<div class="container">
    <div class="row mx-5">
        <select class="form-select" aria-label="Default select example" name="" id="regionID">
            <option selected>Open this select menu</option>
            @foreach ($regions as $region)
            <option class="option" value="{{$region->id}}">{{$region->nom}}</option>
            @endforeach
        </select>
    </div>
    <div class="row mt-5" style="color: white;">
        {{-- <div class="owl-carousel owl-theme" id="orientateurData">

        </div> --}}
        <div class="swiffy-slider slider-item-show3 slider-item-reveal slider-nav-dark slider-nav-outside-expand">
    <ul class="slider-container py-4"  id="orientateurData">

    </ul>

    <button type="button" class="slider-nav" aria-label="Go to previous"></button>
    <button type="button" class="slider-nav slider-nav-next" aria-label="Go to next"></button>
</div>
    </div>
</div>



@endsection
