@extends('layouts.master')
@section('content')
<div class="breadcrumbs theme-clearfix"><div class="container"><ul class="breadcrumb"><li><a href="/">Home</a><span class="divider"> </span></li><li class="active"><span>Contáctenos</span></li></ul></div></div>
<div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-offset-2">
          <h1 class="block-header alt">
            <span>Póngase en contacto con nosotros!</span>
          </h1>
          <p class="text-muted">
           Si tienes dudas, inquietudes, preguntas o simplemente quieres dejarnos tus comentarios o aportes, completa este formulario y te responderemos a la brevedad del caso; recuerda que tus observaciones son sumamente importantes para nosotros.
          </p> 
          <hr>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.798189711438!2d-72.68803797966635!3d-36.44174553008968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63f7c627fa12c197!2sComercial+Guivar+Ltda.!5e0!3m2!1ses!2s!4v1496523847502" width="750" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          <hr>
          <!-- Alert message -->
          <span class="alert" id="form_message" role="alert"></span>
          <!-- Please carefully read the README.txt file in order to setup
               the PHP contact form properly -->
         <form role="form" class="contact__form" id="form_sendemail">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="sr-only" for="email">Email address</label>
                  <input type="email" name="email" class="input-lg form-control" id="email" placeholder="E-mail" data-original-title="" title="">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="sr-only" for="name">Name</label>
                  <input type="text" name="name" class="input-lg form-control" id="name" placeholder="Nombre" data-original-title="" title="">
                  <span class="help-block"></span>
                </div>   
              </div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <textarea name="message" class="input-lg form-control" rows="5" id="message" placeholder="Mensaje"></textarea>
              <span class="help-block"></span>
            </div>
            <!-- reCAPTCHA -->
            <div class="form-group" id="form-captcha">
              <div class="g-recaptcha" data-sitekey="6LeGURQUAAAAAIDv9Y9LkAMfcSM5ShBjhF6WTrim"></div>
              <span class="help-block"></span>
            </div>
            <!-- /reCAPTCHA -->
            <button type="submit" class="btn btn-lg btn-primary">Enviar Mensaje</button>
          </form>
        </div>
        
      </div> <!-- / .row -->
</div> <!-- / .container -->
<hr>
<br>
@stop