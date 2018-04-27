@extends('layouts.default')
@section('title', '首页')
@section('content')
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>《高效沟通》内训课程</h1>
              <p>高效沟通十分重要！与企业团队的领导力、执行力、凝聚力等都密切相关，</p>
              <p>邓宏伟老师的《高效沟通》内训课程能够及时有效地解除您的烦恼……</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>《阳光心态》内训课程</h1>
              <p>员工心态决定了团队状态，在很大程度上影响了企业团队的领导力、执行力、凝聚力和公司业绩，</p>
              <p>邓宏伟老师《阳光心态》内训课程能够及时有效地解除您的烦恼……</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      <div class="carousel-item">
        <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>邓宏伟老师</h1>
            <p>企业文化专家、阳光心态教练、高效沟通专家</p>
            <p>深圳市鹏聚文化发展有限公司总经理</p>
            <p>深圳市招赢天下文化传播有限公司首席讲师</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="/static/image/com.png" alt="Generic placeholder image" width="140" height="140">
        <h2>《高效沟通》内训课程</h2>
        <p>让团队成员更好掌握沟通方法，提升沟通效率，有效改进公司部门与部门之间、总部与分支机构之间、上下级之间、相关员工与客户/顾客、合作伙伴之间的沟通，做到主动沟通、及时沟通、高效沟通、充分沟通，提高沟通效率，创造工作佳绩。</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="/static/image/sun.png" alt="Generic placeholder image" width="140" height="140">
          <h2>《阳光心态》内训课程</h2>
          <p>支持企业中、基层人员调整思维、拓宽思路，在最短时间内强化责任归属、优化工作执行流程，减少企业内耗、迅速有效提升团队责任与执行力、打造一支自动自发的卓越团队。</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="/static/image/leader.png" alt="Generic placeholder image" width="140" height="140">
        <h2>邓宏伟老师</h2>
        <p>邓老师主讲的《高效沟通》、《阳光心态》等深度体验式课程，把情景模拟、教练技术、演讲口才训练方法等完美融入其中，积极倡导和落实“快乐学习”、“快速学习”的理念，从职场的多种场景和学员的实战演练出发，按照“问题导向”和“目标导向”的原则，为企业客户精心设计针对性、实战性、系统性很强的特色培训方案，并现场进行精彩演绎，众多的企业领导和广大学员一致给予高度评价。</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <div class="margin-50"><h2 class="featurette-heading">《高效沟通》<span class="text-muted">内训课程</span></h2></div>
        <p class="lead"><br>&nbsp;&nbsp;&nbsp;&nbsp;迅速掌握三种重要的讲话思路；<br>
          &nbsp;&nbsp;&nbsp;&nbsp;快速提升倾听能力和复述能力；<br>
          &nbsp;&nbsp;&nbsp;&nbsp;现场演练高效工作汇报的方法；<br>
          &nbsp;&nbsp;&nbsp;&nbsp;现场掌握高效会议发言的公式；<br>
          &nbsp;&nbsp;&nbsp;&nbsp;现场学会应用赞美的多种方法。
        </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-lg btn-primary" href="#" role="button">报名学习</a></p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="/static/image/com_big.png" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <div class="margin-80"><h2 class="featurette-heading">《阳光心态》 <span class="text-muted">内训课程</span></h2></div>

        <p class="lead"><br>帮助员工树立正确的职业心态，引导其培养良好的职业行为习惯；<br>
          转变员工的工作观念，以主人翁的心态面对工作；<br>
          改变员工消极被动的工作态度，培养积极、付出的工作精神；<br>
          树立对企业忠诚、负责任的工作态度，凡事不找借口；<br>
          增强团队凝聚力，提升员工执行力；<br>
          发挥员工强大的精神力量，提高工作效率，提高企业绩效；<br>
          培养员工的感恩心态，感恩公司和客户，做一个充满爱心的人；<br>
          增强员工的学习意识，打造学习型团队组织；<br>
          树立正面的思维观念，增强员工正能量。<br>
          助力企业打造一支自动自发的卓越团队。</p>
        <p><a class="btn btn-lg btn-primary" href="#" role="button">报名学习</a></p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="featurette-image img-fluid mx-auto" src="/static/image/sun_big.png" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <div class="margin-80"><h2 class="featurette-heading">邓宏伟<span class="text-muted">老师介绍</span></h2></div>
        <p class="lead"><br>邓老师1998年毕业于山东大学经济学院经济学系，拥有十多年知名企业的文化建设工作经验和七年培训咨询工作经验，任职和服务过的上市公司和知名企业包括：海能达(002583)、富安娜(002327)、华孚时尚(002042)、爱施德(002416)、神州通集团、丽斯达、天玺国际、瑞捷咨询、利达旺电梯、某集团37.5℃运营中心、等候科技、泰天恒集团、正雄鞋材、建顺包材、国乐飘香、番茄假期、桑菲通信、中创软件、得安科技、正一道场、青青宝贝、都市物流等。</p>
        <p class="lead">邓老师主讲的《高效沟通》、《阳光心态》等深度体验式课程，把情景模拟、教练技术、演讲口才训练方法等完美融入其中，积极倡导和落实“快乐学习”、“快速学习”的理念，从职场的多种场景和学员的实战演练出发，按照“问题导向”和“目标导向”的原则，为企业客户精心设计针对性、实战性、系统性很强的特色培训方案，并现场进行精彩演绎，众多的企业领导和广大学员一致给予高度评价。</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="/static/image/leader.png" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@stop
