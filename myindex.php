<?php
/*
Template Name: My Index By Neychang
*/
?>

 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
        <div class="col-md-4">
            <h2>欢迎访问爱尔瑞科技!</h2>
            <p><small>荆州市爱尔瑞科技有限公司是一家创新型高科技企业，专注于电化学的气体传感器的研发，生产和销售。</small></p>
        </div>
        <div class="col-md-8">
            <p><img width="100%" src="http://593213.714.user-website7.com/wp-content/uploads/2014/07/gdb9.jpg"></p>
        </div>
        <!--<p><a class="btn btn-primary btn-lg" role="button">更多 &raquo;</a></p>-->
      </div>
        </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2><span class="glyphicon glyphicon-envelope"></span>公司动态</h2>
          <p>公司最近的新闻列表，请多关注</p>
          <p>
              <?php query_posts("showposts=5&category_name=公司新闻&orderby=date&order=DESC")?>
    <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php the_time('m-d'); ?>
        <br/>
    <?php endwhile; ?>
          </p>
          <p><a class="btn btn-default" href="?cat=4" role="button">更多 &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2><span class="glyphicon glyphicon-th-list"></span>产品中心</h2>
          <p>我们的产品列表</p>
          <p>
            <?php query_posts("showposts=5&category_name=产品中心&orderby=date&order=DESC")?>
    <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php the_time('m-d'); ?>
        <br/>
    <?php endwhile; ?>

          </p>
          <p><a class="btn btn-default" href="?cat=6" role="button">更多 &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2><span class="glyphicon glyphicon-book"></span>行业知识</h2>
          <p>这里可以了解传感器行业方面的知识</p>
          <p>
            <?php query_posts("showposts=5&category_name=行业知识&orderby=date&order=DESC")?>
    <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php the_time('m-d'); ?>
        <br/>
    <?php endwhile; ?>

          </p>
          <p>
            

          </p>
          <p><a class="btn btn-default" href="?cat=5" role="button">更多 &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <center><p>&copy; 荆州市爱尔瑞科技有限公司  2014 鄂ICP备14008666号</p></center>
      </footer>
    </div> <!-- /container -->
