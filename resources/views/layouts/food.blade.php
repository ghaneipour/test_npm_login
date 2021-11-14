<!DOCTYPE html>
<html lang="en">
<!-- https://bennettfeely.com/clippy/ -->
<!-- https://fonts.google.com/ -->
<!-- https://www.w3schools.com/icons/fontawesome5_intro.asp -->
<!-- https://www.w3schools.com/icons/fontawesome_icons_intro.asp -->
<!-- https://www.w3schools.com/icons/fontawesome_icons_brand.asp -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="{{ url('/css/main.css')}}">
    <link rel="stylesheet" href="{{ url('/css/header.css')}}">
    <link rel="stylesheet" href="{{ url('/css/story.css')}}">
    <link rel="stylesheet" href="{{ url('/css/galery.css')}}">
    <link rel="stylesheet" href="{{ url('/css/reserve.css')}}">
    <link rel="stylesheet" href="{{ url('/css/service.css')}}">
    <link rel="stylesheet" href="{{ url('/css/Footer.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 
    <?php 
    $status=" "; 
    $item = \App\Models\tblmygallery::query()->get();
    // select('select max(id),min(id),count(id) from tblmygalleries group by id')->first(); 
    // select("SELECT * FROM tblmygalleries")->first();->where('id', '1')
    // query()->first();
    // ->firstOrFail();    
        //where('email', $request->email )->get(); 
        if($item==null)
        {
            $status.= "<a href=\>back</a> empty<br>";
              //dd(403); 
              //----- by pedram
        }
        else
        {         
            $cnter=0;
            $cnter=count($item);
            $status.= $item;
        }
        // .$item->count
        echo(
        "<style> 
        .ssimage{ 
            width: 100%;
            height: 250px;
            border-radius: 30px;
            content: url('../pic/service-1.png');}
            .age-1{
                content: url('../pic/service-2.png');
            }
            </style>");
    ?>

    <div class="container">
        <header class="header">
            <div class="testt">oooooooooooooooooooooooo</div>
            <h3 class="header1">Wellcome to</h3>
            <h1 class="header2"><span class="header-text">DELICIOUS </span>FOOD</h1>
            <button class="header-btn" onclick="window.open('/','_self');window.open('http://www.website.com/page','_blank');">Home</button>
        </header>
        <section class="story">
            <div class="gg">
                <div class="mystt">count:{{ $cnter }}</div>
                <div class="mystt">data:{{ $status }}</div>
                <h3 class="section-title">Our Story</h3>
                <section class="story-images">
                    <?php
                    for($i=0;$i<$cnter;$i++){
                        echo "<img class='ssimage age-".($i+1)."' src='' alt=''>";
                    }
                    ?>
                    <img class="image mimage-1" src="" alt="">
                    <img class="image mimage-2" src="" alt="">
                    <img class="image mimage-3" src="" alt="">
                    <img class="image mimage-4" src="" alt="">
                </section>
            </div>
        </section>
        <section class="service">

            <div class="gg">
                <h3 class="section-title">Our Service</h3>
                <section class="services-section">
                    <div class="service-box">
                        <img class="service-image image-1" src="" alt="">
                        <h4 class="service-text">Free</h4>
                        <h6 class="service-text text">Free deliver</h6>
                    </div>

                    <div class="service-box">
                        <img class="service-image image-2" src="" alt="">
                        <h4 class="service-text">Free</h4>
                        <h6 class="service-text text">Free deliver</h6>
                    </div>
                    <div class="service-box">

                        <img class="service-image image-3" src="" alt="">
                        <h4 class="service-text">Free</h4>
                        <h6 class="service-text text">Free deliver</h6>
                    </div>

                    <div class="service-box">
                        <img class="service-image image-4" src="" alt="">
                        <h4 class="service-text">Free</h4>
                        <h6 class="service-text text">Free deliver</h6>
                    </div>

                    <div class="service-box">
                        <img class="service-image image-5" src="" alt="">
                        <h4 class="service-text">Free</h4>
                        <h6 class="service-text text">Free deliver</h6>
                    </div>

                    <div class="service-box">
                        <img class="service-image image-6" src="" alt="">
                        <h4 class="service-text">Free</h4>
                        <h6 class="service-text text">Free deliver</h6>
                    </div>

                </section>

            </div>
        </section>
        <section class="reserve">

            <div class="gg">
                <h3 class="section-title">Ordering</h3>
            </div>
            <section class="reserve-section">
                <div class="right">
                    <h4 class="reserve-title">Order easily!</h4>
                    <h5 class="reserve-branch">Branch</h5>
                    <h6>France<span class="partners">(</span>paris<span class="partners">)</span></h6>
                    <h6>Canada<span class="partners">(</span>torento<span class="partners">)</span></h6>
                    <h6>Germany<span class="partners">(</span>berlin<span class="partners">)</span></h6>
                    <h6 class="order-text">you just can find any delicious here your food will reach you quickly</h6>

                </div>
                <div class="left">
                    <h3 class="left-title">Tel :</h3>
                    <h4>00989133274867</h4>
                    <h3 class="left-title">Email :</h3>
                    <h4>email.email.com</h4>
                    <div class="left-box">
                        <img src="" alt="" class="leftbox-img simg1">
                        <img src="" alt="" class="leftbox-img simg2">
                        <img src="" alt="" class="leftbox-img simg3">
                    </div>
                </div>
            </section>

        </section>
        <section class="Gallery">
            <div class="gg">
                <h3 class="section-title">Our Gallery</h3>
                <section class="gallery-section">
                    <div class="image-gallery gallery1"></div>
                    <div class="image-gallery gallery2"></div>
                    <div class="image-gallery gallery3"></div>
                    <div class="image-gallery gallery4"></div>
                    <div class="image-gallery gallery5"></div>
                </section>
            </div>
        </section>
        <section class="Footer">
            <div class="Footer-section">

                <ul>
                    <li class="-title">
                        <h3 class="footer-title">Service</h3>
                    </li>
                    <li>
                        <h5>Answer FAQ</h5>
                    </li>
                    <li>
                        <h5>Bugs Reports</h5>
                    </li>
                    <li>
                        <h5>Security</h5>
                    </li>
                </ul>
                <ul>
                    <li class="-title">
                        <h3 class="footer-title">Comminucation</h3>
                    </li>
                    <li>
                        <h5 class="telegram"><i class="fa fa-telegram" style="font-size:38px;color:rgb(0, 81, 255);"></i>Telegram</h5>
                    </li>
                    <li>
                        <h5 class="whatsapp"><i class="fa fa-whatsapp" style="font-size:38px;color:rgb(75, 202, 16);"></i>Whatsapp</h5>
                    </li>
                    <li>
                        <h5 class="youtube"><i class="fa fa-youtube" style="font-size:38px;color:rgb(189, 43, 72);"></i>Youtube</h5>
                    </li>
                </ul>
                <ul>
                    <li class="-title">
                        <h3 class="footer-title">Foods</h3>
                    </li>
                    <li>
                        <h5>Online Reserve</h5>
                    </li>
                    <li>
                        <h5>Resipe</h5>
                    </li>
                    <li>
                        <h5>Hiring a chef</h5>
                    </li>
                </ul>
            </div>
            <h4 class="copy">
                &copy;All information is reserved by <span class="copy-text">DELICIOS</span>Food
            </h4>
        </section>
    </div>
</body>

</html>