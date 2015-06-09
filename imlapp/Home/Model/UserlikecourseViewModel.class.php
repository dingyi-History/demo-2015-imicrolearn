<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class UserlikecourseViewModel extends ViewModel {

	//$viewFields 属性表示视图模型包含的字段，每个元素定义了某个数据表或者模型的字段。
   public $viewFields = array( 
   	 'userlike'=>array('userid', 'courseid'),
     'course'=>array('cid','cname','ctitle','cimg','_on'=>'userlike.courseid=course.cid'),
   'coursetype'=>array('id'=>'typeid','typename', '_on'=>'course.ctypeid=coursetype.id'),
   );
 }
