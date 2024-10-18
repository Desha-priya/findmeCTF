
        // Real secret code (this should ideally be hidden and secure)
        const realSecretCode = "rtyopiy1458"; // Replace with your secret code

        function validsecret() {
           const userEnteredCode = document.getElementById("secret").value;

            if (userEnteredCode === realSecretCode) {
                // If codes match, allow form submission
            
               alert("congratulation..!!! You escaped from Uni world~!");
            } 
            else {
                // Alert the user if the code doesn't match
                alert("Incorrect code! Please try again.");

                // Prevent form submission
            }
        }