<?php 

if(!empty($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    $to= 'rakibahmed.dev@gmail.com';
    $mailheader = 'Name: ' . $name . '<br>' . 'Email: ' . $email;

    if(mail($to, $mailheader, $subject, $message)){
        $message = " *** The mail has been sent successfully!!!";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP mail function</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
<div class="contact">
    
    <div class="form-container">
    <section class="bg-slate-100 dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Contact Us</h2>
      <form action="" method="POST">
          <div>
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
              <input type="name" name="name" id="email" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm " placeholder="Full Name" required>
              <label for="email" class=" w-full block mb-2 mt-5 text-sm font-medium text-gray-900 ">Email</label>
              <input type="email" name="email" id="email" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm" placeholder="Email" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 mt-5 text-sm font-medium text-gray-900">Subject</label>
              <input type="text" name="subject" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm" placeholder="Subject" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 mt-5 text-sm font-medium text-gray-900 ">Message</label>
              <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300" placeholder="Let us know how we can help you"></textarea>
          </div>
          <div class="flex justify-center">
          <input type="submit" value="Send Message" name="submit" class="py-3 px-5 mt-5 pointer text-sm font-medium text-center text-white rounded-lg bg-emerald-800 "/>
          </div>
      </form>



      <!-- message  -->
      <div>
        <?php 
            include('mail.php');

            if(!empty($message)){
        ?>
        <p class="text-emerald-800 text-base text-center my-5">
            <?php echo $message ?>
        </p>
        <?php } ?>
      </div>
  </div>
</section>
    </div>
</div>



    
</body>
</html>