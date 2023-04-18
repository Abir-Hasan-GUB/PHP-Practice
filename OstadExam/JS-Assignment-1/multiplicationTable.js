// function to create a multiplication table by input

function multiplicationTable(num) {
    if (typeof num === 'string' || num instanceof String) {
        console.log("Input can't be an string, try with integer number.");
        return 0;
    }

    for (let i = 1; i <= 10; i++) {
        let sum = num * i;
        console.log(`${num} X ${i} = ${sum}`);
    }
    return 0;
}

let testMultiplactionTable = 12; // test number of multiplication table

multiplicationTable(testMultiplactionTable); // call the multiplication table function to test multiplication table