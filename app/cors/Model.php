<?php
trait Model
{
    use Database;
    public function insertIntoDb($Query)
    {
        try {
            $PDO = $this->DBconnect();
            $statement = $PDO->prepare($Query);
            $statement->execute();
            return true;
        } catch (PDOException $e) {

            echo "<html>
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
        <p>'user name or email is already registerd'</p>
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
      return false;
        }
    }
}
