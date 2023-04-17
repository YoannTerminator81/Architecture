function makeRequest() {     
  const email = document.getElementById("email").value;      
  fetch('http://10.5.40.35/romero/index.php?mail=$%7Bemail%7D')         
  .then(response => response.json())         
  .then(data => {             
    console.log(data);             
    if(data['exist'] == true) 
    alert("Email déjà utilisé");             
    else alert("Email ajouté");                     
   }) }