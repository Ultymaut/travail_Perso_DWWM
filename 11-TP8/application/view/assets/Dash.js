// KAOUTHAR
$.ajax({
    url: "../../controller/User/DashBoardController.php",
    success: function (response) {

        response=JSON.parse(response);
        // console.log(response['listeSoldeinfractions']);
        var soldeInfraction=[];
        var libelees=[];
        console.log(response);

        for(let i=0; i<response['listeSoldeinfractions'].length ; i++){
           soldeInfraction[i]=response['listeSoldeinfractions'][i]['solde'];
           libelees[i]=response['listeSoldeinfractions'][i]['libelee'];
        }

        console.log(soldeInfraction);

        console.log(libelees);
        const solde=response['soldeGlobale'];
          
        $('span#solde').append("<p> <h6> On vous doit </h6> <br>  "+solde+" €</p> ");
        
        let myChart;
         // Récupération des données
         var labels=[];
         var data =[];
         for(let i=0; i<response['listeSoldeinfractions'].length ; i++){
            labels.push(libelees[i]);
            data.push(soldeInfraction[i]);
         }
         

         // Création du graphique
         var ctx = document.getElementById('myChart').getContext('2d');
         if (myChart) {
             myChart.destroy();
         }
         myChart = new Chart(ctx, {
             type: 'doughnut',
             data: {
                 labels: labels,
                 datasets: [{
                     label:' €',
                     data: data,
                     backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(241, 142, 255)'
                      ],
                     borderWidth: 1
                 }]
             },
             options: {
                 responsive: true
             }
         });
        
        
		
    }
});

