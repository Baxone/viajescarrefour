function initMap() {

    const latitud = 40.4380638;
    const longitud = -3.7495759;
    const miposition = { lat: latitud, lng: longitud };
    //poner el mapa centrado en nuestra posicion
    const map = new google.maps.Map(document.getElementById('map'),
        {
            zoom: 6,
            center: miposition
        }

    );

    //a partir de cargar el mapa, con la api de google maps tenemos que posicionar los markets de las diferente agencias.
    const url = 'http://localhost:8888/php_viajes_carrefour/wordpress/primerProyecto/wp-json/wp/v2/datos_agencia'
    $.getJSON(url, function (data) {
        //data es un array con todas mis agencias, dentro de data tengo el datoAgencias que son todos los campos que he generado para pintar la informacion. Tengo que recorrer mi array de datos para ur recogiendo cada dato de la agencia.

        for (let i = 0; i < data.length; i++) {
            //ya tengo los datos de cada agencia creo los markers.
            let positionAgencia = new google.maps.LatLng(data[i].datosAgencia.lat, data[i].datosAgencia.long);

            let marker = new google.maps.Marker({
                position: positionAgencia,
                map: map,
                title: data[i].title.rendered
            })

            //vamos crear las plantillas de informacion de cada market

            const infowindow = new google.maps.InfoWindow({
                content: `<div>
                    <h5>${data[i].title.rendered}</h5>
                    <ul>
                        <li>Direccion: ${data[i].datosAgencia.direccion}</li>
                        <li>Telefono: ${data[i].datosAgencia.telefono}</li>
                        <li>Email: ${data[i].datosAgencia.persona_contacto}</li>
                        <li><a href="${data[i].datosAgencia.url}" target="_blank">Ruta a la ficha</a></li>
                    </ul>
                </div>`
            })

            marker.addListener('click', function () {
                infowindow.open({
                    anchor: marker,
                    map,
                    shouldFocus: false
                })
            })


        }


    })




}

initMap();

