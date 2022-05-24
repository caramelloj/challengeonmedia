$(document).ready( function () {

    $.get( "https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=3&start=1&count=100", function( data ) {
        let versus = data.leaderboard;
       // console.log(data.leaderboard);
        paintVersus(versus);
        console.log(versus);
      });

  function paintVersus(data){
    for (let index = 0; index < data.length; index++) {
      const element = data[index];
      if (element.clan == "ARG") {
          var _cadena = "<tr><td>" + element.rank + "</td><td> "+ element.name + "</td>";
/*           var _imagen = getFlag(element.country);
          _cadena = _cadena + "<td class = 'centerFlag'>"+_imagen+"</td>"; */
          _cadena = _cadena + "<td> " +element.rating+"</td></tr>";
          $("#content").append(_cadena);
      }
    }
    $("#versus").DataTable({
      language: {
        url: 'https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
      },
    });
  }





} );