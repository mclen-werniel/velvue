import { storeKey } from 'vuex';
var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');
import {
    EmployeeService,
    GisService,
} from '../common/api.service';

const gisModule = {
    state: () => ({
        geoDepartments: {},
    }),
    mutations: {
        setGeoDepartments(state, geolocation) {
            state.geoDepartments = geolocation

            mapboxgl.accessToken = 'pk.eyJ1IjoibWNkbXN1bXBib3giLCJhIjoiY2tueTk0YzV6MHEyaTJvbjRueDA0cmp3bSJ9.MzKcec1dPzTTUR-9N-mmaw';

            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [-100.04, 38.907],
                zoom: 3
            });

            map.on('load', function () {
                // Add a source for the state polygons.
                map.addSource('states', {
                    'type': 'geojson',
                    'data': state.geoDepartments
                });

                // Add a layer showing the state polygons.
                map.addLayer({
                    'id': 'states-layer',
                    'type': 'fill',
                    'source': 'states',
                    'paint': {
                        'fill-color': 'rgba(200, 100, 240, 0.4)',
                        'fill-outline-color': 'rgba(200, 100, 240, 1)'
                    }
                });

                // When a click event occurs on a feature in the states layer, open a popup at the
                // location of the click, with description HTML from its properties.
                map.on('click', 'states-layer', function (e) {
                    console.log(JSON.parse(e.features[0].properties.employee).fullname)
                    new mapboxgl.Popup()
                        .setLngLat(e.lngLat)
                        .setHTML(`
                            <label>Employee assigned in the area: </label><br/>
                            <label>Name: ${JSON.parse(e.features[0].properties.employee).fullname}</label><br/>
                            <label>Department: ${JSON.parse(e.features[0].properties.employee).department}</label>
                        `)
                        .addTo(map);
                });

                // Change the cursor to a pointer when the mouse is over the states layer.
                map.on('mouseenter', 'states-layer', function () {
                    map.getCanvas().style.cursor = 'pointer';
                });

                // Change it back to a pointer when it leaves.
                map.on('mouseleave', 'states-layer', function () {
                    map.getCanvas().style.cursor = '';
                });
            });
            
        },
        resetModuleState() {
            for (let f in state) {
                this.set(state, f, initialState[f]);
            }
        }
    },
    actions: {
        async fetchGeoDepartments(context) {            
            const { data } = await GisService.get()
            context.commit('setGeoDepartments', data)
            return data;
        },
    },
    getters: {
        geoDepartments(state) {
            return state.geoDepartments
        }
    }
}

export default gisModule;