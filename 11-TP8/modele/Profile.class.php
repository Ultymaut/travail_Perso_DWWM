<?php 

/**
 * 
 * Clss Profile
 * #LAM KAOUTHAR
 */

class Profile 
{
  private int $id_profile;
  private string $login;
  private string $mDp;
  private bool $privilege;

  /**
   * 
   * Construct Profile 
   */

  public function ___construct(string $login, string $mDp)
  {
    $this->login = $login;
    $this->mDp = $mDp;

  }
  

  /**
   * Get the value of id_profile
   */ 
  public function getId_profile()
  {
    return $this->id_profile;
  }

  /**
   * Set the value of id_profile
   *
   * @return  self
   */ 
  public function setId_profile($id_profile)
  {
    $this->id_profile = $id_profile;

    return $this;
  }

  /**
   * Get the value of login
   */ 
  public function getLogin()
  {
    return $this->login;
  }

  /**
   * Set the value of login
   *
   * @return  self
   */ 
  public function setLogin($login)
  {
    $this->login = $login;

    return $this;
  }

  /**
   * Get the value of mDp
   */ 
  public function getMDp()
  {
    return $this->mDp;
  }

  /**
   * Set the value of mDp
   *
   * @return  self
   */ 
  public function setMDp($mDp)
  {
    $this->mDp = $mDp;

    return $this;
  }

  /**
   * Get the value of privilege
   */ 
  public function getPrivilege()
  {
    return $this->privilege;
  }

  /**
   * Set the value of privilege
   *
   * @return  self
   */ 
  public function setPrivilege($privilege)
  {
    $this->privilege = $privilege;

    return $this;
  }
}