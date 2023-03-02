
$.ajax({
   
    url: "../../controller/User/DashBoardController.php",
    success: function (response) {
        const solde=response;
        console.log(solde);
        $('span#solde').append("<p> <code>SOLDE</code> <br> "+solde+" € </p>");   
    }
});