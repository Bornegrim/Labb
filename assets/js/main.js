var script = document.createElement('script');
script.src = 'assets/js/jQuery 3.3.1.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

$('#submit').click(function(){
   if($.trim($('#post').val()) === ""){
      alert('Post can not be left blank');
   }
});
