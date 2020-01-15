
    <div id="current_user">
        </div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>
<script>
      function setText(){
        xhrc = new XMLHttpRequest();
        xhrc.open('POST' , 'teet.php', true);
        xhrc.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhrc.send();
        xhrc.onreadystatechange = function(){
        //  alert(xhr.responseText);
          document.getElementById('current_user').innerHTML = xhrc.responseText;
          //var objDiv = document.getElementById("here"); 
        }
      }
      setInterval("setText()",3000);
</script>