@extends('layout.layout')   

    @section('content')

@if (isset($alert))
     msg envoyé
     dd{{$alert}}
@else
</br></br></br>
<section class="book_section padding">
    <div class="container">
        <div class="col-sm-6 col-lg-offset-3">
            <div class="book_form">
                <div class="section_heading mb-40">
                    <h2>Nous contacter</h2>
                    <p>Merci de remplir le formulaire pour nous contacter par mail.</p>
                </div>
                <form action="#" method="POST" id="appointment_form" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-6">
                            <input type="text" id="app_name" name="name" class="form-control" placeholder="Nom complet" required>
                        </div>
                        <div class="col-xs-6">
                            <input type="email" id="app_email" name="mail" class="form-control" placeholder="Adressed mail" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="app_phone" name="object" class="form-control" placeholder="Sujet" required>
                        </div>                        
                        <div class="col-xs-12">
                            <textarea class="form-control" name ="text" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        </div>
                    </div>
                    <button id="app_submit" class="default_btn" type="submit">Envoyer</button>
                    <div id="msg-status" class="alert" role="alert"></div>
                </form>
            </div>
        </div>
    </div>
</section><!--/.book_section -->

@endif

@endsection