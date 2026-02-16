<!--

* Author        : "colorlib"
* Template Name : Ronaldo
* Version       : 1.0

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

@php
    $accentColor = $portfolioConfig['accentColor'];
    $accentColorRGB = Utils::getRgbValue($accentColor);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.googleAnalytics')
    @if (!empty($portfolioConfig['script']['header']) && $portfolioConfig['script']['header'] != '')
        <script>
            {!!$portfolioConfig['script']['header']!!}
        </script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="{{$portfolioConfig['seo']['title']}}" />
    <meta property="title" content="{{$portfolioConfig['seo']['title']}}" />
    <meta name="description" content="{{$portfolioConfig['seo']['description']}}" />
    <meta property="og:description" content="{{$portfolioConfig['seo']['description']}}" />
    <meta name="author" content="{{$portfolioConfig['seo']['author']}}" />
    <meta property="og:image" content="{{asset($portfolioConfig['seo']['image'])}}" />
    <meta property="og:image:secure_url" content="{{asset($portfolioConfig['seo']['image'])}}" />
    <title>{{$about->name}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ Utils::getFavicon() }}">

    <link href="{{ asset('assets/common/lib/mdi-icon/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/common/lib/fontawesome/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/common/lib/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/common/lib/iziToast/css/iziToast.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/common/lib/aos/aos.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/themes/procyon/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/themes/procyon/css/custom.css') }}" rel="stylesheet">
    <style>
        :root {
            --z-accent-color:
                {{$accentColor}}
            ;
        }

        /* Modern Glassmorphism Styles */
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .contact-info-panel {
            background: linear-gradient(135deg, var(--z-accent-color) 0%, rgba({{$accentColorRGB}}, 0.8) 100%);
            color: #fff;
            padding: 40px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-info-panel h3 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .info-item .icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 20px;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .info-item:hover .icon {
            background: #fff;
            color: var(--z-accent-color);
            transform: translateY(-5px);
        }

        .info-content p {
            margin-bottom: 0;
            font-size: 14px;
            opacity: 0.8;
        }

        .info-content h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 2px;
            color: #fff;
        }

        .contact-form-wrapper {
            padding: 40px;
            background: #fff;
        }

        .custom-input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .custom-input-group input,
        .custom-input-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #f0f0f0;
            border-radius: 10px;
            outline: none;
            transition: all 0.3s ease;
            background: #fcfcfc;
        }

        .custom-input-group input:focus,
        .custom-input-group textarea:focus {
            border-color: var(--z-accent-color);
            background: #fff;
            box-shadow: 0 5px 15px rgba({{$accentColorRGB}}, 0.1);
        }

        .btn-modern {
            background: var(--z-accent-color);
            color: #fff;
            padding: 15px 35px;
            border-radius: 10px;
            border: none;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            cursor: pointer;
            width: 100%;
        }

        .btn-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba({{$accentColorRGB}}, 0.3);
            color: #fff;
        }

        @media (max-width: 768px) {
            .contact-info-panel {
                padding: 30px;
            }

            .contact-form-wrapper {
                padding: 30px;
            }
        }

        .bg-primary,
        {
        background-color:
            {{$accentColor . ' !important'}}
        ;
        }

        a {
            color:
                {{$accentColor}}
            ;
        }

        a:hover {
            color: rgba({{$accentColorRGB}}, .7);
        }

        .form-control:focus {
            border-color: rgba({{$accentColorRGB}}, .5) !important;
            box-shadow: none;
        }

        .border-primary {
            border-color: var(--z-accent-color) !important;
        }

        .text-primary {
            color:
                {{$accentColor . ' !important'}}
            ;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    @include('common.preloader2')
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><span>{{substr($about->name, 0, 1)}}</span>{{substr($about->name, 1)}}</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    @if ($portfolioConfig['visibility']['about'])
                        <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    @endif
                    @if ($portfolioConfig['visibility']['experiences'] || $portfolioConfig['visibility']['education'] || $portfolioConfig['visibility']['skills'])
                        <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    @endif
                    @if ($portfolioConfig['visibility']['services'])
                        <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                    @endif
                    @if ($portfolioConfig['visibility']['projects'])
                        <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    @endif
                    @if ($portfolioConfig['visibility']['contact'])
                        <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-wrap js-fullheight" id="hero" style="background-image: url('{{asset($about->cover)}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 d-flex align-items-center" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <div class="text text-center">
                        <h1>{{$about->name}}</h1>
                        <h2>
                            <span id="typed-strings"></span>
                            {{-- <span class="txt-rotate" data-period="2000"
                                data-rotate='{!! json_encode(json_decode($about->taglines)) !!}'>
                            </span> --}}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        @if ($portfolioConfig['visibility']['about'])
            <div class="mouse d-lg-block d-none">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="bx bxs-chevrons-down"></span></div>
                </a>
            </div>
        @endif
    </section>

    @if ($portfolioConfig['visibility']['about'])
        <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb goto-here" id="about-section">
            <div class="container">
                <div class="row d-flex no-gutters">
                    <div class="col-md-6 col-lg-6 d-flex mt-5 mt-lg-0">
                        <div class="img-about img d-flex align-items-stretch">
                            <div class="overlay"></div>
                            <img class="img d-flex align-self-stretch align-items-center mx-auto my-auto lazy rounded-circle"
                                data-src="{{asset($about->avatar)}}" src="{{asset('assets/common/img/lazyloader.gif')}}" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section">
                                <h2 class="mb-4">About Me</h2>
                                <p>{{ $about->description }}</p>
                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <li class="d-flex"><span>Name:</span> <span>{{ $about->name }}</span></li>
                                    @if ($about->email && $about->email !== '')
                                        <li class="d-flex"><span>Email:</span> <span>{{$about->email}}</span></li>
                                    @endif
                                    @if ($about->phone && $about->phone !== '')
                                        <li class="d-flex"><span>Phone:</span> <span>{{$about->phone}}</span></li>
                                    @endif
                                    @if ($about->address && $about->address !== '')
                                        <li class="d-flex"><span>Address:</span> <span>{{$about->address}}</span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        @if ($portfolioConfig['visibility']['cv'])
                            <div class="counter-wrap d-flex mt-md-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <div class="text">
                                    <p><a href="{{$about->cv}}" class="btn btn-primary py-3 px-3" download>Download CV</a></p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-section ftco-no-pb social-icon-block">
            <div class="container">
                <div class="row d-flex">
                    @if ($about->social_links)
                        @foreach (json_decode($about->social_links) as $social)
                            <div class="col-6 col-md-4 col-lg-2 mb-lg-4" data-aos="zoom-in">
                                <div class="align-self-stretch box text-center p-3 shadow">
                                    <a href="{{$social->link}}" target="_blank">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="{{$social->iconClass}}"></span>
                                        </div>
                                        <div>
                                            <p class="mb-0">{{$social->title}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    @endif

    @if ($portfolioConfig['visibility']['experiences'] || $portfolioConfig['visibility']['education'] || $portfolioConfig['visibility']['skills'])
        <section class="ftco-section ftco-no-pb" id="resume-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <nav id="navi">
                            <ul>
                                @if ($portfolioConfig['visibility']['education'])
                                    <li><a href="#page-1">Education</a></li>
                                @endif
                                @if ($portfolioConfig['visibility']['experiences'])
                                    <li><a href="#page-2">Experience</a></li>
                                @endif
                                @if ($portfolioConfig['visibility']['skills'])
                                    <li><a href="#page-3">Skills</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9">
                        @if ($portfolioConfig['visibility']['education'])
                            <div id="page-1" class="page one">
                                <h2 class="heading">Education</h2>
                                @if ($education)
                                    @foreach ($education as $value)
                                        <div class="resume-wrap d-flex" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fas fa-book-open"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <span class="date">{{$value->period}}</span>
                                                <h2>{{$value->degree}}</h2>
                                                <span class="position">{{$value->institution}}</span>
                                                <p class="mb-0">{{$value->cgpa && $value->cgpa !== '' ? 'CGPA: ' . $value->cgpa : '' }}
                                                </p>
                                                <p>{{$value->thesis && $value->thesis !== '' ? 'Thesis: ' . $value->thesis : '' }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        @endif
                        @if ($portfolioConfig['visibility']['experiences'])
                            <div id="page-2" class="page two">
                                <h2 class="heading">Experience</h2>
                                @if ($experiences)
                                    @foreach ($experiences as $experience)
                                        <div class="resume-wrap d-flex" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fas fa-briefcase"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <span class="date">{{$experience->period}}</span>
                                                <h2>{{$experience->position}}</h2>
                                                <span class="position">{{$experience->company}}</span>
                                                <p>{{$experience->details}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        @endif
                        @if ($portfolioConfig['visibility']['skills'])
                            <div id="page-3" class="page three">
                                <h2 class="heading">Skills</h2>
                                @if ((int) $portfolioConfig['visibility']['skillProficiency'])
                                    @if (!empty($skills))
                                        <div class="row progress-circle mb-5">
                                            @foreach ($skills as $key => $skill)
                                                @if ($key < 3)
                                                    <div class="col-lg-4 mb-4" data-aos="zoom-in">
                                                        <div class="bg-white rounded-lg shadow p-4 z-hover">
                                                            <h2 class="h5 font-weight-bold text-center mb-4">{{$skill->name}}</h2>
                                                            <div class="progress mx-auto mb-4" data-value='{{$skill->proficiency}}'>
                                                                <span class="progress-left">
                                                                    <span class="progress-bar border-primary"></span>
                                                                </span>
                                                                <span class="progress-right">
                                                                    <span class="progress-bar border-primary"></span>
                                                                </span>
                                                                <div
                                                                    class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                    <div class="h2 font-weight-bold">{{$skill->proficiency}}<sup
                                                                            class="small">%</sup></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                                    @if (!empty($skills))
                                        <div class="row">
                                            @foreach ($skills as $key => $skill)
                                                @if ($key >= 3)
                                                    <div class="col-md-6">
                                                        <div class="progress-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                                            <h3>{{$skill->name}}</h3>
                                                            <div class="progress">
                                                                <div class="progress-bar color-1" role="progressbar"
                                                                    aria-valuenow="{{$skill->proficiency}}" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width:{{$skill->proficiency}}%">
                                                                    <span>{{$skill->proficiency}}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                                @else
                                    <div class="row progress-circle mb-5">
                                        @foreach ($skills as $key => $skill)
                                            <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
                                                <div class="bg-white rounded-lg shadow p-4 z-hover">
                                                    <h2 class="h5 font-weight-bold text-center">{{$skill->name}}</h2>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif


    @if ($portfolioConfig['visibility']['services'])
        <section class="ftco-section" id="services-section">
            <div class="container-fluid px-md-5">
                <div class="row justify-content-center py-5 mt-5">
                    <div class="col-md-12 heading-section text-center">
                        <h2 class="mb-4">Services</h2>
                    </div>
                </div>
                <div class="row">
                    @if (!empty($services))
                        @foreach ($services as $service)
                            <div class="col-md-4 text-center d-flex" data-aos="zoom-in">
                                <div class="services-1 shadow z-hover">
                                    <span class="icon">
                                        <i class="{{$service->icon}}"></i>
                                    </span>
                                    <div class="desc">
                                        <h3 class="mb-5">{{$service->title}}</h3>
                                        <p>{{$service->details}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    @endif

    @if ($portfolioConfig['visibility']['projects'])
        <section class="ftco-section ftco-project" id="projects-section">
            <div class="container-fluid px-md-5">
                <div class="row no-gutters justify-content-center pb-5">
                    <div class="col-md-12 heading-section text-center">
                        <h2 class="mb-4">Projects</h2>
                    </div>
                </div>
                <div id="react-project-root" data-accentcolor="{{$accentColor}}" data-demomode="{{$demoMode}}" />
                <div class="mb-5"></div>
            </div>
        </section>
    @endif

    @if ($portfolioConfig['visibility']['contact'])
        <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 heading-section text-center" data-aos="fade-up">
                        <h2 class="mb-4">Get In Touch</h2>
                        <p>I'm always open to discussing new projects, creative ideas or opportunities to be part of your
                            visions.</p>
                    </div>
                </div>

                <div class="glass-card mb-5" data-aos="fade-up">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <div class="contact-info-panel">
                                <h3>Contact Information</h3>

                                @if ($about->address)
                                    <div class="info-item">
                                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="info-content">
                                            <h4>Address</h4>
                                            <p>{{$about->address}}</p>
                                        </div>
                                    </div>
                                @endif

                                @if ($about->email)
                                    <div class="info-item">
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                        <div class="info-content">
                                            <h4>Email</h4>
                                            <p>{{$about->email}}</p>
                                        </div>
                                    </div>
                                @endif

                                @if ($about->phone)
                                    <div class="info-item">
                                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                        <div class="info-content">
                                            <h4>Phone</h4>
                                            <p>{{$about->phone}}</p>
                                        </div>
                                    </div>
                                @endif

                                @if ($portfolioConfig['visibility']['cv'])
                                    <div class="info-item">
                                        <div class="icon"><i class="fas fa-file-download"></i></div>
                                        <div class="info-content">
                                            <h4>Curriculum Vitae</h4>
                                            <p><a href="{{$about->cv}}" class="text-white font-weight-bold" download>Download
                                                    PDF</a></p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="contact-form-wrapper">
                                <form action="#" method="POST" id="contact-me-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="custom-input-group">
                                                <input type="text" id="name" name="name" placeholder="Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="custom-input-group">
                                                <input type="email" id="email" name="email" placeholder="Email Address"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-input-group">
                                                <input type="text" id="subject" name="subject" placeholder="Subject"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-input-group">
                                                <textarea id="body" name="body" cols="30" rows="5"
                                                    placeholder="Tell me about your project..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" id="submit" class="btn-modern">
                                                <span class="content">Send Message</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($portfolioConfig['visibility']['footer'])
        <footer class="footer">
            <div class="h4 title text-center text-muted">{{$about->name}}</div>
            <div class="text-center text-muted">
                <p>©{{ now()->year }} All rights reserved.</p>
            </div>
            <div class="text-center text-muted">
                <small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small>
            </div>
        </footer>
    @else
        <footer class="footer">
            <div class="text-center text-muted">
                <small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small>
            </div>
        </footer>
    @endif


    <script src="{{ asset('assets/common/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/common/lib/jquery-migrate/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/common/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/common/lib/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/common/lib/typed/typed.js') }}"></script>
    <script src="{{ asset('assets/common/lib/iziToast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/common/lib/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/common/lib/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/common/lib/jquery.stellar/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/common/lib/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/common/lib/scrollax/scrollax.min.js') }}"></script>
    <script src="{{ asset('assets/common/lib/jquery.lazy/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('assets/themes/procyon/js/main.js') }}"></script>
    <script src="{{ asset('js/client/frontend/roots/projects.js') }}"></script>
    <script>
        $(function () {
            $('.lazy').lazy();

            if ($('#szn-preloader').length) {
                $('#szn-preloader').delay(100).fadeOut('slow', function () {
                    $(this).remove();
                });
            }

            if ($('#typed-strings').length) {
                @if($about->taglines)
                    var typedStrings = new Typed('#typed-strings', {
                        strings: {!! json_encode(json_decode($about->taglines)) !!},
                        typeSpeed: 70,
                        backSpeed: 40,
                        smartBackspace: true,
                        loop: true
                    });
                @endif
            }

            $('#contact-me-form').validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    subject: {
                        required: true
                    },
                    body: {
                        required: true
                    }
                },
                submitHandler: function (form, event) {
                    const button = $('#contact-me-form #submit');

                    button.attr('disabled', true);
                    button.html(`<span class="content">
                        Sending <i class="fas fa-spinner fa-spin"></i>
                    </span>`);

                    $.ajax({
                        url: '{!! route('contact-me') !!}',
                        dataType: 'json',
                        data: $('#contact-me-form').serialize(),
                        type: 'post',
                        success: function (response) {
                            if (response.status === 400) {
                                var errorArray = response.payload;
                                $.each(errorArray, function (key, errors) {
                                    $.each(errors, function (key2, errorMessage) {
                                        showNotification(errorMessage, 'error', false);
                                    });
                                });
                            } else if (response.status !== 200) {
                                showNotification(response.message, 'error', false);
                            } else if (response.status === 200) {
                                showNotification(response.message, 'success', false);
                                $('#contact-me-form').trigger('reset');
                            }
                        },
                        error: function (jqXHR, exception) {
                            console.log(jqXHR);
                        },
                        complete: function (data) {
                            button.attr('disabled', false);
                            button.html(`<span class="content">
                                Send <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z">
                                    </path>
                                </svg>
                            </span>`);
                        }
                    });
                }
            });

            function showNotification(message = 'Something went wrong', type = 'error', sticky = false) {
                iziToast.show({
                    title: '',
                    message: message,
                    messageSize: 12,
                    position: 'topRight',
                    theme: 'dark',
                    pauseOnHover: true,
                    timeout: sticky === false ? 5000 : false,
                    progressBarColor: type === 'success' ? '#00ffb8' : '#ffafb4',
                    color: type === 'success' ? '#565c70' : '#565c70',
                    messageColor: type === 'success' ? '#00ffb8' : '#ffafb4',
                    icon: type === 'success' ? 'fas fa-check' : 'fas fa-times-circle'
                });
            }
        });
    </script>
    @if (!empty($portfolioConfig['script']['footer']) && $portfolioConfig['script']['footer'] != '')
        <script>
            {!!$portfolioConfig['script']['footer']!!}
        </script>
    @endif
    @include('common.pixelTracking')
</body>

</html>