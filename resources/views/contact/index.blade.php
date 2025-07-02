@extends('layouts.app')

@section('content')
<section class="contact" id="contact" w>
    <h2>Contact Me</h2>
    <form id="contactForm" method="POST" action="/send-email">
        @csrf <!-- Laravel CSRF token -->
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
    </form>
    <div id="formMessage"></div>
</section>
    





    <!-- for scrolling section button -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    </script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('formMessage').innerText = 'Thank you for your message!';
            this.reset();
        });
    </script>
    
@endsection
