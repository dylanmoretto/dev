@extends('layout.layout')   

    @section('content')

@if (isset($alert))
     msg envoyé
     dd{{$alert}}
@else

<section class="book_section padding">
    <div class="container">
        <div class="col-sm-6">
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

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.0132116345853!2d7.096771915732847!3d43.62708396213663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd4c9ee17a1bf%3A0x127370fc0984a9dc!2s2+Rue+Saint-S%C3%A9bastien%2C+06410+Biot!5e0!3m2!1sfr!2sfr!4v1525784759254" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
@endif

@endsection