document.getElementById("show2").style.display = 'none';

document.getElementById("btn1").onclick = function () {
         document.getElementById("show").style.display = 'block';
     };
document.getElementById("btn2").onclick = function () {
        document.getElementById("show").style.display = 'none';
        document.getElementById("auto92").style.display = 'none';

    };
document.getElementById("btn3").onclick = function () {
        document.getElementById("show2").style.display = 'block';
        document.getElementById("show1").style.display = 'none';
        document.getElementById("auto92").style.display = 'block';



    };
document.getElementById("btn2-1").onclick = function () {
       document.getElementById("show2").style.display = 'none';
       document.getElementById("show1").style.display = 'block';


   };
   document.getElementById("btn_lisx_down").onclick = function () {
    document.getElementById("lisx").style.opacity = '1';
    document.getElementById("lisx").style.visibility = 'visible';
    document.getElementById("btn_lisx_down").style.display = 'none';
    document.getElementById("btn_lisx_up").style.display = 'block';


};
document.getElementById("btn_lisx_up").onclick = function () {
    document.getElementById("lisx").style.opacity = '0';
    document.getElementById("lisx").style.visibility = 'hidden';
    document.getElementById("btn_lisx_up").style.display = 'none';
    document.getElementById("btn_lisx_down").style.display = 'block';
    


};
document.getElementById("loc").style.display = 'none';
document.getElementById("btn_loc_start").style.display = 'none';
document.getElementById("btn_loc").onclick = function () {
    document.getElementById("btn_loc").style.display = 'none';
    document.getElementById("btn_loc_start").style.display = 'block';
    document.getElementById("main-loc").style.display = 'flex';
    document.getElementById("main-loc").style.alignItems = 'start';
    document.getElementById("main-loc").style.gap = '1rem';
    document.getElementById("loc").style.width = '30%';
document.getElementById("loc").style.display = 'block';
document.getElementById("loc").style.position = 'sticky';
document.getElementById("loc").style.top = '35px';
};
document.getElementById("btn_loc_start").onclick = function () {
    document.getElementById("btn_loc_start").style.display = 'none';
    document.getElementById("btn_loc").style.display = 'block';
    document.getElementById("loc").style.display = 'none';
};




/* scroll menu */


//]]>