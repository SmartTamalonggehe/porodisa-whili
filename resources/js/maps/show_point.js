import { map, getMyCoordinates, getDataAnggota } from "./tools";
// 140.55494237865815
// -2.5264095348899644

// create the popup
const coorFromDb = async () => {
    // get data anggota
    const dataAnggota = await getDataAnggota();
    dataAnggota.forEach((anggota) => {
        new mapboxgl.Marker({ color: "blue" })
            .setLngLat([anggota.longitude, anggota.latitude])
            .setPopup(
                new mapboxgl.Popup({ offset: 25 }).setHTML(`
                <div class="popup">
                    <h5>${anggota.nama}</h5>
                    <p>${anggota.no_penduduk} <br> ${anggota.kelurahan.nm_kelurahan}</p>
                </div>
                `)
            )
            .addTo(map);
    });
};

//     const popup = new mapboxgl.Popup({ offset: 25 }).setText(
//         "Construction on the Washington Monument began in 1848."
//     );

//     const marker2 = new mapboxgl.Marker({ color: "blue" })
//         .setLngLat([140.55494237865815, -2.5264095348899644])
//         .addTo(map);

//     // create the marker
//     new mapboxgl.Marker(marker2)
//         .setLngLat([140.55494237865815, -2.5264095348899644])
//         .setPopup(popup) // sets a popup on this marker
//         .addTo(map);
// };

coorFromDb();
