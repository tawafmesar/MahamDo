
<?php
ob_start();

session_start();

  include 'files/ini.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (isset($_POST['addmsg'])) {

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];



          $succesMsg = 'تم إرسال رسالتك سيتم التواصل بم في اقرب وقا ';



}}

             ?>
             <div style="background-color: #f7fafd;;">
               <link rel="stylesheet" href="css/login.css">

             <!-- Header -->
             <header class="header" style="margin-bottom: -120px;">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="text-container">
                               <h1>Muhima مــهُــمــة</h1>
                                 <p class="p-large p-heading">يتيح لك التنظيم الجيد للمهام تحقيق نتائج أكبر في فترة زمنية أقصر، ما يؤدي إلى مزيد من الوقت بحرّية، ويساعدك على التركيز بشكل أفضل، ويسمح لك بأن تكون أكثر إنتاجية، ويقلل من إجهادك ويمنحك المزيد من الوقت الذي تقضيه مع الأشخاص الأكثر أهمية  </p>
                                 <a class="btn-outline-reg" href="#name">تواصل معنا ... </a>


                             </div> <!-- end of text-container -->
                         </div> <!-- end of col -->
                     </div> <!-- end of row -->

             </header> <!-- end of header -->

             <div class="deco-white-circle-1">
                 <img src="images/decorative-white-circle.svg" alt="alternative">
             </div> <!-- end of deco-white-circle-1 -->
             <div class="deco-white-circle-2">
                 <img src="images/decorative-white-circle.svg" alt="alternative">
             </div> <!-- end of deco-white-circle-2 -->
             <div class="deco-blue-circle">
                 <img src="images/decorative-blue-circle.svg" alt="alternative">
             </div> <!-- end of deco-blue-circle -->
             <div class="deco-yellow-circle">
                 <img src="images/decorative-yellow-circle.svg" alt="alternative">
             </div> <!-- end of deco-yellow-circle -->
             <div class="deco-green-diamond">
                 <img src="images/decorative-green-diamond.svg" alt="alternative">
             </div> <!-- end of deco-yellow-circle -->


           <div class="container"  >





             		<div class="login-wrap">
             			<div class="login-html">
                    <div id="name" class="login-form">

                     <form   action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                         <div class="group">
             							<label for="name" class="label" style="cursor:default;"> الأسم</label>
             							<input  name="name" type="text" class="input" >
             						</div>

                        <div class="group">
                        <label for="phone" class="label"  style="cursor:default;">الجوال </label>
                        <input name="phone"  type="tel" class="input">
                      </div>


                         <div class="group">
                         <label for="email" class="label"  style="cursor:default;">الأيميل (إختياري) </label>
                         <input name="email"  type="email" class="input">
                       </div>


                            <div class="group">
                          		<label for="task" class="label"  style="cursor:default;">نص الرسالة </label>
                              <textarea  class="input" name="msg" rows="4" cols="80"></textarea>
                				</div>



                             <?php
                                  

                                   if (isset($succesMsg)) {
                                     echo '<div class="msg">' . $succesMsg . '</div>' ;
                                     header("refresh:3;url=index.php");

                                     }

                              ?>
             						<div class="group">
             							<input type="submit"  name="addmsg" class="button" value="إضافة">
             						</div>
             					</div>
                     </form>

             				</div>
             			</div>






           </div>


         <?php
          // end manage items page





?>
  <?php
		  include 'files/foot.php';
		  ob_end_flush();
		  ?>
