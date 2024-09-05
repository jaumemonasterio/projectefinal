<?php


class UserContr extends User
{

    use Validacions;
    private $username;

    private $email;
    private $nom;
    private $cognom;
    private $telefon;
    private $sexe;
    private $data_naixement;
    private $password;
    private $password2;
    private $token;
    private $id;


    public function setId($id){
        $this->id = $id;
    }

    public function getUserid(){

        return $this->getusid($this->id);


    }

    public function getdadesid($id){

        $this->id=$id;

        return $this->getdades($this->id);

    } 

    public function getusers($rol){

        

        return $this->getned($rol);

    }


    public function setrol($user, $rol){
        $this->setrolus($rol, $user);
    }

    
    
    private function generatetoken(){
        $this->token = bin2hex(random_bytes(32));
    }
    
public function reppas() {


    if($this->esvuit($this->email)){
        header("Location: ../vista/forgotpass.php?error=emptyEmail");
        exit();
    }
   
    if($this->checkUserByEmail($this->email) == false){
        header("Location: ../view/forgotpass.php?error=emailnotFound");
        exit();
    }

     $this->generateToken();
    if($this->setTokenUser($this->token, $this->email)){
        header("Location: ../view/forgotpass.php?error=failedStmt");
        exit(); 
    }

    $this->enviaremailpas();



}


public function getuser(){
    return $this->getusnorol();

}

    public function __construct($username = "", $nom = "", $cognom = "", $telefon = "", $sexe = "", $data_naixement = "", $email = "", $password = "",  $password2 = "")
    {

        $this->username = $this->validate_input($username);
        $this->nom = $this->validate_input($nom);
        $this->cognom = $this->validate_input($cognom);
        $this->telefon = $this->validate_input($telefon);
        $this->sexe = $this->validate_input($sexe);
        $this->data_naixement = $this->validate_input($data_naixement);
        $this->email = $this->validate_input($email);
        $this->password = $this->validate_input($password);
        $this->password2 = $this->validate_input($password2);
        $this->token = bin2hex(openssl_random_pseudo_bytes(16));

    }



    /////
    /////
    /////  seter and getters
    /////
    /////

    public function login() {

        if($this->esvuit($this->username) || $this->esvuit($this->password) ){
            header("location: ../vista/login.php?error=emptyinput");
            exit();
        }

        $res=$this->ver($this->username, $this->password);

        if(!$res){
            
            header("location: ../../index.php");

            
        } else {

            header("location: ../vista/login.php?error=usernovalid");
        }

    }
    public function set_username($username)
    {
        $this->username = $username;
    }
    public function get_username()
    {
        return $this->username;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }
    public function getToken()
    {
        return $this->token;
    }
    public function set_nom($nom)
    {
        $this->nom = $nom;
    }
    public function get_nom()
    {
        return $this->nom;
    }
    public function set_cognom($cognom)
    {
        $this->cognom = $cognom;
    }
    public function get_cognom()
    {
        return $this->cognom;
    }
    public function set_telefon($telefon)
    {
        $this->telefon = $telefon;
    }
    public function get_telefon()
    {
        return $this->telefon;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function set_password($password)
    {
        $this->password = $password;
    }
    public function get_password2()
    {
        return $this->password;
    }

    public function set_password2($password)
    {
        $this->password2 = $password;
    }
    public function get_password()
    {
        return $this->password;
    }


    /////////
    // REGISTRE
    /////////



    public function udapte($id)
    {
        if ($this->emptyInputu() == false) {
            header("location: ../vista/dades.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUsername() == false) {
            header("location: ../vista/dades.php?error=invalidusername");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("location: ../vista/dades.php?error=invalidemail");
            exit();
        }
       

        // $us = $this->usernamexists($this->username);

        // if ($us == 2 || $us == 1) {
        //     header("location: ../vista/registre.php?error=usernameexists");
        //     exit();
        // }
      //  if ($us == 0) {

            $this->upuser(
                $this->username,
                $this->email,
                $this->nom,
                $this->cognom,
                $this->telefon,
                $this->sexe,
                $this->data_naixement,
                $id
            );


           // $this->enviaremailact();

            header("location: ../../index.php");


        //}

    }
    public function registerUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../vista/registre.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUsername() == false) {
            header("location: ../vista/registre.php?error=invalidusername");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("location: ../vista/registre.php?error=invalidemail");
            exit();
        }
        

        $us = $this->usernamexists($this->username);

        if ($us == 2 || $us == 1) {
            header("location: ../vista/registre.php?error=usernameexists");
            exit();
        }
        if ($us == 0) {

            $this->newuser(
                $this->username,
                $this->email,
                $this->nom,
                $this->cognom,
                $this->telefon,
                $this->sexe,
                $this->data_naixement,
                $this->password,
                $this->token
            );


            $this->enviaremailact();

            header("location: ../vista/userres.php");


        }

    }

    public function newPassword(){
        if($this->esvuit($this->password)  || $this->esvuit($this->password2) ){
            header("Location: ../view/newpass.php?error=emptyInput&token=$this->token");
            exit();
        }
        if($this->passwordsnoiguals() == false){
            header("Location: ../view/newpass.php?error=PasswordNotMatch&token=$this->token");
            exit();
        }
        if($this->toexits($this->token) == false){
            header("Location: ../view/newpass.php?error=tokenNotExisted");
            exit();
        }
        if($this-> tokenexpire($this->token)>30){
            header("Location: ../view/newpass.php?error=tokenExpired");
            exit();
        }        
        if($this->setNewPassword($this->token, $this->password)){
            header("Location: ../view/newpass.php?error=failedStmt&token=$this->token");
            exit();
        }

    }
    private function enviaremailact()
    {


        require '../../llibreries/PHPMailer/src/Exception.php';
        require '../../llibreries/PHPMailer/src/PHPMailer.php';
        require '../../llibreries/PHPMailer/src/SMTP.php';

        //Create a new PHPMailer instance
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        //Set the SMTP port number:
        $mail->Port = 465;

        //Set the encryption mechanism to use:
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'jaumefoap@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'jhyq zkxp peee ddtm';


        //Username to use for SMTP authentication - use full email address for gmail
        // $mail->Username = 'foap408@gmail.com';

        // //Password to use for SMTP authentication
        // $mail->Password = 'dyrv alyq ojiq acyd';

        //Set who the message is to be sent to
        $mail->addAddress($this->email);

        //Set the subject line
        $mail->Subject = 'activacio de compte ';

        //Replace the plain text body with one created manually
        $mail->msgHTML("<a href='".config::SERVER."projectefinal/php/includes/activaconta.php?token=$this->token'>activa la teva conpte </a>");


        //send the message, check for errors
        if (!$mail->send()) {
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            //header("Location: ../view/signup.html?error=Mailer Error");
            exit();
        } else {
            //header("Location: ../view/activacio.php?msg=Message sent!");
            //exit();

        }
    }


    private function enviaremailpas()
    {

        require '../../llibreries/PHPMailer/src/Exception.php';
        require '../../llibreries/PHPMailer/src/PHPMailer.php';
        require '../../llibreries/PHPMailer/src/SMTP.php';

        //Create a new PHPMailer instance
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        //Set the SMTP port number:
        $mail->Port = 465;

        //Set the encryption mechanism to use:
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'jaumefoap@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'jhyq zkxp peee ddtm';

        //Set who the message is to be sent to
        $mail->addAddress($this->email);

        //Set the subject line
        $mail->Subject = 'Reset password';

        //Replace the plain text body with one created manually
        $mail->msgHTML("<a href='".config::SERVER."projectefinal/php/vista/newpas.php?token=$this->token'> resetajar el password </a>");


        //send the message, check for errors
        if (!$mail->send()) {
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            //header("Location: ../view/signup.html?error=Mailer Error");
            exit();
        } else {
            //header("Location: ../view/activacio.php?msg=Message sent!");
            //exit();

        }
    }
    public function actconta() {

        if ($this->toexits($this->token)== false){

            header("location: ../../index.php?error=tokennoexits");
            exit();
        }

        if ($this->tokenexpire($this->token)<10){
            header("location: ../../index.php?error=tokenexpired");

        }

        if ($this-> setstatus($this->token)){
            header("location: ../../index.php?error=stmterror");


        }
        else{
            header("location: ../../index.php");
        
            }
        
    }
    private function passwordsnoiguals()
    {
        

        $result = true;

        if ($this->password != $this->password2) {
            $result = false;
        }
        return $result;

    }


    private function emptyInput()
    {
        $result = true;
        if (
            empty($this->username) || empty($this->nom) || empty($this->cognom) || empty($this->telefon)
            || empty($this->sexe) || empty($this->data_naixement) ||
            empty($this->password) || empty($this->password2)
        ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function emptyInputu()
    {
        $result = true;
        if (
            empty($this->username) || empty($this->nom) || empty($this->cognom) || empty($this->telefon)
            || empty($this->sexe) || empty($this->data_naixement)
        ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername()
    {
        $result = true;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }
        return $result;

    }
    private function invalidEmail()
    {
        $result = true;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        return $result;
    }



    private function invalidPassword()
    {
        $result = true;

        if (
            !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d
                )(?=.*[@$!%*?&])[A-Za-z\d@$!%*?
                &]{6,20}$/", $this->password)
        ) {
            $result = false;
        }
        return $result;
    }













}





?>