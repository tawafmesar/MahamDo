
<?php
ob_start();

session_start();

  include 'files/ini.php';

  $pagetitle = 'Login';
  if (!isset($_SESSION['username'])) {
    echo '<div class="msg" style="color#3d4c74;; font-size:20px;" >لأضافة مهمة يجب عليك تسجيل الدخول ...</div>' ;
    header("refresh:2.5;url=login.php");
  }


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['addTask'])) {


            //$_SESSION['userid'];
    $task      = filter_var($_POST['task'], FILTER_SANITIZE_STRING);
    $dueDate = $_POST['dueDate'];
    $dueTime = $_POST['dueTime'];
    $list  = filter_var($_POST['list'], FILTER_SANITIZE_NUMBER_INT);
    $priority    = filter_var($_POST['priority'], FILTER_SANITIZE_NUMBER_INT);




        $formErrors = array();



        if (empty($formErrors)) {



                              $stmt = $con->prepare("INSERT INTO
                                                      tasks(task, dueDate	,  dueTime ,list , priority , user_id )
                                                      VALUES(:ztask, :zdueDate ,  :zdueTime , :zlist , :zpriority, :zuserId   )");
                              $stmt->execute(array(

                                    'ztask'     =>  $task ,
                                    'zdueDate'     =>  $dueDate  ,
                                    'zdueTime'  =>  $dueTime ,
                                    'zlist'    =>  $list ,
                                    'zpriority'   =>  $priority ,
                                    'zuserId'   =>  $_SESSION['userid']
                              ));

                        if($stmt) {

                          $succesMsg = 'تم إضافة المهمة بنجاح .. ';

                        }

                      }
    }
  }
   ?>

		<link rel="stylesheet" href="css/login.css">

		<div class="login-wrap">
			<div class="login-html">
        <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"> إضافة مهمة</label>
				<input id="tab-2" type="reset" name="tab" class="sign-up"><label for="tab-2" class="tab" style="color:#ff556e;float:left;">  مسح البيانات </label>
				<div class="login-form">
            <div class="group">
          		<label for="task" class="label"  style="cursor:default;">المهمة </label>
              <textarea  class="input" name="task" rows="2" cols="80"></textarea>

						</div>

            <div class="group">
							<label for="dueDate" class="label" style="cursor:default;">تاريخ المهمة  </label>
							<input id="dueDate" name="dueDate" type="date" class="input" >
						</div>

            <div class="group">
            <label for="dueTime" class="label"  style="cursor:default;">الوقت (إختياري) </label>
            <input name="dueTime"  type="time" class="input">
          </div>

          <div class="group">

            <select style="
            border: none;
            padding: 10px 15px;
            border-radius: 25px;
            background: rgba(255,255,255,.1);

            font-weight: 700;"  required name="list">
                  <option  value="" class="input" >اضافة الى قائمة ..</option>
                  <?php


                        $con;

                        $getAll = $con->prepare("SELECT * from list  ORDER BY list_id ASC


                                   ");

                        $getAll->execute();

                        $cats = $getAll->fetchall();

                       foreach ($cats as $cat) {
                         echo "<option value='" . $cat['list_id'] . "' > " . $cat['list'] . " </option>";
                       }
                   ?>
            </select>
          </div>


          <div class="group">
            <label for="priority" class="label" style="cursor:default;"> الأهمية </label>
            <input id="priority" name="priority" type="range" min="0" max="11" class="input" data-type="password">
          </div>

                <?php
                      if (! empty($formErrors)){
                          foreach ($formErrors as $error) {
                            echo '<div class="msg">' . $error . '</div>';
                          }
                          header("refresh:3;url=addTask.php");
                      }

                      if (isset($succesMsg)) {
                        echo '<div class="msg">' . $succesMsg . '</div>' ;
                        header("refresh:3;url=addTask.php");

                        }

                 ?>
						<div class="group">
							<input type="submit"  name="addTask" class="button" value="إضافة">
						</div>
					</div>
        </form>

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
