
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="QBrFj0tWELI7k3weZfi6gA4b2gF2RkrnZGfh3NSq"/>
    <title>Tourism Citizen Charter</title>
    <link rel="icon" href="{{ asset('storage/' . $company->favicon) }}" type="image/x-icon">
    <link rel="stylesheet" href="https://citizencharter.kathmandu.gov.np/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://citizencharter.kathmandu.gov.np/assets/frontend/css/style.css"/>
    <link rel="stylesheet" href="https://citizencharter.kathmandu.gov.np/assets/frontend/css/utils.css"/>
    <link rel="stylesheet" href="https://citizencharter.kathmandu.gov.np/assets/frontend/css/owl/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500&display=swap" rel="stylesheet">
        <style>
        .modal-content {
            min-height: auto;
            border: 0;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
<div class="background"
     style="background-image: url('')">
    <div class="container-fluid d-lg-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center d-none d-sm-block">
        <a href="/" class="main-logo">
            <img alt="{{ $company->company_name }}-logo" class="logo img-responsive center-block d-block mx-auto"
            src="{{ asset('storage/' . $company->logo) }}" />
        </a>
    </div>
        <div class="d-flex text-center justify-content-center align-items-center">
            <div class="main-heading">
    <h2 class="sub-title mb-1 mt-3 px-5 fw-bold ">
    <span class="d-block" style="color: #ff0000; font-size: 18px !important;">{{ $company->state }}</span>
                    <span class="d-block" style="color: #ff0000; font-size: 18px !important;">{{ $company->ministry }}</span>
                        <span style="color: #ff0000; font-size: 20px !important;">{{ $company->company_name }}</span>
                            <span class="d-block" style="color: #ff0000; font-size: 18px !important;">{{ $company->address }}</span>
            
        </h2>

</div>
        </div>
        <div class="d-flex align-items-end flex-column d-none d-sm-block">
            <div>
                <a href="https://citizencharter.kathmandu.gov.np" class="main-logo d-flex align-items-center">
                    <span class="link-btn">
                        <i class="fa-solid fa-phone" href="tel:014225610"></i> - 014225610<br>
                        <i class="fa-solid fa-envelope"></i> - <br>
                        <i class="fa-solid fa-calendar"></i> <span class="mukta fw-bold"><span class="date-text">
    २०८२ साल बैशाख २६ गते, शुक्रबार
</span>
</span><br>
                        <i class="fa-solid fa-clock"></i> <span id="clock" class="mukta fw-bold"></span>
                    </span>
                                            
                                        <img alt="nepal-flag" class="logo img-responsive center-block ms-2 "
                                        src="{{ asset('storage/' . $company->flag) }}" />
                </a>
            </div>
            

        </div>
    </div>

    
</div>
<div>
        <main>
        <section>
            <div class="news-slider-wrapper">
            <div class="d-flex align-items-center w-100">
                <h2>सूचना</h2>

                @if($notices->count())
                    <marquee class="w-100" behavior="scroll" scrolldelay="100" scrollamount="6">
                        <ul class="d-flex gap-5 list-unstyled mb-0">
                            @foreach ($notices as $notice)
                                <li class="mr-5 fs-5">
                                    {{ $notice->heading }}
                                </li>
                            @endforeach
                        </ul>
                    </marquee>
                @else
                    <p class="text-muted">कुनै सूचना उपलब्ध छैन।</p>
                @endif
            </div>

</div>
        </section>
        <section class="notice mt-1">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <h2 class="heading text-white px-1 text-center">नागरिक वडापत्र</h2>
                        <table class="table bg-red table-bordered border-danger mb-0 mt-2">
    <thead>
        <tr>
            <th width="5%">क्र.सं.</th>
            
            <th width="10%">सेवा</th>
            <th width="55%">आवश्यक कागजातहरु</th>
            <th width="15%">सेवा शुल्क</th>
            <th width="15%">सम्बन्धित शाखा / लाग्ने समय</th>
            
        </tr>
    </thead>
</table>
<div id="scroll">
    <table class="table table-success table-bordered">
    <tbody class="align-top">
        @foreach ($services as $index => $service)
            <tr>
                <th class="text-start" width="6%">{{ $index + 1 }}</th>
                <td class="text-start" width="10%">{{ $service->service }}</td>
                <td class="text-start" width="55%">
                    {!! nl2br(e($service->content)) !!}
                </td>
                <td class="text-start" width="15%">{{ $service->service_fee }}</td>
                <td class="text-start" width="15%">{{ $service->time }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
                    </div>
                    <!-- <div class="table-2">
                                <h2 class="heading">करका दायराहरु</h2>
                                <table class="table table-borderless table-primary position-relative overflow-hidden">
    <thead class="sticky-top">
    <tr>
        <th scope="col">क्र.सं.</th>
        <th scope="col">विवरण</th>
        <th scope="col">लाग्ने कर</th>
        <th scope="col">कैफियत</th>
    </tr>
    </thead>
    <tbody class="move">
    
    </tbody>
</table>
                            </div> -->
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <!-- <div class="video-container">
                            <div class="player">
                                <div id="youtube" style="width: 100%; height: 100%;"></div>
                            </div>
                        </div> -->
                        <div>
                            <div class="sub-heading mb-1">
                                <h6 class="text-white px-1 mb-0 text-center">पर्यटकिय स्थलहरु</h6>
                            </div>
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div id="turismCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                            <div class="carousel-inner">

                                @foreach($turismPlaces as $index => $place)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <div class="position-relative text-center">

                                            {{-- ✅ Title on top of image --}}
                                            <div class="position-absolute top-0 start-50 translate-middle-x bg-dark bg-opacity-50 text-white px-3 py-1 rounded-bottom">
                                                {{ $place->place_name }}
                                            </div>

                                            {{-- ✅ Image --}}
                                            <img src="{{ asset('storage/' . $place->image) }}"
                                                alt="{{ $place->place_name }}"
                                                class="d-block w-100 img-fluid"
                                                style="max-height: 195px; object-fit: cover;">
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            {{-- Controls (optional) --}}
                            <button class="carousel-control-prev" type="button" data-bs-target="#turismCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#turismCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>

                        </div>
                        <div class="mt-1">
                            <div class="sub-heading mb-1">
                                <h6 class="text-center px-1 text-white mb-0">जिम्मेवार पदाधिकारी/कर्मचारी</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="owl-carousel">

                                                        <div>
                                                <div class="sub-head">
                                                    <h6 class="text-white mb-0 ">माननीय मन्त्री</h6>
                                                </div>
                                                @foreach($ministers as $member)
                                                <div class="card mt-1">
                                                    <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" style="height: 110px; width: 100%;">
                                                    <div class="card-body text-center">
                                                        <h6 class="card-title">{{ $member->name }}</h6>
                                                        <h6 class="card-text"><i class="fa fa-phone"></i>
                                                            {{ $member->phone }} </h6>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                                        <div>
                                                <div class="sub-head">
                                                    <h6 class="text-white mb-0 ">कार्यालय प्रमुख</h6>
                                                </div>
                                                @foreach($heads as $member)
                                                <div class="card mt-1">
                                                    <img src="{{ asset('storage/' . $member->image) }}" class="card-img-top" alt="{{ $member->name }}" style="height: 110px; width: 100%;">
                                                    <div class="card-body text-center">
                                                        <h6 class="card-title">{{ $member->name }}</h6>
                                                        <h6 class="card-text"><i class="fa fa-phone"></i>
                                                            {{ $member->phone }} </h6>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                                        <div>
                                                <div class="sub-head">
                                                    <h6 class="text-white mb-0 ">प्रदेश सचिव</h6>
                                                </div>
                                                @foreach($secretaries as $member)
                                                <div class="card mt-1">
                                                    <img src="{{ asset('storage/' . $member->image) }}" class="card-img-top" alt="{{ $member->name }}" style="height: 110px; width: 100%;">
                                                    <div class="card-body text-center">
                                                        <h6 class="card-title">{{ $member->name }}</h6>
                                                        <h6 class="card-text"><i class="fa fa-phone"></i>
                                                            {{ $member->phone }} </h6>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                                </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="owl-carousel">
                                                        <div>
                                                <div class="sub-head">
                                                    <h6 class="text-white mb-0 ">प्रटकिय गाइड</h6>
                                                </div>
                                                @foreach($spokespersons as $member)
                                                <div class="card mt-1">
                                                    <img src="{{ asset('storage/' . $member->image) }}" class="card-img-top" alt="{{ $member->name }}" style="height: 110px; width: 100%;">
                                                    <div class="card-body text-center">
                                                        <h6 class="card-title">{{ $member->name }}</h6>
                                                        <h6 class="card-text"><i class="fa fa-phone"></i>
                                                            {{ $member->phone }} </h6>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                                        <div>
                                                <div class="sub-head">
                                                    <h6 class="text-white mb-0 ">प्रवक्ता</h6>
                                                </div>
                                                @foreach($spokespersons as $member)
                                                <div class="card mt-1">
                                                    <img src="{{ asset('storage/' . $member->image) }}" class="card-img-top" alt="{{ $member->name }}"  style="height: 110px; width: 100%;">
                                                    <div class="card-body text-center">
                                                        <h6 class="card-title">{{ $member->name }}</h6>
                                                        <h6 class="card-text"><i class="fa fa-phone"></i>
                                                            {{ $member->phone }} </h6>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                                        <div>
                                                <div class="sub-head">
                                                    <h6 class="text-white mb-0 ">सूचना अधिकारी</h6>
                                                </div>
                                                @foreach($infoofficers as $member)
                                                <div class="card mt-1">
                                                    <img src="{{ asset('storage/' . $member->image) }}" class="card-img-top" alt="{{ $member->name }}" style="height: 110px; width: 100%;">
                                                    <div class="card-body text-center">
                                                        <h6 class="card-title">{{ $member->name }}</h6>
                                                        <h6 class="card-text"><i class="fa fa-phone"></i>
                                                            {{ $member->phone }} </h6>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>




<script src="https://citizencharter.kathmandu.gov.np/assets/frontend/js/jquery.min.js"></script>
<script src="https://citizencharter.kathmandu.gov.np/assets/frontend/js/bootstrap.min.js"></script>
<script src="https://citizencharter.kathmandu.gov.np/assets/frontend/js/custom.min.js"></script>
<script src="https://citizencharter.kathmandu.gov.np/assets/frontend/js/simplyScroll.js"></script>
<script src="https://citizencharter.kathmandu.gov.np/assets/frontend/js/owl/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });
    });
</script>
    <script type="text/javascript">
        (function($) {
            $(function() {
                $("#scroll").simplyScroll({
                    customClass: 'vert',
                    orientation: 'vertical',
                    auto: true,
                    manualMode: 'loop',
                    frameRate: 20,
                    speed: 1
                });
            });
        })(jQuery);
    </script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        var videos = "BZ-dkG1iK3g,wdKAT0AS5Nc".split(',');

        var YouTubePlayer = {
            current: 0,
            player: null,
            videos: videos,
            currentlyPlaying: function() {
                console.log('Current Track id', YouTubePlayer.videos[YouTubePlayer.current]);
                return YouTubePlayer.videos[YouTubePlayer.current];
            },
            playNext: function() {
                YouTubePlayer.increaseTrack();
                if (YouTubePlayer.player) {
                    YouTubePlayer.currentlyPlaying();
                    YouTubePlayer.player.loadVideoById(YouTubePlayer.videos[YouTubePlayer.current]);
                    YouTubePlayer.player.mute(); // Start with muted sound
                    YouTubePlayer.player.playVideo();
                } else {
                    alert('Please Wait! Player is loading');
                }
            },
            playPrevious: function() {
                YouTubePlayer.decreaseTrack();
                if (YouTubePlayer.player) {
                    YouTubePlayer.currentlyPlaying();
                    YouTubePlayer.player.loadVideoById(YouTubePlayer.videos[YouTubePlayer.current]);
                    YouTubePlayer.player.mute(); // Start with muted sound
                    YouTubePlayer.player.playVideo();
                } else {
                    alert('Please Wait! Player is loading');
                }
            },
            increaseTrack: function() {
                YouTubePlayer.current = (YouTubePlayer.current + 1) % YouTubePlayer.videos.length;
            },
            decreaseTrack: function() {
                YouTubePlayer.current = (YouTubePlayer.current - 1 + YouTubePlayer.videos.length) % YouTubePlayer.videos.length;
            },
            onPlayerReady: function(event) {
                // Start with muted sound
                event.target.mute();
                event.target.playVideo();
            },
            onPlayerStateChange: function(event) {
                if (event.data == YT.PlayerState.PLAYING) {
                    // Unmute after video starts playing
                    YouTubePlayer.player.unMute();
                } else if (event.data == YT.PlayerState.ENDED) {
                    YouTubePlayer.playNext();
                }
            }
        };

        function onYouTubeIframeAPIReady() {
            YouTubePlayer.player = new YT.Player('youtube', {
                height: '350',
                width: '425',
                videoId: YouTubePlayer.videos[YouTubePlayer.current],
                events: {
                    'onReady': YouTubePlayer.onPlayerReady,
                    'onStateChange': YouTubePlayer.onPlayerStateChange
                },
                playerVars: {
                    autoplay: 1,
                    controls: 1,
                    mute: 1, // Start with muted sound
                    playsinline: 1 // Plays inline for mobile devices
                }
            });
        }
    </script>
    <script>
        function updateClock() {
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
            const ampm = hours >= 12 ? 'PM' : 'AM';

            // Convert to 12-hour format
            hours = hours % 12;
            hours = hours ? hours : 12; // The hour '0' should be '12' in 12-hour clock

            // Add leading zero if necessary
            hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            document.getElementById("clock").innerText = hours + ":" + minutes + ":" + seconds + " " + ampm;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial call to display the clock immediately
        updateClock();
    </script>

</body>

</html>
