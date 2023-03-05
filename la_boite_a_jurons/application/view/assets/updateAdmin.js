// KAOUTHAR
var row;
var login;
var infraction;


function declare(btn) {
    // Trouver la ligne parente du bouton
     row = btn.closest('tr');
   
    // Trouver la valeur de la cellule td correspondante
    // username = row.querySelector('td').innerHTML.value;

    login=row.querySelector('#log').getAttribute('value');
    // let nomTab = username.split(", ")
    // let nom= nomTab[0];
    
    

    infraction = row.querySelector('select').value; 
  
    // call ajax;
    $(document).ready(function (){
        console.log(login);
          console.log(infraction);
        $.ajax({
            type: "post",
            url: "../../controller/Admin/AjoutInfractionControllerAdmin.php",
            data: 
            {
                log:login,
                infractionLibel :infraction
            },
            success: function (response) {
                console.log(response);
                if(response == 'success'){
                    alert("Solde Infraction incrémenter ");
                }else{
                    alert(response);
                }
                
            }
        });
       
});
} 

function decrement(btn) {
    // Trouver la ligne parente du bouton
     row = btn.closest('tr');
   
    // Trouver la valeur de la cellule td correspondante
    // username = row.querySelector('td').innerHTML.value;

    login=row.querySelector('#log').getAttribute('value');
    // let nomTab = username.split(", ")
    // let nom= nomTab[0];
    
    

    infraction = row.querySelector('select').value; 
  
    // call ajax;
    $(document).ready(function (){
        console.log(login);
          console.log(infraction);
        $.ajax({
            type: "post",
            url: "../../controller/Admin/decrementInfractionControllerAdmin.php",
            data: 
            {
                log:login,
                infractionLibel :infraction
            },
            success: function (response) {
                console.log(response);
                if(response == 'success'){
            

                    alert("Solde Infraction déncrémenter ");
                }else{
                    alert(response);
                }
                
            }
        });
       
});
} 
    



