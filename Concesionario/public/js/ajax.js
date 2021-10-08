$.ajaxSetup({ headers: { 'csrftoken': '{{ csrf_token() }}' } });

$('#search').on('keyup', function () {

    $valor = $(this).val();

    $.ajax({
        type: 'get',
        url: '/buscardatos',
        dataType: 'json',
        data: { 'busca': $valor },

        success: function (datos) {

            salida = $("tbody").empty();

            if (datos.id === 'n')
                $('tbody').append('No hay datos');
            else {
                for (var i = 0; i < datos.length; i++) {
                    salida += '<tr>';
                    salida += '<td>' + datos[i].id + '</td>';
                    salida += '<td>' + datos[i].marca + '</td>';
                    salida += '<td>' + datos[i].modelo + '</td>';
                    salida += '<td>' + datos[i].matricula + '</td>';
                    salida += '<td>' + datos[i].precio + '</td>';
                    salida += '<td>' + datos[i].año + '</td>';
                    salida += '<td>' + datos[i].serie + '</td>';
                    salida += '</tr>';
                }

                $('tbody').append(salida);
            }
        }
    });
})