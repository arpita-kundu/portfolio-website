// ==========================
// Normal Calculator
// ==========================

document.addEventListener("DOMContentLoaded", () => {

    const expression = document.getElementById("expression");
    const result = document.getElementById("result");
    const history = document.getElementById("history");

    let input = "";

    function updateDisplay() {
        expression.textContent = input || "0";
    }

    function calculate() {

        if (input === "") {
            result.textContent = "0";
            return;
        }

        try {

            const originalExpression = input;

            const exp = input
                .replace(/×/g, "*")
                .replace(/÷/g, "/")
                .replace(/−/g, "-");

            const answer = eval(exp);

            history.textContent = originalExpression + " = " + answer;

            result.textContent = answer;

            input = answer.toString();

            updateDisplay();

        } catch {

            result.textContent = "Error";

        }

    }

    document.querySelectorAll(".number").forEach(btn => {

        btn.addEventListener("click", () => {

            input += btn.textContent;
            updateDisplay();

        });

    });

    document.querySelectorAll(".operator").forEach(btn => {

        btn.addEventListener("click", () => {

            input += btn.textContent;
            updateDisplay();

        });

    });

    document.querySelector(".clear").addEventListener("click", () => {

        input = "";
        result.textContent = "0";
        history.textContent = "No History";
        updateDisplay();

    });

    document.querySelector(".backspace").addEventListener("click", () => {

        input = input.slice(0, -1);
        updateDisplay();

    });

    document.querySelector(".equal").addEventListener("click", calculate);

    document.querySelectorAll(".calc-btn").forEach(btn => {

        if (btn.textContent === ".") {

            btn.addEventListener("click", () => {

                input += ".";
                updateDisplay();

            });

        }

        if (btn.textContent === "±") {

            btn.addEventListener("click", () => {

                if (input === "") return;

                if (input.startsWith("-")) {
                    input = input.substring(1);
                } else {
                    input = "-" + input;
                }

                updateDisplay();

            });

        }

    });

    document.addEventListener("keydown", e => {

        if ("0123456789".includes(e.key)) {

            input += e.key;

        }

        else if ("+-*/.%".includes(e.key)) {

            input += e.key;

        }

        else if (e.key === "Enter") {

            calculate();
            return;

        }

        else if (e.key === "Backspace") {

            input = input.slice(0, -1);

        }

        else if (e.key === "Escape") {

            input = "";
            result.textContent = "0";
            history.textContent = "No History";

        }

        updateDisplay();

    });

    updateDisplay();



    // ==========================
    // Age Calculator
    // ==========================

    const calculateAgeBtn = document.getElementById("calculateAge");

    if (calculateAgeBtn) {

        const currentDateInput = document.getElementById("currentDate");

        currentDateInput.valueAsDate = new Date();

        calculateAgeBtn.addEventListener("click", () => {

            const dobValue = document.getElementById("dob").value;
            const currentValue = document.getElementById("currentDate").value;

            if (!dobValue || !currentValue) {

                alert("Please select both dates.");
                return;

            }

            const birth = new Date(dobValue);
            const today = new Date(currentValue);

            if (birth > today) {

                alert("Date of Birth cannot be after Current Date.");
                return;

            }

            let years = today.getFullYear() - birth.getFullYear();
            let months = today.getMonth() - birth.getMonth();
            let days = today.getDate() - birth.getDate();

            if (days < 0) {

                months--;

                const previousMonth = new Date(
                    today.getFullYear(),
                    today.getMonth(),
                    0
                );

                days += previousMonth.getDate();

            }

            if (months < 0) {

                years--;
                months += 12;

            }

            document.getElementById("years").textContent = years;
            document.getElementById("months").textContent = months;
            document.getElementById("days").textContent = days;

            const diff = today - birth;

            const totalDays = Math.floor(diff / (1000 * 60 * 60 * 24));
            const totalWeeks = Math.floor(totalDays / 7);
            const totalMonths = years * 12 + months;

            document.getElementById("totalMonths").textContent = totalMonths;
            document.getElementById("totalWeeks").textContent = totalWeeks;
            document.getElementById("totalDays").textContent = totalDays;

            const weekdays = [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ];

            document.getElementById("bornDay").textContent =
                weekdays[birth.getDay()];

        });

    }

});