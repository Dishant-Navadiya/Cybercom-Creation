<html>
   <body>
      
      <script language = "javascript" type = "text/javascript">
 
           
            function ajaxFunction(){
               var ajaxRequest;  
               
            
                  if(window.XMLHttpRequest) {
                    ajaxRequest = new XMLHttpRequest();
                  }else {
                    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  
                  ajaxRequest.onreadystatechange = function(){
                  
                        if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                            var ajaxDisplay = document.getElementById('display');
                            ajaxDisplay.innerHTML = ajaxRequest.responseText;
                        }
                  }
                    ajaxRequest.open("GET", "data.php", true);
                    ajaxRequest.send(); 
            }
      </script>
		
      
      <button onClick="ajaxFunction()">Display</button>
      <div id = 'display'>
            
      </div>
   </body>
</html>