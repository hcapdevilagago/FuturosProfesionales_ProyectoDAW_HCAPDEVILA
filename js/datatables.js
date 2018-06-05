$(document).ready(function () {
    $('#tabla').DataTable({
        responsive: true,
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados.",
            "sEmptyTable": "No se ha encontrado ningún dato en esta tabla.",
            "sInfo": "Mostrando un total de _TOTAL_ registros.",
            "sInfoEmpty": "0 registros encontrados.",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Filtrar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            paginate: {
                "first": " |< ",
                "previous": "Anterior",
                "next": "Siguiente",
                "last": " >| "
            },
            Aria: {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
});