@extends('layouts.app')

@section('content')
 <section class="about" id="about">
        <h2>About Me</h2>
        <div class="about-content">
            <img src="{{ asset('m.png') }}" alt="Profile" class="profile-img">
            <div>
                <p>
                    Hey, I'm  SENGHOR. a creative web developer with a passion for modern design and user experience.
                    I create custom website to help businesses do better online.
                </p>
                <ul>
                    <li><strong>Email:</strong> senghorheang@gmail.com</li>
                    <li><strong>Location:</strong> Stueng Mean Chey, Phnom Penh, Cambodia.</li>
                    <li><strong>Phone:</strong> +855 86 954 661</li>

                </ul><br>
                <a href="{{ asset('mycv.png') }}" class="btn" target="_blank" download>Download CV</a>
            </div>
        </div>
    </section>
@endsection
