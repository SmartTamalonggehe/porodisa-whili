// import axios
const axios = require("axios");

const token =
    "pk.eyJ1Ijoia2luZ3BybyIsImEiOiJjbDJud3dsanAxNzFtM2lxY3NvdGs2dG9kIn0.OEsUZyZpkiuprDceNJUNvw";

mapboxgl.accessToken = token;

const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: [0, 0],
    zoom: 8,
});

// get my coordinates
const getMyCoordinates = () => {
    let myCoor = "hallo";
    // get position
    return new Promise((resolve, reject) => {
        navigator.geolocation.getCurrentPosition((position) => {
            myCoor = [position.coords.longitude, position.coords.latitude];
            map.flyTo({
                center: myCoor,
                zoom: 10,
            });
            resolve(myCoor);
        });
    });
};

const getDataAnggota = async () => {
    // get data with axios
    const response = await axios.get("/api/anggota");
    // get data
    const data = response.data;
    return data;
};

getMyCoordinates();

export { map, getMyCoordinates, getDataAnggota };
