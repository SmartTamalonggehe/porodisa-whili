import { map, getMyCoordinates } from "./tools";

const markers = async () => {
    const myCoordinates = await getMyCoordinates();
    const marker2 = new mapboxgl.Marker({ color: "red", draggable: true })
        .setLngLat(myCoordinates)
        .addTo(map);
    document.getElementById("longitude").value = myCoordinates[0];
    document.getElementById("latitude").value = myCoordinates[1];
    function onDragEnd() {
        const lngLat = marker2.getLngLat();
        // set value #longitude and #latitude
        document.getElementById("longitude").value = lngLat.lng;
        document.getElementById("latitude").value = lngLat.lat;
    }
    marker2.on("dragend", onDragEnd);
};

// get id #typeMaps
const typeMaps = document.getElementById("typeMaps");
if (typeMaps) {
    markers();
}
