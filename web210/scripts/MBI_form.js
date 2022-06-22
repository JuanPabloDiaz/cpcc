function computeBMI() {
    //Obtain user inputs
    var height = Number(document.getElementById("height").value);
    var heightunits = document.getElementById("heightunits").value;
    var weight = Number(document.getElementById("weight").value);
    var weightunits = document.getElementById("weightunits").value;


    //Convert all units to metric
    if (heightunits == "inches") height /= 39.3700787;
    if (weightunits == "lb") weight /= 2.20462;

    //Perform calculation
    var BMI = weight / Math.pow(height, 2);

    //Display result of calculation
    document.getElementById("output").innerText = Math.round(BMI * 100) / 100;

    if (output < 18.5)
        document.getElementById("comment").value = "Underweight";
    if (output >= 18.5 && output <= 25)
        document.getElementById("comment").value = "Normal";
    if (output >= 25 && output <= 30)
        document.getElementById("comment").value = "Obese";
    if (output > 30)
        document.getElementById("comment").value = "Overweight";
    document.getElementById("answer").value = output;
}