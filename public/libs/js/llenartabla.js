function seleccionarModalidad () {
  let selectmodalidad = document.getElementById('selectmodalidad');
  let modalidad = selectmodalidad.value;
    

  if ( modalidad == 1){
    console.log('aca')
    /* $('#versus').empty(); */
    var table = $('#versus').DataTable();
    table.destroy();
      
      /* $("#versus").DataTable({
        "destroy": true,
        "order": [[1, 'desc']],
        "ajax": "{{route('datatable.tg')}}",
        "columns": [
            {data: 'name'},
            {data: 'rank'},
            {data: 'clan'},
            {data: 'rating'},
        ],

    }); */

    }
       
}

