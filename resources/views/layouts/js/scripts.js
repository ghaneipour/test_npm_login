//https://good.js.org/
var usercount = 4517;
var cources = 13;
var mins = 485554;
var classname = "hgjhghjghjgjhhghj";

document.write("<br>capcha: " + String(99999 + (Math.floor(Math.random() * 1000000))).substring(1, 6));
document.write("<br>capcha: " + String(99999 + (Math.floor(Math.random() * 1000000))).substring(1, 6));
document.write("<br>capcha: " + String(99999 + (Math.floor(Math.random() * 1000000))).substring(1, 6));
document.write("<br>capcha: " + String(99999 + (Math.floor(Math.random() * 1000000))).substring(1, 6));
document.write("<br>capcha: " + String(99999 + (Math.floor(Math.random() * 1000000))).substring(1, 6));
document.write("<br>capcha: " + String(99999 + (Math.floor(Math.random() * 1000000))).substring(1, 6));
document.write("<br>capcha: " + String(99999 + (Math.floor(Math.random() * 1000000))).substring(1, 6));
document.write("<br>capcha: " + String(99999 + (Math.floor(Math.random() * 1000000))).substring(1, 6));

document.write("<br>");

document.write("<br>random(45.625): " + Math.random(45.6252));

const arrayNum = new Array(40, 100, 1, 5, 25, 10);
document.write("<br>min(arr): " + Math.min(40, 100, 1, 5, 25, 10));
document.write("<br>min(arr): " + arrayNum);

arrayNum.push("ali", "sss", "fff")
document.write("<br>push(arr): " + arrayNum);

arrayNum.pop()
document.write("<br>pop(): " + arrayNum);

arrayNum.shift()
document.write("<br>shift(): " + arrayNum);

arrayNum.unshift(22, 80, 20, 23, 24, 25, 26)
document.write("<br>unshift(): " + arrayNum);

document.write("<br>is include 20: " + arrayNum.includes(20));

var usersx = [{
    id: 1,
    name: "ali",
    age: 45
}, {
    id: 2,
    name: "gholi",
    age: 65
}, {
    id: 3,
    name: "reza",
    age: 49
}]

usersx.some(function(usr) {
        document.write("<br>usname: " + usr.name + " usnage: " + usr.age)
    })
    // _______________________

const arrayNumb = new Array(40, 100, 1, 5, 25, 10, 10);
document.write("<BR>arr=" + arrayNumb);
arrayNumb.splice(2, 3, 88, 188, 288, 388, 488, 588)
document.write("<BR>arrsplice=" + arrayNumb);
var returnervar = arrayNumb.map(function(u) {
    return u * 2;
})
document.write("<br>map*2: " + returnervar)
var returnervar2 = arrayNumb.filter(function(u) {
    return u < 50;
})
document.write("<br>filter<50: " + returnervar2)
document.write("<br>is array: " + Array.isArray(arrayNumb))
document.write("<br>indexOf(10): " + arrayNumb.indexOf(10))
document.write("<br>lastindexOf(10): " + arrayNumb.lastIndexOf(10))
document.write("<br>slice(2,5): " + arrayNumb.slice(2, 5))
document.write("<br>slice(2): " + arrayNumb.slice(2))
document.write("<br>join(/): " + arrayNumb.join('/'))
document.write("<br>revercs: " + arrayNumb.reverse())

var oooo = "ppp/uuu/ttt/jjj/fff";
document.write("<br>split: " + oooo.split('/'))

var ppp = "pedram";
document.write("<br>split: " + ppp.split(''));
document.write("<br>split/rev/join: " + ppp.split('').reverse().join(''));


//_____________________
document.write("<br>  <br>  <br>  ");

var userData = [
    { id: 1, username: "amin", password: '010101', email: 'sa@WebGLProgram.com' },
    { id: 2, username: "ali", password: 'ali0921', email: 'sa@WebGLProgram.com' },
    { id: 3, username: "aamir", password: 'amir56', email: 'sa@WebGLProgram.com' },
    { id: 4, username: "babak", password: 'babak2000', email: 'sa@WebGLProgram.com' },
    { id: 5, username: "hasan", password: 'hasan_r', email: 'sa@WebGLProgram.com' },
    { id: 6, username: "reza", password: 'reza.xyz', email: 'sa@WebGLProgram.com' },
]

var username = prompt('Enter Your UserName: ');
var mainUserData = userData.find(function(user) {
    return user.username == username;
})
if (mainUserData == undefined) {
    document.write("User Not found..")
} else {
    document.write("<br>find username: [" +
        mainUserData.id + "," +
        mainUserData.username + "," +
        mainUserData.password + "," +
        mainUserData.email + "]"
    );
}
//_____________________
document.write("<br>  <br>  <br>  ");

document.write("<br>eval= " + eval("2+3"));

(function() {
    document.write("<hr>IIFE:wellcom<hr>");
})()
//_____________________
document.write("<br>  <br>  <br>  ");
var iintervali = 10;
var timer = setInterval(function() {
    document.getElementById("test").innerHTML = "<h1>" + iintervali-- + "</h1>";
    if (iintervali == 0) {
        clearInterval(timer);
        document.getElementById("test").innerHTML = "<h1>  Game Over!!! </h1>";
        document.getElementById("mp").autoplay = true;
        document.getElementById("mp").load();
        document.getElementById("mp2").load();
    }
}, 1000);

// __________________________
setTimeout(() => {
    document.getElementById("test").innerHTML = "<h1> wellcome </h1>";

}, 2000);
//_____________________
document.write("<br>  <br>  <br>  ");

document.write("<br>floor(45.625): " + Math.floor(45.625));
document.write("<br>trunc(45.625): " + Math.trunc(45.625));
document.write("<br>round(45.625): " + Math.round(45.6252));
document.write("<br>ceil(45.625): " + Math.ceil(45.6252));

var ym = prompt("you rname?");

if (Boolean(ym)) { //scope of if
    document.write("<br>" + typeof(mins) + "<br>" + ym);
} else { //Scope of else
    document.write("<br>empty string");
}

var result = confirm("question");

document.write("<br>" + result);

var ym2 = Number(prompt("you Age?"));
var ym3 = Number(prompt("you money?"));

var chnum = Number(ym2);
var chnum2 = +"77777";

document.write("<br>" + chnum + "  " + chnum2);
var strnum = String(1234);
var boolianch = Boolean(0); //1/0
//All number is true 
// but 0 is false
var tavan_num = ym2 ** ym3;
var modiff = ym2 % ym3;

// NaN => Not a number
isNaN(modiff)
    // num % 2 ==1 => Fard
    //num  % 2 ==0 => zoge

document.write("<br>" + (ym2 > 18) ? "you are less" : "ok you are good");

switch (true) {
    case (ym2 >= 22 && ym2 <= 44):
        document.write("<br>switch=a");
        break;
    case (ym2 >= 12 && ym2 <= 14):
        document.write("<br>switch=b");
        break;
    default:
        document.write("<br>switch=c")
}
ym = "ym = hello";
document.write("<br>ym: " + ym); //ym 
ym = ym.concat(" text2");
document.write("<br>concat: " + ym); //ym+" text2"
document.write("<br>charAt(1): " + ym.charAt(1)); //index 1 = e
document.write("<br>charCodeAt(3): " + ym.charCodeAt(3)); //index 2 =ASCII= 108
document.write("<br>trim: " + ym.trim());
document.write("<br>toLowerCase: " + ym.toLowerCase());
document.write("<br>toUpperCase: " + ym.toUpperCase());
document.write("<br>search(llo): " + ym.search("llo")); //return number of index ll in string(-1 for not found)
document.write("<br>indexOf(llo,3): " + ym.indexOf("llo", 3)); //return from offset : number of index ll in string(-1 for not found)
document.write("<br>includes(llo): " + ym.includes("llo")); //return true/false
document.write("<br>slice(1, 7): " + ym.slice(1, 7)); //m = h
document.write("<br>slice(1): " + ym.slice(1)); //m = hello text2
document.write("<br>substr(0,5): " + ym.substr(0, 5)); //ym = h  (len)
document.write("<br>substring(0,5): " + ym.substring(0, 5)); //ym = h (end offcet)
document.write("<br>PI: " + Math.PI);
document.write("<br>power(25^2): " + Math.pow(25, 4)); //25^4
document.write("<br>sqrt(16): " + Math.sqrt(16)); //jazr=> 4 ,16=(4*4)
document.write("<br>mabs(-80): " + Math.abs(-80)); // |-80|= ghadre motlagh =absolute => 80
document.write("<br>cos(45): " + Math.cos(45));





switch (ym2) {
    case 12:
        document.write("<hr>12");
        break;
    case 18:
        document.write("<hr>18");
        break;

    case 19:
    case 15:
        document.write("<hr>19 or 15");
        break;
    default:

        document.write("<hr>else : " + ym2);
        break;
}

if (ym2 == undefined) {
    document.write("<br>it is null");
}

if (ym2.length > 5) {
    document.write("<br>size" + ym2[2]) //mid(2,1)
}