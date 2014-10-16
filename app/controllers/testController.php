<?php
require '../vendor/autoload.php';

class testController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//----------------- Basic Input ------------------------------------
		// localhost/laravel/public/user1?name=junior
		$params = array();
		$params['hosts'] = array (
		    '192.168.101.243:9200'         // IP + Port
		);
		//$client = new \Elasticsearch\Client($params);
		$client = new Elasticsearch\Client($params);
		//$es = new \ElasticSearch\Client::connection('http://192.168.101.243:9200/test/resume');
		//******** JobCategory **************************
		// $json = '{
		//   //"query" : { "terms" : {"Job.JobType" : ["ga", "account"]} },
		//     "facets" : {    
		//         "JobType_Category" : {
		//             "terms" : {
		//                 "field" : "Job.JobType",
  //             			"size" :1000
		//             }
		//         }
		//     },
		//     "size" : 0
		// }';
		// $json = json_encode(array(
		// 	"facets" => array(
		// 		"JobType_Category" => array(
		// 			"terms" =>array(
		// 				"field" => "Job.JobType",
		// 				"size"  => 1000
		// 				)					
		// 			)
		// 		),
		// 	"size" =>0
		// 	));

		//******* Graduation Category *******************

		// $json = '{
		//     "facets" : {    
		//         "Graduation_Category" : {
		//             "terms" : {
		//                 "field" : "graduation.Category",
  //             			"size" :1000
		//             }
		//         }
		//     },
		//     "size" : 0
		// }';

		// }';
		// $json = json_encode(array(
		// 	"facets" => array(
		// 		"Graduation_Category" => array(
		// 			"terms" =>array(
		// 				"field" => "graduation.Category",
		// 				"size"  => 1000
		// 				)					
		// 			)
		// 		),
		// 	"size" =>0
		// 	));

		//******* Graduation level *******************
		// $json = '{
		//     "facets" : {    
		//         "Education_Level" : {
		//             "terms" : {
		//                 "field" : "EduLevel",
  //             			"size" :1000,
  //             			"order":"term"
		//             }
		//         }
		//     },
		//     "size" : 0
		// }';
		// foreach ($retDoc['facets']['Education_Level']['terms'] as $key => $value) {
		// }

		// $json = json_encode(array(
		// 	"facets" => array(
		// 		"Education_Level" => array(
		// 			"terms" =>array(
		// 				"field" => "EduLevel",
		// 				"size"  => 1000
		// 				)					
		// 			)
		// 		),
		// 	"size" =>0
		// 	));


		//******* Age Range ***************************
		// $json = '{
		//     "facets" : {    
		//         "Education_Level" : {
		//             "terms" : {
		//                 "field" : "DOB",
  //             			"size" :1000,
  //             			"order":"term"
		//             }
		//         }
		//     },
		//     "size" : 0
		// }';
		// $json = '{
		//     "facets" : {
		//         "range1" : {
		//         	"range": {
		//               "date_range" : {
		//                   "field" : "DOB",
		//                   "ranges" : [
		//                       {"from": "'.date('Y-m-d 00:00:00',strtotime('-20 year')).'", "to": "'.date('Y-m-d 00:00:00').'" },
		//                       {"from": "'.date('Y-m-d 00:00:00',strtotime('-25 year')).'", "to": "'.date('Y-m-d 00:00:00',strtotime('-20 year')).'" },
		//                       {"from": "'.date('Y-m-d 00:00:00',strtotime('-30 year')).'", "to": "'.date('Y-m-d 00:00:00',strtotime('-25 year')).'" },
		//                       {"from": "'.date('Y-m-d 00:00:00',strtotime('-35 year')).'", "to": "'.date('Y-m-d 00:00:00',strtotime('-30 year')).'" },
		//                       {"to": "'.date('Y-m-d 00:00:00',strtotime('-35 year')).'" }
		//                   ]
		//               }
		//              }
		            
		//         }, "size":0
		//     }
		//  }';
		// $json= '{
		// 	"facets":{
		// 	"Age_Range":{
		// 		"range":{
		// 			"date_range":{
		// 				"field":"DOB",
		// 				"ranges":[
		// 					{"from":"'.date('Y-m-d 00:00:00',strtotime('-20 year')).'","to":"'.date('Y-m-d 00:00:00').'"},
		// 					{"from":"'.date('Y-m-d 00:00:00',strtotime('-25 year')).'","to":"'.date('Y-m-d 00:00:00',strtotime('-20 year')).'"},
		// 					{"from":"'.date('Y-m-d 00:00:00',strtotime('-30 year')).'","to":"'.date('Y-m-d 00:00:00',strtotime('-25 year')).'"},
		// 					{"from":"'.date('Y-m-d 00:00:00',strtotime('-35 year')).'","to":"'.date('Y-m-d 00:00:00',strtotime('-30 year')).'"},
		// 					{"to":"'.date('Y-m-d 00:00:00',strtotime('-35 year')).'"}
		// 					]
		// 				}
		// 			}
		// 		},"size":0
		// 	}
		// }';

	//	$json ='{"facets":{"Age_Range":{"range":{"date_range":{"field":"DOB","ranges":[{"from":"'.date('Y-m-d 00:00:00',strtotime('-20 year')).'","to":"'.date('Y-m-d 00:00:00').'"},{"from":"'.date('Y-m-d 00:00:00',strtotime('-25 year')).'","to":"'.date('Y-m-d 00:00:00',strtotime('-20 year')).'"},{"from":"'.date('Y-m-d 00:00:00',strtotime('-30 year')).'","to":"'.date('Y-m-d 00:00:00',strtotime('-25 year')).'"},{"from":"'.date('Y-m-d 00:00:00',strtotime('-35 year')).'","to":"'.date('Y-m-d 00:00:00',strtotime('-30 year')).'"},{"to":"'.date('Y-m-d 00:00:00',strtotime('-35 year')).'"}]}}},"size":0}}';
		$json = json_encode(array(
			"facets"=>array(
				"Age_Range"=>array(
					"range"=>array(
						"date_range"=>array(
							"field"=>"DOB",
							"ranges"=>array(
								array("from"=>date('Y-m-d 00:00:00',strtotime('-20 year')),
											   "to"=>date('Y-m-d 00:00:00')),
											array("from"=>date('Y-m-d 00:00:00',strtotime('-25 year')),
												  "to"=>date('Y-m-d 00:00:00',strtotime('-20 year'))
												),
											array("from"=>date('Y-m-d 00:00:00',strtotime('-30 year')),
												  "to"=>date('Y-m-d 00:00:00',strtotime('-25 year'))
												),
											array("from"=>date('Y-m-d 00:00:00',strtotime('-35 year')),
												  "to"=>date('Y-m-d 00:00:00',strtotime('-30 year'))
												),
											array("to"=>date('Y-m-d 00:00:00',strtotime('-35 year')))
								)	
							)
						)
					),
			"size"=>0
				)
			));
		print_r($json);
		// $json = '{
		//     "facets" : {    
		//         "JobType_Category" : {
		//             "terms" : {
		//                 "field" : "Job.JobType",
  //             			"size" :1000
		//             }
		//         }
		//     },
		// }'; 
		// print($json);


// 		$searchParams = array();
// 		$searchParams['index'] = 'testtu';
// 		//$searchParams['body']['settings']['number_of_shards'] = 2;
// 		 $searchParams['type']  = 'resume';
// 		// $searchParams['id']	= 'my-id';
// 		// $searchParams['index'] = 'test';
// 		// $searchParams['type']  = 'resume';
// 		//$searchParams['body']['query']['match']['Position1'] = 'บัญชี';
// 		//$searchParams['body']=$json;
// 		//$retDoc = $client->search($searchParams);
// 		//$retDoc = $client->indices()->create($searchParams);
// //
// //		$retDoc = $client->indices()->getSettings($searchParams);
		 

// 		 $myTypeMapping2 = array(
// 		    '_source' => array(
// 		        'enabled' => true
// 		    ),
// 		    'properties' => array(
// 		        'first_name' => array(
// 		            'type' => 'string',
// 		            'analyzer' => 'standard'
// 		        ),
// 		        'age' => array(
// 		            'type' => 'integer'
// 		        )
// 		    )
// 		);
// 		 $searchParams['body']['mappings']['resume'] = $myTypeMapping2;
// 		$retDoc = $client->indices()->create($searchParams);

		//$client = new Elasticsearch\Client();
		$data = array();
		for($i=0;$i<100;$i++){
			$data[$i] = array('firstname'=>'tuuuu'.$i,'lastname'=>'juuuu'.$i,'age'=>$i);
		}
		print_r($data);
		 print_r(json_encode($data));
		// echo 'ttt';
		 exit();
		$indexParams= array();
		$indexParams['index']  = 'tu_index';
		$indexParams['type'] ='resume1';
		$indexParams['id']	= 'my_id';
		$indexParams['body'] = json_encode($data);
		// Index Settings
		// $indexParams['body']['settings']['number_of_shards']   = 3;
		// $indexParams['body']['settings']['number_of_replicas'] = 2;

		// // Example Index Mapping
		// for($i=0;$i<100;$i++){
		// 	$myTypeMapping = array(
		//         'first_name' => 'tu'+$i,
		//         'age' => $i++
		// 	);
		// 	$indexParams['body'] = $myTypeMapping;

		// 	// Create the index

		// 	$res = $client->indices()->create($indexParams);

		// }
			$res = $client->create($indexParams);

		// $myTypeMapping = array(
		//         'first_name' => 'tu'+$i,
		//         'age' => $i++
		// );
		// $indexParams['body']['mappings']['my_type'] = $myTypeMapping;

		// // Create the index

		// $res = $client->indices()->getSettings($indexParams);



		//print_r($retDoc);

		echo '<pre>';
		print_r($res);
		echo '</pre>';

		

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