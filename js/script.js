/* Author: 

*/

$(function(){
    
    // Hide URL Bar on iPhone and iPod Touch
    if(navigator.userAgent.indexOf('iPhone') != -1) {
        setTimeout(function () {
            if (!pageYOffset) {window.scrollTo(0, 1);}
        }, 1000);
    }
});






















