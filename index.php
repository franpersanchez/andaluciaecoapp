<?php
    
    
        if(isset($_POST['PlaniActuacion'])){
            //nombre txt
        $file = date("d-m-Y").' comunicacion.txt';
        
            

        $file = fopen($file, "a") or die("Unable to open file!");
           

        if(strlen($_POST['CIFEntidad'])<11){
            $CIFEntidad=str_pad($_POST['CIFEntidad'],11,' ');
        } else {
            $CIFEntidad=$_POST['CIFEntidad'];
        }

        if(strlen($_POST['CIFCliente'])<10){
            $CIFCliente=str_pad($_POST['CIFCliente'],10,' ');
        } else {
            $CIFCliente=$_POST['CIFCliente'];
        }

        if(strlen($_POST['CodigoSIPEA'])<15){
            $CodigoSIPEA=str_pad($_POST['CodigoSIPEA'],15,' ');
        } else {
            $CodigoSIPEA=$_POST['CodigoSIPEA'];
        }
        
        if(strlen($_POST['provincia'])<2){
            $provincia=str_pad($_POST['provincia'],2,'0',STR_PAD_LEFT);
        } else {
            $provincia=$_POST['provincia'];
        }
        
        if(strlen($_POST['municipio'])<3){
            $municipio=str_pad($_POST['municipio'],3,'0',STR_PAD_LEFT);
        } else {
            $municipio=$_POST['municipio'];
        }
           
        if(strlen($_POST['observaciones'])<1000){
            $observaciones=str_pad($_POST['observaciones'],1000,' ');
        } else {
            $observaciones=$_POST['observaciones'];
        }
        
            $newDate = date("dmY", strtotime( $_POST['fechaPrevista']));  

            $cuerpo="PLA  06009".$_POST['tipoActuacion']."01".$_POST['muestras'].$CIFEntidad.$_POST['NIFAuditor']." ".
            $newDate.$CIFCliente.$CodigoSIPEA.$_POST['tipoOperador'].$provincia.$municipio.$observaciones."\n";

            fwrite($file , $cuerpo);
            fclose($file);
            header("location: index.php");
            return;
        }
        
        foreach(glob("*.txt") as $archivo) {
                foreach(file($archivo) as $line){
                    echo $line."<br>";
                    
                }  
            } 
        
          
       
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Actuaciones</title>
    <style>
    
            .disclaimer{
        
            display: none;
        
        }

        input,select{
            display:block;
        }
        label{
            color:#0f5189;
            font-weight:bold;
        }

        input:-moz-read-only {
        background-color: #e6e6e6;
        }
        p:read-only {
        cursor: not-allowed;
        }
        input[readonly] {
        background-color: #e6e6e6;
        }   
        
        #footer {
        
            
        width: 50%;
        height: auto;
        text-align:center;
        background-color: #e1de93;
        }
        

    label:not(.norequired)::after {
    color: #e32;
    content: ' *';
    display:inline;
}


    </style>
</head>
<body>
<div id="buttongroup">
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form1" 
        aria-expanded="false" aria-controls="form1" data-parent="#buttongroup">Planificación Actuaciones</button>
 <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form2" 
        aria-expanded="false" aria-controls="form2" data-parent="#buttongroup">Actuaciones</button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form3" 
        aria-expanded="false" aria-controls="form3" data-parent="#buttongroup">No Actuaciones</button>
-->
         <div style="display:inline;float:right;">
         <a href="download.php?file=<?php echo $archivo ?>" ><button class="btn btn-success">Descargar fichero</button></a>
        
        <a href="delete.php?file=<?php echo $archivo ?>" ><button class="btn btn-danger">Limpiar datos</button></a>

         </div>
        
</div>
    

<div class="collapse" id="form1" >
    <?php require "form1.php"; ?>
</div>


<div class="collapse" id="form2">
    <form  action="<?=$_SERVER['PHP_SELF'];?>" method="POST" >
        <input name="field1" type="text"/>    
        <input type="submit" name="adjunta" value="Adjuntar datos">

    </form>
</div>

<div class="collapse" id="form3">
    <form  action="<?=$_SERVER['PHP_SELF'];?>" method="POST"  >
        <input name="field1" type="text"/>    
        <input type="submit" name="adjunta" value="Adjuntar datos">

    </form>
</div>








<script>

jQuery('button').click( function(e) {
    jQuery('.collapse').collapse('hide');
});



</script>





</body>
</html>

