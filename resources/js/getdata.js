// import axios
const axios = require("axios");
// get data keuangan with axios
const getDataKeuangan = async () => {
    const response = await axios.get("/api/keuangan");
    return response.data;
};

export { getDataKeuangan };
