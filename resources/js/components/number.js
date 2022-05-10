// selctor all .number
const numbers = document.querySelectorAll(".number");

const numberConvert = () => {
    // add eventlistener keyup to all .number
    numbers.forEach((number) => {
        number.addEventListener("keyup", () => {
            myEvent(number);
        });
    });
    const myEvent = (number) => {
        // just number
        const justNumber = number.value.replace(/\D/g, "");
        // if justNumber is empty then set value to empty
        if (justNumber === "") {
            number.value = 0;
        } else {
            // set value to justNumber
            number.value = justNumber;
            // remove 0 before decimal
            number.value = number.value.replace(/^0+/, "");
        }
        // display decimal
        number.value = number.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    };
    console.log("numberConvert");
};

if (numbers) {
    numberConvert();
}
