<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/colorbox.css')}}" />

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{asset('js/jquery.colorbox.js')}}"></script>
<script src="{{asset('js/ajax.js')}}"></script>

@foreach ($family as $f)
    
    <div style='display:none'>
        <div id='inline_content{{$f->id}}' style='padding:10px; background:#fff;'>
    
    @foreach ($presta as $p) 
        @if ($p->family == $f->id)  
            <p><strong>{{$p->designation}}</strong></p>
            <p>{{$p->price}}</p>
            <button class ="add" product ='{{$p->id}}' type ="submit" typeP ='presta' >Ajouter </button> 
        @endif   
    @endforeach
        </div>
    </div>
@endforeach