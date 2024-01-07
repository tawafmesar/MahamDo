
<?php
ob_start();

session_start();

  include 'files/ini.php';

  $pagetitle = 'Login';
  if (isset($_SESSION['username'])) {
    header('Location: tasks.php');
  }


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['login'])) {
   // check coming from login or signup form

          $username = $_POST['username'];
          $password = $_POST['password'];

          $hashpass = sha1($password);

          // check if user exist in database

          $stmt = $con->prepare("SELECT
                                        user_id   ,UserName, password
                                 FROM
                                        users
                                 WHERE
                                        UserName = :zusername
                                 AND
                                        password = :zpassword");
                                        $stmt->execute(array(

                                              'zusername' => $username,
                                              'zpassword' => $hashpass));

          $get = $stmt->fetch();
          $count = $stmt->rowCount();



          //if count > 0 this mean the datebase contain record about this Username

          if ($count > 0) {
               $_SESSION['username'] =  $get['UserName'];      // register session name
               $_SESSION['userid'] = $get['user_id'];    // register user id in session
               header('Location: tasks.php');      // redirect to dashboard page
                exit();
          }else {

            $formErrors[] = 'قد يكون اسم المستخدم او كلمة المرور غير صحصيحة   ';

          }

      } else {


          // check the signup if valid or not befor sending info to database

            $formErrors = array();

            $username   = $_POST['username'];
            $password = $_POST['password'];
            $email    = $_POST['email'];
            $phone      = $_POST['phone'];


            if (isset($username) ) {
              // filter the user name from any script
              $filteruser = filter_var($username,FILTER_SANITIZE_STRING);

                if (strlen($filteruser) < 4 ) {// check if the character of user name is larg

                  $formErrors[] = 'Username must be larger than 4 character';

                }

            }




            if (empty($formErrors)) {

              // check if user exist in database

            //  $check = checkItem("Username", "users" , $username);
            $stmt = $con->prepare("SELECT
                                                user_id   ,UserName, password
                                         FROM
                                                users
                                         WHERE
                                                UserName = :zusername
                                  ");
                                                $stmt->execute(array(


                                                      'zusername' => $username));

                  $get = $stmt->fetch();
                  $count = $stmt->rowCount();


              if ($count == 1 ) {

                $formErrors[] = 'اسم المستخدم الذي ادخلتة موجود مسبقاً';


              } else {

                    // insert user info into the datebase     VALUES(:zuser, :zpass , :zmail , :zname)");

                    $stmt = $con->prepare("INSERT INTO
                                            users(UserName, password, email  , phone , notes)
                                        VALUES(:zusername, :zpassword , :zemail  ,:zphone ,1)");
                    $stmt->execute(array(

                          'zusername' => $username,
                          'zpassword' => sha1($password),
                          'zemail' => $email ,
                          'zphone' => $phone

                    ));

                   // echo success message

                  $succesMsg = 'لقد تم انشاء الحساب بنجاح ..';

                 }

               }

       }

  }

   ?>

		<link rel="stylesheet" href="css/login.css">

		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"> تسجيل الدخول</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"> إنشاء حساب</label>
				<div class="login-form">
					<div class="sign-in-htm">
            <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="group">

          		<label for="username" class="label"  style="cursor:default;">اسم المستخدم</label>
							<input name="username"  type="text" class="input">
						</div>

            <div class="group">
							<label for="pass" class="label" style="cursor:default;">كلمة المرور</label>
							<input id="pass" name="password" type="password" class="input" data-type="password">
						</div>

                <?php
                      if (! empty($formErrors)){
                          foreach ($formErrors as $error) {
                            echo '<div class="msg">' . $error . '</div>';
                          }
                          header("refresh:3;url=login.php");
                      }

                      if (isset($succesMsg)) {
                        echo '<div class="msg">' . $succesMsg . '</div>' ;
                        header("refresh:3;url=login.php");

                        }

                 ?>
						<div class="group">
							<input type="submit"  name="login" class="button" value="تسجيل">
						</div>
          </form>
					</div>
					<div class="sign-up-htm">
            <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
						<div class="group">
							<label for="user" class="label" style="cursor:default;">اسم المستخدم</label>
							<input id="user" name="username" type="text" class="input">
						</div>
						<div class="group">
							<label for="pass" class="label" style="cursor:default;">كلمة المرور</label>
							<input id="pass" name="password" type="password" class="input" data-type="password">
						</div>
						<div class="group">
							<label for="pass" class="label" style="cursor:default;">البريد الألكتروني</label>
							<input id="pass" name="email" type="email" class="input" data-type="password">
						</div>
						<div class="group">
							<label for="pass" class="label" style="cursor:default;">الجوال</label>
							<input id="pass" name="phone" type="tel" class="input">
						</div>
						<div class="group">
							<input type="submit" name="signup" class="button" value="إنشاء">
						</div>
          </form>
					</div>
				</div>
			</div>
		</div>
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

  <?php
		  include 'files/foot.php';
		  ob_end_flush();
		  ?>
