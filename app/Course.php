<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function courseData(){
      $course=[
        'title'=>'《高效沟通》企业内训课程',
        'key'=>'高效沟通',
        'subtitle'=>'人生的一堂必修课',
        'quote'=>[
          'question'=>'身为老板，您为公司上下级之间、跨部门之间、总部与分支机构之间等的沟通效率低下、
            各种内耗不断而忧愁烦恼吗？
            您为员工不懂得与客户、合作伙伴等有效的沟通白白浪费了大好机会、
            造成各种损失而痛心疾首吗？
            您为开会总是议而不决、决而不行却消耗大量人力、时间、机会成本而头痛不已吗？
            ……',
          'answer'=>'高效沟通十分重要，
            与企业团队的领导力、执行力、凝聚力
            等都密切相关，与提升企业的
            客户满意度密切相关，
            邓宏伟老师的《高效沟通》实战内训课程
            能够及时有效地解除您的烦恼……'
        ],
      ];
      return $course;
    }
}
