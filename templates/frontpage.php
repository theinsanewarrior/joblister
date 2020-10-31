<?php include 'inc/header.php';?>

  <div class="jumbotron">
          <h1 >Find a Job!</h1>
    <form action="index.php" method="GET">
    <select name="category"class="form-control" id="">
    <option value="0">Choose Category</option>

    <?php foreach($categories as $category) :?>
    <option value="<?php echo $category->id ;?>">
    <?php echo $category->name ;?>
    </option>
    <?php endforeach ;?>
    </select>
    <br>
    <input type="submit" class="btn btn-lg btn-success" value="FIND">
    </form>
    
  
  </div>

  
    <!-- Example row of columns --> 
  
      <?php foreach($jobs as $job) :?>
      <div class="row marketing">
      <div class="col-md-10">
        <h2><?php echo $job->job_title ;?></h2>
        <p><?php echo $job->description ;?></p> 
        <?php echo "<br>" ;?>
        </div>
        <div class="col-md-2">
        <a class="btn btn-secondary" href="job.php?id=<?php echo $job->id ;?>" role="button">View</a>
      
      </div>
    </div>
    <?php endforeach ;?>

<?php include 'inc/footer.php';?>



