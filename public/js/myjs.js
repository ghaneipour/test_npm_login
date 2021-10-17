
        function ali(){
           document.getElementsByTagName("h1")[1].innerHTML="ok" ;
            //alert("salam");
        }

        function ali2(){
            document.getElementById("pedram").innerHTML="ok pedram ghaneipour" ;
            //document.write("this is my text");
            //alert("salam");
            console.log("hello");
        }
        
        function text(tagname,index,mytext){
            document.getElementsByTagName(tagname)[index].innerHTML = mytext;
        }
        var client = new ClientJS(); // Create A New Client Object
    
        var OS = client.getOS(); // Get OS Version
        text("h2",0,"Your Os Is " + OS)
        
        if(OS == "Android"){ 
            change("h2",0,"yellow")
        }
        else if(OS=="Windows")
        { 
            change("h2",0,"red")
        }
    
        function change(tagname="h2",index=0,mycolor="red"){
            document.getElementsByTagName(tagname)[index].style.color=mycolor;
        }
