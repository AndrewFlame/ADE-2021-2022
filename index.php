    <html>  
    <head>  
        <title>ΑΝΑΚΟΙΝΏΣΕΙΣ ΚΑΘΗΓΗΤΩΝ</title>  
        <link rel = "stylesheet" type = "text/css" href = "style.css">   
    </head>  
    <body>  
        <div id = "frm">  
            <h1>Παρακαλώ συνδεθείτε:</h1>  
            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
                <p>  
                    <label> Όνομα Χρήστη: </label>  
                    <input type = "text" id ="user" name  = "user" />  
                </p>  
                <p>  
                    <label> Κωδικός πρόσβασης: </label>  
                    <input type = "password" id ="pass" name  = "pass" />  
                </p>  
                <p>     
                    <input type =  "submit" id = "btn" value = "Σύνδεση" />  
                </p>  
            </form>  
        </div>  
		   <body>  
		   
		   <link rel = "stylesheet" type = "text/css" href = "style.css">
        <div id = "anc">  
		
            <h1>ΑΝΑΚΟΙΝΩΣΕΙΣ ΚΑΘΗΓΗΤΩΝ</h1>  
            
        </div>  
  
        <script>  
                function validation()  
                {  
                    var id=document.f1.user.value;  
                    var ps=document.f1.pass.value;  
                    if(id.length=="" && ps.length=="") {  
                        alert("Το όνομα χρήστη και ο κωδικός πρόσβασης δεν μπορει να ειναι κενός");  
                        return false;  
                    }  
                    else  
                    {  
                        if(id.length=="") {  
                            alert("Το όνομα χρήστη είναι απαραίτητο για την είσοδο στην υπηρεσία");  
                            return false;  
                        }   
                        if (ps.length=="") {  
                        alert("Ο κωδικός πρόσβασης είναι απαραίτητος για την είσοδο στην υπηρεσία");  
                        return false;  
                        }  
                    }                             
                }  
            </script>  
    </body>     
    </html>  