<?php
use \Config;
class ResumeController extends BaseController{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//----------------- Basic Input ------------------------------------
			// --------  Get data----------------
				// $res = ResumeTest::find(1111);
				// if(!is_object($res)){
				// 	ResumeTest::insert(array('RunningNumber'=>1111));
				// }
			 	$get = ResumeTest::find(1193)->toArray();
			 	//print_r($get);
			// // -------- Update Data -------------
			 $update = ResumeTest::find(1193);
			// 	// $resumetest = ResumeTest::getModel();
			// 	// print_r($resumetest);
			 	$new_value = array();
				
				foreach ($get as $key => $value) {
					if($key == 'Attr1'){
						$new_value[$key] = "เขียนโปรแกรม1";
					}elseif ($key =='Work_Place') {
						$new_value[$key] = "กรุงเทพ";
					}elseif ($key =='Position1'){
						$new_value[$key] ='นักออกแบบ';
					}
					elseif ($key =='Position2'){
						$new_value[$key] ='นักบิน';
					}
					elseif ($key =='Position3'){
						$new_value[$key] ='ช่างไม้';
					}elseif ($key=='RunningNumber') {
						$new_value[$key] = 1211;
					}
					else {
						$new_value[$key] = $value;

					}

				 }
				 ResumeTest::insert($new_value);
				 $new_value['Mydate'] =array('day1'=>'22','day2'=>'33');
				 //print_r($new_value);
				 //exit();
				 // print_r($new_value);
				 // exit();
				 //$update->fill(array('Position3'=>'testtu'))->update();
				 $config = Config::set('configValue.value',$new_value);
				// print_r(Config::get('configValue.value'));
				 $update->save($new_value);
			// $update->update(array('relationship'=>array('test1'=>'0000')));
				// $find= ResumeTest::find(1193)->toArray();
				//  print_r($find);
				//  $getresume = resume::find(422);
				// $getresume->update(array('username'=>'sukanya','password'=>'12345'));
				// // $resume = array_map(function($resume) use ($user){
				// // 	return array(
				// // 		'username' => $user->username,
				// // 		'password' => $user->password
				// // 		)
				// // );
				// // print_r($resume);

				// $update->update(array('Attr1' => 'Computer2','Work_Place'=>'กรุงเทพ','Position1'=>'กิน','Position2'=>'นอน','Position3'=>'เที่ยว'));
    // 			// $cacheValue = Cache::get('user1');
    			// print_r($cacheValue);

				
				// $update->update($new_value);

				//$update->delete();

				 // $get = Cache::get('user2');
					// echo $get;

				 // ------ array to object -------------------------------
					 // $object = new stdClass();
			   //      foreach ($new_value as $index => $values) {
			   //          if (is_array($values) && empty($values)) {
			   //              $object->{$index} = new stdClass();
			   //          } else if (is_array($values)) {
			   //              $object->{$index} = $this->objectThis($values);
			   //          } else {
			   //              $object->{$index} = $values;
			   //          }
			   //      }

				
			// ----------- Get Model Propoties -------------------
				// $model = ResumeTest::getModel();
				// print_r(get_class($model));
				// //print_r($model);

			// --------- Get Query log ---------------------------
				 // $queries = DB::connection('mysql22')->getQueryLog();
				 // print_r($queries);

			// --------- Get Connection --------------------------
       			//$connect = DB::getConnections();  // return array

				// $value = Cache::put('title', 'Clivern', 30);
				// $get = Cache::get('title');
				// echo $get;

			// ------------ with -> Relationship ------------------
			// 	  $withget = ResumeTest::all();
			// 	print_r($withget);
			// 	//print_r('testt');
			// foreach (ResumeTest::with('Education')->get() as $value) {
			// 	echo $value->Education;
			// }

		// ------------ mem cache --------------
		// Cache::put('key','test1',30);
		// $value = Cache::get('key');
		// print_r($value);

		
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// echo "store ";
		// $file = Input::file('photo');
		// print_r($file);
		// print_r(Input::all();
		//print_r(basename($file));
		// $file;
		//$x=1;
		// print_r(Input::hasFile('photo'));
		// if ($file->getError()==0)
		//echo $file;
// print_r($file->getError());


		//--------------------  Post --------------------------------------------------------
		// localhost/laravel/public/user1     --> selct Post and choose file 
		if(Input::hasFile('photo'))
		{
			echo "ok";
//echo "ok";
		}else{
			echo "no";
		}

		// $path = Input::file('photo')->getRealPath();

		// $name = Input::file('photo')->getClientOriginalName();

		// $extension = Input::file('photo')->getClientOriginalExtension();

		// $size = Input::file('photo')->getSize();

	//	$mime = Input::file('photo')->getMimeType;
		echo $name;
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Get --> parameter
		///  localhost/laravel/public/user1/jjunior
			return 'User Name is ' . $id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		echo "update".$id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		echo "destroy";
	}

}
?>