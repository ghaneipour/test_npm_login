<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop of SoftLock</title>
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('/js/jquery-3.6.0.min.js') }}"></script> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css"> -->
    <script src="{{ url('/js/notify.min.js') }}"></script>

    <link rel="stylesheet" href="{{ url('/css/myCssStyle.css') }}">
</head>

<body onkeypress="saveKey(event)">

<div class="grid-container">

    <div class="grid-item item-header"><a href="/">Security is only in SoftLock<br>قفل هوشمند آروین</a></div>
    <div class="grid-item item-body" id="mybody">Body</div>
    <div class="grid-item item-footer">footer</div>

    <div class="grid-item item-topmenu">

        <div class="menu_top_left"><a href="./shop/">Store of Soft lock</a> </div>

        <div class="menu_top_div">
            <ul class="ULmainMenu">
                <li style="float:unset"><a href="/">Home.</a></li>
                <li style="float:unset"><a href="#news">News</a></li>
                <li style="float:unset;"><a href="#user">Users</a></li>
                <li style="float:unset"><a href="#user" onclick="hhh()">Users</a></li>
                <li style="float:unset"><a class="active" href="#about" onclick="kkk()">About</a></li>
            </ul>
        </div>

        <div class="menu_top_right"><a href="./shop/">فروشگاه سافت لاک</a></div>

    </div>

    <div class="grid-item item-rightmenu">
        <div class="menu-rights">
            <ul class="mainMenuright">
                <li><a class="rightMenuSub" href="/">Home</a>
                    <ul class="submenurightul">
                        <li class="submenuright">hhh</li>
                        <li class="submenuright">hhh</li>
                        <li class="submenuright">hhh</li>
                    </ul>
                </li>
                <li><a href="#news">News</a></li>
                <li><a href="#user">Users</a></li>
                <li><a href="#user">Users</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>

    </div>

    <div class="grid-item item-7">
        <img class="imgsx" src="../pic/gallery-4.jpg" width="100%">
    </div>

    <div class="grid-item item-8">
        <img class="imgS8" src="../pic/gallery-3.jpg" width="100%">
    </div>

    <div class="grid-item item-6">
        <!-- <embed src="../../../public/img/esp01.pdf" type="" width="100%" height="500px /"> -->
        min footer
    </div>
</div>

<div id="body_grid" style="display:none">
    SoftLock
    <div class='main-grid-body'>
        <div class='grid-body grid-body-1'>  

            <img src="{{ url('/pic/s1.png') }}" alt="Rotate" class="imgrot1">
        </div>
        <div class='grid-body grid-body-2'> 
         <img src="{{ url('/pic/s1.png') }}" alt="skew" class="imgrot2">

         </div>
        <div class='grid-body grid-body-3'> 3 </div>
        <div class='grid-body grid-body-4'> 4 </div>
        <div class='grid-body grid-body-5'> 5 </div>
        <div class='grid-body grid-body-6'> 6 </div>
        <div class='grid-body grid-body-7'>7

        </div>
        <div class='grid-body grid-body-8' style="font-size:10px">

            <table style="border-radius: 5px;border: 1px solid black;" width=100%>
                <caption>fffff</caption>
                <colgroup style="background-color: red;"></colgroup>
                <colgroup style="background-color: blue;"></colgroup>
                <colgroup style="background-color: yellow;"></colgroup>

                <tr>
                    <th>row</th>
                    <th>title</th>
                    <th>name</th>
                    <th>code</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
            </table>

        </div>
        <div class='grid-body grid-body-10'>
            <audio controls autoplay id='mp1' width='100%' height='100%'> 
                <source src='../audio/campfire-1.mp3' type='audio/mpeg' />
                not support on your browser 
            </audio>
        </div>
        <div class='grid-body grid-body-9' style='width:100%;height:120px'>
            <video controls autoplay id='mp2' width='100%' height='100%'> 
                <source src='../video/movie.mp4'       type='audio/mpeg' />
                not support on your browser 
            </video>
        </div>
    </div>
</div>
<script>
    document.getElementById("mybody").innerHTML = document.getElementById("body_grid").innerHTML;


    document.getElementById("mp1").load();
    document.getElementById("mp2").load();

    function kkk() {
        Swal.fire(
            'Enter is True! by pedram',
            'You clicked the button!',
            'success'
        )
    }

    function hhh() {

        Swal.fire({
            title: 'Error!',
            text: 'Do you want to continue',
            icon: 'error',
            confirmButtonText: 'Cool'
        })
    }
</script>




<form action="." method="post" dir="ltr" class="form1">
    <fieldset class="fieldset1">
        <legend align="center">Login Page</legend>
        <div class="formsdiv">
        <br><div class="pedram" id="pedram">pedram</div>

            <label for="userr">Name:</label><input id="userr" value="" placeholder="pedram" required autofocus><br><br>
            <label>Password:<input type="password" required ></label><br><br>
            <label for="rang">Rangee:</label>
            <script>
                function ddd(valuea) {
                    document.getElementById("userr").value = valuea;
                    // alert(valuea);
                }
            </script>
            <input id="rang" type="range" min="0" max="100" oninput="ddd(this.value)"><br><br>

            <input type="range" value="24" min="0" max="100" oninput="this.nextElementSibling.value = this.value"> <output>24</output><br><br>
            <label for="rem">Remmember:<input type="checkbox" id="rem"></label> <br><br>
            <label for="file">File:<input type="file" id="file"></label> <br><br>
            <label for="url">url:<input type="url" id="url"></label> <br><br>
            <label for="url">Citys:
            <select name="city" id="city" dir="rtl">
                <optgroup label="شمال"> 
                    <option value="01">رشت</option>
                    <option value="02">آمل</option>
                    <option value="03">بابل</option>
                </optgroup>
                <optgroup label="مرکز"> 
                    <option value="04">اصفهان</option>
                    <option value="05">یزد</option>
                </optgroup>
            </select>
        </label>
            <br><br>
            <label for="submit">Send data<input type="submit">
        </div>
        <br>
        </fieldset>
</form>

<script>
    document.write(window.navigator.languages);
    document.write(navigator.appVersion);
    $(document).ready(function() {
        $("#pedram").css("color", "gold");
    });
    document.getElementById("pedram").addEventListener("click",
    function() {
        // alert("ppp");
        
        document.getElementById("pedram").innerHTML = "<img src='http://supportco.ir/wp-content/uploads/2020/07/teltonika-FMB920-300x295.png'>"
    });
    
    function saveKey(events) {
        var x = event.which || event.keyCode;
        window.document.getElementById("pedram").innerHTML =
        "key:[ " + events.key + 
         " ]<br>code:[ " +events.code +
         " ]<br>keycode:[ " +events.keyCode + 
         " ]<br>charcode:[ " +event.charCode+
         " ]<br>meta:[ " +events.metaKey + 
         " ]<br>ctrl:[ " +event.ctrlKey+
         " ]<br>alt:[ " +event.altKey+
         " ]<br>shift:[ " +event.shiftKey+
         " ]<br>unicode:[ " +x+
         " ]<br>witch:[ " +event.which+" ]";
        console.log(events);
        console.log(window);
        console.log(navigator);
        console.log(navigator.languages);
        navigator.geolocation.getCurrentPosition(success, error, options);
        // alert(navigator.geolocation.getCurrentPosition.);
        // alert(navigator.geolocation.geolocation);
        console.log(navigator.onLine);
        
        }
        
        var options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };
        
        function success(pos) {
            var crd = pos.coords;

            console.log('Your current position is:');
            console.log(`Latitude : ${crd.latitude}`);
            console.log(`Longitude: ${crd.longitude}`);
            console.log(`More or less ${crd.accuracy} meters.`);
        }
        
        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        }
        
        
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
            xhttp.open("GET", "http://api.ipify.org/", true);
            xhttp.send();
            $.get("http://api.ipify.org", function(data) {
                $("#demo2").text("thisip is:" + data);
            });
            
            // https://notifyjs.jpillora.com/
            $("#demo3").notify("Hello Box");
            $.notify("I'm over here !");
            $.notify("Access granted", "success");
            $.notify("Do not press this button", "info");
            $.notify("Warning: Self-destruct in 3.. 2..", "warn");
            $.notify("BOOM!", "error");
            
            $("#demo").notify(
                "I'm to the right of this box", {
                    position: "right"
                }
                );
                
                Swal.fire({
            title: 'Error!',
            text: 'Do you want to continue',
            icon: 'error',
            confirmButtonText: 'Cool'
            })
            }
            </script>
           <hr> <button type="button" onclick="loadDoc()">Change Content my IP is:</button>
           <hr><div class="demo" id="demo" >demo</div>
           <br><div class="demo1" id="demo1">d1</div>
           <br><div class="demo2" id="demo2">d2</div>
           <br><div class="demo3" id="demo3">d3</div>
           <br><div class="demo4" id="demo4">d4</div>


 <form class="row g-3">
    <fieldset>
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </fieldset>
    </form>         
</body>

</html>