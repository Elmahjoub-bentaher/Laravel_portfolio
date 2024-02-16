<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/'.$detail->profile_image )}}">
        <link href="{{ asset('../resources/css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('../resources/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('../resources/css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <title>My Portfolio</title>
    </head>
    <body>
        @if($detail)
        <div class="side_box">
            <div class="img">
                <img src="{{asset('storage/'.$detail->profile_image )}}" alt="profile_pic">
            </div>
            <h2 class="name">{{ $detail->name }}</h2>
            <p>{{ $detail->profession }}</p>
            <div class="socials">
                <a href="mailto:maroinealarabi@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                <a href="https://www.linkedin.com/in/marouane-elaarabi-3589b7296/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.fiverr.com/marouanecrew" target="_blank"><img src="imgs/fiverr.png" alt="fiver"></a>
                <a href="https://www.upwork.com/freelancers/~0149b0a35a5c2cf938" target="_blank"><img src="imgs/upwork.png" alt="upwork"></a>
                <a href="https://github.com/MarouaneCrew" target="_blank"><i class="fa-brands fa-github"></i></a>
            </div>
            <div class="download">
                <button><a href="{{asset('storage/'.$detail->resume )}}" download="resume.pdf">Download Resume</a></button>
            </div>
        </div>
        @endif
        
        <header>
            <div class="container">
                <nav class="nav-bar">
                    @if($detail->logo)
                    <div class="logo">
                        <a href="#home">
                            <img src="{{ asset('storage/'.$detail->logo) }}" alt="logo">
                        </a>
                    </div>
                    @endif
                    <ul class="links">
                        <li><a href="#education">Education</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#certificate">Certificates</a></li>
                        <li><a href="#academic_projects">Projects</a></li>
                        <li><a href="#experience">Experiences</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#refs">References</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <div class="bars">
                        <i class="fa-solid fa-bars"></i>
                        <i class="fa-solid fa-x"></i>
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <div class="about" id="about">
                <div class="container">
                    <div class="wrapper">
                        <h2 class="heading">About me</h2>
                        @if($detail)
                        <p class="main_p">
                            <b>Hello, I'm {{ $detail->name }}!</b>
                            {!! $detail->aboutMe !!}
                        </p>
                        <hr>
                        @endif
                        <div class="info">
                            <div class="personal_info">
                                <h3>personal information</h3>
                                @if($detail)
                                <div class="name">
                                    <p><b>F. Name</b></p>
                                    <p>{{ $detail->name }}</p>
                                </div>
                                <div class="birthday">
                                    <p><b>D.O.B.</b></p>
                                    <p>{{ $detail->dayOfBirth }}</p>
                                </div>
                                <div class="address">
                                    <p><b>Address</b></p>
                                    <p>{{ $detail->address }}</p>
                                </div>
                                <div class="email">
                                    <p><b>Email</b></p>
                                    <p><a href="mailto:{{ $detail->email }}">{{ $detail->email }}</a></p>
                                </div>
                                <div class="phone">
                                    <p><b>Phone</b></p>
                                    <p><a href="tel:{{ $detail->phone }}">{{ $detail->phone }}</a></p>
                                </div>
                                @endif
                            </div>
                            <div class="languages">
                                <h3>Languages</h3>
                                    @if($langues)
                                    @foreach($langues as $langue)
                                    <div>
                                        <h4>{{ $langue->langue}} </h4>
                                        <ul class="links">
                                        @for($i = 0; $i < $langue->langue_rating; $i++) 
                                            <li><span class="act"></span></li>
                                        @endfor
                                        @for($i = $langue->langue_rating; $i < 10; $i++) 
                                            <li><span></span></li>
                                        @endfor
                                        </ul>
                                        <div class="level">{{ $langue->langue_level}}</div>
                                    </div>
                                    @endforeach
                                    @endif
                            </div>
                        </div>
                        <div class="skills" id="skills">
                            <div class="title observe">
                                <h3>What is my skill level?</h3>
                                @if($skillDs)
                                <p class="para">
                                    <ul>
                                        @foreach($skillDs as $skillD)
                                        <li>
                                            <span>{{ $skillD->title }}:</span>  {{ $skillD->description }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </p>
                                @endif
                            </div>
                            @if($skills)
                            <div class="box">
                                <div class="section">
                                    @foreach($skills as $skill)
                                    <div class="skill">
                                        <h4> {{$skill->name}} <span> {{$skill->rate}}% </span></h4>
                                        <div class="progress">
                                            <span data-width="{{$skill->rate}}%"></span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if($educations)
            <div class="education" id="education">
                <div class="container">
                    <div class="wrapper">
                        <h2 class="heading">Education</h2>
                        @foreach($educations as $education)
                        <div class="exp">
                            <div class="time">
                                <p>
                                    {{$education->startDate->format('M')}} <b>{{$education->startDate->format('Y')}}</b> - 
                                    {{$education->endDate->format('M')}} <b>{{$education->endDate->format('Y')}}</b><span></span>
                                </p>
                            </div>
                            <div class="details">
                                <h3>{{ $education->scholName }}</h3>
                                <h4>{{ $education->text }}</h4>
                                <p class="degree"><b>Degree: </b>{{ $education->degree }}</p>
                                <p class="main_p">{!! $education->description !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            @if($certificates)
            <div class="certificate" id="certificate">
                <div class="container">
                    <div class="wrapper">
                        <h2 class="heading">
                            Academic certificates
                        </h2>
                        <div class="content">
                            @foreach($certificates as $certificate)
                            <div class="exp">
                                <div class="details">
                                    <h3>{{$certificate->title}}</h3>
                                    <p class="main_p">{{$certificate->smallDescription}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if($projects)
            <div class="academic_projects" id="academic_projects">
                <div class="container">
                    <div class="wrapper">
                        <h2 class="heading">
                            Personal projects
                        </h2>
                        @foreach($projects as $project)
                        <div class="exp">
                            <div class="details">
                                <h3>{{ $project->title }}</h3>
                                <p class="main_p">{{ $project->description }}</p>
                                @if($project->link)
                                <a href="{{ $project->link }}" target="_blank">View site</a>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            @if($works)
            <div class="experience" id="experience">
                <div class="container">
                    <div class="wrapper">
                        <h2 class="heading">Work experience</h2>
                        @foreach($works as $work)
                        <div class="exp">
                            <div class="time">
                                <p>
                                    {{$work->startDate->format('M')}} <b>{{$work->startDate->format('Y')}}</b> - 
                                    {{$work->endDate->format('M')}} <b>{{$work->endDate->format('Y')}}</b><span></span>
                                </p>
                            </div>
                            <div class="details">
                                <h3>{{ $work->jobTitle }}</h3>
                                <h4>{{ $work->company }}</h4>
                                <p class="main_p">{{ $work->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            @if($images)
            <div class="portfolio" id="portfolio">
                <div class="container">
                    <div class="wrapper">
                        <h2 class="heading">Portfolio</h2>
                        <div class="pics">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @foreach($images as $image)
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img src="{{asset('storage/'.$image->image)}}" alt="{{$image->imageAlt}}">
                                            <span class="txt">
                                                <p>
                                                    <button>View Full Pic</button>
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if($references)
            <div class="refs" id="refs">
                <div class="container">
                    <div class="wrapper">
                        <h2 class="heading">Refrences</h2>
                        <div class="people">
                            @foreach($references as $ref)
                            <div class="person">
                                @if($ref->avatarImage)
                                <div class="img">
                                    <img src="{{ asset('storage/'.$ref->avatarImage)}}" alt="{{ $ref->name }}">
                                </div>
                                @else
                                <div class="img">
                                    <svg
                                        class="user"
                                        style="color: #CBD5E0; background-color: #F7FAFC; border-radius:50%;"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                @endif
                                <div class="text">
                                    <h3 class="name">{{ $ref->name }}</h3>
                                    <span class="area">{{ $ref->company }}</span>
                                    <p class="testemonial">
                                        {{ $ref->description }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="contact" id="contact">
                <div class="container">
                    <div class="wrapper">
                        <h2 class="heading">Contact me</h2>
                        <div class="contain">
                            <div class="socials">
                                <a href="mailto:maroinealarabi@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                                <a href="https://www.linkedin.com/in/marouane-elaarabi-3589b7296/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://www.fiverr.com/marouanecrew" target="_blank"><img src="imgs/fiverr.png" alt="fiver"></a>
                                <a href="https://www.upwork.com/freelancers/~0149b0a35a5c2cf938" target="_blank"><i style="color:black;"class="fa-brands fa-upwork"></i></a>
                                <a href="https://github.com/MarouaneCrew" target="_blank"><i class="fa-brands fa-github"></i></a>
                            </div>
                            <h3>FELL FREE TO CONTACT ME THE CORE OF YOUR MARKETING</h3>
                            <form action="https://api.web3forms.com/submit" method="POST" class="contact_form">
                                <input type="hidden" name="access_key" value="00ebf384-08a6-4af0-b7cf-d8243ff875f2">
                                <input type="email" class="email" name="email" placeholder="Your Email">
                                <input type="text" class="subject" name="subject" placeholder="Subject">
                                <textarea name="comment" class="comment" placeholder="Your Comment"></textarea>
                                <button type="submit" name="submit">Post your comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer style="text-align: center; padding: 10px;">
                <div class="container">
                    {{ $detail->name }} &copy; All right Reserved <span id="year"></span>
                </div>
                <script>
                    const date = new Date();
                    const year = date.getFullYear();
                    document.getElementById("year").innerHTML = year;
                </script>
            </footer>

        </main>

        <div class="side_nav">
            <div class="img">
                <a href="#about">
                    <img src="{{asset('storage/'.$detail->profile_image )}}" alt="profile_pic" title="Home">
                </a>
            </div>
            <div class="icon">
                <a href="#certificate">
                    <i class="fa-solid fa-certificate" title="Certificates"></i>            
                </a>  
            </div>
            <div class="icon">
                <a href="#academic_projects">
                    <i class="fa-solid fa-feather" title="Projects"></i>  
                </a>  
            </div>
            <div class="icon">
                <a href="#experience">
                    <i class="fa-solid fa-briefcase" title="Experiences"></i>
                </a>
            </div>
            <div class="icon">
                <a href="#portfolio">
                    <i class="fa-solid fa-image" title="Portfolios"></i>                
                </a>
            </div>
            <div class="icon">
                <a href="#refs">
                    <i class="fa-solid fa-comment-dots" title="Refrences"></i>                
                </a>
            </div>
            <div class="icon">
                <a href="#contact">
                    <i class="fa-solid fa-envelope" title="Contact"></i>   
                </a>             
            </div>
        </div>

        <div class="pop_up">
            <span><i class="fa-solid fa-x"></i></span>
            <div class="pop_up_wrapper">
                <div class="img">
                    <img src="" alt="prtfolioImg">
                </div>
            </div>
        </div>
        
        <div class="clip_path1"></div>

        <div class="clip_path2"></div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <script src="https://smtpjs.com/v3/smtp.js"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    type: "progressbar",
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>

    
    <script src="../resources/js/main.js"></script>

    </body>
</html>
