<?php


class CompCon extends competicio{

    use validacions;

    private $nom;
    private $datai;
    private $dataf;

    private $lloc;
    private $crono;
    private $piscina;

    private $datafi;
    private $id;

    public function getcompid($id){

        return $this->comp($id);
    }


    Public function envmn($id){


        $this->id=$id;
        require_once '../../llibreries/dompdf/vendor/autoload.php';
        // require '../../llibreries/PHPMailer/src/Exception.php';
        // require '../../llibreries/PHPMailer/src/PHPMailer.php';
        // require '../../llibreries/PHPMailer/src/SMTP.php';
        
    
        $dompdf = new Dompdf\Dompdf();;
    // Load HTML content to generate a PDF
    
    // $username=$_SESSION["username"];
    // $usermail=new UserContr($username);
    // $email=$usermail->getEmailuser();
    
    ob_start();
    include '../vista/inscrippdf.php';
    $contents = ob_get_contents();
    ob_end_clean();
    //html_file = file_get_contents("prova.html");
    $dompdf->loadHtml($contents);
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $dompdf->render();
    // Download the generated PDF
    $output = $dompdf->output();
    $filePath = "../../documents/conv$id.pdf";
    file_put_contents($filePath, $output);
    
    
    $this->envmails($filePath);
    //$dompdf->stream("factura");
    






    }

    private function envmails($pdf){

        $ned= new provesuscon();
        $mails= $ned->getmail($this->id);

 
            $this->envia($pdf,$mails);

        


    }




    
    Public function generarpdf($id){


        $this->id=$id;
        require_once '../../llibreries/dompdf/vendor/autoload.php';
        // require '../lib/PHPMailer/src/Exception.php';
        // require '../lib/PHPMailer/src/PHPMailer.php';
        // require '../lib/PHPMailer/src/SMTP.php';
        
    
        $dompdf = new Dompdf\Dompdf();;
    // Load HTML content to generate a PDF
    
    // $username=$_SESSION["username"];
    // $usermail=new UserContr($username);
    // $email=$usermail->getEmailuser();
    
    ob_start();
    include '../vista/inscrippdf.php';
    $contents = ob_get_contents();
    ob_end_clean();
    //html_file = file_get_contents("prova.html");
    $dompdf->loadHtml($contents);
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $dompdf->render();
    // Download the generated PDF
    // $output = $dompdf->output();
    // $filePath = "pissos.pdf";
    // file_put_contents($filePath, $output);
    
    $dompdf->stream("comv$id");
    



    }

    private function envia ($pdf, $email){

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

        foreach ($email as $ca){
        $mail->addAddress($ca["email"]);
    
        //Set the subject line
        $mail->Subject = 'Convocatoria de Competicio ';
    
        //Replace the plain text body with one created manually
        $mail->msgHTML("Benvigut ". $ca["nom"]. " ". $ca["cognom"].   "Et convoquem a la propera competicio");
        $mail->addAttachment($pdf);
        
    
    
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
    }
    public function __construct($nom="", $datai="",$dataf="", $lloc="", $crono="", $piscina="" , $datafi=""){

        $this->nom=$this->validate_input($nom);
        $this->datai=$this->validate_input($datai);
        $this->dataf=$this->validate_input($dataf);
        $this->lloc=$this->validate_input($lloc);
        $this->crono=$this->validate_input($crono);
        $this->piscina=$this->validate_input($piscina);
        $this->datafi=$this->validate_input($datafi);

    }

    public function insertarComp(){

        return $this-> setcomp($this->nom, $this->lloc, $this->datai, $this->dataf, $this->piscina, $this->crono , $this->datafi);


    }


    public function competisall(){

        return $this->getcomp();

    }

    
}
?>