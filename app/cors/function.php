<?php 

trait ErrorHandler{
    public function displayError($Error){
        return "<html>
        <head>
          <style>
            .display {
              display: none;
            }
            .alert {
              display: flex;
              align-items: center;
              justify-content: center;
              background-color: red;
              font-size: 15px;
              color: white;
            }
          </style>
        </head>
        <body>
        
        <div id='error' class='alert'>
          <p>'$Error'</p>
        </div>
        
        <script>
          setTimeout(() => {
            var errorDiv = document.getElementById('error');
            errorDiv.classList.remove('alert');
            errorDiv.classList.add('display');
          }, 6000);
        </script>
        </body>
        </html>";
    }
}