@extends('layout.layout')

	@section('content')
</br>
<section class="pricing_section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section_heading align-center mb-40">
            <h2>Nos Tarifs</h2>
        </div><!-- /.section_heading -->
     @foreach ($family as $fam)
        <div class="col-sm-4 xs-padding">
            <div class="price_wrap">
                <h3>{{$fam->family_name}}</h3>
                <ul class="price_list">
                  @foreach ($presta as $prestas)
                  	@if ($prestas->family == $fam->id)
	                    <li>
	                        <h4>{{$prestas->designation}}</h4>
	                        <span class="price">{{$prestas->price}} €</span>
	                    </li>
	                 @endif
                   @endforeach
                </ul>
            </div>
        </div>
     @endforeach
</section><!-- /.pricing_section -->

@endsection