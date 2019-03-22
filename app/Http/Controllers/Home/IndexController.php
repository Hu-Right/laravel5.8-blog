<?php
namespace app\Http\Controllers\Home;
use App\User;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  //首页 
  public function index()
  {
    // return view('home.index.index');
    $index = $this->get_index();
    return view('home.index.index');
  }   //关于
  public function about()
  {
    return view('home.index.about');
  }  //分享
  public function share()
  {
    return view('home.index.share');
  }   //日记
  public function diary()
  {
    return view('home.index.diary');
  }   //学习
  public function study()
  {
    return view('home.index.study');
  }   //时间 
  public function time()
  {
    return view('home.index.time');
  }
  public function life(){
    return view('home.index.life');
  } 
  public function artice(){
    return view('home.index.artice');
  }
  private function get_index()
  { 
    // return view('home.index.index');
  }
  private function get_life(){

  }
}


 