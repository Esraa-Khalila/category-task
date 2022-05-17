 <?php include('./connection.php') ?>
 
 <div class="container-fluid"style='text-align:center'>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add category</h4>
                </div>
                <div class="card-body">
                  <form method='POST' action='' enctype='multipart/form-data'>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">title:</label>
                          <input type="text" placeholder="Title" name='title' required >
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">featured: </label>
                             <input type="radio"  name='featured' value="Yes" >
                              <label class="bmd-label-floating">yes </label>
                             <input type="radio"  name='featured' value="No" >
                              <label class="bmd-label-floating">No </label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">active: </label>
                            <input type="radio"  name='active' value="Yes" >
                            <label class="bmd-label-floating">yes </label>
                           <input type="radio"  name='active' value="No" >
                           <label class="bmd-label-floating">No </label>
                        </div>
                      </div>
                    </div>
               
                        
                    </div> 
                    <br>    
                    
                     <input type="submit" name='submit' value="submit"  class="btn btn-primary pull-right"><br>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>  
       
     <?php     if(isset($_POST['submit'])){
         $title=$_POST['title'];
         $featured=$_POST['featured'];
          $active=$_POST['active'];
     }
 $sql = $conn->prepare("INSERT INTO `tbl-category` (	title, 	featured, 	active)
  VALUES (:title, :featured, :active)");
  // use exec() because no results are returned
  $sql->execute(['title'=>$title ,'featured'=>$featured,'active'=>$active]);



$conn = null;
?>