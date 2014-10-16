<?php 

//namespace models\Observers;
class ResumeObserver {

	public function creating($model){
		echo 'creating';

	}
	public function created($model){
		echo 'created';
		
				
	}
	public function updating($model){

		// echo 'updating';
  //       // print_r($model->toArray());
  //       // exit();
  //     //  print_r($model->getAttributes());
  //       $data = $model->toArray();
  //      // $data['MyDate'] = array('day1'=>'1','day2'=>'2');
  //       // if(!empty($model->MyDate)){
  //       //     echo 'yesss';
  //       //     print_r($model->MyDate);
  //       // }
  //       print_r($data);
       // $model->MyDate ='11';
       // print_r($model->toArray());
        // $data = $model->getAttributes();
        // $model->MyDate->fill($data['mydate']);
        // $model->push();
        print_r(Config::get('configValue.value'));

	}
	public function updated($model){

		echo "updated";
        print_r($model);
	}
	public function deleting($model){
		echo "deleting";
	}
	public function deleted($model){
		echo "deleted";
	}
    public function saving($model)
    {
    	if($model->Height>100){
    		$newH = $model->Height +20;
        	$model->Height = $newH;

    	}
        //print_r($model);
        
        // $model->relationship->fill($data['relationship']);
        // $model->push();
    	// $models = array();
    	// $name =get_class($model);
    	// $model = $model->toArray();
    	// //$models = array_push($models, $model->toArray());
    	// //print_r($model);

    	// //Cache::put('user1', $model, 60);
    	// // $value = Cache::get('user1');
    	// // echo $value;
    	// if($name != 'ResumeTest'){
    	// 	echo 'in';
    	// 	$value = Cache::put('user1', $model, 60);
    	// }else{
    	// 	$cacheValue = Cache::get('user1');
    	// 	print_r($cacheValue);
    	// 	$models['Child'] = $cacheValue;
    	
    	// }
    	//print_r($models);
    	echo 'saving';
    }

    public function saved($model)
    {
    	print_r('saved');
    	//print_r($model);
    }
    public function restoring($model){
    	echo "restoring";
	}
	public function restored($model){
		echo "restored";
	}
    

}