<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;




class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function Home()
    {
        $portfolioimage = DB::select("SELECT * FROM `PortfolioImage`");
        $viewoverall = DB::select("SELECT * FROM `About`");
        $viewoverall1 = DB::select("SELECT * FROM `About`");
        $id=1;
        $skills = DB::select("SELECT * FROM `Skills` WHERE UserId=(select UserId from Users where RoleId=?)",[$id]);
        $workexp = DB::select("SELECT * FROM `Work` WHERE UserId=(select UserId from Users where RoleId=?)",[$id]);
        $edu = DB::select("SELECT * FROM `Education` WHERE UserId=(select UserId from Users where RoleId=?)",[$id]);
        $prices = DB::select("SELECT * FROM `Hire` WHERE UserId=(select UserId from Users where RoleId=?)",[$id]);
      
        $portfolio = DB::select("SELECT * FROM `Portfolio`");
 
        return view('Home',['portfolioimage'=>$portfolioimage,'viewoverall'=>$viewoverall,'viewoverall1'=>$viewoverall1,'skills'=>$skills,'workexp'=>$workexp,'edu'=>$edu,'prices'=>$prices,'portfolio'=>$portfolio]);
       
    }
    public function Login(Request $request)
    {
     
      $username = $request->input('uname');
      $password = $request->input('psw');
      if($username=='admin' && $password=='pass123#'){
         echo "Login successfull for Admin";
         echo "<a href='http://localhost:8000/admin'>Click Here</a>";
      }
      else{
       echo "Login successfull for User";
       echo "<a href='http://localhost:8000/Home'>Click Here</a>";
      }
    }
    public function SignUp(Request $request)
    {
      $id=0;
      $name = $request->input('name');
      $email = $request->input('email');
      $username = $request->input('uname');
      $password = $request->input('psw');
      $confirm = $request->input('confirmpsw');
      if($password == $confirm){
         DB::insert("INSERT INTO `Users`(`RoleId`, `Name`, `Email`, `Username`, `Password`) VALUES (?,?,?,?,?)",[$id,$name,$email,$username,$password]);
         echo "Username Successfully registered.<br/>";
         echo '<a href = "http://localhost:8000/Home">Click Here</a> to go back.';
      }
     else{
        echo "password and confirm password doesnt match";
        echo "<a href='http://localhost:8000/Home'>SIGN UP AGAIN</a>";
     }
      
    }
    public function admin()
    {

        $viewoverall = DB::select("SELECT * FROM `About`");
   
        return view('admin',['viewoverall'=>$viewoverall]);
    }
    public function destroy() {
        DB::delete('DELETE FROM `About` WHERE UserId=7');
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/admin">Click Here</a> to go back.';
     }
     public function insert(Request $request) {

        $user = 7;
        $age = $request->input('age');
        $email = $request->input('Email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $language = $request->input('language');
        $aboutinfo = $request->input('aboutinfo');
        DB::insert("INSERT INTO `About`(`UserID`, `Age`, `Email`, `Phone`, `Address`, `Language`, `About_Info`) VALUES (?,?,?,?,?,?,?)",[$user,$age,$email,$phone,$address,$language,$aboutinfo]);
        echo "Record added Successfully.<br/>";
        echo '<a href = "/admin">Click Here</a> to go back.';
     }
     public function adminupdate()
     {
        $viewoverall = DB::select("SELECT * FROM `About`");
        return view('adminupdate',['viewoverall'=>$viewoverall]);
      
     }
     public function edit(Request $request) {
        $age = $request->input('age');
        $email = $request->input('Email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $language = $request->input('language');
        $aboutinfo = $request->input('aboutinfo');
        $id = 7;
        DB::update('UPDATE `About` SET `Age`=?,`Email`=?,`Phone`=?,`Address`=?,`Language`=?,`About_Info`=? WHERE UserId=?',[$age,$email,$phone,$address,$language,$aboutinfo,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/adminupdate">Click Here</a> to go back.';
     }
     /*-----------------------------------------------------------------------------------------------------------------------------------*/
    public function edu()
    {
        $edu = DB::select("SELECT * FROM `Education`");
        return view('edu',['edu'=>$edu]);
    }
    public function edudestroy($EduId) {
        
        DB::delete('DELETE FROM `Education` WHERE EduId=?',[$EduId]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/edu">Click Here</a> to go back.';
     }
     public function eduinsert(Request $request) {
        $id=7;
        $eduid = $request->input('eduid');
        $startm = $request->input('startm');
        $starty = $request->input('starty');
        $endm = $request->input('endm');
        $endy = $request->input('endy');
        $level = $request->input('level');
        $degree = $request->input('degree');
        $school = $request->input('school');
    
        DB::insert("INSERT INTO `Education`(`UserId`, `EduId`, `StartMonth`, `StartYear`, `EndMonth`, `EndYear`, `Level`, `Degree`, `School`) VALUES (?,?,?,?,?,?,?,?,?)",[$id,$eduid,$startm,$starty,$endm,$endy,$level,$degree,$school]);
        
        echo "Record added Successfully.<br/>";
        echo '<a href = "/edu">Click Here</a> to go back.';
     }
     public function eduedit(Request $request,$EduId) {
        $id=7;
        $eduid = $request->input('eduid');
        $startm = $request->input('startm');
        $starty = $request->input('starty');
        $endm = $request->input('endm');
        $endy = $request->input('endy');
        $level = $request->input('level');
        $degree = $request->input('degree');
        $school = $request->input('school');
       
        DB::update('UPDATE `Education` SET `UserId`=?,`StartMonth`=?,`StartYear`=?,`EndMonth`=?,`EndYear`=?,`Level`=?,`Degree`=?,`School`=? WHERE  EduId=?',[$id,$startm,$starty,$endm,$endy,$level,$degree,$school,$EduId]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/edu">Click Here</a> to go back.';
     }
     public function eduupdate($EduId)
     {
        $edu = DB::select("SELECT * FROM `Education` Where EduId=?",[$EduId]);
        return view('eduupdate',['edu'=>$edu]);
      
     }
      /*-----------------------------------------------------------------------------------------------------------------------------------*/
    public function prices()
    {
        $prices = DB::select("SELECT * FROM `Hire`");
        return view('prices',['prices'=>$prices]);
        
    }
    public function pricesdestroy($ServiceId) {
        
        DB::delete('DELETE FROM `Hire` WHERE ServiceId=?',[$ServiceId]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/prices">Click Here</a> to go back.';
     }
     public function pricesinsert(Request $request) {
        $id=7;
        $serviceid = $request->input('serviceid');
        $price = $request->input('price');
        $jname = $request->input('jname');
        $service1 = $request->input('service1');
        $service2 = $request->input('service2');
        $service3 = $request->input('service3');
        $service4 = $request->input('service4');
        $link = $request->input('link');
        $imagename = $_FILES['myimage']['name'];
        $imagetmp = base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));
    
        DB::insert("INSERT INTO `Hire`(`UserId`, `ServiceId`, `Price`, `JobName`, `Service1`, `Service2`, `Service3`, `Service4`, `Link`,`ImageName`,`Image`) VALUES (?,?,?,?,?,?,?,?,?,?,?)",[$id,$serviceid,$price,$jname,$service1,$service2,$service3,$service4,$link,$imagename,$imagetmp]);
        
        echo "Record added Successfully.<br/>";
        echo '<a href = "/prices">Click Here</a> to go back.';
     }
     public function pricesedit(Request $request,$ServiceId) {
        $id=7;
        $serviceid = $request->input('serviceid');
        $price = $request->input('price');
        $jname = $request->input('jname');
        $service1 = $request->input('service1');
        $service2 = $request->input('service2');
        $service3 = $request->input('service3');
        $service4 = $request->input('service4');
        $link = $request->input('link');
        $imagename = $_FILES['myimage']['name'];
      $imagetmp = base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));
       
        DB::update('UPDATE `Hire` SET `UserId`=?,`Price`=?,`JobName`=?,`Service1`=?,`Service2`=?,`Service3`=?,`Service4`=?,`Link`=?,`ImageName`=?,`Image`=? WHERE  ServiceId=?',[$id,$price,$jname,$service1,$service2,$service3,$service4,$link,$imagename,$imagetmp,$ServiceId]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/prices">Click Here</a> to go back.';
     }
     public function pricesupdate($ServiceId)
     {
        $prices = DB::select("SELECT * FROM `Hire` Where ServiceId=?",[$ServiceId]);
        return view('pricesupdate',['prices'=>$prices]);
      
     }
     /*-----------------------------------------------------------------------------------------------------------------------------------*/
    public function index()
    {
        return view('index');
    }
     /*-----------------------------------------------------------------------------------------------------------------------------------*/
    public function portfolio()
    {
      $portfolio = DB::select("SELECT * FROM `Portfolio`");
      return view('portfolio',['portfolio'=>$portfolio]);
    }
    
   public function portfolioinsert(Request $request) {
      $id=7;
      $projectid = $request->input('projectid');
      $title = $request->input('projecttitle');
      $type = $request->input('projecttype');
      $imagename = $_FILES['myimage']['name'];
      $imagetmp = base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));
  
      DB::insert("INSERT INTO `Portfolio`(`UserId`, `ProjectId`, `ProjectType`, `ProjectTitle`,`ImageName`,`Image`) VALUES (?,?,?,?,?,?)",[$id,$projectid,$type,$title,$imagename,$imagetmp]);
      echo "Record added Successfully.<br/>";
      echo '<a href = "/portfolio">Click Here</a> to go back.';
   }
   public function portfolioedit(Request $request,$ProjectId) {
      $id=7;
      $projectid = $request->input('projectid');
      $title = $request->input('projecttitle');
      $type = $request->input('projecttype');
      $imagename = $_FILES['myimage']['name'];
      $imagetmp = base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));
      DB::update('UPDATE `Portfolio` SET `UserId`=?,`ProjectTitle`=?,`ProjectType`=?,`ImageName`=?,`Image`=? WHERE ProjectId=?',[$id,$title,$type,$imagename,$imagetmp,$ProjectId]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/portfolio">Click Here</a> to go back.';
   }
   public function portfolioupdate($ProjectId)
   {
      $portfolio = DB::select("SELECT * FROM `Portfolio` Where ProjectId=?",[$ProjectId]);
      return view('portfolioupdate',['portfolio'=>$portfolio]);
    
   }
   public function portfoliodestroy($ProjectId) {
        
      DB::delete('DELETE FROM `Portfolio` WHERE ProjectId=?',[$ProjectId]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/portfolio">Click Here</a> to go back.';
   }
   /*----------------------------------------------------------------------------------------------------------*/
   
  
 

     /*-----------------------------------------------------------------------------------------------------------------------------*/
    public function skills()
    {
        $skills = DB::select("SELECT * FROM `Skills`");
        return view('skills',['skills'=>$skills]);
        
    }
    public function skillsdestroy($SkillId) {
        
        DB::delete('DELETE FROM `Skills` WHERE SkillId=?',[$SkillId]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/skills">Click Here</a> to go back.';
     }
     public function skillsinsert(Request $request) {
        $id=7;
        $skillid = $request->input('skillid');
        $language = $request->input('lang');
        $percentage = $request->input('per');
    
        DB::insert("INSERT INTO `Skills`(`UserId`, `SkillId`, `Language`, `Percentage`) VALUES (?,?,?,?)",[$id,$skillid,$language,$percentage]);
        echo "Record added Successfully.<br/>";
        echo '<a href = "/skills">Click Here</a> to go back.';
     }

     public function skillsedit(Request $request,$SkillId) {
        $id=7;
        $lang = $request->input('lang');
        $per = $request->input('per');
       
        DB::update('UPDATE `Skills` SET `UserId`=?,`Language`=?,`Percentage`=? WHERE  SkillId=?',[$id,$lang,$per,$SkillId]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/skills">Click Here</a> to go back.';
     }
     public function skillsupdate($SkillId)
     {
        $skills = DB::select("SELECT * FROM `Skills` Where SkillId=?",[$SkillId]);
        return view('skillsupdate',['skills'=>$skills]);
      
     }
     /*-----------------------------------------------------------------------------------------------------------------------------*/
    public function user()
    {
       
        $usercontact = DB::select("SELECT * FROM `UserContact`");
        return view('user',['usercontact'=>$usercontact]);
        
    }
     /*-----------------------------------------------------------------------------------------------------------------------------*/
    public function workexp()
    {
        $workexp = DB::select("SELECT * FROM `Work`");
        return view('workexp',['workexp'=>$workexp]);
       
    }
    public function workdestroy($WorkId) {
        
        DB::delete('DELETE FROM `Work` WHERE WorkId=?',[$WorkId]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/workexp">Click Here</a> to go back.';
     }
     public function workinsert(Request $request) {
        $id=7;
        $workid = $request->input('workid');
        $startm = $request->input('startm');
        $starty = $request->input('starty');
        $endm = $request->input('endm');
        $endy = $request->input('endy');
        $company = $request->input('company');
        $pos = $request->input('pos');
        $desc = $request->input('desc');
    
        DB::insert("INSERT INTO `Work`(`UserId`, `WorkId`, `StartMonth`, `StartYear`, `EndMonth`, `EndYear`, `Company`, `Position`, `Description`) VALUES (?,?,?,?,?,?,?,?,?)",[$id,$workid,$startm,$starty,$endm,$endy,$company,$pos,$desc]);
        
        echo "Record added Successfully.<br/>";
        echo '<a href = "/workexp">Click Here</a> to go back.';
     }
     public function workedit(Request $request,$WorkId) {
        $id=7;
        $workid = $request->input('workid');
        $startm = $request->input('startm');
        $starty = $request->input('starty');
        $endm = $request->input('endm');
        $endy = $request->input('endy');
        $company = $request->input('company');
        $pos = $request->input('pos');
        $desc = $request->input('desc');
       
        DB::update('UPDATE `Work` SET `UserId`=?,`StartMonth`=?,`StartYear`=?,`EndMonth`=?,`EndYear`=?,`Company`=?,`Position`=?,`Description`=? WHERE  WorkId=?',[$id,$startm,$starty,$endm,$endy,$company,$pos,$desc,$WorkId]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/workexp">Click Here</a> to go back.';
     }
     public function workupdate($WorkId)
     {
        $workexp = DB::select("SELECT * FROM `Work` Where WorkId=?",[$WorkId]);
        return view('workupdate',['workexp'=>$workexp]);
      
     }
    /*-----------------------------------------------------------------------------------------------------------------------------*/
    public function main()
    {
        $portfolioimage = DB::select("SELECT * FROM `PortfolioImage`");
        return view('main',['portfolioimage'=>$portfolioimage]);
    }
     public function maindestroy() {
        DB::delete('DELETE FROM `PortfolioImage`');
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/main">Click Here</a> to go back.';
     }
     public function maininsert(Request $request) {

    
        $title = $request->input('title');
        $jobs = $request->input('jobs');
        $imagename = $_FILES['myimage']['name'];
        $imagetmp = base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));
        $id=7;
     
        DB::insert("INSERT INTO `PortfolioImage`(`UserId`,`Title`, `Jobs`,`ImageName`,`Image`) VALUES (?,?,?,?,?)",[$id,$title,$jobs,$imagename,$imagetmp]);
        echo "Record added Successfully.<br/>";
        echo '<a href = "/main">Click Here</a> to go back.';
     }
     public function mainedit(Request $request) {
        $title = $request->input('title');
        $jobs = $request->input('jobs');
        $id=7;
        $imagename = $_FILES['myimage']['name'];
        $imagetmp = base64_encode(file_get_contents(addslashes($_FILES['myimage']['tmp_name'])));
        DB::update('UPDATE `PortfolioImage` SET `Title`=?,`Jobs`=?,`ImageName`=?,`Image`=? WHERE UserId=?',[$title,$jobs,$imagename,$imagetmp,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/mainupdate">Click Here</a> to go back.';
     }
     public function mainupdate()
     {
        $portfolioimage = DB::select("SELECT * FROM `PortfolioImage`");
        return view('mainupdate',['portfolioimage'=>$portfolioimage]);
      
     }
      /*-----------------------------------------------------------------------------------------------------------------------------*/

      public function userinsert(Request $request) {
        $username = $request->input('username');
        $subject = $request->input('subject');
        $message = $request->input('message');
 
        DB::insert("INSERT INTO `UserContact`(`Name`, `Subject`, `Message`) VALUES (?,?,?)",[$username,$subject,$message]);
        echo "Record added Successfully.<br/>";
        echo '<a href = "/Home">Click Here</a> to go back.';
     }



      
}
