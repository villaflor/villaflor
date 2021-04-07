<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}} | {{$profile['firstname']}}</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="favicon.ico">

<!-- Fonts -->
    <link
        href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- FontAwesome JS -->
    <script defer src="fontawesome/js/all.js"></script>

    <!-- Styles -->
    <!-- Global CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="css/theme/{{$profile['color']}}.css">
</head>

<body>

<header class="header">
    <div class="top-bar container-fluid">
        <div class="actions">
            <a class="btn d-none d-md-inline-block" href="mailto:{{$profile['email']}}">
                <i class="fas fa-paper-plane" aria-hidden="true"></i> Hire Me</a>
            {{--            <a class="btn" href="#"><i class="fas fa-download" aria-hidden="true"></i> Download My Resume</a>--}}
        </div>
        <ul class="social list-inline">
            @if($profile['linkedin'])
                <li class="list-inline-item"><a href="{{$profile['linkedin']}}">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                </li>
            @endif
            @if($profile['github'])
                <li class="list-inline-item"><a href="{{$profile['github']}}">
                        <i class="fab fa-github" aria-hidden="true"></i></a>
                </li>
            @endif
        </ul>
    </div>

    <div class="intro">
        <div class="container text-center">
            <img class="profile-image rounded-circle z-depth-2 border border-light border-4" src="{{$profile['photo']}}"
                 alt="">
            <h1 class="name">{{$profile['firstname']}} {{$profile['lastname']}}</h1>
            <div class="title">{{$profile['title']}}</div>
            <div class="profile">
                <p>{{$profile['description']}}</p>
            </div>
        </div>
    </div>

    <div class="contact-info">
        <div class="container text-center">
            <ul class="list-inline">
                <li class="email list-inline-item"><i class="fas fa-envelope"></i><a
                        href="mailto:{{$profile['email']}}">{{$profile['email']}}</a></li>
                <li class="website list-inline-item"><i class="fas fa-globe"></i>
                    <a href="{{$profile['website']}}" target="_blank">{{$profile['website']}}</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="page-nav-space-holder d-none d-md-block">
        <div id="page-nav-wrapper" class="page-nav-wrapper text-center">
            <div class="container">
                <ul id="page-nav" class="nav page-nav list-inline">
                    <li class="nav-item"><a class="scrollto nav-link" href="#experiences-section">Experiences</a></li>
                    <li class="nav-item"><a class="scrollto nav-link" href="#education-section">Education</a></li>
                    <li class="nav-item"><a class="scrollto nav-link" href="#skills-section">Skills</a></li>
                    <li class="nav-item"><a class="scrollto nav-link" href="#testimonials-section">Testimonials</a></li>
                    <li class="nav-item"><a class="scrollto nav-link" href="#portfolio-section">Portfolio</a></li>
                    <li class="nav-item"><a class="scrollto nav-link" href="#contact-section">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

</header>

<div class="wrapper container">
    <section id="experiences-section" class="experiences-section section">
        <h2 class="section-title">Work Experiences</h2>
        <div class="timeline">
            @foreach($profile['work_experiences'] as $workExperience)
                <div class="item">
                    <div class="work-place">
                        <h3 class="place">{{$workExperience['company']}}</h3>
                        <div class="location"><i class="fas fa-map-marker-alt mr-1"></i>{{$workExperience['location']}}
                        </div>
                    </div>
                    <div class="job-meta">
                        <div class="title">{{$workExperience['title']}}</div>
                        <div class="time">{{$workExperience['start_date']}} -
                            {{$workExperience['end_date'] ? $workExperience['end_date'] : 'Present'}}</div>
                    </div>
                    <div class="job-desc">
                        <p>{{$workExperience['description']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="education-section" class="education-section section">
        <h2 class="section-title">Education</h2>
        <div class="row">
            @foreach($profile['educations'] as $education)
                <div class="item col-12">
                    <div class="item-inner">
                        <h3 class="degree">{{$education['degree']}}</h3>
                        <div class="education-body">
                            <p>{{$education['school']}}, {{$education['location']}}</p>
                        </div><!--//education-body-->
                        <div class="time">{{$education['start_date']}}
                            - {{$education['end_date'] ? $education['end_date'] : 'Present'}}</div>
                        <div class="desc">
                            {{$education['description']}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="skills-section" class="skills-section section text-center">
        <h2 class="section-title">Professional Skills</h2>
        <div class="top-skills">
            <h3 class="subtitle">Top Skills</h3>
            <div class="row">
                @foreach($profile['skills'] as $skill)
                    @if($skill['top_skill'])
                        <div class="item col-12 col-md-4">
                            <div class="item-inner">
                                <h4 class="skill-name">{{$skill['name']}}</h4>
                                <div class="desc">
                                    {{$skill['description']}}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="other-skills">
            <h3 class="subtitle">Other Skills</h3>
            <div class="misc-skills">
                @foreach($profile['skills'] as $skill)
                    @if(! $skill['top_skill'])
                        <span class="skill-tag">{{$skill['name']}}</span>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="testimonials-section" class="testimonials-section section">
        <h2 class="section-title">Testimonials</h2>

        <div id="testimonials-carousel" class="testimonials-carousel carousel slide" data-interval="8000">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($profile['testimonials'] as $key => $testimonial)
                    <li data-target="#testimonials-carousel" data-slide-to="{{$key}}"
                        class="@if($key == 0) active @endif"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($profile['testimonials'] as $key => $testimonial)
                    <div class="item carousel-item @if($key == 0) active @endif">
                        <blockquote class="quote">
                            <p><span class="icon-holder"><i class="fas fa-quote-left"></i></span>
                                {{$testimonial['message']}}
                            </p>
                        </blockquote>
                        <div class="source">
                            <div class="name">{{$testimonial['name']}}</div>
                            <div class="position">{{$testimonial['position']}}</div>
                            <div class="position">{{$testimonial['institution']}}</div>
                            <div
                                class="position">{{$testimonial['made_at'] ? $testimonial['made_at'] : ''}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

{{--    <section id="portfolio-section" class="portfolio-section section">--}}
{{--        <h2 class="section-title">Portfolio</h2>--}}
{{--        <ul id="filters" class="filters clearfix">--}}
{{--            <li class="type active" data-filter="*">All</li>--}}
{{--            @php--}}
{{--                $portfolioType = []--}}
{{--            @endphp--}}


{{--            @foreach($profile['portfolios'] as $portfolio)--}}
{{--                @foreach($portfolio['types'] as $types)--}}
{{--                    @if(! in_array($types['reference'], $portfolioType))--}}
{{--                        <li class="type" data-filter=".{{$types['reference']}}">{{$types['name']}}</li>--}}
{{--                        @php--}}
{{--                            $portfolioType[] = $types['reference']--}}
{{--                        @endphp--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--            @endforeach--}}
{{--        </ul>--}}

{{--        <div class="items-wrapper isotope row">--}}
{{--            @foreach($profile['portfolios'] as $portfolio)--}}
{{--                @php--}}
{{--                    $portfolioType = [];--}}
{{--                    foreach ($portfolio['types'] as $type) {--}}
{{--                        $portfolioType[] = $type['reference'];--}}
{{--                    }--}}

{{--                    $portfolioType = implode(' ', $portfolioType)--}}
{{--                @endphp--}}

{{--                <div class="item {{$portfolioType}} col-lg-3 col-6">--}}
{{--                    <div class="item-inner">--}}
{{--                        <figure class="figure">--}}
{{--                            <img class="img-fluid" src="{{$portfolio['image']}}" alt=""/>--}}
{{--                        </figure>--}}
{{--                        <div class="content text-left">--}}
{{--                            <h3 class="sub-title"><a href="{{$portfolio['url'] ?? '#'}}">{{$portfolio['title']}}</a>--}}
{{--                            </h3>--}}
{{--                            <div class="meta">{{$portfolio['meta']}}</div>--}}
{{--                            <div class="action"><a href="#">View on Github</a></div>--}}
{{--                        </div><!--//content-->--}}
{{--                        <a class="link-mask" href="{{$portfolio['url'] ?? '#'}}"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </section>--}}

    <section id="contact-section" class="contact-section section">
        <h2 class="section-title">Get in Touch</h2>
        <div class="intro">

            <img class="profile-image rounded-circle z-depth-2" src="{{$profile['photo']}}" alt="">
            <div class="dialog">
                <p>It would be a pleasure to meet with you to discuss how my qualifications can be of benefit and
                    demonstrate how I can be a valuable asset to your company. I am available for an interview at
                    your convenience and look forward to hearing from you.</p>

                <p>I can be reached at <a href="mailto:{{$profile['email']}}">{{$profile['email']}}</a> or visit me at
                    <a
                        href="{{$profile['linkedin']}}">{{$profile['linkedin']}}</a></p>
                <ul class="social list-inline">
                    @if($profile['linkedin'])
                        <li class="list-inline-item"><a href="{{$profile['linkedin']}}"><i class="fab fa-linkedin-in"
                                                                                           aria-hidden="true"></i></a>
                        </li>
                    @endif
                    @if($profile['github'])
                        <li class="list-inline-item"><a href="{{$profile['github']}}"><i class="fab fa-github"
                                                                                         aria-hidden="true"></i></a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </section>
</div>

<footer class="footer text-center">
    <div class="container">
        <small class="copyright">{{date("Y")}} {{config('app.name')}}</small>
    </div>
</footer>

<!-- Javascript -->
<script type="text/javascript" src="plugins/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="plugins/popper.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="plugins/back-to-top.js"></script>
<script type="text/javascript" src="plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="plugins/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="plugins/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>

<!-- custom js -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
