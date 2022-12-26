<?php


//Informações para o form
$to = 'contato.inoway@gmail.com'; 

$from = $_POST['email']; 
$fromName = $_POST['nome']; 
$tell = $_POST['tell'];
$pedido = $_POST['pedido'];
$sub = "Pedido de $fromName"; 


$message = "
PEDIDO de $fromName 

EMAIL: $from

TELEFONE: $tell

ESPECIFICAÇÕES: 
$pedido

";

$headers = 'De: '.$fromName.'<'.$from.'>'; 
$headers .= 'From: $nome <$email>';

if(mail($to, $sub, $message, $headers)){ 
   echo "<script>
   alert('Email enviado com Sucesso!!!')
   window.location.href = ('index.html')
   </script>"; 
    
   
}else{ 
    echo"<script>
    alert('Falha ao enviar Email!')
   window.location.href = ('index.html')
       </script>"; 
   
   
}
?>