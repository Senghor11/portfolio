
@extends('layouts.app')

@section('content')
 
<section class="home" id="home" style="min-height: 100vh; display: flex; align-items: center; background: linear-gradient(120deg, #181818 60%, #0ef 100%);">
    <div style="flex:1; padding: 60px 0 60px 10vw;">
        <img src="{{ asset('img.png') }}" alt="Profile" class="profile-img" align="right" style="width: 400px; height: 450px;">
        <h3 style="font-size: 2rem; color: #0ef; margin-bottom: 12px;">Hello, I'm</h3>
        <h1 style="font-size: 3.5rem; font-weight: 800; letter-spacing: 2px; color: #ededed; margin-bottom: 8px;">HEANG SENGHOR</h1>
        <h3 style="font-size: 2rem; color: #ededed; margin-bottom: 24px;">
            And I'm a <span class="highlight" style="color:#0ef;">Backend Developer</span>
        </h3>
        <p style="font-size: 1.2rem; color: #b2ebf2; margin-bottom: 32px; max-width: 500px;">
            I specialize in crafting powerful, secure, and efficient server-side applications. I’m passionate about turning ideas into scalable web solutions using modern technologies and clean code practices.
            Explore my work below!
        </p>
        <a href="{{ url('/portfolio') }}" class="btn" style="background:#0ef; color:#181818; padding:14px 38px; border-radius:8px; font-size:1.1rem; font-weight:600; text-decoration:none; box-shadow:0 4px 24px #0ef3;">View Portfolio</a>
        <div class="home-sci" style="margin-top:40px;">
            <a href="https://facebook.com/yourprofile" target="_blank" title="Facebook" style="margin-right:16px;" >
                <!-- Facebook SVG -->
                <svg width="36" height="36" viewBox="0 0 32 32" fill="#1877F3" style="background:#fff;border-radius:50%;padding:4px;">
                    <circle cx="16" cy="16" r="16" fill="#fff"/>
                    <path d="M22 16h-3v10h-4V16h-2v-4h2v-2c0-2.2 1.3-4 4-4h3v4h-2c-.6 0-1 .4-1 1v1h3l-1 4z" fill="#1877F3"/>
                </svg>
            </a>
            <a href="https://t.me/heangsenghor" target="_blank" title="Telegram" style="margin-right:16px;">
                <!-- Telegram SVG -->
                <svg width="36" height="36" viewBox="0 0 32 32" fill="#229ED9" style="background:#fff;border-radius:50%;padding:4px;">
                    <circle cx="16" cy="16" r="16" fill="#fff"/>
                    <path d="M25.6 8.6c-.2-.2-.5-.2-.8-.1L7.2 14.7c-.3.1-.5.4-.5.7s.2.6.5.7l4.2 1.4 1.6 5.1c.1.3.4.5.7.5h.1c.3 0 .6-.2.7-.5l2.1-3.7 4.2 2.8c.1.1.3.1.4.1.1 0 .2 0 .3-.1.2-.1.3-.3.3-.5V9.1c0-.2-.1-.4-.3-.5z" fill="#229ED9"/>
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/senghor-heang-622b79370/" target="_blank" title="LinkedIn" style="margin-right:16px;">
                <!-- LinkedIn SVG -->
                <svg width="36" height="36" viewBox="0 0 32 32" fill="#0077B5" style="background:#fff;border-radius:50%;padding:4px;">
                    <circle cx="16" cy="16" r="16" fill="#fff"/>
                    <path d="M12 24h-4v-8h4v8zm-2-9.3c-1.3 0-2.3-1-2.3-2.3S8.7 10 10 10s2.3 1 2.3 2.3-1 2.4-2.3 2.4zm14 9.3h-4v-4c0-1-.4-1.7-1.3-1.7-.7 0-1.1.5-1.3 1-.1.2-.1.5-.1.8v3.9h-4v-8h4v1.1c.5-.8 1.3-1.5 2.7-1.5 2 0 3.3 1.3 3.3 4.1v4.3z" fill="#0077B5"/>
                </svg>
            </a>
            <a href="https://github.com/yourusername" target="_blank" title="GitHub">
                <!-- GitHub SVG -->
                <svg width="36" height="36" viewBox="0 0 32 32" fill="#181717" style="background:#fff;border-radius:50%;padding:4px;">
                    <circle cx="16" cy="16" r="16" fill="#fff"/>
                    <path d="M16 6C10.5 6 6 10.5 6 16c0 4.4 2.9 8.1 6.8 9.4.5.1.7-.2.7-.5v-1.7c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.2-1.4-1.2-1.4-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1.7 1.7 2.7 1.2.1-.7.4-1.2.7-1.5-2.2-.2-4.5-1.1-4.5-4.8 0-1.1.4-2 1-2.7-.1-.2-.4-1.1.1-2.2 0 0 .8-.2 2.7 1 .8-.2 1.7-.3 2.5-.3s1.7.1 2.5.3c1.9-1.2 2.7-1 2.7-1 .5 1.1.2 2 .1 2.2.6.7 1 1.6 1 2.7 0 3.7-2.3 4.6-4.5 4.8.4.3.7.9.7 1.8v2.7c0 .3.2.6.7.5C23.1 24.1 26 20.4 26 16c0-5.5-4.5-10-10-10z" fill="#181717"/>
                </svg>
            </a>
        </div>
        <div style="flex:1; padding: 40px 0 60px 0vw;"> 
            <div class="main-flex" style="max-width: 1500px; display: flex; gap: 40px; margin: auto; flex-wrap: wrap;">
                <!-- Skills Section -->
                <div style="flex:1; padding: 20px 0 60px 0vw;">
                    <h2 style="font-size: 2.5rem; color: #0ef; margin-bottom: 20px;">Skills</h2>
                    <p style="font-size: 1.2rem; color: #b2ebf2; margin-bottom: 24px;">
                        Here are some of my key skills and technologies I work with:  
                    </p>  
                    <div class="skill-bar">
                        <span>HTML</span>
                        <div class="bar-bg">
                            <div class="bar-fill" style="--bar-width:70%;">70%</div>
                        </div>
                    </div>
                    <div class="skill-bar">
                        <span>CSS</span>
                        <div class="bar-bg">
                            <div class="bar-fill" style="--bar-width:70%;">70%</div>
                        </div>
                    </div>
                    <div class="skill-bar">
                        <span>JavaScript</span>
                        <div class="bar-bg">
                            <div class="bar-fill" style="--bar-width:60%;">60%</div>
                        </div>
                    </div>
                    <div class="skill-bar">
                        <span>C#</span>
                        <div class="bar-bg">
                            <div class="bar-fill" style="--bar-width:70%;">70%</div>
                        </div>
                    </div>
                    <div class="skill-bar">
                        <span>Bootstrap</span>
                        <div class="bar-bg">
                            <div class="bar-fill" style="--bar-width:60%;">60%</div>
                        </div>
                    </div>
                    <div class="skill-bar">
                        <span>Laravel</span>
                        <div class="bar-bg">
                            <div class="bar-fill" style="--bar-width:70%;">70%</div>
                        </div>
                    </div>
                </div>
                <!-- Background Section -->
                <div style="flex:1; padding:  20px 0 60px 5vw;">
                    <h2 style="font-size: 2.5rem; color: #0ef; margin-bottom: 20px;">Background</h2>
                    <p style="font-size: 1.2rem; color: #b2ebf2; margin-bottom: 24px;">
                        🎓 ROYAL UNIVERSITY OF PHNOM PENH <br>
                        Bachelor of Computer Science -Year III<br>
                        <br>
                        💼 Junior Software Developer <br>
                        <br>
                    </p>
                    <p style="font-size: 1.2rem; color: #b2ebf2; margin-bottom: 24px;">
                        I hold a degree in Computer Science and have completed numerous projects that demonstrate my proficiency in various programming languages and frameworks. My goal is to continuously learn and adapt to new challenges in the ever-evolving field of web development.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
