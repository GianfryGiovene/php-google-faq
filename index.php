<!-- 
    Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
Mi raccomando di gestire per prima cosa la visualizzazione dei dati, anche in maniera grezza, e solo alla fine rendere più accattivante la pagina.
-->

<?php 
include 'db.php';
foreach($faqs as $faq ){
    foreach($faq as $key => $value){
        if($key == 'question'){
?>
        <h2><?php echo $value?></h2>
<?php
        }else{
?>
        <p><?php echo $value?></p>
<?php
        }
    }
}
?>

