<?php

class Usuario{
    private $idusuario;
    private $deslogin;
    private $desenha;
    private $dtcadastro;

    public function getIdusuario(){
        return $this->idusuario;
    }

    public function setIdusuario($value){
        $this->idusuario = $value;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }
    public function setDeslogin($value){
        $this->deslogin = $value;
    }

    public function getDesenha(){
        return $this->desenha;
    }
    public function setDesenha($value){
        $this->desenha = $value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }
    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }

    public function loadById($id){

        $sql = new SQL();

        $results = $Sql->select("SELECT * FROM tb_usuarios where idusuarios= :ID ", array(
            ":ID"=>$id
        ));

        //if(isset($results[0])

        if(count($results) > 0 {
            
            $this->setData($results[0]);  
                        
        }

    }

    public function static getList(){
        $sql = new Sql();

        return $Sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    public static function search($login){
        $Sql = new Sql();
        return $Sql->Select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=>"%" . $login . "%"
        ));
    }

    public function login($Login, $password){
        $sql = new SQL();
        $results = $Sql->select("SELECT * FROM tb_usuarios where deslogin= :LOGIN AND desenha = :PASSWORD ", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));
        //if(isset($results[0])
        if(count($results) > 0 {
                                   
            $this->setData($results[0]);

        }else {
            throw new Exception("Login /e ou senha inválidos", 1);
            
        }

    }

    public function setData($data){
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDesenha($data['desenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));

    }

    public function insert(){
        $Sql = new Sql();

        $results = $Sql->select("Call sp_usuarios_inser(:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDesenha()
        ));

        if(count($results)> 0 ){
            $this->setData($results[0]);
        }
    }

public function __toString(){
    return json_encode(array(
        "idusuario"=>$this->getIdusuario(),
        "deslogin"=$this->getDesenha(),
        "deseha"=$this->getDesenha(),
        "dtcadastro"=$this->getDtcadastro()->format("d/m/Y H:i:s")
    ));
}

}

?>