<?php
class ConnectController extends BaseController{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$connect = DB::getConnections();
       			foreach ($connect as $key => $value) {
       				# code...
       				print_r($key);
       			}
	}
}
?>