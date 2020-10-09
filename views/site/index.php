<?php

/* @var $this yii\web\View */
use app\models\Youtube;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>

  <!-- Description -->
  <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">Хизмат турлари</div>
                    <h2 class="h2-heading">Бизнинг хизматлар</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                <div class="card">
                        <div class="card-image">
                            <img style="width:200px;height:180px"  class="img-fluid" src="web/images/rek3.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Электр монтаж</h4>
                            <p>Хар қандай электр монтаж ишларини аьло сифатда битказиб бериш</p>
                        </div>
                    </div>
             
                    <div class="card">
                        <div class="card-image">
                            <img style="width:200px;height:180px" class="img-fluid" src="web/images/cable.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Кабел линиялари</h4>
                            <p>Офис ёки уйингиз учун кабел линиялари тортиш ишлари.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img style="width:200px;height:180px"  class="img-fluid" src="web/images/lamp.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Чирок ва лампа ишлари</h4>
                            <p>Плафон чироқлар ва лед лампалар ўрнатиш</p>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-image">
                            <img style="width:200px;height:180px"  class="img-fluid" src="web/images/pillar.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Столбалар ўрнатиш</h4>
                            <p>Столбалар ўрнатиш ва янги симлар тортиш ишлари</p>
                        </div>
                    </div>
                 

                 
                    <div class="card">
                        <div class="card-image">
                            <img style="width:200px;height:180px"  class="img-fluid" src="web/images/TP.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">ТП киёскалар ўрнатиш ва ремонт</h4>
                            <p>Сизнинг талабрингизга жавоб берувчи ТП киёскалар ўрнатиш ва тамирлаш ишлари</p>
                        </div>
                    </div>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->
        <!-- Features -->
        <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">Таклиф</div>
                    <h2 class="h2-heading">Бизнинг таклиф</h2>
                    <p class="p-heading">Ҳонадонингиз, ҳовли ва офислар учун барча турдаги электр ҳизматлари.<br><i>Маслаҳатимиз бепул.<br>Калькулятсиямиз бепул.</i> </p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                    <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fa fa-home"></i>Ҳонадонингиз учун</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fa fa-building"></i>Офисингиз учун</a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                            <div class="col-lg-6">
                                    <div class="image-container">
                                        <img style="width:83%" class="img-fluid" src="web/images/residential.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Ҳонадонингиз учун</h3>
                                       
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Хар кандай электр монтаж ишлари хамда уларга сервис кўрсатиш</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Лед лампалар хамда чироклар ўрнатиш</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Столбалар ўрнатиш</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Кабел линиялари тортиш</div>
                                            </li>
                                        </ul>
                                      
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="row">
                            <div class="col-lg-6">
                                    <div class="image-container">
                                        <img style="width:83%" class="img-fluid" src="web/images/office.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                <div class="text-container">
                                        <h3>Офисингиз учун хизматлар</h3>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Офисингиз электр тизимини доимий кўллаб қувватлаш</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">0 дан бошлаб электр монтаж хамда кабел линияларини планлаштириб ишлаб бериш</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Энергия тежовчи ёруғ лед лампаларини ўрнатиб бериш</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">ТП киёска ўрнатиб бериш хамда уларни таьмирлаш хизматлари</div>
                                            </li>
                                        </ul>
                                      
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                   
                        <!-- end of tab -->
                        
                    </div> <!-- end of tab content -->
                    <!-- end of tabs content -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->


        <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->

    <!-- end of details lightbox 1 -->

        <!-- Details -->
        <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
               
            <h2 style="text-align:center">Манзилимиз</h2>
                  
              
                  <!-- end of text-container -->
                <!-- end of col -->
           
           <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d5815.097289212863!2d72.35264797128806!3d40.768694121144975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e2!4m0!4m3!3m2!1d40.7670879!2d72.3576322!5e0!3m2!1sen!2s!4v1601895602999!5m2!1sen!2s" width="1200" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
                   
               


            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->

        <!-- Video -->
        <div id="video" class="basic-2">
        <div class="container">
        <div class="above-heading">Бизнинг ишлар</div><br>
        <h2 style="text-align:center">Иш жараёнидан лавхалар</h2>
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                        <?php $youtube = Youtube::findone(['is_active'=>10]); ?>
                            <a class="popup-youtube" href="<?=$youtube->link?>" data-effect="fadeIn">
                                <img style="width:100%" class="img-fluid" src="web/images/video1.jpg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <div class="p-heading">Юз марта эиштгандан бир марта кўрган яхши.Ҳонадонингиз, ҳовли ва офисларда электромонтаж ишларини ҳамда люстра, галоген, подсветка, бра, розетка, стабилизатор, автомат ва щит ўртанатиб берамиз.</div>        
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->

        <!-- Newsletter -->
        <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="above-heading">Алоқа</div>
                        <h2>Биз билан богланиш</h2>

                        <!-- Newsletter Form -->
                        <form>
                            <div class="form-group">
                           
                            <?php $form = ActiveForm::begin(['method'=>'post']); ?>
                             <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                             <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                             <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>
                             <?= Html::submitButton('Жўнатиш', ['class' => 'form-control-submit-button']) ?>
                             <?php ActiveForm::end(); ?>


                            </div>
             
                        </form>
                        <!-- end of newsletter form -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-container">
                    <span class="fa-stack">
                            <a href="https://www.facebook.com/Chaqmoq-Electric-105401958004639/?modal=admin_todo_tour">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
            
                        <span class="fa-stack">
                            <a href="https://t.me/elektrmontajchaqmoq">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-telegram-plane fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of newsletter -->