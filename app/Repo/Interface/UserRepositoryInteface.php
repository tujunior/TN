<?php 
namespace Repo\Interface;
interface UserRepositoryInteface {
 
       public function all();
 
       public function find($id);
 
       public function create($input);
 
 }