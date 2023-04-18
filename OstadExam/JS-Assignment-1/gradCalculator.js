function gradeCalculator(number) {

    // Check input is a number or a string

    if (typeof number === 'string' || number instanceof String) {
        return "Input can't be an string, try with integer number between 0-100.";
    }

    // If input is a number then perform the calculation::

    if (number >= 0 && number <= 59) {
        return "F";
    } else if (number >= 60 && number <= 69) {
        return "D";
    } else if (number >= 70 && number <= 79) {
        return "C";
    }
    else if (number >= 80 && number <= 89) {
        return "B";
    }
    else if (number >= 90 && number <= 100) {
        return "A";
    }
    else {
        return "Invalid input range / value, try again.";
    }
}

// Test input set
let testNumber = 85;

// Calling the funtction to test the gradeCalculator
let result = gradeCalculator(testNumber);

console.log(result); //Output the result