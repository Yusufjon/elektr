 <?php
 use app\models\Post;
 use yii\widgets\ActiveForm;
 use yii\helpers\Html;
 ?>        
                      <!-- Sign Up Form -->
                      <div class="form-container">
                
                <div class="form-group">
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label('Login') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('Parol') ?>  
                <div class="form-group">
                 <?= Html::submitButton('Kirish', ['class' => 'form-control-submit-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            

            </form>
        </div> <!-- end of form container -->