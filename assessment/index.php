<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <style>
     input[type=range] {
        -webkit-appearance: none; /* Hides the slider so that custom slider can be made */
        width: 100%; /* Specific width is required for Firefox. */
        background: transparent; /* Otherwise white in Chrome */
      }

      input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
      }

      input[type=range]:focus {
        outline: none; /* Removes the blue border. You should probably do some kind of focus styling for accessibility reasons though. */
      }
      input[type=range]::-ms-track {
        width: 100%;
        cursor: pointer;

        /* Hides the slider so custom styles can be added */
        background: transparent; 
        border-color: transparent;
        color: transparent;
      }

       
      input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none; 
        height: 30px;
        width: 30px;  
        background-image: url(a.png);
        margin-top: -10px;
        cursor: pointer;
        background-repeat: no-repeat;
      }
      /* All the same stuff for Firefox */
      input[type=range]::-moz-range-thumb {
        height: 30px;
        width: 30px; 
        margin-top: -10px;
        background-image: url(a.png);
        cursor: pointer;
        background-repeat: no-repeat;
      }
      /* All the same stuff for IE */
      input[type=range]::-ms-thumb {
        height: 30px;
        width: 30px;  
        margin-top: -10px;
        background-image: url(a.png);
        cursor: pointer;
        background-repeat: no-repeat;
      }


      
      input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 8.4px;
        cursor: pointer; 
        background: aqua;
        border-radius: 8px;
      }

      input[type=range]:focus::-webkit-slider-runnable-track {
        background: yellow;
      }



      input[type=range]::-moz-range-track {
        width: 100%;
        height: 8.4px;
        cursor: pointer; 
        background: aqua;
        border-radius: 8px;
      }

      input[type=range]::-ms-track {
        width: 100%;
        height: 8.4px;
        cursor: pointer; 
        background: aqua;
        border-radius: 8px;
      } 
      
      cite {
        font-weight: bold;
        color: red;
      }
      img {
        border-radius: 10px;
        width: 100px;
        height: 100px;
      }
    </style>
    <title>Assesment</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-12 text-center my-2">
            <div class="row">
              <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                <div class="ct-panel">
                  <h3>Energy</h3>
                  <img src="profile.jpeg" alt="">
                  <div><b>INFP</b></div>
                  <input type="range" min="0" max="7" value="1">
                  <div class="d-flex justify-content-between">
                    <cite>Thinking</cite>
                    <cite>Feeling</cite>
                  </div>
                  <div>
                    <p class="text-left">INFP indicates a person who is energized by time alone (Introverted), who focuses on ideas and concepts rather than facts and details (iNtuitive), who makes decisions based on feelings and values (Feeling) and who prefers to be spontaneous and flexible rather than planned and organized (Perceiving). </p>
                  </div>                                    
                </div>
              </div>
              <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                <div class="ct-panel">
                  <h3>Energy</h3>
                  <img src="https://pbs.twimg.com/profile_images/1008506598531194880/ctHMzN6O_400x400.jpg" alt="">
                  <div><b>INTJ</b></div>
                  <input class="t" type="range" min="0" max="7" value="2">
                  <div class="d-flex justify-content-between">
                    <cite>Extraversion</cite>
                    <cite>Introversion</cite>
                  </div>
                  <div>
                    <p class="text-left">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                  </div>                                    
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                <div class="ct-panel">
                  <h3>Energy</h3>
                  <img src="https://pbs.twimg.com/profile_images/1008506598531194880/ctHMzN6O_400x400.jpg" alt="">
                  <div><b>ISTJ</b></div>
                  <input type="range" min="0" max="7" value="7">
                  <div class="d-flex justify-content-between">
                    <cite>Sensing</cite>
                    <cite>Intuition</cite>
                  </div>
                  <div>
                    <p class="text-left"> Time spent alone (Introverted), who focuses on facts and details rather than ideas and concepts (Sensing), who makes decisions based on logic and reason (Thinking) and who prefers to be planned and organized rather than spontaneous and flexible (Judging).</p>
                  </div>                                    
                </div>
              </div>
              <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                <div class="ct-panel">
                  <h3>Energy</h3>
                  <img src="profile.jpeg" alt="">
                  <div><b>INTJ</b></div>
                  <input class="t" type="range" min="0" max="7" value="2">
                  <div class="d-flex justify-content-between">
                    <cite>Judgment</cite>
                    <cite>Perception</cite>
                  </div>
                  <div>
                    <p class="text-left"> Galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                  </div>                                    
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="./includes/js/main.js"></script>
  </body>
</html>