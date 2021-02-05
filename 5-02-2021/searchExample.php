<html>
   <body>
      
      <script language = "javascript" type = "text/javascript">
            function bookSuggestion(txt){
                var book = txt;
                var xhr;
                if (window.XMLHttpRequest) { 
                    xhr = new XMLHttpRequest();
                } else if (window.ActiveXObject) { 
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xhr.open("GET", "book-suggestion.php?bookName="+txt, true); 
                xhr.send();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            document.getElementById("suggestion").innerHTML = xhr.responseText;
                        } else {
                            alert('There was a problem with the request.');
                        }
                    }
                }
            } 
      </script>
		
      
      <input type="text" placeholder="Enter book name.." onkeyup="bookSuggestion(this.value);"/>
      <div id = 'suggestion'>
            
      </div>
   </body>
</html>