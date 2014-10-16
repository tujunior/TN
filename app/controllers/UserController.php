<?php
//namespace app\controllers\UserSpace;
class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile()
    {
      echo testpack::greeting();
      // $user = DB::connection('mongodb')->collection('coll')->get();
      // print_r($user);
//************************************************ Basic query ************************************************ 
     // echo "print";
        // ---> Select 
            // $results=DB::select('select * from category where cate_name=? and cate_id=?',array('Book',1));
      
        // --->   Insert
            // $results=DB::insert("insert into category(parent_id,cate_name,cate_detail,cate_sort,cate_flag,create_date) values (0,'Book','animal',1,'N','2013-09-28 15:19:40')");

            // $results=DB::insert("insert into category(parent_id,cate_name,cate_detail,cate_sort,cate_flag,create_date) values (?,?,?,?,?,?)",array(0,'Book','animal',1,'N','2013-09-30 15:19:40'));

          
        // --->  Update
            // $results=DB::Update("update category set parent_id=0,cate_detail='Water Animal' where cate_name='Book' and cate_detail='animal'");
            // $results=DB::Update("update category set parent_id=?,cate_detail=? where cate_name=? and cate_detail=?",array(1,'Animals','Book','Fly Animal'));
        
        // --> Delete
           // $results=DB::delete("delete from category where cate_name=? and cate_detail=?",array('Book','Animals'));
        
        // ---> transaction    // How print
            // $results=  DB::transaction(function(){
            //                 DB::table('category')->update(array('parent_id' => 1));

            //                 DB::table('student')->get();
            //                 DB::table('book')->get();
            //             });
            // print_r($results);


//************************************************ Quety Builder ************************************************ 

        // -->  select by get()
            // $users = DB::table('category')->get();

            // foreach ($users as $key=>$value)
            //     {
            //        // var_dump($key);
            //         print_r($value->cate_name);
            //     }; 

        // --> select , where , and get first row 
             // $user = DB::table('category')->where('cate_name', 'Book')->first();
        // --> select by get()
             // $user = DB::table('category')->where('cate_name', 'Book')->where('cate_detail','Water Animal')->get();

        // -->  Single Column from Row  -----> select `cate_detail` from `category` where `cate_name` = 'Book' limit 1
            //$user= DB::table('category')->where('cate_name', 'Book')->pluck('cate_detail');

        // --> List of Colum Values , if column > 2 it show only 2 coly ------>select `cate_name`, `cate_detail` from `category` 
           // $user = DB::table('category')->lists('cate_name','cate_detail','cate_id');
            //--> Example  1st = cate_detail ,2nd =cate_name    -----> cate_name is key of cate_detail
            // Array
            // (
            //     [a book] => Book
            //     [wallMap] => WallMap
            //     [travel] => Travel
            //     [WalkMap] => WalkMap
            //     [Water Animal] => Book
            // )
                
                // echo $user['a book'];

        // --> speccify a select clause   ------> select `cate_id`, `cate_name` from `category` where `cate_name` = 'Book'
            // $user = DB::table('category')->select('cate_id', 'cate_name')->where('cate_name','Book') ->get();
        
        //  distinct () ซ้ำเอามาแค่ตัวเดียว
            //$user = DB::table('category')->select('cate_name')->distinct()->get();



//************************************************ ORM ************************************************ 

        //------- Query database------------
        // $user=Model::select('cate_detail')->where('cate_name','Travel')->get()->toArray();

        // -----Insert 1 -> Create Object -----------------------
            // $user=new Model;
            // $user->cate_name='Music2';
            // $user->save();

            // $insertedID=$user->cate_id;

       //----------Insert 2    -> Create() array --->   Insertable field must Defind Model like--> protected $fillable = array('cate_name','cate_detail');-------------------
          // $data = array('parent_id'=>'1', 'cate_name'=>'test11','cate_detail'=>'Song','');
          // Model::create($data);

        // -------- Update using Object-   ?????????? not work ------------
            // $user=Model::find(27);
            // $user->cate_name='Animal';
            // $user->save();


        //-------- Update ------------------------
           // $user=Model::where('cate_detail','Water Animal')->update(array('parent_id'=>1));

        // ----- Delete using Object--------------
            // $user=Model::where('cate_detail','Song');
            // $user->delete();

    // ++++++++++++++++++++++++++++++++++++++++++  Relationship +++++++++++++++++++++++++++++++++++++++++

        // ---------------------------------------- One To One-------------------------------------------

                        //$user=Book::find(2)->Cate()->get()->toArray();

                      ////   select * from `book` where `id` =2
                      ////   select * from `category` where `category`.`id` = 'relative_key' 



        // ----------------------------------------- One To Many -----------------------------------------

                          // $user=Category::find(2)->book()->get()->toArray();

                      ////  select * from `category` where `id` =2
                      ////  select * from `book` where `book`.`cate_id` =2

            //================================= insert relation  ========================================
                      
                    // $book=new Book;
                    // $book->book_name='Love Song';
                    // $book2=new Book;
                    // $book2->book_name='Love Song2';
                    // $cate = Category::find(1)->Book()->saveMany(array($book,$book2));  // insert many object

                    // $book=new Book;
                    // $book->book_name='Love Song';
                    // $cate = Category::find(1)->Book()->save($book); // insrt one object 

                // 1. find category that you want to Add Book
                // 2. Insert Detail book, system will auto insert id of category in Book table 


     // ----------------------------------------- Many to Many ----------------------------------------------
         
          // ================================= property find Categories ================================= 
              //$user=Properties::find(2)->Cate()->get()->toArray();

          // ================================= category find Properties ================================= 
               //$user=Category::find(2)->Properties()->get()->toArray();

          // ================================= Insert Many to Many ================================= 
              // ___________________________  insert property where Category ___________________________ 
                        // $pro=new Properties;
                        // $pro->prop_name='prop5';
                        // //$pro->prop_detail='green';
                        // $pro->save();
                        // $cate=Category::find(3);
                        // $cate->properties()->attach($pro->prop_id);

                            //  insert into properties (prop_name) values ('prop5');
                            //  select * from category where cate_id = 3;
                            //  insert into prop_cate (cate_id,pro_id) values (3,5);

              // ___________________________  Insert categry where property ___________________________ 
                      // $cate=new Category();
                      // $cate->cate_name='News';
                      // $cate->cate_detail='Inter News';
                      // $cate->save();
                      // $pro=Properties::find(3);
                      // $pro->Cate()->attach($cate->id);

                            // insert into `category` (`cate_name`, `cate_detail`) values ('News', 'Inter News')
                            // select * from `properties` where `prop_id` =3
                            // insert into `prop_cate` (`id`, `prop_id`) values (23, 3)


           // ================================= update Many to Many ================================= 


                     // $cate =Category::find(3);
                     // print_r($cate);
                    // $cate->properties()->sync(array(3,4,5));

                      // select * from category where id=3;
                      // select prop_id form prop_cate where id=3;
                      // delect from prop_cate where id=3 and prop_id in (all values that relate 3);
                      // insert into prop_cate (id,prop_id) values (3,3); ----> do this agian follow synce(array());
    // ----------------------------------------- Has many through ----------------------------------------------
                // category have many Book ---> a Book have many Book Properties 

                // has category find Properies ----> Connect by Book Table 

                // function use only in Category (bigest )
                       // $cate=Category::find(2);
                       // $pro=$cate->properties()->get()->toArray();
                    //select * from `category` where `id` =2
                    //select `book_pro`.*, `book`.`cate_id` from `book_pro` inner join `book` on `book`.`id` = `book_pro`.`book_id` where `book`.`cate_id` =2

//********************************************* Querying Relations ******************************************************

            // $user=Book::has('book_name')->get(); // not work



//********************************************* Eager Loading ******************************************************
      // foreach (Book::all() as $book)   // ---- one to one ---------------
      // {
      //     echo $book->Cate->cate_name.'<br>';
      // }
      //select * from `book`
      //select * from `category` where `category`.`id` =2
      // select * from `category` where `category`.`id`=1
       //select * from `category` where `category`.`id` =2
      // select * from `category` where `category`.`id`=1
      // select * from `category` where `category`.`id`=1
          // have many loop for query********

          // reduce number of loop for query --> only 2 loop ***
      // foreach (Book::with('Cate')->get() as $book)
      // {
      //     echo $book->Cate->cate_name.'<br>';
      // }
      // select * from `book`
      // select * from `category` where `category`.`id` in (2, 1)

//********************************************* Schema Builder ******************************************************




      
       // $queries = DB::getQueryLog();
       // // print_r($user);
       //   print_r($queries);

     // print_r('tuuu');
      // $book=Book::all();
      // $result=mysql_fetch_array($book);
      // print_r($result);
      // $dump=json_encode($book);
      // print_r($dump);
    }
//    public function fileexport(){
//      print_r('tuuuuuu');
//     //  $excel = Excel::create('export')
//     // -> sheet('Posts')
//     // -> with($posts_array)
//     // -> export('xls');
//     }
//     public function export () {
// $posts = Post::all();

// $headers = $this-&gt;getColumnNames($posts);

// $posts_array = array_merge((array)$headers, (array)$posts-&gt;toArray());

// }
// public function getColumnNames($object) {

// $rip_headers = $object-&gt;toArray();

// $keys = array_keys($rip_headers[0]);

// foreach ($keys as $value) {
// $headers[$value] = $value;
// }

// return array($headers);
// }
    



}
?>