@extends('layout')

@section('content')

    <section class="line half grey center">      
        <div class="container business-card-container">
            <div class='business-card' data-tilt data-tilt-scale="1.01" data-tilt-max="20">
                <div class="business-card-side business-card-right"></div>
                <div class="business-card-side business-card-left"></div>
                <div class="business-card-side business-card-bottom"></div>
                <div class="business-card-side business-card-top"></div>
                <div class="business-card-side business-card-front">
                    <h4>Anne Noteboom</h4>
                    <div>
                        <p>
                            <b style="width: 50px; display:inline-block;">mail</b>
                            <a href="mailto:info@annenoteboom.nl">info@annenoteboom.nl</a>
                        </p>
                        <p>
                            <b style="width: 50px; display:inline-block;">kvk</b>
                            <span>123456789876</span>
                        </p>
                        <p>
                            <b style="width: 50px; display:inline-block;">btw</b>
                            <span>123456789876</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="line half center">
        <div class="container">
            <form @submit.prevent="checkForm" action="send-message" method="POST">
                @csrf
                @if(!$sended)
                    <h3>Verstuur een bericht</h3>
                    <br><br>
                    <div class="container">
                        <div class="part-12">
                            <label for="name">Naam</label>
                            <input type="text" id="name" name="name" placeholder="Anne Noteboom" v-model='name' v-bind:class="{ error: nameError }">
                        </div>
                        <div class="part-12">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" placeholder="info@annenoteboom.nl" v-model='email'  v-bind:class="{ error: emailError }">
                        </div>
                        <div class="part-12">
                            <label for="message">Bericht</label>
                            <textarea name="message" id="message" placeholder="Uw vraag of opmerking" v-model='message' v-bind:class="{ error: messageError }"></textarea>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox" v-model='privacy' v-bind:class="{ error: privacyError }">
                                <label for="checkbox">
                                    Ik ga akkoord met de&nbsp;<a href="privacy" target="_blank">privacyverklaring</a>
                                </label>
                                <div class="checked">
                                    <img src="/img/check.svg" alt="">
                                </div>
                            </div>
                            <input type="submit" class="button">
                        </div>
                    </div>
                @else
                    <div class="empty">
                        <img src="/img/mail.svg" alt="">
                        <br><br>
                        <h3 class="center">Bericht verzonden</h3>
                        <p>U krijgt zo snel mogelijk bericht terug.</p>
                    </div>
                @endif
            </form>
        </div>            
    </section>

@endsection