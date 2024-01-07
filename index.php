<?php
ob_start();
session_start();


  include 'files/ini.php';

?>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Muhima مــهُــمــة</h1>
                        <p class="p-large p-heading">ابدأ في التركيز على أهدافك وأنجز المزيد من الأشياء باستخدام موقع مهام دو. إنه موقع يقوم بمساعدتك في الحفاظ على تركيزك وتنظيم مهامك .</p>


                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="images/imgHeadr.gif"  style=" width: 72%;   border-radius: 300px;" alt="alternative">
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
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
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Small Features -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">تحديد الأهداف</h5>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image red">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">إعداد المهام</h5>
                        </div>
                    </div>
                    <!-- end of card -->


                    <!-- Card -->
                    <div class="card">
                        <div class="card-image green">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">تحليل المواقف</h5>
                        </div>
                    </div>
                    <!-- end of card -->


                    <!-- Card -->
                    <div class="card">
                        <div class="card-image yellow">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">التفاعل الأجتماعي</h5>
                        </div>
                    </div>
                    <!-- end of card -->



                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of small features -->





    <!-- Description 2 -->
    <div class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tabs-container">

                        <!-- Tabs Links -->
                        <ul class="nav nav-tabs" id="cedoTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="far fa-clock"></i>جدولة المهام</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="far fa-calendar-alt"></i>التنظيم</a>
                            </li>
                        </ul>
                        <!-- end of tabs links -->

                        <!-- Tabs Content -->
                        <div class="tab-content" id="cedoTabsContent">
                            <!-- Tab -->
                            <div class="tab-pane fade show active alignR" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                                <p><strong>جدولة المهام</strong>&nbsp;لتتبع إنجازها. نوفر لك خيارات جدولة متعددة وكذلك التنبيهات والتذكيرات لها.</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">يمكنك دائمًا إضافة مهام جديدة أو تغيير إعدادات المهام الموجودة في مهامك . </div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">من السهل أن تستمر في التركيز على أنشطتك اليومية الأكثر أهمية والتي ستقربك من تحقيق أهدافك</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">ستشاهد  نتائج جيدة وسريعة عندما يتعلق الأمر بإدارة الوقت وتحديد أولويات المهام .</div>
                                    </li>
                                </ul>
                                <a class="btn-solid-reg page-scroll" href="terms-conditions.html">إنشاء حساب</a> <a class="btn-outline-reg page-scroll" href="privacy-policy.html">تسجيل الدخول</a>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->


                            <!-- Tab -->
                            <div class="tab-pane fade alignR" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                                <p>استخدم قوة التفاعل الاجتماعي لتحفيزك وتركيزك على أهدافك اليومية وعلى المدى الطويل</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">ان موقعنا يمكنه تحويلك إلى شخص منظم بشكل أفضل دون ضغوط الفشل .</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">تحقيق المستحيل فقط من خلال مراقبة تقدمك بعناية لمهامك وإنجازها .   </div>
                                    </li>
                                </ul>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->
                        </div> <!-- end of tab-content -->
                        <!-- end of nav tabs content -->

                    </div> <!-- end of tabs-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid desc1" src="images/desc2.gif" alt="alternative">
                        <img class="img-fluid desc2" src="images/desc1.gif" alt="alternative">

                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of description 2 -->



    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <i class="fas fa-users"></i>
                            <div class="counter-value number-count" data-count="231">370</div>
                            <p class="counter-info"> مستخدمين</p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-code green"></i>
                            <div class="counter-value number-count" data-count="385">2340</div>
                            <p class="counter-info">مهام مسجلة </p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-cog red"></i>
                            <div class="counter-value number-count" data-count="159">1032</div>
                            <p class="counter-info"> مهام منجزة</p>
                        </div>

                        <div class="cell">
                            <i class="fas fa-rocket blue"></i>
                            <div class="counter-value number-count" data-count="211">221</div>
                            <p class="counter-info"> زائر</p>
                        </div>
                    </div>
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->




<?php
  include 'files/foot.php';
  ob_end_flush();
  ?>
