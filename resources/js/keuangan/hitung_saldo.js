import * as getData from "./../getdata";

// selector id kredit
const kredit = document.getElementById("kredit");
// selector id debet
const debet = document.getElementById("debet");
// selector id saldo
const saldo = document.getElementById("saldo");
// selector id edit_keuangan
const editKeuangan = document.getElementById("edit_keuangan");

const hitungSaldo = async () => {
    console.log("hitungSaldo");
    // get data keuangan
    const dataKeuangan = await getData.getDataKeuangan();
    let saldoTerakhir = 0;
    if (dataKeuangan.length > 0) {
        saldoTerakhir = dataKeuangan[dataKeuangan.length - 1].saldo;
    }
    if (editKeuangan) {
        saldoTerakhir = 0;
        if (dataKeuangan.length > 1) {
            saldoTerakhir = dataKeuangan[dataKeuangan.length - 2].saldo;
        }
    }
    // remove comma
    if (saldoTerakhir) {
        saldoTerakhir = saldoTerakhir.replace(/,/g, "");
    }
    // addlistener keyup to kredit
    kredit.addEventListener("keyup", () => {
        if (debet) {
            debet.value = 0;
        }
        let sisa_saldo = 0;
        let kreditVal = kredit.value.replace(/\D/g, "");
        sisa_saldo = parseInt(saldoTerakhir) - parseInt(kreditVal);
        saldo.value = sisa_saldo;
        // display decimal
        saldo.value = saldo.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        if (saldo.value == "NaN") {
            saldo.value = 0;
        }
    });
    // addlistener keyup to debet
    debet.addEventListener("keyup", () => {
        if (kredit) {
            kredit.value = 0;
        }
        let sisa_saldo = 0;
        let debetVal = debet.value.replace(/\D/g, "");
        sisa_saldo = parseInt(saldoTerakhir) + parseInt(debetVal);
        saldo.value = sisa_saldo;
        // display decimal
        saldo.value = saldo.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        if (saldo.value == "NaN") {
            saldo.value = 0;
        }
    });
};

hitungSaldo();
