<?php
trait Model
{
  use Database;
  use ErrorHandler;
  public function insertIntoDb($Query)
  {
    try {
      $PDO = $this->DBconnect();
      $statement = $PDO->prepare($Query);
      $success = $statement->execute();
      return $success;
    } catch (PDOException $e) {
      echo  $this->displayError($e->getMessage());
      return false;
    }
  }
  public function getdataFromDb($Query, $params)
  {
    try {
      $PDO = $this->DBconnect();
      $statement = $PDO->prepare($Query);
      if (is_array($params)) {
        foreach ($params as $paramsName => $paramsValue) {
          $statement->bindValue(':' . $paramsName, $paramsValue, PDO::PARAM_STR);
        }
      }
      $statement->execute();
      $result = $statement->fetch(PDO::FETCH_ASSOC);
      if ($result) {
        unset($result['password']);
        return $result;
      } else {
        throw new Exception("User name or Password is wrong");
      }
    } catch (PDOException $e) {
      echo  $this->displayError($e->getMessage());
      return false;
    }catch(Exception $e){
      echo  $this->displayError($e->getMessage());
      return false;
    }
  }
  public function getCategoryFromDb($Query)
  {
    try {
      $PDO = $this->DBconnect();
      $statement = $PDO->prepare($Query);
      $statement->execute();
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      if ($result) {
        return $result;
      }
    } catch (PDOException $e) {
      echo  $this->displayError($e->getMessage());
      return false;
    }
  }

}
