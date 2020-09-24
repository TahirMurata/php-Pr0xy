function removeCookies() {
  document.cookie = 'PHPSESSID' +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    window.location.replace("/");
}
function gottagoFastBoi() {
  document.cookie = 'PHPSESSID' +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    window.location.replace("https://classroom.google.com/u/1/a/not-turned-in/all");
}
   document.onkeydown = function(){
   console.log(event.keyCode);
       if (event.keyCode == "16"){
            if (event.code=="ShiftLeft") console.log('left shift');
            if (event.code=="ShiftRight") gottagoFastBoi();
       }
   }
