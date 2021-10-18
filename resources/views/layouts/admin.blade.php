<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت</title>
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ url('/js/client.min.js') }}"></script>

</head>
<body>
    <div class="container-fluid">
    <div class="page_sidebar">
        <span class="fa fa-bars" id="sidebarToggle"></span>
        <br>
    <ul  class="list-inline" id="sidebar_menu">
        <li> 
            <a href="/admin"class="sidebar_menu_span">خانه  </a>
        </li>
        <li>
           <a> 
                <span class="fa fa-shopping-cart"></span>
                <span class="sidebar_menu_span">فروشگاه </span>
                <span class="fa fa-angle-left"></span>
            </a>         
            <div  class="submenu"  >           
                <a  href=#> افزودن محصول  </a>
                <a  href=#> مدیریت محصول  </a>
            </div>
                
        </li>    
        <li  >
            <a> 
                <span class="fa fa-users"></span>
                <span class="sidebar_menu_span">مشتری ها </span>
                <span class="fa fa-angle-left"></span>
            </a> 
                  
            <div  class="submenu"  >           
                <a  href=#> افزودن مشتری  </a>
                <a  href=#> مدیریت مشتری  </a>
            </div>
                
        </li>    
    </ul>
         </div>

        <div class="page_content">
        hello admin contex
        
    <h1 onmouseover="ali()">hi</h1>
    <h1 onclick="ali2()">hi friends</h1>
    <h1 id="pedram">hi pedram</h1>
    <h2 style="color: blue;" onclick="change()">Hi my name is qadir</h2>

        </div>

    </div>
    <!-- -->
    
    <script src="{{ url('/js/app.js') }}"> </script>
    <script src="{{ url('/js/other.js') }}">  </script> 
    <script src="{{ url('/js/myjs.js') }}"> </script>
<script>
    var myn =10;
    var myb =prompt("hello name:");
    alert(myb);
    var num = number(mynum);
    var sss=myn.toUpperCase().replace("'","");
var b = sss.slice(2, 4)
 

//document.getel
// const animals = ['ant', 'bison', 'camel', 'duck', 'elephant'];

// console.log(animals.slice(2));
// // expected output: Array ["camel", "duck", "elephant"]

// console.log(animals.slice(2, 4));
// // expected output: Array ["camel", "duck"]

// console.log(animals.slice(1, 5));
// // expected output: Array ["bison", "camel", "duck", "elephant"]

// console.log(animals.slice(-2));
// // expected output: Array ["duck", "elephant"]

// console.log(animals.slice(2, -1));
// // expected output: Array ["camel", "duck"]

</script>

</body>
</html>