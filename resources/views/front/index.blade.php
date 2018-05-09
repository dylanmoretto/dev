<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><script src="{{asset('js/ajax.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/colorbox.css')}}" />
<script src="{{asset('js/jquery.colorbox.js')}}"></script>
<html>

<div class="row">

    <div class="col-lg-12 entete ecran">
        Caisse 1
    </div>
    <div class="col-lg-8 content ligne2">
        Client
    </div>
    <div class="col-lg-3">
        <button class="col-lg-6 content">
            Mise en atttente
        </button>
        <button class="col-lg-6 content">
            Encaissement
        </button>
        <button class="col-lg-6 content">
            Ajouter Client
        </button>
    </div>
    @foreach ($family as $fam)
        <button class="col-lg-1 content cat inline"  href="#inline_content{{$fam->id}}">
            {{$fam->family_name}}
        </button>
    @endforeach
</div>
<div class="row">
    <button class="col-lg-2 content">
        Employer
    </button>
    <div class="col-lg-7 content">
        commentaire
    </div>
</div>
</div>
</div>
    @include('front.panier')

    <div id="afficheur">
        @include('front.afficheur')
    </div>

</html>

@include('front.popup')