<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\tabs\TabsX;
use common\models\User;
use common\models\Scholar;
use common\models\School;
use common\models\Deduction;
use common\models\DeductionSearch;


/* @var $this yii\web\View */
/* @var $searchModel common\models\AllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allowances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-index">

    <center><h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1></center>

	<?php 
	 
	ob_start();
			$model = new Deduction();
            $searchModel = new DeductionSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            echo $this->render('/deductions/index',[
                'model'=>$model,
                'dataProvider'=>$dataProvider,
                'searchModel'   =>$searchModel,
            ]);
 
	$TabContent=ob_get_clean();
	
	?>
  <?php 
	$items = [
	[
        'label'=>'<i class="glyphicon glyphicon-thumbs-down"></i> Deductions',
		  'content'=>$TabContent
			
	,
		   'active'=>true,
		
    ],
		[
        'label'=>'<i class="glyphicon glyphicon-thumbs-down"></i> Deductions',
		  'content'=>$TabContent
			
	,
		   'active'=>true,
		
    ],
	
  
	];
		echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
    'encodeLabels'=>false,

]); 
	
	
	
	?>
	

	
   
   

</div>

