<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

@extends('layouts.app')
@section('content')

<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("user_SmGKJPHm7kFYT1KHqYt21");
   })();

function sendForm(){
    console.log("Send Form Button Working");
    emailjs.sendForm("default_service","contact","form");
    setTimeout(redirect, 500);
}



function redirect() {
    document.location.href = '/home';
}

</script>

    

<div class="container">

        <a class="top-right links" href="{{ url('/home') }}">Home</a>

    <div class="col-md-5">
        <div class="form-area">  
            <form id="form" role="form">
            <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                        <textarea name="message" class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                        </div>
                
            <button type="button" id="submit" name="submit" class="btn btn-primary pull-right"  onclick="sendForm()">Submit Form</button>

           

            @csrf
            </form>
        </div>
    </div>
    </div>

    @stop