<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AI Tools!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="https://bench.benji.link/assets/bulma-prefers-dark.css" />
    <script async src="https://arc.io/widget.min.js#3aX7EJCn"></script>
    <!-- import custom js -->
    <script src="./index.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Abbreviation Expander
      </h1>
      <p class="subtitle">
        Input a sentence with abbreviations and get the full sentence. 
      </p>

      <!-- back button -->
      <a href="/" class="button is-primary">Back</a>

    <!-- </div> -->

    <br>
    <br>

    <!-- text field -->
    <div class="field">
      <label class="label">Input</label>
      <div class="control">
        <input id="input" class="input" placeholder="Input sentence with abbreviations"></input>
      </div>
    </div>

    <!-- p for the response -->
    <p class="is-white is-2" id="response"></p>




    </div>

  </section>


  </body>

</html>