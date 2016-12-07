<?php
  // require_once('./recaptcha/recaptchalib.php');
  $name=filter_input(INPUT_POST, 'name');
  $email = filter_input(INPUT_POST,'email');
  // $telephone = filter_input(INPUT_POST,'telephone');
  // $raisonSociale = filter_input(INPUT_POST,'raison-sociale');
  $contactSite = filter_input(INPUT_POST,'contact-site');
  $contactCategory = filter_input(INPUT_POST,'category');
  $message = filter_input(INPUT_POST,'message');
  $formcontent = "This message was sent from this website: $contactSite and it's about the following category: $contactCategory \n\n";
  $formcontent  .=" From: $nom  \n\n";
  // $formcontent .=" Telephone: $telephone \n\n";
  $formcontent .=" E-Mail: $email \n\n";
  // $formcontent .=" Raison sociale: $raisonSociale \n\n\n";
  $formcontent .=" Message: \n $message";
  $recipient = "leito.paparazi@gmail.com";
  $subject = "Message from this Website: $contactSite";
  $mailheader = "From: $nom < $recipient > \r\n";
  $ok=false;
  $allfields=false;
  // $captcha=false;
  // $privatekey = " 6LeNd-8SAAAAAF9XvFw84pCDylS2phYa6kvmtCrb";
  // $resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
  
  if ($nom == '' || $telephone == '' || $message == ''){
  $allfields=false;
  }
  else{
  // if (!$resp->is_valid) {
  // // What happens when the CAPTCHA was entered incorrectly
  // $captcha=false;
  // } else {
  // Your code here to handle a successful verification
  $captcha=true;
  $ok=mail($recipient, $subject, $formcontent, $mailheader);
  // }
  $allfields=true;
  }

?>

<?php snippet('header') ?>

<main class="main" role="main" class="wrapper">

  <header class="inner">
    
    <h1><?= $page->title()?></h1>
        
  </header>

  <section class="inner">
    <div class="row uniform">
      <div class="large-8 columns">
        
        <?php
          if($ok && $allfields && $captcha){
            echo "<p>Merci, votre message a bien été envoyé</p>";
          } elseif(!$allfields) {
            echo "<p>Message non envoyé veuillez remplire tout les champs<p>";
          }elseif(!$captcha) {
            echo "<p>Message non envoyé veuillez remplire le code de captcha correctement</p>";
          } else{
          echo "<p>Message non envoyer veuillez reessayer</p>";
          }
        ?>
      </div>
      <div class="large-4 columns">
        <?php snippet('sideBarSlider')?>
        <?php snippet('sideContact')?>
      </div>
    </div>
  </section>

</main>

<?php snippet('footer')?>
    