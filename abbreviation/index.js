document.addEventListener("keydown", function(event) {
  if (event.key === "Enter") {
    // get the value of the input field
    var input = document.getElementById("input").value;
    console.log(input);

    // disable the input field until the api request is done
    document.getElementById("input").disabled = true;


    // send api request to api.php with the input value
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // get the response from api.php
        var response = this.responseText;
        console.log(response);

        // set the response as the value of the paragraph
        document.getElementById("response").innerHTML = response;
      }
    };
    xhttp.open("GET", "api.php?input=" + input, true);
    xhttp.send();

    // enable the input field again
    document.getElementById("input").disabled = false;

  }
});
